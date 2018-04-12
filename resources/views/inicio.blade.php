@extends('layout')

@section('header')

<h1>
	Inicio
	<small>Bienvenido</small>
</h1>

@stop

@section('content')

<div class="row">
	<div class="col-lg-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Nuevo cuestionario</h3>
			</div>
			<div class="box-body">
				<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#frpifaModal">
					CUESTIONARIO PARA LA EVALUACIÓN DE
					<br>FACTORES DE RIESGO PSICOSOCIAL INTRALABORAL
					<br>FORMA A
				</button>
				<br>
				<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#frpifbModal">
					CUESTIONARIO PARA LA EVALUACIÓN DE
					<br>FACTORES DE RIESGO PSICOSOCIAL INTRALABORAL
					<br>FORMA B
				</button>
				<br>
				<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#frpeModal">
					CUESTIONARIO PARA LA EVALUACIÓN DE
					<br>FACTORES DE RIESGO PSICOSOCIAL EXTRALABORAL
				</button>
				<br>
				<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ceeModal">
					CUESTIONARIO PARA LA EVALUACIÓN DE
					<br>ESTRES
				</button>
			</div>
		</div>
	</div>
	@if(Auth::check())
	<div class="col-lg-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Generar Reportes</h3>
			</div>
			<div class="box-body">
				<a href="{{route('excel.export', [$user->id, 'frpifa'])}}" class="btn btn-primary btn-block">
					REPORTE INTRALABORAL FORMA A
				</a>
				<br>
				<a href="{{route('excel.export', [$user->id, 'frpifb'])}}" class="btn btn-primary btn-block">
					REPORTE INTRALABORAL FORMA B
				</a>
				<br>
				<a href="{{route('excel.export', [$user->id, 'frpe'])}}" class="btn btn-primary btn-block">
					REPORTE EXTRALABORAL
				</a>
				<br>
				<a href="{{route('excel.export', [$user->id, 'cee'])}}" class="btn btn-primary btn-block">
					REPORTE ESTRES
				</a>
				<br>
				<a href="{{route('excel.export', [$user->id, 'all'])}}" class="btn btn-success btn-block">
					GENERAR ARCHIVO DE LA BASE DE DATOS
					<br> (Reporte General)
				</a>
			</div>
		</div>
	</div>
	@endif
</div>

@stop