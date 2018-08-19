<?php

namespace App\Http\Controllers;

use App\User;

use App\Fdg;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class FdgController extends Controller {

	static function store($user, $cedula, $fecha_cuestionario) {
		$user = DB::table('users')->where('id', $user)->first();
		$fecha_cuestionario = new Carbon( $fecha_cuestionario );

		$fdg = DB::table('fdgs')
		->where('cedula', $cedula)
		->where('user_id', $user->id)
		->whereYear('fecha_cuestionario', $fecha_cuestionario->year)
		->first();

		if($fdg == null){
			$fdg = Fdg::create([
				'cedula' => $cedula,
				'fecha_cuestionario' => $fecha_cuestionario,
				'user_id' => $user->id,
			]);
			return $fdg;
		}
		return false;
	}

	public function edit(User $user, Fdg $fdg, $seccion) {
		if($user->id == $fdg->user_id){
			return view('fdg.edit', compact('user', 'fdg', 'seccion'));
		}else{
			return view('index', compact('user'))->with('flash', 'No tiene permisos para editar esta encuesta');
		}
	}

	public function setValues($fdg, $request, $v1, $v2, $next) {
		for ($i=$v1; $i <= $v2; $i++) {
			$n = 'p'.$i;
			if($i == 14){
				$fdg->$n = ($request->get('p14-1') != null) ? $request->get('p14-1') : $request->get('p14');
			}else if($i == 17){
				$fdg->$n = ($request->get('p17-1') != null) ? $request->get('p17-1') : $request->get('p17');
			}else{
				$fdg->$n = $request->get($n);
			}
		}
		$fdg->save();
		return $next;
	}

	public function requiredList($v1, $v2) {
		$list = [];
		for ($i=$v1; $i <= $v2; $i++) {
			if ($i != 14 AND $i != 17) {
				$list += ['p' . $i => 'required'];
			}
		}
		return $list;
	}

	public function update(User $user, Fdg $fdg, $seccion, Request $request) {
		switch ($seccion) {
			case 'S1':
			$list = FdgController::requiredList(1, 21);
			if($request->get('p14-1') == null AND $request->get('p14') == null){
				$list += ['p14' => 'required'];
			}
			if($request->get('p17-1') == null AND $request->get('p17') == null){
				$list += ['p17' => 'required'];
			}
			$this->validate($request, $list);
			FdgController::setValues($fdg, $request, 1, 21, '');
			break;

			case 'S1s':
			FdgController::setValues($fdg, $request, 1, 21, '');
			break;
		}
		return redirect()->route('index', compact('user'));
	}

	static function calculos(User $user, $fdg){
		$fdg = DB::table('fdgs')->where('id', $fdg)->first();
		$fecha_cuestionario = new Carbon( $fdg->fecha_cuestionario );

		return [
			$fecha_cuestionario,
			$fecha_cuestionario->year,
			$fdg->cedula,
			$fdg->p1,
			$fdg->p2,
			$fdg->p3,
			$fdg->p4,
			$fdg->p5,
			$fdg->p6,
			$fdg->p7,
			$fdg->p8,
			$fdg->p9,
			$fdg->p10,
			$fdg->p11,
			$fdg->p12,
			$fdg->p13,
			$fdg->p14,
			$fdg->p15,
			$fdg->p16,
			$fdg->p17,
			$fdg->p18,
			$fdg->p19,
			$fdg->p20,
			$fdg->p21
		];
	}
}
