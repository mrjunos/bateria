<?php

namespace App\Http\Controllers;

use App\User;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller {

	public function export(User $user, $type) {

		Excel::create($user->name, function($excel) use ($user, $type){
			$excel->sheet('Sj1', function($sheet) use ($user, $type){

				if ($type == "all") { $range = "EB"; }
				if ($type == "frpifa") { $range = "BT"; }
				if ($type == "frpifb") { $range = "BN"; }
				if ($type == "frpe") { $range = "AN"; }
				if ($type == "cee") { $range = "Z"; }

				$headersFdg = ExcelController::headersFdg();
				$headersFrpifa = ($type == "frpifa" OR $type == "all") ? ExcelController::headersFrpifa() : [];
				$headersFrpifb = ($type == "frpifb" OR $type == "all") ? ExcelController::headersFrpifb() : [];
				$headersFrpe = ($type == "frpe" OR $type == "all") ? ExcelController::headersFrpe() : [];
				$headersCee = ($type == "cee" OR $type == "all") ? ExcelController::headersCee() : [];

				$headers = array_merge($headersFdg, $headersFrpifa, $headersFrpifb, $headersFrpe, $headersCee);

				// Definición y estilo de los encabezados
				
				$sheet->setWidth(ExcelController::widthList($range, 20));

				$abc = ExcelController::abc();

				for ($i=0; $i < count($abc); $i++) {
					for ($j=1; $j < count($abc); $j++) {
						$cell = $abc[$i].$abc[$j].'1';
						$sheet->cells($cell, function($cell) {
							$cell->setBorder('','thin','','');
						});
						if($abc[$i].$abc[$j] == $range){
							break(2);
						}
					}
				}

				$sheet->getStyle('A1:'.$range.'1')->getAlignment()->setWrapText(true);

				$sheet->row(1, function($row) {
					$row->setValignment('center');
					$row->setAlignment('center');
					$row->setFontSize(9);
				});

				$sheet->cells('A1:X1', function ($cells) {
					$cells->setBackground('#00b3b3');
				});

				if($type == "all"){
					$sheet->cells('Y1:BT1', function ($cells) {
						$cells->setBackground('#1a1aff');
					});

					$sheet->cells('BU1:DJ1', function ($cells) {
						$cells->setBackground('#00cc99');
					});

					$sheet->cells('DK1:DZ1', function ($cells) {
						$cells->setBackground('#adad85');
					});

					$sheet->cells('EA1:EB1', function ($cells) {
						$cells->setBackground('#9933ff');
					});
				}

				if($type == "frpifa"){
					$sheet->cells('Y1:BT1', function ($cells) {
						$cells->setBackground('#1a1aff');
					});
				}

				if($type == "frpifb"){
					$sheet->cells('Y1:BN1', function ($cells) {
						$cells->setBackground('#00cc99');
					});
				}

				if($type == "frpe"){
					$sheet->cells('Y1:AN1', function ($cells) {
						$cells->setBackground('#adad85');
					});
				}

				if($type == "cee"){
					$sheet->cells('Y1:Z1', function ($cells) {
						$cells->setBackground('#9933ff');
					});
				}

				$sheet->row(1, $headers);

				// Consulta de las encuestas por usuario

				$fdgs = DB::table('fdgs')->where('user_id', $user->id)->orderBy('id', 'desc')->get();

				$row = 2;
				$values = [];

				foreach ($fdgs as $fdg) {

					// Consulta de las encuestas individuales por tipo

					$fecha_cuestionario = new Carbon( $fdg->fecha_cuestionario );

					$frpifa = ($type == "frpifa" OR $type == "all") ? DB::table('frpifas')
					->where('cedula', $fdg->cedula)
					->where('user_id', $fdg->user_id)
					->whereYear('fecha_cuestionario', $fecha_cuestionario->year)
					->first() : null;

					$frpifb = DB::table('frpifbs')
					->where('cedula', $fdg->cedula)
					->where('user_id', $fdg->user_id)
					->whereYear('fecha_cuestionario', $fecha_cuestionario->year)
					->first();

					$frpe = DB::table('frpes')
					->where('cedula', $fdg->cedula)
					->where('user_id', $fdg->user_id)
					->whereYear('fecha_cuestionario', $fecha_cuestionario->year)
					->first();

					$cee = DB::table('cees')
					->where('cedula', $fdg->cedula)
					->where('user_id', $fdg->user_id)
					->whereYear('fecha_cuestionario', $fecha_cuestionario->year)
					->first();

					// Calculo de las dimensiones, dominios y totales de cada encuesta

					$fdg = FdgController::calculos($user, $fdg->id);
					$frpifa = $frpifa === null ? ExcelController::llenarVacio(48) : FrpifaController::calculos($user, $frpifa->id);
					$frpifb = $frpifb === null ? ExcelController::llenarVacio(42) : FrpifbController::calculos($user, $frpifb->id);
					$frpe = $frpe === null ? ExcelController::llenarVacio(16) : FrpeController::calculos($user, $frpe->id);
					$cee = $cee === null ? ExcelController::llenarVacio(2) : CeeController::calculos($user, $cee->id);

					// Concatenado de todos los resultados de las diferentes encuestas

					for ($i=0; $i < count($fdg); $i++) {
						array_push($values, $fdg[$i]);
					}


					if($type == "frpifa" OR $type == "all"){
						for ($i=0; $i < count($frpifa); $i++) {
							array_push($values, $frpifa[$i] === null ? "inválido" : $frpifa[$i]);
						}
					}

					if($type == "frpifb" OR $type == "all"){
						for ($i=0; $i < count($frpifb); $i++) {
							array_push($values, $frpifb[$i] === null ? "inválido" : $frpifb[$i]);
						}
					}

					if($type == "frpe" OR $type == "all"){
						for ($i=0; $i < count($frpe); $i++) {
							array_push($values, $frpe[$i] === null ? "inválido" : $frpe[$i]);
						}
					}

					if($type == "cee" OR $type == "all"){
						for ($i=0; $i < count($cee); $i++) {
							array_push($values, $cee[$i] === null ? "inválido" : $cee[$i]);
						}
					}

					// Estilos de las filas donde van los datos

					$sheet->row($row, function($row) {
						$row->setValignment('center');
						$row->setAlignment('center');
						$row->setFontSize(9);
					});

					$sheet->getStyle('A'.$row.':'.$range.$row)->getAlignment()->setWrapText(true);

					// Llenado de los datos en el ecxel y limpieza de variables

					$sheet->row($row, $values);

					$row++;
					$values = [];
				}
			});
})->export('xlsx');

}

public function exportById($name) {

	return Excel::download(new Excel, $name . ".xlsx");

}

public function llenarVacio($cantidad) {
	$list = [];
	for ($i=0; $i < $cantidad; $i++) { 
		array_push($list, "");
	}
	return $list;
}

public function widthList($fin, $width) {
	$abc = ExcelController::abc();
	$list = [];
	for ($i=0; $i < count($abc); $i++) { 
		for ($j=1; $j < count($abc); $j++) {
			$list += [$abc[$i].$abc[$j] => $width];
			if($abc[$i].$abc[$j] == $fin){
				return $list;
			}
		}
	}
}

public function abc() {
	return [
		'',
		'A',
		'B',
		'C',
		'D',
		'E',
		'F',
		'G',
		'H',
		'I',
		'J',
		'K',
		'L',
		'M',
		'N',
		'O',
		'P',
		'Q',
		'R',
		'S',
		'T',
		'U',
		'W',
		'V',
		'X',
		'Y',
		'Z',
	];
}

public function headersFdg() {
	return [
		'FECHA DE APLICACIÓN (dd/mm)',
		'AÑO DE APLICACIÓN',
		'ID',
		'NOMBRE COMPLETO',
		'SEXO',
		'AÑO DE NACIMIENTO',
		'ESTADO CIVIL',
		'ESCOLARIDAD (último nivel de estudios)',
		'OCUPACIÓN O PROFESIÓN',
		'CIUDAD / MUNICIPIO DE RESIDENCIA',
		'DEPARTAMENTO DEL PAÍS DONDE RESIDE',
		'ESTRATO SERVICIOS PÚBLICOS',
		'TIPO DE VIVIENDA',
		'NÚMERO DE PERSONAS ECONÓMICAMENTE A CARGO',
		'CIUDAD / MUNICIPIO DONDE TRABAJA',
		'DEPARTAMENTO DEL PAÍS DONDE TRABAJA',
		'ANTIGÜEDAD EN LA EMPRESA',
		'NOMBRE DEL CARGO',
		'TIPO DE CARGO',
		'ANTIGÜEDAD EN EL CARGO',
		'DEPARTAMENTO O SECCIÓN DE LA EMPRESA DONDE TRABAJA',
		'TIPO DE CONTRATO',
		'HORAS DIARIAS DE TRABAJO ESTABLECIDAS CONTRACTUALMENTE',
		'TIPO DE SALARIO'
	];
}

public function headersFrpifa() {
	return [
		'Dimensión: Características del liderazgo - Forma A (puntaje transformado)',
		'Dimensión: Características del liderazgo - Forma A (nivel de riesgo)',
		'Dimensión: Relaciones sociales en el trabajo - Forma A (puntaje transformado)',
		'Dimensión: Relaciones sociales en el trabajo - Forma A (nivel de riesgo)',
		'Dimensión: Retroalimentación del desempeño - Forma A (puntaje transformado)',
		'Dimensión: Retroalimentación del desempeño - Forma A (nivel de riesgo)',
		'Dimensión: Relación con los colaboradores  - Forma A (puntaje transformado)',
		'Dimensión: Relación con los colaboradores - Forma A (nivel de riesgo)',
		'DOMINIO: Liderazgo y relaciones sociales en el trabajo - Forma A (puntaje transformado)',
		'DOMINIO: Liderazgo y relaciones sociales en el trabajo - Forma A (nivel de riesgo)',
		'Dimensión: Claridad de rol - Forma A (puntaje transformado)',
		'Dimensión: Claridad de rol - Forma A (nivel de riesgo)',
		'Dimensión: Capacitación - Forma A (puntaje transformado)',
		'Dimensión: Capacitación - Forma A (nivel de riesgo)',
		'Dimensión: Participación y manejo del cambio - Forma A (puntaje transformado)',
		'Dimensión: Participación y manejo del cambio - Forma A (nivel de riesgo)',
		'Dimensión: Oportunidades para el uso y desarrollo de habilidades y conocimientos - Forma A (puntaje transformado)',
		'Dimensión: Oportunidades para el uso y desarrollo de habilidades y conocimientos - Forma A (nivel de riesgo)',
		'Dimensión: Control y autonomía sobre el trabajo - Forma A (puntaje transformado)',
		'Dimensión: Control y autonomía sobre el trabajo - Forma A (nivel de riesgo)',
		'DOMINIO Control sobre el trabajo - Forma A (puntaje transformado)',
		'DOMINIO Control sobre el trabajo - Forma A (nivel de riesgo)',
		'Dimensión: Demandas ambientales y de esfuerzo físico - Forma A (puntaje transformado)',
		'Dimensión: Demandas ambientales y de esfuerzo físico - Forma A (nivel de riesgo)',
		'Dimensión: Demandas emocionales - Forma A (puntaje transformado)',
		'Dimensión: Demandas emocionales - Forma A (nivel de riesgo)',
		'Dimensión: Demandas cuantitativas - Forma A (puntaje transformado)',
		'Dimensión: Demandas cuantitativas - Forma A (nivel de riesgo)',
		'Dimensión: Influencia del trabajo sobre el entorno extralaboral - Forma A (puntaje transformado)',
		'Dimensión: Influencia del trabajo sobre el entorno extralaboral - Forma A (nivel de riesgo)',
		'Dimensión: Exigencias de responsabilidad del cargo - Forma A (puntaje transformado)',
		'Dimensión: Exigencias de responsabilidad del cargo - Forma A (nivel de riesgo)',
		'Dimensión: Demandas de carga mental - Forma A (puntaje transformado)',
		'Dimensión: Demandas de carga mental - Forma A (nivel de riesgo)',
		'Dimensión: Consistencia del rol - Forma A (puntaje transformado)',
		'Dimensión: Consistencia del rol - Forma A (nivel de riesgo)',
		'Dimensión: Demandas de la jornada de trabajo - Forma A (puntaje transformado)',
		'Dimensión: Demandas de la jornada de trabajo - Forma A (nivel de riesgo)',
		'DOMINIO: Demandas del trabajo - Forma A (puntaje transformado)',
		'DOMINIO: Demandas del trabajo - Forma A (nivel de riesgo)',
		'Dimensión: Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza - Forma A (puntaje transformado)',
		'Dimensión: Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza - Forma A (nivel de riesgo)',
		'Dimensión: Reconocimiento y compensación - Forma A (puntaje transformado)',
		'Dimensión: Reconocimiento y compensación - Forma A (nivel de riesgo)',
		'DOMINIO: Recompensas - Forma A (puntaje transformado)',
		'DOMINIO: Recompensas - Forma A (nivel de riesgo)',
		'PUNTAJE TOTAL del cuestionario de factores de riesgo psicosocial intralaboral - Forma A (puntaje transformado)',
		'PUNTAJE TOTAL del cuestionario de factores de riesgo psicosocial intralaboral - Forma A (nivel de riesgo)'
	];
}

public function headersFrpifb() {
	return [
		'Dimensión: Características del liderazgo - Forma B (puntaje transformado)',
		'Dimensión: Características del liderazgo - Forma B (nivel de riesgo)',
		'Dimensión: Relaciones sociales en el trabajo - Forma B (puntaje transformado)',
		'Dimensión: Relaciones sociales en el trabajo - Forma B (nivel de riesgo)',
		'Dimensión: Retroalimentación del desempeño - Forma B (puntaje transformado)',
		'Dimensión: Retroalimentación del desempeño - Forma B (nivel de riesgo)',
		'DOMINIO: Liderazgo y relaciones sociales en el trabajo - Forma B (puntaje transformado)',
		'DOMINIO: Liderazgo y relaciones sociales en el trabajo - Forma B (nivel de riesgo)',
		'Dimensión: Claridad de rol - Forma B (puntaje transformado)',
		'Dimensión: Claridad de rol - Forma B (nivel de riesgo)',
		'Dimensión: Capacitación - Forma B (puntaje transformado)',
		'Dimensión: Capacitación - Forma B (nivel de riesgo)',
		'Dimensión: Participación y manejo del cambio - Forma B (puntaje transformado)',
		'Dimensión: Participación y manejo del cambio - Forma B (nivel de riesgo)',
		'Dimensión: Oportunidades para el uso y desarrollo de habilidades y conocimientos - Forma B (puntaje transformado)',
		'Dimensión: Oportunidades para el uso y desarrollo de habilidades y conocimientos - Forma B (nivel de riesgo)',
		'Dimensión: Control y autonomía sobre el trabajo - Forma B (puntaje transformado)',
		'Dimensión: Control y autonomía sobre el trabajo - Forma B (nivel de riesgo)',
		'DOMINIO: Control sobre el trabajo - Forma B (puntaje transformado)',
		'DOMINIO: Control sobre el trabajo - Forma B (nivel de riesgo)',
		'Dimensión: Demandas ambientales y de esfuerzo físico - Forma B (puntaje transformado)',
		'Dimensión: Demandas ambientales y de esfuerzo físico - Forma B (nivel de riesgo)',
		'Dimensión: Demandas emocionales - Forma B (puntaje transformado)',
		'Dimensión: Demandas emocionales - Forma B (nivel de riesgo)',
		'Dimensión: Demandas cuantitativas - Forma B (puntaje transformado)',
		'Dimensión: Demandas cuantitativas - Forma B (nivel de riesgo)',
		'Dimensión: Influencia del trabajo sobre el entorno extralaboral - Forma B (puntaje transformado)',
		'Dimensión: Influencia del trabajo sobre el entorno extralaboral - Forma B (nivel de riesgo)',
		'Dimensión: Demandas de carga mental - Forma B (puntaje transformado)',
		'Dimensión: Demandas de carga mental - Forma B (nivel de riesgo)',
		'Dimensión: Demandas de la jornada de trabajo - Forma B (puntaje transformado)',
		'Dimensión: Demandas de la jornada de trabajo - Forma B (nivel de riesgo)',
		'DOMINIO: Demandas del trabajo - Forma B (puntaje transformado)',
		'DOMINIO: Demandas del trabajo - Forma B (nivel de riesgo)',
		'Dimensión: Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza - Forma B (puntaje transformado)',
		'Dimensión: Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza - Forma B (nivel de riesgo)',
		'Dimensión: Reconocimiento y compensación - Forma B (puntaje transformado)',
		'Dimensión: Reconocimiento y compensación - Forma B (nivel de riesgo)',
		'DOMINIO: Recompensas - Forma B (puntaje transformado)',
		'DOMINIO: Recompensas - Forma B (nivel de riesgo)',
		'PUNTAJE TOTAL del cuestionario de factores de riesgo psicosocial intralaboral - Forma B (puntaje transformado)',
		'PUNTAJE TOTAL del cuestionario de factores de riesgo psicosocial intralaboral - Forma B (nivel de riesgo)'
	];
}

public function headersFrpe() {
	return [
		'Dimensión: Tiempo fuera del trabajo - Extralaboral (puntaje transformado)',
		'Dimensión: Tiempo fuera del trabajo - Extralaboral (nivel de riesgo)',
		'Dimensión: Relaciones familiares  - Extralaboral (puntaje transformado)',
		'Dimensión: Relaciones familiares  - Extralaboral (nivel de riesgo)',
		'Dimensión: Comunicación y relaciones interpersonales - Extralaboral (puntaje transformado)',
		'Dimensión: Comunicación y relaciones interpersonales - Extralaboral (nivel de riesgo)',
		'Dimensión: Situación económica del grupo familiar - Extralaboral (puntaje transformado)',
		'Dimensión: Situación económica del grupo familiar - Extralaboral (nivel de riesgo)',
		'Dimensión: Características de la vivienda y de su entorno - Extralaboral (puntaje transformado)',
		'Dimensión: Características de la vivienda y de su entorno - Extralaboral (nivel de riesgo)',
		'Dimensión: Influencia del entorno extralaboral sobre el trabajo - Extralaboral (puntaje transformado)',
		'Dimensión: Influencia del entorno extralaboral sobre el trabajo - Extralaboral (nivel de riesgo)',
		'Dimensión: Desplazamiento vivienda – trabajo – vivienda - Extralaboral (puntaje transformado)',
		'Dimensión: Desplazamiento vivienda – trabajo – vivienda - Extralaboral (nivel de riesgo)',
		'PUNTAJE TOTAL del cuestionario de factores de riesgo psicosocial extralaboral (puntaje transformado)',
		'PUNTAJE TOTAL del cuestionario de factores de riesgo psicosocial extralaboral (nivel de riesgo)'
	];
}

public function headersCee() {
	return [
		'Puntaje total evaluación de estrés (puntaje transformado)',
		'Puntaje total evaluación de estrés (nivel de riesgo)'
	];
}
}
