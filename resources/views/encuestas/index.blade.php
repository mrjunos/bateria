@extends('layout')

@section('header')

<h1>
	Encuestas
	<small>Listado</small>
</h1>
<ol class="breadcrumb">
	<li><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
	<li class="active">Encuestas</li>
</ol>

@stop

@section('content')

<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Listado de Encuestas</h3>
		<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
			<i class="fa fa-plus"></i> Nueva Encuesta
		</button>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="encuestas-table" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Cedula</th>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($encuestas as $encuesta)
				<tr>
					<td>{{$encuesta->cedula}}</td>
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

@push('styles')

<link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

@endpush

@push('scripts')

<script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
	$(function () {
		$('#encuestas-table').DataTable();
	})
</script>

@endpush