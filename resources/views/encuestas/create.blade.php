<div class="modal fade" id="frpifaModal" tabindex="-1" role="dialog" aria-labelledby="frpifaModalLabel">
	<form role="form" method="POST" action="{{route('frpifa.store')}}">
		@csrf
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="frpifaModalLabel">Nueva Encuesta</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name="user" value="{{auth()->user()->id}}">

					<div class="form-group {{$errors->has('cedula') ? 'has-error' : ''}}">
						<label for="inputCedula">Cedula</label>
						<input type="number" class="form-control" id="inputCedula" placeholder="Cédula" name="cedula" value="{{old('cedula')}}">
						{!!$errors->first('cedula', '<span class="help-block">:message</span>')!!}
					</div>

					<div class="form-group {{$errors->has('fecha_cuestionario') ? 'has-error' : ''}}">
						<label>Fecha de la Encuesta:</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" class="form-control pull-right" id="datepicker" name="fecha_cuestionario" value="{{old('fecha_cuestionario')}}">
						</div>
						{!!$errors->first('fecha_cuestionario', '<span class="help-block">:message</span>')!!}
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button class="btn btn-primary">Crear</button>
				</div>
			</div>
		</div>
	</form>
</div>