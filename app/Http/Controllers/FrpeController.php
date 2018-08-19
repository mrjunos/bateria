<?php

namespace App\Http\Controllers;

use App\User;

use App\Frpe;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class FrpeController extends Controller {

	public function store(User $user, Request $request) {
		$this->validate($request, [
			'cedula' => 'required',
			'fecha_cuestionario' => 'required'
		]);

		$year = new Carbon( $request->get('fecha_cuestionario') );

		$frpe = DB::table('frpes')
		->where('cedula', $request->get('cedula'))
		->where('user_id', $user->id)
		->whereYear('fecha_cuestionario', $year->year)
		->first();

		if($frpe == null){
			$frpe = Frpe::create([
				'cedula' => $request->get('cedula'),
				'nombre' => $request->get('nombre'),
				'fecha_cuestionario' => Carbon::parse($request->get('fecha_cuestionario')),
				'user_id' => $user->id,
			]);
		}else{
			$frpe = $frpe->id;
		}

		$seccion = "s1";
		return redirect()->route('frpe.edit', compact('user', 'frpe', 'seccion'));
	}

	public function edit(User $user, Frpe $frpe, $seccion) {
		if($user->id == $frpe->user_id){
			return view('frpe.edit', compact('user', 'frpe', 'seccion'));
		}else{
			return view('index')->with('flash', 'No tiene permisos para editar esta encuesta');
		}
	}

	public function setValues($frpe, $request, $v1, $v2, $next) {
		for ($i=$v1; $i <= $v2; $i++) {
			$n = 'p'.$i;
			$frpe->$n = $request->get($n);
		}
		$frpe->save();
		return $next;
	}

	public function requiredList($v1, $v2) {
		$list = [];
		for ($i=$v1; $i <= $v2; $i++) {
			$list += ['p' . $i => 'required'];
		}
		return $list;
	}

	public function update(User $user, Frpe $frpe, $seccion, Request $request) {
		switch ($seccion) {
			case 'S1':
			$this->validate($request, FrpeController::requiredList(1, 13));
			$seccion = FrpeController::setValues($frpe, $request, 1, 13, 's2');
			break;

			case 'S1s':
			$seccion = FrpeController::setValues($frpe, $request, 1, 13, 's2');
			break;

			case 'S2':
			$this->validate($request, FrpeController::requiredList(14, 31));
			FrpeController::setValues($frpe, $request, 14, 31, '');
			$seccion = "s1";
			$fdg = FdgController::store($user->id, $frpe->cedula, $frpe->fecha_cuestionario);
			return (!$fdg) ? redirect()->route('index', compact('user')) : redirect()->route('fdg.edit', compact('user', 'fdg', 'seccion'));
			break;

			case 'S2s':
			FrpeController::setValues($frpe, $request, 14, 31, '');
			$seccion = "s1";
			$fdg = FdgController::store($user->id, $frpe->cedula, $frpe->fecha_cuestionario);
			return (!$fdg) ? redirect()->route('index', compact('user')) : redirect()->route('fdg.edit', compact('user', 'fdg', 'seccion'));
			break;
		}
		return redirect()->route('frpe.edit', compact('user', 'frpe', 'seccion'));
	}

	// $mrv = mínimo de respuestas vacías
	static function dimensionV($frpe, $numbers, $factor, $mrv) {
		$d = 0;
		$c = 0;
		for ($i=0; $i < count($numbers); $i++) { 
			$n = 'p'.$numbers[$i];
			if($frpe->$n === null){ $c++; }
			if($c > $mrv){ return null; }
			$d += $frpe->$n;
		}
		$val = (number_format((round((($d / $factor) * 100), 1, PHP_ROUND_HALF_UP)), 1));
		$val2 = intval(number_format((round((($d / $factor) * 100), 1, PHP_ROUND_HALF_UP)), 1));
		$val = ($val == $val2) ? $val2 : $val;
		return [$d, $val];
	}

	static function dimensionC($d, $nValues, $cValues) {
		if($d === null){return null;}
		for ($i=1; $i <= count($cValues); $i++) {
			if($d >= $nValues[$i*2-2] && $d <= $nValues[$i*2-1]){ return $cValues[$i-1]; }
		}
	}

	static function puntajeTotalV($dominios, $factor) {
		$tot = 0;
		for ($i=0; $i < count($dominios); $i++) {
			if ($dominios[$i] === null) {
				return null;
			}else{
				$tot += $dominios[$i];
			}
		}
		$val = (number_format((round((($tot / $factor) * 100), 1, PHP_ROUND_HALF_UP)), 1));
		$val2 = intval(number_format((round((($tot / $factor) * 100), 1, PHP_ROUND_HALF_UP)), 1));
		$val = ($val == $val2) ? $val2 : $val;
		return [$tot, $val];
	}

	static function puntajeTotalC($tot, $nValues, $cValues) {
		if($tot === null){return null;}
		for ($i=1; $i <= count($cValues); $i++) {
			if($tot >= $nValues[$i*2-2] && $tot <= $nValues[$i*2-1]){ return $cValues[$i-1]; }
		}
	}

	static function esJefeOProfesionalTecnico($value){
		return $value == "Jefatura - tiene personal a cargo" OR $value == "Profesional, analista, técnico, tecnólogo" ? true : false ;
	}

	static function calculos(User $user, $frpe) {

		$frpe = DB::table('frpes')->where('id', $frpe)->first();
		$cValues = ["Sin riesgo o riesgo despreciable", "Riesgo bajo", "Riesgo medio", "Riesgo alto", "Riesgo muy ato"];

		// Dimensión 1

		$d1 = FrpeController::dimensionV($frpe, [14, 15, 16, 17], 16, 0);
		$c1 = FrpeController::dimensionC($d1[1], [0, 6.3, 6.4, 25, 25.1, 37.5, 37.6, 50, 50.1, 100], $cValues);

		// Dimensión 2

		$d2 = FrpeController::dimensionV($frpe, [22, 25, 27], 12, 0);
		$c2 = FrpeController::dimensionC($d2[1], [0, 8.3, 8.4, 25, 25.1, 33.3, 33.4, 50, 50.1, 100], $cValues);

		// Dimensión 3

		$d3 = FrpeController::dimensionV($frpe, [18, 19, 20, 21, 23], 20, 0);
		$c3 = FrpeController::dimensionC($d3[1], [0, 0.9, 1, 10, 10.1, 20, 20.1, 30, 30.1, 100], $cValues);

		// Dimensión 4

		$d4 = FrpeController::dimensionV($frpe, [29, 30, 31], 12, 0);
		$c4 = FrpeController::dimensionC($d4[1], [0, 8.3, 8.4, 25, 25.1, 33.3, 33.4, 50, 50.1, 100], $cValues);

		// Dimensión 5

		$d5 = FrpeController::dimensionV($frpe, [5, 6, 7, 8, 9, 10, 11, 12, 13], 36, 1);
		$c5 = FrpeController::dimensionC($d5[1], [0, 5.6, 5.7, 11.1, 11.2, 13.9, 14, 22.2, 22.3, 100], $cValues);

		// Dimensión 6

		$d6 = FrpeController::dimensionV($frpe, [24, 26, 28], 12, 0);
		$c6 = FrpeController::dimensionC($d6[1], [0, 8.3, 8.4, 16.7, 16.8, 25, 25.1, 41.7, 41.8, 100], $cValues);

		// Dimensión 7

		$d7 = FrpeController::dimensionV($frpe, [1, 2, 3, 4], 16, 0);
		$c7 = FrpeController::dimensionC($d7[1], [0, 0.9, 1, 12.5, 12.6, 25, 25.1, 43.8, 43.9, 100], $cValues);

		// PUNTAJE TOTAL

		$pti = FrpeController::puntajeTotalV([$d1[0], $d2[0], $d3[0], $d4[0], $d5[0], $d6[0], $d7[0]], 124);
		$cPti = FrpeController::puntajeTotalC($pti[1], [0, 20.6, 20.7, 26, 26.1, 31.2, 31.3, 38.7, 38.8, 100], $cValues);

		$values = [
			$d1[1], $c1,
			$d2[1], $c2,
			$d3[1], $c3,
			$d4[1], $c4,
			$d5[1], $c5,
			$d6[1], $c6,
			$d7[1], $c7,
			$pti[1], $cPti,
		];

		return $values;
	}
}
