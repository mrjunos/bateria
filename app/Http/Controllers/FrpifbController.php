<?php

namespace App\Http\Controllers;

use App\User;

use App\Frpifb;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class FrpifbController extends Controller {

	public function store(User $user, Request $request) {
		$this->validate($request, [
			'cedula' => 'required',
			'fecha_cuestionario' => 'required'
		]);

		$year = new Carbon( $request->get('fecha_cuestionario') );

		$frpifb = DB::table('frpifbs')
		->where('cedula', $request->get('cedula'))
		->where('user_id', $user->id)
		->whereYear('fecha_cuestionario', $year->year)
		->first();

		if($frpifb == null){
			$frpifb = Frpifb::create([
				'cedula' => $request->get('cedula'),
				'nombre' => $request->get('nombre'),
				'fecha_cuestionario' => Carbon::parse($request->get('fecha_cuestionario')),
				'user_id' => $user->id,
			]);
		}else{
			$frpifb = $frpifb->id;
		}

		$seccion = "s1";
		return redirect()->route('frpifb.edit', compact('user', 'frpifb', 'seccion'));
	}

	public function edit(User $user, Frpifb $frpifb, $seccion) {
		if($user->id == $frpifb->user_id){
			return view('frpifb.edit', compact('user', 'frpifb', 'seccion'));
		}else{
			return view('index')->with('flash', 'No tiene permisos para editar esta encuesta');
		}
	}

	public function setValues($frpifb, $request, $v1, $v2, $next) {
		for ($i=$v1; $i <= $v2; $i++) {
			$n = 'p'.$i;
			$frpifb->$n = $request->get($n);
		}
		$frpifb->save();
		return $next;
	}

	public function requiredList($v1, $v2) {
		$list = [];
		for ($i=$v1; $i <= $v2; $i++) {
			$list += ['p' . $i => 'required'];
		}
		return $list;
	}

	public function update(User $user, Frpifb $frpifb, $seccion, Request $request) {
		switch ($seccion) {
			case 'S1':
			$this->validate($request, FrpifbController::requiredList(1, 12));
			$seccion = FrpifbController::setValues($frpifb, $request, 1, 12, 's2');
			break;

			case 'S1s':
			$seccion = FrpifbController::setValues($frpifb, $request, 1, 12, 's2');
			break;

			case 'S2':
			$this->validate($request, FrpifbController::requiredList(13, 15));
			$seccion = FrpifbController::setValues($frpifb, $request, 13, 15, 's3');
			break;

			case 'S2s':
			$seccion = FrpifbController::setValues($frpifb, $request, 13, 15, 's3');
			break;

			case 'S3':
			$this->validate($request, FrpifbController::requiredList(16, 19));
			$seccion = FrpifbController::setValues($frpifb, $request, 16, 19, 's4');
			break;

			case 'S3s':
			$seccion = FrpifbController::setValues($frpifb, $request, 16, 19, 's4');
			break;

			case 'S4':
			$this->validate($request, FrpifbController::requiredList(21, 28));
			$seccion = FrpifbController::setValues($frpifb, $request, 21, 28, 's5');
			break;

			case 'S4s':
			$seccion = FrpifbController::setValues($frpifb, $request, 21, 28, 's5');
			break;

			case 'S5':
			$this->validate($request, FrpifbController::requiredList(29, 37));
			$seccion = FrpifbController::setValues($frpifb, $request, 29, 37, 's6');
			break;

			case 'S5s':
			$seccion = FrpifbController::setValues($frpifb, $request, 29, 37, 's6');
			break;

			case 'S6':
			$this->validate($request, FrpifbController::requiredList(38, 40));
			$seccion = FrpifbController::setValues($frpifb, $request, 38, 40, 's7');
			break;

			case 'S6s':
			$seccion = FrpifbController::setValues($frpifb, $request, 38, 40, 's7');
			break;

			case 'S7':
			$this->validate($request, FrpifbController::requiredList(41, 45));
			$seccion = FrpifbController::setValues($frpifb, $request, 41, 45, 's8');
			break;

			case 'S7s':
			$seccion = FrpifbController::setValues($frpifb, $request, 41, 45, 's8');
			break;

			case 'S8':
			$this->validate($request, FrpifbController::requiredList(46, 48));
			$seccion = FrpifbController::setValues($frpifb, $request, 46, 48, 's9');
			break;

			case 'S8s':
			$seccion = FrpifbController::setValues($frpifb, $request, 46, 48, 's9');
			break;

			case 'S9':
			$this->validate($request, FrpifbController::requiredList(49, 61));
			$seccion = FrpifbController::setValues($frpifb, $request, 49, 61, 's10');
			break;

			case 'S9s':
			$seccion = FrpifbController::setValues($frpifb, $request, 49, 61, 's10');
			break;

			case 'S10':
			$this->validate($request, FrpifbController::requiredList(62, 73));
			$seccion = FrpifbController::setValues($frpifb, $request, 62, 73, 's11');
			break;

			case 'S10s':
			$seccion = FrpifbController::setValues($frpifb, $request, 62, 73, 's11');
			break;

			case 'S11':
			$this->validate($request, FrpifbController::requiredList(74, 78));
			$seccion = FrpifbController::setValues($frpifb, $request, 74, 78, 's12');
			break;

			case 'S11s':
			$seccion = FrpifbController::setValues($frpifb, $request, 74, 78, 's12');
			break;

			case 'S12':
			$this->validate($request, FrpifbController::requiredList(79, 88));
			$seccion = FrpifbController::setValues($frpifb, $request, 79, 88, 's13');
			break;

			case 'S12s':
			$seccion = FrpifbController::setValues($frpifb, $request, 79, 88, 's13');
			break;

			case 'S13':
			$this->validate($request, [ 'pv1' => 'required' ]);
			$list = ['pv1' => 'required'] + FrpifbController::requiredList(89, 97);
			if($request->get('pv1') == 'SI'){ $this->validate($request, $list); }
			$frpifb->pv1 = $request->get('pv1');
			FrpifbController::setValues($frpifb, $request, 89, 97, '');
			$seccion = "s1";
			$fdg = FdgController::store($user->id, $frpifb->cedula, $frpifb->fecha_cuestionario);
			return (!$fdg) ? redirect()->route('index', compact('user')) : redirect()->route('fdg.edit', compact('user', 'fdg', 'seccion'));
			break;

			case 'S13s':
			$this->validate($request, [ 'pv1' => 'required' ]);
			$frpifb->pv1 = $request->get('pv1');
			FrpifbController::setValues($frpifb, $request, 89, 97, '');
			$seccion = "s1";
			$fdg = FdgController::store($user->id, $frpifb->cedula, $frpifb->fecha_cuestionario);
			return (!$fdg) ? redirect()->route('index', compact('user')) : redirect()->route('fdg.edit', compact('user', 'fdg', 'seccion'));
			break;
		}
		return redirect()->route('frpifb.edit', compact('user', 'frpifb', 'seccion'));
	}

	// $mrv = mínimo de respuestas vacías
	static function dimensionV($frpifb, $numbers, $factor, $mrv) {
		$d = 0;
		$c = 0;
		for ($i=0; $i < count($numbers); $i++) { 
			$n = 'p'.$numbers[$i];
			if($frpifb->$n === null){ $c++; }
			if($c > $mrv){ return null; }
			$d += $frpifb->$n;
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

	static function calculos(User $user, $frpifb) {

		$frpifb = DB::table('frpifbs')->where('id', $frpifb)->first();
		$cValues = ["Sin riesgo o riesgo despreciable", "Riesgo bajo", "Riesgo medio", "Riesgo alto", "Riesgo muy ato"];

		// Dimensión 1

		$d1 = FrpifbController::dimensionV($frpifb, [49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61], 52, 1);
		$c1 = FrpifbController::dimensionC($d1[1], [0, 3.8, 3.9, 13.5, 13.6, 25, 25.1, 38.5, 38.6, 100], $cValues);

		// Dimensión 2

		$d2 = FrpifbController::dimensionV($frpifb, [62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73], 48, 1);
		$c2 = FrpifbController::dimensionC($d2[1], [0, 6.3, 6.4, 14.6, 14.7, 27.1, 27.2, 37.5, 37.6, 100], $cValues);

		// Dimensión 3

		$d3 = FrpifbController::dimensionV($frpifb, [74, 75, 76, 77, 78], 20, 0);
		$c3 = FrpifbController::dimensionC($d3[1], [0, 5, 5.1, 20, 20.1, 30, 30.1, 50, 50.1, 100], $cValues);

		// Dimensión 4 NO APLICA

		// DOMINIO 1

		$dom1 = FrpifbController::dominioV([$d1[0], $d2[0], $d3[0]], 120);
		$cDom1 = FrpifbController::dominioC($dom1[1], [0, 8.3, 8.4, 17.5, 17.6, 26.7, 26.8, 38.3, 38.4, 100], $cValues);

		// Dimensión 5

		$d5 = FrpifbController::dimensionV($frpifb, [41, 42, 43, 44, 45], 20, 0);
		$c5 = FrpifbController::dimensionC($d5[1], [0, 0.9, 1, 5, 5.1, 15, 15.1, 30, 30.1, 100], $cValues);

		// Dimensión 6

		$d6 = FrpifbController::dimensionV($frpifb, [46, 47, 48], 12, 0);
		$c6 = FrpifbController::dimensionC($d6[1], [0, 0.9, 1, 16.7, 16.8, 25, 25.1, 50, 50.1, 100], $cValues);

		// Dimensión 7

		$d7 = FrpifbController::dimensionV($frpifb, [38, 39, 40], 12, 0);
		$c7 = FrpifbController::dimensionC($d7[1], [0, 16.7, 16.8, 33.3, 33.4, 41.7, 41.8, 58.3, 58.4, 100], $cValues);

		// Dimensión 8

		$d8 = FrpifbController::dimensionV($frpifb, [29, 30, 31, 32], 16, 0);
		$c8 = FrpifbController::dimensionC($d8[1], [0, 12.5, 12.6, 25, 25.1, 37.5, 37.6, 56.3, 56.4, 100], $cValues);

		// Dimensión 9

		$d9 = FrpifbController::dimensionV($frpifb, [34, 35, 36], 12, 0);
		$c9 = FrpifbController::dimensionC($d9[1], [0, 33.3, 33.4, 50, 50.1, 66.7, 66.8, 75, 75.1, 100], $cValues);

		// DOMINIO 2

		$dom2 = FrpifbController::dominioV([$d5[0], $d6[0], $d7[0], $d8[0], $d9[0]], 72);
		$cDom2 = FrpifbController::dominioC($dom2[1], [0, 19.4, 19.5, 26.4, 26.5, 34.7, 34.8, 43.1, 43.2, 100], $cValues);

		//Dimensión 10

		$d10 = FrpifbController::dimensionV($frpifb, [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12], 48, 1);
		$c10 = FrpifbController::dimensionC($d10[1], [0, 22.9, 23, 31.3, 31.4, 39.6, 39.7, 47.9, 48, 100], $cValues);

		// Dimensión 11

		if($frpifb->pv1 == "NO"){ $d11 = [0,0]; }else{
			$d11 = FrpifbController::dimensionV($frpifb, [89, 90, 91, 92, 93, 94, 95, 96, 97], 36, 0);
		}
		$c11 = FrpifbController::dimensionC($d11[1], [0, 19.4, 19.5, 27.8, 27.9, 38.9, 39, 47.2, 47.3, 100], $cValues);

		// Dimensión 12

		$d12 = FrpifbController::dimensionV($frpifb, [13, 14, 15], 12, 0);
		$c12 = FrpifbController::dimensionC($d12[1], [0, 16.7, 16.8, 33.3, 33.4, 41.7, 41.8, 50, 50.1, 100], $cValues);

		// Dimensión 13

		$d13 = FrpifbController::dimensionV($frpifb, [25, 26, 27, 28], 16, 0);
		$c13 = FrpifbController::dimensionC($d13[1], [0, 12.5, 12.6, 25, 25.1, 31.3, 31.4, 50, 50.1, 100], $cValues);

		// Dimensión 14 NO EVALÚA

		// Dimensión 15

		$d15 = FrpifbController::dimensionV($frpifb, [16, 17, 18, 19, 20], 20, 0);
		$c15 = FrpifbController::dimensionC($d15[1], [0, 50, 50.1, 65, 65.1, 75, 75.1, 85, 85.1, 100], $cValues);

		// Dimensión 16 NO EVALÚA

		// Dimensión 17

		$d17 = FrpifbController::dimensionV($frpifb, [21, 22, 23, 24, 33, 37], 24, 0);
		$c17 = FrpifbController::dimensionC($d17[1], [0, 25, 25.1, 37.5, 37.6, 45.8, 45.9, 58.3, 58.4, 100], $cValues);

		// DOMINIO 3

		$dom3 = FrpifbController::dominioV([$d10[0], $d11[0], $d12[0], $d13[0], $d15[0], $d17[0]], 156);
		$cDom3 = FrpifbController::dominioC($dom3[1], [0, 26.9, 27, 33.3, 33.4, 37.8, 37.9, 44.2, 44.3, 100], $cValues);

		// Dimensión 18

		$d18 = FrpifbController::dimensionV($frpifb, [85, 86, 87, 88], 16, 0);
		$c18 = FrpifbController::dimensionC($d18[1], [0, 0.9, 1, 6.3, 6.4, 12.5, 12.6, 18.8, 18.9, 100], $cValues);

		// Dimensión 19

		$d19 = FrpifbController::dimensionV($frpifb, [79, 80, 81, 82, 83, 84], 24, 0);
		$c19 = FrpifbController::dimensionC($d19[1], [0, 0.9, 1, 12.5, 12.6, 25, 25.1, 37.5, 37.6, 100], $cValues);

		// DOMINIO 4

		$dom4 = FrpifbController::dominioV([$d18[0], $d19[0]], 40);
		$cDom4 = FrpifbController::dominioC($dom4[1], [0, 2.5, 2.6, 10, 10.1, 15.5, 15.6, 27.5, 27.6, 100], $cValues);

		// PUNTAJE TOTAL

		$pti = FrpifbController::puntajeTotalV([$dom1[0], $dom2[0], $dom3[0], $dom4[0]], 388);
		$cPti = FrpifbController::puntajeTotalC($pti[1], [0, 20.6, 20.7, 26, 26.1, 31.2, 31.3, 38.7, 38.8, 100], $cValues);

		// Resultados

		$values = [
			$d1[1], $c1,
			$d2[1], $c2,
			$d3[1], $c3,
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
			$d15[1], $c15,
			$d17[1], $c17,
			$dom3[1], $cDom3,
			$d18[1], $c18,
			$d19[1], $c19,
			$dom4[1], $cDom4,
			$pti[1], $cPti,
		];

		return $values;
	}
}
