<?php

namespace App\Http\Controllers;

use App\User;

use App\Frpifa;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class FrpifaController extends Controller {

	public function store(User $user, Request $request) {
		$this->validate($request, [
			'cedula' => 'required',
			'fecha_cuestionario' => 'required'
		]);

		$year = new Carbon( $request->get('fecha_cuestionario') );

		$frpifa = DB::table('frpifas')
		->where('cedula', $request->get('cedula'))
		->where('user_id', $user->id)
		->whereYear('fecha_cuestionario', $year->year)
		->first();

		if($frpifa == null){
			$frpifa = Frpifa::create([
				'cedula' => $request->get('cedula'),
				'nombre' => $request->get('nombre'),
				'fecha_cuestionario' => Carbon::parse($request->get('fecha_cuestionario')),
				'user_id' => $user->id,
			]);
		}else{
			$frpifa = $frpifa->id;
		}

		$seccion = "s1";
		return redirect()->route('frpifa.edit', compact('user', 'frpifa', 'seccion'));
	}
	
	public function edit(User $user, Frpifa $frpifa, $seccion) {
		if($user->id == $frpifa->user_id){
			return view('frpifa.edit', compact('user', 'frpifa', 'seccion'));
		}else{
			return view('index')->with('flash', 'No tiene permisos para editar esta encuesta');
		}
	}

	public function setValues($frpifa, $request, $v1, $v2, $next) {
		for ($i=$v1; $i <= $v2; $i++) {
			$n = 'p'.$i;
			$frpifa->$n = $request->get($n);
		}
		$frpifa->save();
		return $next;
	}

	public function requiredList($v1, $v2) {
		$list = [];
		for ($i=$v1; $i <= $v2; $i++) {
			$list += ['p' . $i => 'required'];
		}
		return $list;
	}

	public function update(User $user, Frpifa $frpifa, $seccion, Request $request) {
		switch ($seccion) {
			case 'S1':
			$this->validate($request, FrpifaController::requiredList(1, 12));
			$seccion = FrpifaController::setValues($frpifa, $request, 1, 12, 's2');
			break;

			case 'S1s':
			$seccion = FrpifaController::setValues($frpifa, $request, 1, 12, 's2');
			break;

			case 'S2':
			$this->validate($request, FrpifaController::requiredList(13, 15));
			$seccion = FrpifaController::setValues($frpifa, $request, 13, 15, 's3');
			break;

			case 'S2s':
			$seccion = FrpifaController::setValues($frpifa, $request, 13, 15, 's3');
			break;

			case 'S3':
			$this->validate($request, FrpifaController::requiredList(16, 21));
			$seccion = FrpifaController::setValues($frpifa, $request, 16, 21, 's4');
			break;

			case 'S3s':
			$seccion = FrpifaController::setValues($frpifa, $request, 16, 21, 's4');
			break;

			case 'S4':
			$this->validate($request, FrpifaController::requiredList(22, 30));
			$seccion = FrpifaController::setValues($frpifa, $request, 22, 30, 's5');
			break;

			case 'S4s':
			$seccion = FrpifaController::setValues($frpifa, $request, 22, 30, 's5');
			break;

			case 'S5':
			$this->validate($request, FrpifaController::requiredList(31, 38));
			$seccion = FrpifaController::setValues($frpifa, $request, 31, 38, 's6');
			break;

			case 'S5s':
			$seccion = FrpifaController::setValues($frpifa, $request, 31, 38, 's6');
			break;

			case 'S6':
			$this->validate($request, FrpifaController::requiredList(39, 47));
			$seccion = FrpifaController::setValues($frpifa, $request, 39, 47, 's7');
			break;

			case 'S6s':
			$seccion = FrpifaController::setValues($frpifa, $request, 39, 47, 's7');
			break;

			case 'S7':
			$this->validate($request, FrpifaController::requiredList(48, 52));
			$seccion = FrpifaController::setValues($frpifa, $request, 48, 52, 's8');
			break;

			case 'S7s':
			$seccion = FrpifaController::setValues($frpifa, $request, 48, 52, 's8');
			break;

			case 'S8':
			$this->validate($request, FrpifaController::requiredList(53, 59));
			$seccion = FrpifaController::setValues($frpifa, $request, 53, 59, 's9');
			break;

			case 'S8s':
			$seccion = FrpifaController::setValues($frpifa, $request, 53, 59, 's9');
			break;

			case 'S9':
			$this->validate($request, FrpifaController::requiredList(60, 62));
			$seccion = FrpifaController::setValues($frpifa, $request, 60, 62, 's10');
			break;

			case 'S9s':
			$seccion = FrpifaController::setValues($frpifa, $request, 60, 62, 's10');
			break;

			case 'S10':
			$this->validate($request, FrpifaController::requiredList(63, 75));
			$seccion = FrpifaController::setValues($frpifa, $request, 63, 75, 's11');
			break;

			case 'S10s':
			$seccion = FrpifaController::setValues($frpifa, $request, 63, 75, 's11');
			break;

			case 'S11':
			$this->validate($request, FrpifaController::requiredList(76, 89));
			$seccion = FrpifaController::setValues($frpifa, $request, 76, 89, 's12');
			break;

			case 'S11s':
			$seccion = FrpifaController::setValues($frpifa, $request, 76, 89, 's12');
			break;

			case 'S12':
			$this->validate($request, FrpifaController::requiredList(90, 94));
			$seccion = FrpifaController::setValues($frpifa, $request, 90, 94, 's13');
			break;

			case 'S12s':
			$seccion = FrpifaController::setValues($frpifa, $request, 90, 94, 's13');
			break;

			case 'S13':
			$this->validate($request, FrpifaController::requiredList(95, 105));
			$seccion = FrpifaController::setValues($frpifa, $request, 95, 105, 's14');
			break;

			case 'S13s':
			$seccion = FrpifaController::setValues($frpifa, $request, 95, 105, 's14');
			break;

			case 'S14':
			$this->validate($request, ['pv1' => 'required' ]);
			$list = ['pv1' => 'required'] + FrpifaController::requiredList(106, 114);
			if($request->get('pv1') == 'SI'){ $this->validate($request, $list); }
			$frpifa->pv1 = $request->get('pv1');
			$seccion = FrpifaController::setValues($frpifa, $request, 106, 114, 's15');
			break;

			case 'S14s':
			$this->validate($request, ['pv1' => 'required' ]);
			$frpifa->pv1 = $request->get('pv1');
			$seccion = FrpifaController::setValues($frpifa, $request, 106, 114, 's15');
			break;

			case 'S15':
			$this->validate($request, ['pv2' => 'required' ]);
			$list = ['pv2' => 'required'] + FrpifaController::requiredList(115, 123);
			if($request->get('pv2') == 'SI'){ $this->validate($request, $list); }
			$frpifa->pv2 = $request->get('pv2');
			FrpifaController::setValues($frpifa, $request, 115, 123, '');
			$seccion = "s1";
			$fdg = FdgController::store($user->id, $frpifa->cedula, $frpifa->fecha_cuestionario);
			return (!$fdg) ? redirect()->route('index', compact('user')) : redirect()->route('fdg.edit', compact('user', 'fdg', 'seccion'));
			break;

			case 'S15s':
			$this->validate($request, ['pv2' => 'required' ]);
			$frpifa->pv2 = $request->get('pv2');
			FrpifaController::setValues($frpifa, $request, 115, 123, '');
			$seccion = "s1";
			$fdg = FdgController::store($user->id, $frpifa->cedula, $frpifa->fecha_cuestionario);
			return (!$fdg) ? redirect()->route('index', compact('user')) : redirect()->route('fdg.edit', compact('user', 'fdg', 'seccion'));
			break;
		}
		return redirect()->route('frpifa.edit', compact('user', 'frpifa', 'seccion'));
	}

	// $mrv = mínimo de respuestas vacías
	static function dimensionV($frpifa, $numbers, $factor, $mrv) {
		$d = 0;
		$c = 0;
		for ($i=0; $i < count($numbers); $i++) { 
			$n = 'p'.$numbers[$i];
			if($frpifa->$n === null){ $c++; }
			if($c > $mrv){ return null; }
			$d += $frpifa->$n;
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

	static function dominioV($dimensiones, $factor) {
		$dom = 0;
		for ($i=0; $i < count($dimensiones); $i++) {
			if ($dimensiones[$i] === null) {
				return null;
			}else{
				$dom += $dimensiones[$i];
			}
		}
		$val = (number_format((round((($dom / $factor) * 100), 1, PHP_ROUND_HALF_UP)), 1));
		$val2 = intval(number_format((round((($dom / $factor) * 100), 1, PHP_ROUND_HALF_UP)), 1));
		$val = ($val == $val2) ? $val2 : $val;
		return [$dom, $val];
	}

	static function dominioC($dom, $nValues, $cValues) {
		if($dom === null){return null;}
		for ($i=1; $i <= count($cValues); $i++) {
			if($dom >= $nValues[$i*2-2] && $dom <= $nValues[$i*2-1]){ return $cValues[$i-1]; }
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

	static function calculos(User $user, $frpifa) {

		$frpifa = DB::table('frpifas')->where('id', $frpifa)->first();
		$cValues = ["Sin riesgo o riesgo despreciable", "Riesgo bajo", "Riesgo medio", "Riesgo alto", "Riesgo muy ato"];

		// Dimensión 1

		$d1 = FrpifaController::dimensionV($frpifa, [63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75], 52, 1);
		$c1 = FrpifaController::dimensionC($d1[1], [0, 3.8, 3.9, 15.4, 15.5, 30.8, 30.9, 46.2, 46.3, 100], $cValues);

		// Dimensión 2

		$d2 = FrpifaController::dimensionV($frpifa, [76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89], 56, 1);
		$c2 = FrpifaController::dimensionC($d2[1], [0, 5.4, 5.5, 16.1, 16.2, 25, 25.1, 37.5, 37.6, 100], $cValues);

		// Dimensión 3

		$d3 = FrpifaController::dimensionV($frpifa, [90, 91, 92, 93, 94], 20, 0);
		$c3 = FrpifaController::dimensionC($d3[1], [0, 10, 10.1, 25, 25.1, 40, 40.1, 55, 55.1, 100], $cValues);

		// Dimensión 4

		if($frpifa->pv2 == "NO"){ $d4 = [0,0]; }else{
			$d4 = FrpifaController::dimensionV($frpifa, [115, 116, 117, 118, 119, 120, 121, 122, 123], 36, 1);
		}
		$c4 = FrpifaController::dimensionC($d4[1], [0, 13.9, 14, 25, 25.1, 33.3, 33.4, 47.2, 47.3, 100], $cValues);

		// DOMINIO 1

		$dom1 = FrpifaController::dominioV([$d1[0], $d2[0], $d3[0], $d4[0]], 164);
		$cDom1 = FrpifaController::dominioC($dom1[1], [0, 9.1, 9.2, 17.7, 17.8, 25.6, 25.7, 34.8, 34.9, 100], $cValues);

		// Dimensión 5

		$d5 = FrpifaController::dimensionV($frpifa, [53, 54, 55, 56, 57, 58, 59], 28, 0);
		$c5 = FrpifaController::dimensionC($d5[1], [0, 0.9, 1, 10.7, 10.8, 21.4, 21.5, 39.3, 39.4, 100], $cValues);

		// Dimensión 6

		$d6 = FrpifaController::dimensionV($frpifa, [60, 61, 62], 12, 0);
		$c6 = FrpifaController::dimensionC($d6[1], [0, 0.9, 1, 16.7, 16.8, 33.3, 33.4, 50, 50.1, 100], $cValues);

		// Dimensión 7

		$d7 = FrpifaController::dimensionV($frpifa, [48, 49, 50, 51], 16, 0);
		$c7 = FrpifaController::dimensionC($d7[1], [0, 12.5, 12.6, 25, 25.1, 37.5, 37.6, 50, 50.1, 100], $cValues);

		// Dimensión 8

		$d8 = FrpifaController::dimensionV($frpifa, [39, 40, 41, 42], 16, 0);
		$c8 = FrpifaController::dimensionC($d8[1], [0, 0.9, 1, 6.3, 3.4, 18.8, 18.9, 31.3, 31.4, 100], $cValues);

		// Dimensión 9

		$d9 = FrpifaController::dimensionV($frpifa, [44, 45, 46], 12, 0);
		$c9 = FrpifaController::dimensionC($d9[1], [0, 8.3, 8.4, 25, 25.1, 41.7, 41.8, 58.3, 58.4, 100], $cValues);

		// DOMINIO 2

		$dom2 = FrpifaController::dominioV([$d5[0], $d6[0], $d7[0], $d8[0], $d9[0]], 84);
		$cDom2 = FrpifaController::dominioC($dom2[1], [0, 10.7, 10.8, 19, 19.1, 29.8, 29.9, 40.5, 40.6, 100], $cValues);

		// Dimensión 10

		$d10 = FrpifaController::dimensionV($frpifa, [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12], 48, 1);
		$c10 = FrpifaController::dimensionC($d10[1], [0, 14.6, 14.7, 22.9, 23, 31.3, 31.4, 39.6, 39.7, 100], $cValues);

		// Dimensión 11

		if($frpifa->pv1 == "NO"){ $d11 = [0,0]; }else{
			$d11 = FrpifaController::dimensionV($frpifa, [106, 107, 108, 109, 110, 111, 112, 113, 114], 36, 0);
		}
		$c11 = FrpifaController::dimensionC($d11[1], [0, 16.7, 16.8, 25, 25.1, 33.3, 33.4, 47.2, 47.3, 100], $cValues);

		// Dimensión 12

		$d12 = FrpifaController::dimensionV($frpifa, [13, 14, 15, 32, 43, 47], 24, 0);
		$c12 = FrpifaController::dimensionC($d12[1], [0, 25, 25.1, 33.3, 33.4, 45.8, 45.9, 54.2, 54.3, 100], $cValues);

		// Dimensión 13

		$d13 = FrpifaController::dimensionV($frpifa, [35, 36, 37, 38], 16, 0);
		$c13 = FrpifaController::dimensionC($d13[1], [0, 18.8, 18.9, 31.3, 31.4, 43.8, 43.9, 50, 50.1, 100], $cValues);

		// Dimensión 14

		$d14 = FrpifaController::dimensionV($frpifa, [19, 22, 23, 24, 25, 26], 24, 0);
		$c14 = FrpifaController::dimensionC($d14[1], [0, 37.5, 37.6, 54.2, 54.3, 66.7, 66.8, 79.2, 79.3, 100], $cValues);

		// Dimensión 15

		$d15 = FrpifaController::dimensionV($frpifa, [16, 17, 18, 20, 21], 20, 0);
		$c15 = FrpifaController::dimensionC($d15[1], [0, 60, 60.1, 70, 70.1, 80, 80.1, 90, 90.1, 100], $cValues);

		// Dimensión 16

		$d16 = FrpifaController::dimensionV($frpifa, [27, 28, 29, 30, 52], 20, 0);
		$c16 = FrpifaController::dimensionC($d16[1], [0, 15, 15.1, 25, 25.1, 35, 35.1, 45, 45.1, 100], $cValues);

		// Dimensión 17

		$d17 = FrpifaController::dimensionV($frpifa, [31, 33, 34], 12, 0);
		$c17 = FrpifaController::dimensionC($d17[1], [0, 8.3, 8.4, 25, 25.1, 33.3, 33.4, 50, 50.1, 100], $cValues);

		// DOMINIO 3

		$dom3 = FrpifaController::dominioV([$d10[0], $d11[0], $d12[0], $d13[0], $d14[0], $d15[0], $d16[0], $d17[0]], 200);
		$cDom3 = FrpifaController::dominioC($dom3[1], [0, 28.5, 28.6, 35, 35.1, 41.5, 41.6, 47.5, 47.6, 100], $cValues);

		// Dimensión 18

		$d18 = FrpifaController::dimensionV($frpifa, [95, 102, 103, 104, 105], 20, 0);
		$c18 = FrpifaController::dimensionC($d18[1], [0, 0.9, 1, 5, 5.1, 10, 10.1, 20, 20.1, 100], $cValues);

		// Dimensión 19

		$d19 = FrpifaController::dimensionV($frpifa, [96, 97, 98, 99, 100, 101], 24, 0);
		$c19 = FrpifaController::dimensionC($d19[1], [0, 4.2, 4.3, 16.7, 16.8, 25, 25.1, 37.5, 37.6, 100], $cValues);

		// DOMINIO 4

		$dom4 = FrpifaController::dominioV([$d18[0], $d19[0]], 44);
		$cDom4 = FrpifaController::dominioC($dom4[1], [0, 4.5, 4.6, 11.4, 11.5, 20.5, 20.6, 29.5, 29.6, 100], $cValues);

		// PUNTAJE TOTAL

		$pti = FrpifaController::puntajeTotalV([$dom1[0], $dom2[0], $dom3[0], $dom4[0]], 492);
		$cPti = FrpifaController::puntajeTotalC($pti[1], [0, 19.7, 19.8, 25.9, 26, 31.5, 31.6, 38.0, 38.1, 100], $cValues);

		// Resultados

		$values = [
			$d1[1], $c1,
			$d2[1], $c2,
			$d3[1], $c3,
			$d4[1], $c4,
			$dom1[1], $cDom1,
			$d5[1], $c5,
			$d6[1], $c6,
			$d7[1], $c7,
			$d8[1], $c8,
			$d9[1], $c9,
			$dom2[1], $cDom2,
			$d10[1], $c10,
			$d11[1], $c11,
			$d12[1], $c12,
			$d13[1], $c13,
			$d14[1], $c14,
			$d15[1], $c15,
			$d16[1], $c16,
			$d17[1], $c17,
			$dom3[1], $cDom3,
			$d18[1], $c18,
			$d19[1], $c19,
			$dom4[1], $cDom4,
			$pti[1], $cPti,
		];
		
		return $values;
	}

	public function calcularTodo()
	{
		$frpifas = Frpifa::all();
		$values = [];
		foreach ($frpifas as $frpifa) {
			array_push($values, FrpifaController::calculos($frpifa));
		}
		return $values;
	}
}
