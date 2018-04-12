@extends('layout')

@section('header')

<h1>
	Cuestionario de factores de riesgo psicosocial intralaboral Forma B
	<small>Listado</small>
</h1>

@stop

@section('content')

<button class="btn btn-primary" data-toggle="modal" data-target="#frpifbModal">
	<i class="fa fa-plus"></i> Nuevo Cuestionario
</button>

<hr>

<div class="box box-primary">
	<div class="box-body">
		<table id="frpifbs-table" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($frpifbs as $frpifb)
				<tr>
					<td>{{$frpifb->id}}</td>
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
		$('#frpifbs-table').DataTable();
	})
</script>

@endpush