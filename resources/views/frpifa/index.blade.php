@extends('layout')

@section('header')

<h1>
	Cuestionario de factores de riesgo psicosocial intralaboral Forma A
	<small>Listado</small>
</h1>

@stop

@section('content')

<button class="btn btn-primary" data-toggle="modal" data-target="#frpifaModal">
	<i class="fa fa-plus"></i> Nuevo Cuestionario
</button>

<a href="{{route('excel.exportByUser', auth()->user()->id)}}" class="btn btn-primary">Descargar Todos</a>

<hr>

<div class="box box-primary">
	<div class="box-body">
		<table id="frpifas-table" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($frpifas as $frpifa)
				<tr>
					<td>{{$frpifa->id}}</td>
					<td>
						<a href="{{route('frpifa.edit', $frpifa->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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
		$('#frpifas-table').DataTable();
	})
</script>

@endpush