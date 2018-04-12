@extends('layout')

@section('header')

<h1>
	Encuestas
	<small>Listado</small>
</h1>
<ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
	<li class="active">Encuestas</li>
</ol>

@stop

@section('content')

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Listado de Encuestas</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="encuestas-table" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($encuestas as $encuesta)
				<tr>
					<td>{{$encuesta->id}}</td>
					<td>{{$encuesta->nombre}}</td>
					<td>
						<a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>

@stop