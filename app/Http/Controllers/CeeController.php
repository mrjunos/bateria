<?php

namespace App\Http\Controllers;

use App\User;

use App\Cee;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CeeController extends Controller {

	public function store(User $user, Request $request) {
		$this->validate($request, [
			'cedula' => 'required',
			'fecha_cuestionario' => 'required'
		]);

		$year = new Carbon( $request->get('fecha_cuestionario') );

		$cee = DB::table('cees')
		->where('cedula', $request->get('cedula'))
		->where('user_id', $user->id)
		->whereYear('fecha_cuestionario', $year->year)
		->first();

		if($cee == null){
			$cee = Cee::create([
				'cedula' => $request->get('cedula'),
				'nombre' => $request->get('nombre'),
				'fecha_cuestionario' => Carbon::parse($request->get('fecha_cuestionario')),
				'user_id' => $request->get('user'),
			]);
		}else{
			$cee = $cee->id;
		}

		$seccion = "s1";
		return redirect()->route('cee.edit', compact('user', 'cee', 'seccion'));
	}

	public function edit(User $user, Cee $cee) {
		$seccion = "s1";
		return view('cee.edit', compact('user', 'cee', 'seccion'));
	}

	public function setValues($cee, $request, $v1, $v2, $next) {
		for ($i=$v1; $i <= $v2; $i++) {
			$n = 'p'.$i;
			$cee->$n = $request->get($n);
		}
		$cee->save();
		return $next;
	}

	public function requiredList($v1, $v2) {
		$list = [];
		for ($i=$v1; $i <= $v2; $i++) {
			$list += ['p' . $i => 'required'];
		}
		return $list;
	}

	public function update(User $user, Cee $cee, $seccion, Request $request) {
		switch ($seccion) {
			case 'S1':
			$this->validate($request, CeeController::requiredList(1, 31));
			CeeController::setValues($cee, $request, 1, 31, '');
			$seccion = "s1";
			$fdg = FdgController::store($user->id, $cee->cedula, $cee->fecha_cuestionario);
			return (!$fdg) ? redirect()->route('index', compact('user')) : redirect()->route('fdg.edit', compact('user', 'fdg', 'seccion'));
			break;

			case 'S1s':
			CeeController::setValues($cee, $request, 1, 31, '');
			$seccion = "s1";
			$fdg = FdgController::store($user->id, $cee->cedula, $cee->fecha_cuestionario);
			return (!$fdg) ? redirect()->route('index', compact('user')) : redirect()->route('fdg.edit', compact('user', 'fdg', 'seccion'));
			break;
		}
	}

	static function subtotal($cee, $numbers, $factor, $mrv) {
		$st = 0;
		$c = 0;
		for ($i=0; $i < count($numbers); $i++) { 
			$n = 'p'.$numbers[$i];
			if($cee->$n === null){ $c++; }
			if($c > $mrv){ return null; }
			$st += $cee->$n;
		}
		$st = round($st / count($numbers), 1, PHP_ROUND_HALF_UP);
		return $st * $factor;
	}

	static function esJefeOProfesionalTecnico($value){
		return $value == "Jefatura - tiene personal a cargo" OR $value == "Profesional, analista, técnico, tecnólogo" ? true : false ;
	}

	static function calculos(User $user, $cee) {

		$cee = DB::table('cees')->where('id', $cee)->first();
		$fecha_cuestionario = new Carbon($cee->fecha_cuestionario);
		$fdg = DB::table('fdgs')->where('cedula', $cee->cedula)->whereYear('fecha_cuestionario', $fecha_cuestionario->year)->where('user_id', $cee->user_id)->first();

		// SubTotal 1

		$st1 = CeeController::subtotal($cee, [1, 2, 3, 4, 5, 6, 7, 8], 4, 0);

		// SubTotal 2

		$st2 = CeeController::subtotal($cee, [9, 10, 11, 12], 3, 0);

		// SubTotal 3

		$st3 = CeeController::subtotal($cee, [13, 14, 15, 16, 17, 18, 19, 20, 21, 22], 2, 0);

		// SubTotal 4

		$st4 = CeeController::subtotal($cee, [23, 24, 25, 26, 27, 28, 29, 30, 31], 1, 0);

		// Puntaje Bruto Total

		if($st1 === null OR $st2 === null OR $st3 === null OR $st4 === null){ return [null, null]; }

		$pbt = $st1 + $st2 + $st3 + $st4;

		// Puntaje Transformado

		$pt = round((($pbt / 61.16) * 100), 1, PHP_ROUND_HALF_UP);

		// Comparación del puntaje

		if(CeeController::esJefeOProfesionalTecnico($fdg->p16)){
			if($pt >= 0 && $pt <= 7.8){ $c1 = "Muy bajo"; }
			if($pt >= 7.9 && $pt <= 12.6){ $c1 = "Bajo"; }
			if($pt >= 12.7 && $pt <= 17.7){ $c1 = "Medio"; }
			if($pt >= 17.8 && $pt <= 25){ $c1 = "Alto"; }
			if($pt >= 25.1 && $pt <= 100){ $c1 = "Muy alto"; }
		}else{ // si es Auxiliar u operario
			if($pt >= 0 && $pt <= 6.5){ $c1 = "Muy bajo"; }
			if($pt >= 6.6 && $pt <= 11.8){ $c1 = "Bajo"; }
			if($pt >= 11.9 && $pt <= 17){ $c1 = "Medio"; }
			if($pt >= 17.1 && $pt <= 23.4){ $c1 = "Alto"; }
			if($pt >= 23.5 && $pt <= 100){ $c1 = "Muy alto"; }
		}

		$values = [$pt, $c1];

		return $values;
	}

	public function calcularTodo()
	{
		$cees = Cee::all();
		$values = [];
		foreach ($cees as $cee) {
			array_push($values, CeeController::calculos($cee));
		}
		return $values;
	}
}
