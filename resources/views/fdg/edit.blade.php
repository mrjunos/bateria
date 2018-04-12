@extends('layout')

@section('header')

<h1>
	Encuestas
	<small>Nueva</small>
</h1>

@stop

@section('content')

<div class="row">
	<div class="col-lg-12">
		@if($seccion == 's1')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes son algunas preguntas que se refieren a información general de usted o su ocupación.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif

					<div class="form-group">
						<label for="p1">1. Nombre completo:</label>
						<input type="text" class="form-control" id="p1" name="p1" placeholder="Nombre completo" value="{{old('p1')}}">
					</div>

					<br>

					<div class="form-group">
						<label>2. Sexo:</label>
						<div class="radio">
							<label>
								<input type="radio" {{old('p2') == 'Masculino' ? 'checked' : ''}} name="p2" value="Masculino"> Masculino
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p2') == 'Femenino' ? 'checked' : ''}} name="p2" value="Femenino"> Femenino
							</label>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label for="p3">3. Año de nacimiento:</label>
						<input type="number" class="form-control" id="p3" name="p3" placeholder="Año de nacimiento" value="{{old('p3')}}">
					</div>

					<br>

					<div class="form-group">
						<label>4. Estado civíl:</label>
						<div class="radio">
							<label>
								<input type="radio" {{old('p4') == 'Soltero (a)' ? 'checked' : ''}} name="p4" value="Soltero (a)"> Soltero (a)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p4') == 'Casado (a)' ? 'checked' : ''}} name="p4" value="Casado (a)"> Casado (a)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p4') == 'Unión libre' ? 'checked' : ''}} name="p4" value="Unión libre"> Unión libre
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p4') == 'Separado (a)' ? 'checked' : ''}} name="p4" value="Separado (a)"> Separado (a)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p4') == 'Divorciado (a)' ? 'checked' : ''}} name="p4" value="Divorciado (a)"> Divorciado (a)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p4') == 'Viudo (a)' ? 'checked' : ''}} name="p4" value="Viudo (a)"> Viudo (a)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p4') == 'Sacerdote / Monja' ? 'checked' : ''}} name="p4" value="Sacerdote / Monja"> Sacerdote / Monja
							</label>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label>5. Último nivel de estudios que alcanzó</label>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Ninguno' ? 'checked' : ''}} name="p5" value="Ninguno"> Ninguno
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Primaria incompleta' ? 'checked' : ''}} name="p5" value="Primaria incompleta"> Primaria incompleta
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Primaria Completa' ? 'checked' : ''}} name="p5" value="Primaria Completa"> Primaria Completa
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Bachillerato Incompleto' ? 'checked' : ''}} name="p5" value="Bachillerato Incompleto"> Bachillerato Incompleto
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Bachilletato completo' ? 'checked' : ''}} name="p5" value="Bachilletato completo"> Bachilletato completo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Técnico / tecnológico incompleto' ? 'checked' : ''}} name="p5" value="Técnico / tecnológico incompleto"> Técnico / tecnológico incompleto
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Técnico / tecnológico completo' ? 'checked' : ''}} name="p5" value="Técnico / tecnológico completo"> Técnico / tecnológico completo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Profesional incompleto' ? 'checked' : ''}} name="p5" value="Profesional incompleto"> Profesional incompleto
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Profesional completo' ? 'checked' : ''}} name="p5" value="Profesional completo"> Profesional completo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Carrera militar / policía' ? 'checked' : ''}} name="p5" value="Carrera militar / policía"> Carrera militar / policía
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Post-grado incompleto' ? 'checked' : ''}} name="p5" value="Post-grado incompleto"> Post-grado incompleto
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p5') == 'Post-grado completo' ? 'checked' : ''}} name="p5" value="Post-grado completo"> Post-grado completo
							</label>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label for="p6">6. ¿Cuál es su ocupación o profesión?</label>
						<input type="text" class="form-control" id="p6" name="p6" placeholder="Ocupación o prodesión" value="{{old('p6')}}">
					</div>

					<br>

					<div class="form-group">
						<label>7. Lugar de residencia actual:</label>
					</div>

					<div class="form-group col-xs-12">
						<label class="col-xs-3" for="p7">Ciudad / Municipio</label>

						<div class="col-xs-9">
							<input type="text" class="form-control" id="p7" name="p7" placeholder="Ciudad / Municipio" value="{{old('p7')}}">
						</div>
					</div>

					<div class="form-group col-xs-12">
						<label class="col-xs-3" for="p8">Departamento</label>

						<div class="col-xs-9">
							<input type="text" class="form-control" id="p8" name="p8" placeholder="Departamento" value="{{old('p8')}}">
						</div>
					</div>

					<br>

					<div class="form-group">
						<label>8. Seleccione y marque el estrato de los servicios públicos de su vivienda</label>
						<div class="radio">
							<label>
								<input type="radio" {{old('p9') == '1' ? 'checked' : ''}} name="p9" value="1"> 1
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p9') == '2' ? 'checked' : ''}} name="p9" value="2"> 2
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p9') == '3' ? 'checked' : ''}} name="p9" value="3"> 3
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p9') == '4' ? 'checked' : ''}} name="p9" value="4"> 4
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p9') == '5' ? 'checked' : ''}} name="p9" value="5"> 5
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p9') == '6' ? 'checked' : ''}} name="p9" value="6"> 6
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p9') == 'Finca' ? 'checked' : ''}} name="p9" value="Finca"> Finca
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p9') == 'No sé' ? 'checked' : ''}} name="p9" value="No sé"> No sé
							</label>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label>9. Tipo de vivienda</label>
						<div class="radio">
							<label>
								<input type="radio" {{old('p10') == 'Propia' ? 'checked' : ''}} name="p10" value="Propia"> Propia
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p10') == 'En arriendo' ? 'checked' : ''}} name="p10" value="En arriendo"> En arriendo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p10') == 'Familiar' ? 'checked' : ''}} name="p10" value="Familiar"> Familiar
							</label>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label for="p11">10. Número de personas que dependen económicamente de usted (aunque vivan en otro lugar)</label>
						<input type="number" class="form-control" id="p11" name="p11" placeholder="Número de personas que dependen económicamente de usted (aunque vivan en otro lugar)" value="{{old('p11')}}">
					</div>

					<br>

					<div class="form-group">
						<label>11. Lugar donde trabaja actualmente</label>
					</div>

					<div class="form-group col-xs-12">
						<label class="col-xs-3" for="p12">Ciudad / Municipio</label>

						<div class="col-xs-9">
							<input type="text" class="form-control" id="p12" name="p12" placeholder="Ciudad / Municipio" value="{{old('p12')}}">
						</div>
					</div>

					<div class="form-group col-xs-12">
						<label class="col-xs-3" for="p13">Departamento</label>

						<div class="col-xs-9">
							<input type="text" class="form-control" id="p13" name="p13" placeholder="Departamento" value="{{old('p13')}}">
						</div>
					</div>

					<br>

					<div class="form-group">
						<label>12. ¿Hace cuántos años que trabaja en esta empresa?</label>
					</div>

					<div class="form-group col-xs-12">
						<div class="checkbox col-xs-12">
							<label>
								<input type="checkbox" {{old('p14-1') == 'menos de un año' ? 'checked' : ''}} id="p14-1" name="p14-1" onchange="p141();" value="menos de un año"> Si lleva menos de un año marque esta opción
							</label>
						</div>
					</div>

					<div class="form-group col-xs-12">
						<div class="checkbox col-xs-4">
							<label>
								Si lleva más de un año anote cuántos años
							</label>
						</div>

						<div class="col-xs-8">
							<input type="number" class="form-control" id="p14-2" name="p14" placeholder="¿Hace cuántos años que trabaja en esta empresa?" oninput="p142();" value="{{old('p14')}}">
						</div>
					</div>

					<script type="text/javascript">
						function p141(){
							if(document.getElementById("p14-1").checked){
								document.getElementById("p14-2").value = "";
							}
						}
						function p142() {
							document.getElementById("p14-1").checked = false;
						}
					</script>

					<br>

					<div class="form-group">
						<label for="p15">13. ¿Cuál es el nombre del cargo que ocupa en la empresa?</label>
						<input type="text" class="form-control" id="p15" name="p15" placeholder="¿Cuál es el nombre del cargo que ocupa en la empresa?" value="{{old('p15')}}">
					</div>

					<br>

					<div class="form-group">
						<label>14. Seleccione el tipo de cargo que más se parece al que sted desempeña y señale la opción correspondiente.</label>
						<div class="radio">
							<label>
								<input type="radio" {{old('p16') == 'Jefatura - tiene personal a cargo' ? 'checked' : ''}} name="p16" value="Jefatura - tiene personal a cargo"> Jefatura - tiene personal a cargo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p16') == 'Profesional, analista, técnico, tecnólogo' ? 'checked' : ''}} name="p16" value="Profesional, analista, técnico, tecnólogo"> Profesional, analista, técnico, tecnólogo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p16') == 'Auxiliar, asistente administrativo, asistente técnico' ? 'checked' : ''}} name="p16" value="Auxiliar, asistente administrativo, asistente técnico"> Auxiliar, asistente administrativo, asistente técnico
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p16') == 'Operario, operador, ayudante, servicios generales' ? 'checked' : ''}} name="p16" value="Operario, operador, ayudante, servicios generales"> Operario, operador, ayudante, servicios generales
							</label>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label>15. ¿Hace cuántos años que desempeña el cargo u oficio actual en esta empresa?</label>
					</div>

					<div class="form-group col-xs-12">
						<div class="checkbox col-xs-12">
							<label>
								<input type="checkbox" {{old('p17-1') == 'menos de un año' ? 'checked' : ''}} id="p17-1" name="p17-1" onchange="p171();" value="menos de un año"> Si lleva menos de un año marque esta opción
							</label>
						</div>
					</div>

					<div class="form-group col-xs-12">
						<div class="checkbox col-xs-4">
							<label>
								Si lleva más de un año anote cuántos años
							</label>
						</div>

						<div class="col-xs-8">
							<input type="number" class="form-control" id="p17-2" name="p17" placeholder="¿Hace cuántos años que desempeña el cargo u oficio actual en esta empresa?" oninput="p172();" value="{{old('p17')}}">
						</div>
					</div>

					<script type="text/javascript">
						function p171(){
							if(document.getElementById("p17-1").checked){
								document.getElementById("p17-2").value = "";
							}
						}
						function p172() {
							document.getElementById("p17-1").checked = false;
						}
					</script>

					<br>

					<div class="form-group">
						<label for="p18">16. Escriba el nombre del departamento, área o sección de la empresa en el que trabaja</label>
						<input type="text" class="form-control" id="p18" name="p18" placeholder="Departamento, área o sección de la empresa en el que trabaja" value="{{old('p18')}}">
					</div>

					<br>

					<div class="form-group">
						<label>17. Seleccione el tipo de contrato que tiene actualmente</label>
						<div class="radio">
							<label>
								<input type="radio" {{old('p19') == 'Temporal de menos de 1 año' ? 'checked' : ''}} name="p19" value="Temporal de menos de 1 año"> Temporal de menos de 1 año
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p19') == 'Temporal de 1 año o más' ? 'checked' : ''}} name="p19" value="Temporal de 1 año o más"> Temporal de 1 año o más
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p19') == 'Término indefinido' ? 'checked' : ''}} name="p19" value="Término indefinido"> Término indefinido
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p19') == 'Cooperado (cooperativa)' ? 'checked' : ''}} name="p19" value="Cooperado (cooperativa)"> Cooperado (cooperativa)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p19') == 'Prestación de servicios' ? 'checked' : ''}} name="p19" value="Prestación de servicios"> Prestación de servicios
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p19') == 'No sé' ? 'checked' : ''}} name="p19" value="No sé"> No sé
							</label>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label for="p20">18. Indique cuantas horas diarias de trabajo están establecidas habitualmnte por la empresa para su cargo</label>
						<input type="number" class="form-control" id="p20" name="p20" placeholder="Horas de trabajo al día" value="{{old('p20')}}">
					</div>

					<br>

					<div class="form-group">
						<label>19. Seleccione y marque el tipo de salario que recibe</label>
						<div class="radio">
							<label>
								<input type="radio" {{old('p21') == 'Fijo (diario, semanal, quincenal o mensual)' ? 'checked' : ''}} name="p21" value="Fijo (diario, semanal, quincenal o mensual)"> Fijo (diario, semanal, quincenal o mensual)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p21') == 'Una parte fija y otra variable' ? 'checked' : ''}} name="p21" value="Una parte fija y otra variable"> Una parte fija y otra variable
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" {{old('p21') == 'Todo variable (a destajo, por producción, por comisión)' ? 'checked' : ''}} name="p21" value="Todo variable (a destajo, por producción, por comisión)"> Todo variable (a destajo, por producción, por comisión)
							</label>
						</div>
					</div>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('fdg.update', [$user->id, $fdg, 'S1'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('fdg.update', [$user->id, $fdg, 'S1s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif

		<div class="box box-primary">
			<div class="box-body">
				<div class="form-group {{$errors->has('cedula') ? 'has-error' : ''}}">
					<label for="inputCedula">Cedula</label>

					<input name="cedula"
					type="number"
					class="form-control"
					id="inputCedula"
					placeholder="Cédula"
					value="{{old('cedula', $fdg->cedula)}}"
					readonly="true">
					{!!$errors->first('cedula', '<span class="help-block">:message</span>')!!}
				</div>

				<div class="form-group {{$errors->has('fecha_cuestionario') ? 'has-error' : ''}}">
					<label for="datepicker">Fecha de la Encuesta:</label>

					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input name="fecha_cuestionario"
						type="text"
						class="form-control pull-right"
						id="datepicker"
						value="{{old('fecha_cuestionario', $fdg->fecha_cuestionario ? $fdg->fecha_cuestionario->format('m/d/Y') : null)}}"
						readonly="true">
					</div>
					{!!$errors->first('fecha_cuestionario', '<span class="help-block">:message</span>')!!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@push('styles')

<link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

@endpush

@push('scripts')

<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script>
	$('#datepicker').datepicker({
		autoclose: true
	})
</script>

@endpush