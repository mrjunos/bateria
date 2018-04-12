@extends('layout')

@section('header')

<h1>
	Encuestas
	<small>Nueva</small>
</h1>
<ol class="breadcrumb">
	<li><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
	<li><a href="{{route('frpifa.index')}}"><i class="fa fa-list"></i> Encuestas</a></li>
	<li class="active">Nueva</li>
</ol>

@stop

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="box box-primary">
			<form role="form" method="POST" action="{{route('frpifa.update', $encuesta)}}">
				@csrf {{method_field('PUT')}}
				<div class="box-body">

					<input type="hidden" name="user" value="{{auth()->user()->id}}">

					<div class="form-group {{$errors->has('cedula') ? 'has-error' : ''}}">
						<label for="inputCedula">Cedula</label>
						<input name="cedula"
						type="number"
						class="form-control"
						id="inputCedula"
						placeholder="Cédula"
						value="{{old('cedula', $encuesta->cedula)}}">
						{!!$errors->first('cedula', '<span class="help-block">:message</span>')!!}
					</div>

					<div class="form-group {{$errors->has('nombre') ? 'has-error' : ''}}">
						<label for="inputName">Nombre</label>
						<input name="nombre"
						type="text"
						class="form-control"
						id="inputName"
						placeholder="Nombre"
						value="{{old('nombre', $encuesta->nombre)}}">
						{!!$errors->first('nombre', '<span class="help-block">:message</span>')!!}
					</div>

					<div class="form-group {{$errors->has('fecha_encuesta') ? 'has-error' : ''}}">
						<label>Fecha de la Encuesta:</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input name="fecha_encuesta"
							type="text"
							class="form-control pull-right"
							id="datepicker"
							value="{{old('fecha_encuesta', $encuesta->fecha_encuesta ? $encuesta->fecha_encuesta->format('m/d/Y') : null)}}">
						</div>
						{!!$errors->first('fecha_encuesta', '<span class="help-block">:message</span>')!!}
					</div>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS1', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con las condiciones ambientales del(los) sitio(s) o lugar(es) donde habitualmente realiza su trabajo.
					</h3>
				</div>
				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">1</td>
							<td>El ruido en el lugar donde trabajo es molesto</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA1" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA1" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA1" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA1" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA1" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">2</td>
							<td>En el lugar donde trabajo hace mucho frio</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA2" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA2" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA2" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA2" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA2" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">3</td>
							<td>En el lugar donde trabajo hace mucho calor</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA3" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA3" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA3" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA3" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA3" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">4</td>
							<td>El aire en el lugar donde trabajo es fresco y agradable</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA4" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA4" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA4" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA4" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA4" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">5</td>
							<td>La luz del sitio donde trabajo es agradable</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA5" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA5" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA5" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA5" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA5" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">6</td>
							<td>El espacio donde trabajo cómodo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA6" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA6" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA6" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA6" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA6" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">7</td>
							<td>En mi trabajo me preocupa estar expuesto a sustancias químicas que afecten mi salud</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA7" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA7" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA7" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA7" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA7" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">8</td>
							<td>Mi trabajo me exige hacer mucho esfuerzo físico</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA8" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA8" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA8" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA8" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA8" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">9</td>
							<td>Los equipos o herramientas con los que trabajo son cómodos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA9" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA9" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA9" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA9" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA9" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">10</td>
							<td>En mi trabajo me preocupa estar expuesto a microbios, animales o plantas que afecten mi salud</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA10" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA10" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA10" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA10" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA10" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">11</td>
							<td>Me preocupa accidentarme en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA11" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA11" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA11" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA11" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA11" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">12</td>
							<td>El lugar donde trabajo es limpio y ordenado</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA12" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA12" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA12" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA12" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA12" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS2', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Para responder a las siguientes preguntas piense en la cantidad de trabajo que usted tiene a cargo.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">13</td>
							<td>Por la cantidad de trabajo que tengo debo quedarme tiempo adicional</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA13" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA13" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA13" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA13" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA13" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">14</td>
							<td>Me alcanza el tiempo de trabajo para tener al día mis deberes</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA14" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA14" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA14" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA14" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA14" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">15</td>
							<td>Por la cantidad de trabajo que tengo debo trabajar sin parar</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA15" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA15" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA15" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA15" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA15" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS3', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con el esfuerzo mental que le exige su trabajo.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">16</td>
							<td>Mi trabajo me exige hacer mucho esfuerzo mental</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA16" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA16" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA16" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA16" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA16" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">17</td>
							<td>mi trabajo me exige estár muy concentrado</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA17" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA17" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA17" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA17" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA17" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">18</td>
							<td>Mi trabajo me exige memorizar mucha información</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA18" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA18" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA18" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA18" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA18" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">19</td>
							<td>En mi trabajo tengo que tomar decisiones difíciles muy rápido</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA19" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA19" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA19" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA19" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA19" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">20</td>
							<td>Mi trabajo me exige atender a muchos asuntos al mismo tiempo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA20" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA20" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA20" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA20" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA20" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">21</td>
							<td>Mi trabajo requiere que me fije en pequeños detalles</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA21" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA21" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA21" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA21" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA21" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS4', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con las responsabilidades y actividades que usted debe hacer en su trabajo
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">22</td>
							<td>En mi trabajo respondo por cosas de mucho valor</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA22" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA22" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA22" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA22" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA22" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">23</td>
							<td>En mi trabajo respondo por dinero de la empresa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA23" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA23" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA23" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA23" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA23" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">24</td>
							<td>Como parte de mis funciones debo responder por la seguridad de otros</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA24" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA24" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA24" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA24" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA24" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">25</td>
							<td>Respondo ante mi jefe por los resultados de toda mi área de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA25" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA25" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA25" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA25" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA25" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">26</td>
							<td>Mi trabajo me exige cuidar la salud de otras personas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA26" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA26" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA26" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA26" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA26" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">27</td>
							<td>En el trabajo me dan órdenes contradictorias</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA27" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA27" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA27" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA27" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA27" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">28</td>
							<td>En mi trabajo me piden hacer cosas innecesarias</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA28" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA28" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA28" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA28" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA28" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">29</td>
							<td>En mi trabajo se presentan situaciones en las que debo pasar por alto normas o procedimientos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA29" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA29" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA29" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA29" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA29" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">30</td>
							<td>En mi trabajo tengo que hacer cosas que se podrían hacer de una forma más práctica</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA30" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA30" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA30" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA30" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA30" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS5', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes pregunras están relacionadas con la jornada de trabajo.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">31</td>
							<td>Trabajo en horario de noche</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA31" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA31" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA31" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA31" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA31" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">32</td>
							<td>En mi trabajo es posible tomar pausas para descansar</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA32" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA32" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA32" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA32" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA32" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">33</td>
							<td>Mi trabajo me exige laborar en días de descanso, festivos o fines de semana</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA33" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA33" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA33" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA33" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA33" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">34</td>
							<td>En mi trabajo puedo tomar fines de semana o días de descanso al mes</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA34" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA34" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA34" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA34" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA34" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">35</td>
							<td>Cuando estoy en casa sigo pensando en el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA35" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA35" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA35" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA35" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA35" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">36</td>
							<td>Discuto con mi familia o amigos por causa de mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA36" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA36" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA36" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA36" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA36" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">37</td>
							<td>Debo atender asuntos de trabajo cuando estoy en casa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA37" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA37" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA37" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA37" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA37" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">38</td>
							<td>Por mi trabajo el tiempo que paso con mi familia y amigos es muy poco</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA38" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA38" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA38" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA38" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA38" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS6', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con las decisiones y el control que le permite su trabajo.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">39</td>
							<td>Mi trabajo me permite desarrollar mis habilidades</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA39" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA39" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA39" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA39" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA39" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">40</td>
							<td>Mi trabajo me permite aplicar mis conocimientos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA40" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA40" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA40" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA40" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA40" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">41</td>
							<td>Mi trabajo me permite aprender nuevas cosas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA41" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA41" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA41" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA41" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA41" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">42</td>
							<td>Me asignan el trabajo teniendo en cuenta mis capacidades</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA42" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA42" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA42" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA42" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA42" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">43</td>
							<td>Puedo tomar pausas cuando las necesite</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA43" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA43" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA43" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA43" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA43" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">44</td>
							<td>Puedo decidir cuanto trabajo hago en el día</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA44" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA44" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA44" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA44" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA44" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">45</td>
							<td>Puedo decidir la velocidad a la que trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA45" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA45" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA45" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA45" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA45" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">46</td>
							<td>Puedo cambiar el orden de las actividades en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA46" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA46" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA46" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA46" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA46" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">47</td>
							<td>Puedo parar un momento mi trabajo para atender algún asunto personal</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA47" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA47" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA47" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA47" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA47" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS7', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con cualquier tipo de cambio que ocurra en su trabajo.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">48</td>
							<td>Los cambios en mi trabajo han sido beneficiosos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA48" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA48" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA48" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA48" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA48" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">49</td>
							<td>Me explican claramente los cambios que ocurren en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA49" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA49" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA49" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA49" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA49" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">50</td>
							<td>Puedo dar sugerencias sobre los cambios que ocurren en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA50" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA50" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA50" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA50" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA50" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">51</td>
							<td>Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas y sugerencias</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA51" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA51" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA51" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA51" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA51" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">52</td>
							<td>Los cambios que se presentan en mi trabajo dificultan mi labor</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA52" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA52" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA52" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA52" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA52" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS8', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con la información que la empresa le ha dado sobre su trabajo.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">53</td>
							<td>Me informan con claridad cuáles son mis funciones</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA53" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA53" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA53" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA53" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA53" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">54</td>
							<td>Me informas cuáles son las decisiones que puedo tomar en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA54" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA54" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA54" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA54" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA54" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">55</td>
							<td>Me explican claramente los resultados que debo lograr en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA55" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA55" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA55" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA55" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA55" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">56</td>
							<td>Me explican claramente el efecto de mi trabajo en la empresa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA56" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA56" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA56" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA56" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA56" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">57</td>
							<td>Me explican claramente los objetivos de mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA57" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA57" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA57" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA57" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA57" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">58</td>
							<td>Me informan claramente quien me puede orientar para hacer mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA58" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA58" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA58" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA58" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA58" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">59</td>
							<td>Me informan claramente con quien puedo resolver los asuntos del trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA59" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA59" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA59" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA59" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA59" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS9', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con la formación y capacitación que la empresa le facilita para hacer su trabajo.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">60</td>
							<td>La empresa me permite asistir a capacitaciones relacionadas con mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA60" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA60" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA60" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA60" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA60" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">61</td>
							<td>Recibo capacitación útil para hacer mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA61" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA61" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA61" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA61" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA61" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">62</td>
							<td>Recibo capacitación que me ayuda a hacer mejor mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA62" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA62" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA62" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA62" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA62" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS10', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con el o los jefes con quien tenga más contacto.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">63</td>
							<td>Mi jefe me da instrucciones claras</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA63" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA63" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA63" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA63" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA63" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">64</td>
							<td>Mi jefe ayuda a organizar mejor el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA64" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA64" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA64" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA64" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA64" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">65</td>
							<td>Mi jefe tiene en cuenta mis puntos de vista y opiniones</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA65" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA65" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA65" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA65" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA65" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">66</td>
							<td>Mi jefe me anima para hacer mejor mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA66" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA66" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA66" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA66" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA66" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">67</td>
							<td>Mi jefe distribuye las tareas de forma que me facilita el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA67" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA67" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA67" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA67" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA67" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">68</td>
							<td>Mi jefe me comunica a tiempo la información relacionada con el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA68" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA68" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA68" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA68" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA68" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">69</td>
							<td>La orientación que me da mi jefe me ayuda a hacer mejor el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA69" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA69" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA69" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA69" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA69" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">70</td>
							<td>Mi jefe me ayuda a progresar en el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA70" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA70" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA70" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA70" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA70" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">71</td>
							<td>Mi jefe me ayuda a sentirme bien en el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA71" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA71" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA71" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA71" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA71" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">72</td>
							<td>Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA72" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA72" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA72" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA72" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA72" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">73</td>
							<td>Siento que puedo confiar en mi jefe</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA73" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA73" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA73" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA73" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA73" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">74</td>
							<td>Mi jefe me escucha cuando tengo problemas de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA74" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA74" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA74" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA74" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA74" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">75</td>
							<td>Mi jefe me brinda su apoyo cuando lo necesito</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA75" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA75" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA75" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA75" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA75" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS11', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas indagan sobre las relaciones con otras personas y el apoyo entre las personas de su trabajo.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">76</td>
							<td>Me agrada el ambiente de mi grupo de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA76" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA76" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA76" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA76" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA76" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">77</td>
							<td>En mi grupo de trabajo me tratan de forma respetuosa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA77" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA77" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA77" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA77" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA77" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">78</td>
							<td>Siento que puedo confiar en mis compañeros de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA78" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA78" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA78" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA78" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA78" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">79</td>
							<td>Me siento a gusto con mis compañeros de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA79" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA79" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA79" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA79" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA79" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">80</td>
							<td>En mi grupo de trabajo algunas personas me maltratan</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA80" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA80" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA80" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA80" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA80" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">81</td>
							<td>Entre compañeros solucionamos los problemas de forma respetuosa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA81" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA81" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA81" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA81" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA81" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">82</td>
							<td>Hay integración en mi grupo de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA82" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA82" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA82" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA82" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA82" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">83</td>
							<td>Mi grupo de trabajo es muy unido</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA83" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA83" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA83" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA83" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA83" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">84</td>
							<td>Las personas en mi trabajo me hacen sentir parte del grupo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA84" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA84" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA84" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA84" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA84" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">85</td>
							<td>Cuando tenemos que realizar trabajo de grupo los compañeros colaboran</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA85" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA85" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA85" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA85" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA85" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">86</td>
							<td>Es fácil poner de acuerdo al grupo para hacer el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA86" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA86" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA86" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA86" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA86" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">87</td>
							<td>Mis compañeros de trabajo me ayudan cuando tengo dificultades</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA87" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA87" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA87" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA87" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA87" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">88</td>
							<td>En mi trabajo las personas nos apoyamos unos a otros</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA88" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA88" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA88" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA88" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA88" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">89</td>
							<td>Algunos compañeros de trabajo me escuchan cuando tengo problemas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA89" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA89" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA89" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA89" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA89" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS12', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas indagan sobre las relaciones con otras personas y el apoyo entre las personas de su trabajo.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">90</td>
							<td>Me informan sobre lo que hago bien en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA90" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA90" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA90" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA90" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA90" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">91</td>
							<td>Me informan sobre lo que debo mejorar en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA91" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA91" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA91" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA91" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA91" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">92</td>
							<td>La informaión que recibo sobre mi rendimiento en el trabajo es clara</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA92" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA92" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA92" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA92" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA92" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">93</td>
							<td>La forma como evalúan mi trabajo en la empresa me ayuda a mejorar</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA93" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA93" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA93" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA93" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA93" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">94</td>
							<td>Me informan a tiempo sobre lo que debo mejorar en el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA94" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA94" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA94" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA94" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA94" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS13', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con la satisfacción, reconocimiento y la seguridad que le ofrece su trabajo.
					</h3>
				</div>

				<div class="box-body">

					<table class="table table-bordered">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">95</td>
							<td>En la empresa confían en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA95" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA95" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA95" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA95" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA95" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">96</td>
							<td>En la empresan me pagan a tiempo mi salario</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA96" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA96" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA96" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA96" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA96" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">97</td>
							<td>El pago que recibo es el que me ofreció la empresa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA97" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA97" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA97" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA97" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA97" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">98</td>
							<td>El pago que recibo es el que merezco por el trabajo que realizo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA98" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA98" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA98" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA98" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA98" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">99</td>
							<td>En mi trabajo tengo posibilidades de progresar</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA99" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA99" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA99" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA99" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA99" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">100</td>
							<td>Las personas que hacen bien el trabajo pueden progresar en la empresa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA100" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA100" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA100" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA100" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA100" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">101</td>
							<td>La empresa se preocupa por el bienestar de los trabajadores</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA101" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA101" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA101" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA101" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA101" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">102</td>
							<td>Mi trabajo en la empresa es estable</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA102" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA102" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA102" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA102" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA102" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">103</td>
							<td>El trabajo que hago me hace sentir bien</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA103" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA103" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA103" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA103" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA103" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">104</td>
							<td>Siento orgullo de trabajar en esta empresa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA104" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA104" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA104" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA104" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA104" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">105</td>
							<td>Hablo bien de la empresa con otras personas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA105" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA105" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA105" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA105" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA105" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS14', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con la atención al cliente y usuarios.
					</h3>
				</div>

				<div class="box-body">

					<p>Soy jefe de otras personas en mi trabajo:</p>
					<table class="table table-bordered flex-row" style="width: 100px;">
						<tr>
							<td style="width: 50%; text-align: center">
								SI
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;" onclick="FRPIFAv1(true);">
									<input type="radio" name="FRPIFAv1" value="SI" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="width: 50%; text-align: center">
								NO
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;" onclick="FRPIFAv1(false);">
									<input type="radio" name="FRPIFAv1" value="NO" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

					<script type="text/javascript">
						function FRPIFAv1(b){
							if(b){
								document.getElementById("FRPIFAv1").style.display = "inline-table";
							}else{
								document.getElementById("FRPIFAv1").style.display = "none";
							}
						}
					</script>

					<hr>

					<table class="table table-bordered" id="FRPIFAv1" style="display: none;">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">106</td>
							<td>Atiendo clientes o usuarios muy enojados</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA106" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA106" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA106" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA106" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA106" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">107</td>
							<td>Atiendo clientes o usuarios muy preocupados</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA107" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA107" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA107" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA107" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA107" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">108</td>
							<td>Atiendo clientes o usuarios muy tristes</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA108" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA108" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA108" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA108" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA108" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">109</td>
							<td>Mi trabajo me exige atender personas muy enfermas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA109" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA109" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA109" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA109" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA109" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">110</td>
							<td>Mi trabajo me exige atender personas muy necesitadas de ayuda</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA110" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA110" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA110" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA110" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA110" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">111</td>
							<td>Atiendo clientes o usuarios que me maltratan</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA111" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA111" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA111" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA111" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA111" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">112</td>
							<td>Para hacer mi trabajo debo demostrar sentimientos distintos a los míos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA112" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA112" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA112" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA112" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA112" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">113</td>
							<td>Mi trabajo me exige atender situaciones de violencia</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA113" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA113" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA113" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA113" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA113" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">114</td>
							<td>Mi trabajo me exige atender situaciones muy tristes o dolorosas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA114" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA114" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA114" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA114" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA114" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>
				</div>

				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<form method="POST" action="{{route('frpifa.updateS15', $encuesta)}}">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con las personas que usted supervisa o dirige.
					</h3>
				</div>

				<div class="box-body">
					<p>Soy jefe de otras personas en mi trabajo:</p>
					<table class="table table-bordered flex-row" style="width: 100px;">
						<tr>
							<td style="width: 50%; text-align: center">
								SI
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;" onclick="FRPIFAv2(true);">
									<input type="radio" name="FRPIFAv2" value="SI" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="width: 50%; text-align: center">
								NO
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;" onclick="FRPIFAv2(false);">
									<input type="radio" name="FRPIFAv2" value="NO" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

					<script type="text/javascript">
						function FRPIFAv2(b){
							if(b){
								document.getElementById("FRPIFAv2").style.display = "inline-table";
							}else{
								document.getElementById("FRPIFAv2").style.display = "none";
							}
						}
					</script>

					<hr>

					<table class="table table-bordered" id="FRPIFAv2" style="display: none;">
						<tr>
							<th style="width: 3%"></th>
							<th></th>
							<th style="width: 7%; text-align: center;">Siempre</th>
							<th style="width: 7%; text-align: center;">Casi Siempre</th>
							<th style="width: 7%; text-align: center;">Algunas veces</th>
							<th style="width: 7%; text-align: center;">Casi nunca</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">115</td>
							<td>Tengo colaboradores que comunican tarde los asuntos de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA115" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA115" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA115" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA115" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA115" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">116</td>
							<td>Tengo colaboradores que tienen comportamientos irrespetuosos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA116" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA116" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA116" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA116" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA116" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">117</td>
							<td>Tengo colaboradores que dificultan la organización del trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA117" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA117" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA117" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA117" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA117" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">118</td>
							<td>Tengo colaboradores que guardan silencio cuando les piden opiniones</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA118" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA118" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA118" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA118" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA118" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">119</td>
							<td>Tengo colaboradores que dificultan el logro de los resultados del trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA119" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA119" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA119" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA119" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA119" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">120</td>
							<td>Tengo colaboradores que expresan de forma irrespetuosa sus desacuerdos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA120" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA120" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA120" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA120" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA120" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">121</td>
							<td>Tengo colaboradores que cooperan poco cuando se necesita</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA121" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA121" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA121" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA121" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA121" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">122</td>
							<td>Tengo colaboradores que me preocupan por su desempeño</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA122" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA122" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA122" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA122" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA122" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">123</td>
							<td>Tengo colaboradores que ignoran las sugerencias para mejorar su trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA123" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA123" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA123" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA123" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" name="FRPIFA123" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
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