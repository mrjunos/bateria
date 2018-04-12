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
						Las siguientes preguntas están relacionadas con las condiciones ambientales del(los) sitio(s) o lugar(es) donde habitualmente realiza su trabajo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif

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
									<input type="radio" {{old('p1') == '4' ? 'checked' : ''}} name="p1" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '3' ? 'checked' : ''}} name="p1" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '2' ? 'checked' : ''}} name="p1" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '1' ? 'checked' : ''}} name="p1" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '0' ? 'checked' : ''}} name="p1" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">2</td>
							<td>En el lugar donde trabajo hace mucho frio</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p2') == '4' ? 'checked' : ''}} name="p2" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p2') == '3' ? 'checked' : ''}} name="p2" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p2') == '2' ? 'checked' : ''}} name="p2" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p2') == '1' ? 'checked' : ''}} name="p2" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p2') == '0' ? 'checked' : ''}} name="p2" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">3</td>
							<td>En el lugar donde trabajo hace mucho calor</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p3') == '4' ? 'checked' : ''}} name="p3" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p3') == '3' ? 'checked' : ''}} name="p3" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p3') == '2' ? 'checked' : ''}} name="p3" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p3') == '1' ? 'checked' : ''}} name="p3" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p3') == '0' ? 'checked' : ''}} name="p3" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">4</td>
							<td>El aire en el lugar donde trabajo es fresco y agradable</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p4') == '0' ? 'checked' : ''}} name="p4" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p4') == '1' ? 'checked' : ''}} name="p4" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p4') == '2' ? 'checked' : ''}} name="p4" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p4') == '3' ? 'checked' : ''}} name="p4" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p4') == '4' ? 'checked' : ''}} name="p4" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">5</td>
							<td>La luz del sitio donde trabajo es agradable</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p5') == '0' ? 'checked' : ''}} name="p5" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p5') == '1' ? 'checked' : ''}} name="p5" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p5') == '2' ? 'checked' : ''}} name="p5" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p5') == '3' ? 'checked' : ''}} name="p5" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p5') == '4' ? 'checked' : ''}} name="p5" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">6</td>
							<td>El espacio donde trabajo cómodo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '0' ? 'checked' : ''}} name="p6" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '1' ? 'checked' : ''}} name="p6" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '2' ? 'checked' : ''}} name="p6" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '3' ? 'checked' : ''}} name="p6" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '4' ? 'checked' : ''}} name="p6" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">7</td>
							<td>En mi trabajo me preocupa estar expuesto a sustancias químicas que afecten mi salud</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p7') == '4' ? 'checked' : ''}} name="p7" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p7') == '3' ? 'checked' : ''}} name="p7" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p7') == '2' ? 'checked' : ''}} name="p7" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p7') == '1' ? 'checked' : ''}} name="p7" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p7') == '0' ? 'checked' : ''}} name="p7" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">8</td>
							<td>Mi trabajo me exige hacer mucho esfuerzo físico</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p8') == '4' ? 'checked' : ''}} name="p8" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p8') == '3' ? 'checked' : ''}} name="p8" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p8') == '2' ? 'checked' : ''}} name="p8" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p8') == '1' ? 'checked' : ''}} name="p8" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p8') == '0' ? 'checked' : ''}} name="p8" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">9</td>
							<td>Los equipos o herramientas con los que trabajo son cómodos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p9') == '0' ? 'checked' : ''}} name="p9" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p9') == '1' ? 'checked' : ''}} name="p9" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p9') == '2' ? 'checked' : ''}} name="p9" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p9') == '3' ? 'checked' : ''}} name="p9" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p9') == '4' ? 'checked' : ''}} name="p9" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">10</td>
							<td>En mi trabajo me preocupa estar expuesto a microbios, animales o plantas que afecten mi salud</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '4' ? 'checked' : ''}} name="p10" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '3' ? 'checked' : ''}} name="p10" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '2' ? 'checked' : ''}} name="p10" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '1' ? 'checked' : ''}} name="p10" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '0' ? 'checked' : ''}} name="p10" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">11</td>
							<td>Me preocupa accidentarme en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '4' ? 'checked' : ''}} name="p11" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '3' ? 'checked' : ''}} name="p11" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '2' ? 'checked' : ''}} name="p11" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '1' ? 'checked' : ''}} name="p11" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '0' ? 'checked' : ''}} name="p11" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">12</td>
							<td>El lugar donde trabajo es limpio y ordenado</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p12') == '0' ? 'checked' : ''}} name="p12" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p12') == '1' ? 'checked' : ''}} name="p12" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p12') == '2' ? 'checked' : ''}} name="p12" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p12') == '3' ? 'checked' : ''}} name="p12" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p12') == '4' ? 'checked' : ''}} name="p12" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S1'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S1s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's2')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Para responder a las siguientes preguntas piense en la cantidad de trabajo que usted tiene a cargo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p13') == '4' ? 'checked' : ''}} name="p13" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '3' ? 'checked' : ''}} name="p13" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '2' ? 'checked' : ''}} name="p13" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '1' ? 'checked' : ''}} name="p13" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '0' ? 'checked' : ''}} name="p13" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">14</td>
							<td>Me alcanza el tiempo de trabajo para tener al día mis deberes</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p14') == '0' ? 'checked' : ''}} name="p14" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p14') == '1' ? 'checked' : ''}} name="p14" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p14') == '2' ? 'checked' : ''}} name="p14" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p14') == '3' ? 'checked' : ''}} name="p14" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p14') == '4' ? 'checked' : ''}} name="p14" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">15</td>
							<td>Por la cantidad de trabajo que tengo debo trabajar sin parar</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '4' ? 'checked' : ''}} name="p15" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '3' ? 'checked' : ''}} name="p15" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '2' ? 'checked' : ''}} name="p15" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '1' ? 'checked' : ''}} name="p15" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '0' ? 'checked' : ''}} name="p15" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S2'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S2s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's3')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con el esfuerzo mental que le exige su trabajo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p16') == '4' ? 'checked' : ''}} name="p16" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '3' ? 'checked' : ''}} name="p16" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '2' ? 'checked' : ''}} name="p16" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '1' ? 'checked' : ''}} name="p16" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '0' ? 'checked' : ''}} name="p16" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">17</td>
							<td>mi trabajo me exige estár muy concentrado</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '4' ? 'checked' : ''}} name="p17" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '3' ? 'checked' : ''}} name="p17" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '2' ? 'checked' : ''}} name="p17" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '1' ? 'checked' : ''}} name="p17" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '0' ? 'checked' : ''}} name="p17" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">18</td>
							<td>Mi trabajo me exige memorizar mucha información</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '4' ? 'checked' : ''}} name="p18" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '3' ? 'checked' : ''}} name="p18" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '2' ? 'checked' : ''}} name="p18" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '1' ? 'checked' : ''}} name="p18" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '0' ? 'checked' : ''}} name="p18" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">19</td>
							<td>En mi trabajo tengo que tomar decisiones difíciles muy rápido</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '4' ? 'checked' : ''}} name="p19" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '3' ? 'checked' : ''}} name="p19" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '2' ? 'checked' : ''}} name="p19" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '1' ? 'checked' : ''}} name="p19" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '0' ? 'checked' : ''}} name="p19" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">20</td>
							<td>Mi trabajo me exige atender a muchos asuntos al mismo tiempo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p20') == '4' ? 'checked' : ''}} name="p20" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p20') == '3' ? 'checked' : ''}} name="p20" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p20') == '2' ? 'checked' : ''}} name="p20" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p20') == '1' ? 'checked' : ''}} name="p20" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p20') == '0' ? 'checked' : ''}} name="p20" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">21</td>
							<td>Mi trabajo requiere que me fije en pequeños detalles</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p21') == '4' ? 'checked' : ''}} name="p21" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p21') == '3' ? 'checked' : ''}} name="p21" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p21') == '2' ? 'checked' : ''}} name="p21" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p21') == '1' ? 'checked' : ''}} name="p21" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p21') == '0' ? 'checked' : ''}} name="p21" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S3'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S3s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's4')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con las responsabilidades y actividades que usted debe hacer en su trabajo
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p22') == '4' ? 'checked' : ''}} name="p22" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p22') == '3' ? 'checked' : ''}} name="p22" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p22') == '2' ? 'checked' : ''}} name="p22" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p22') == '1' ? 'checked' : ''}} name="p22" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p22') == '0' ? 'checked' : ''}} name="p22" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">23</td>
							<td>En mi trabajo respondo por dinero de la empresa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '4' ? 'checked' : ''}} name="p23" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '3' ? 'checked' : ''}} name="p23" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '2' ? 'checked' : ''}} name="p23" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '1' ? 'checked' : ''}} name="p23" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '0' ? 'checked' : ''}} name="p23" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">24</td>
							<td>Como parte de mis funciones debo responder por la seguridad de otros</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p24') == '4' ? 'checked' : ''}} name="p24" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p24') == '3' ? 'checked' : ''}} name="p24" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p24') == '2' ? 'checked' : ''}} name="p24" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p24') == '1' ? 'checked' : ''}} name="p24" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p24') == '0' ? 'checked' : ''}} name="p24" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">25</td>
							<td>Respondo ante mi jefe por los resultados de toda mi área de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '4' ? 'checked' : ''}} name="p25" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '3' ? 'checked' : ''}} name="p25" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '2' ? 'checked' : ''}} name="p25" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '1' ? 'checked' : ''}} name="p25" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '0' ? 'checked' : ''}} name="p25" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">26</td>
							<td>Mi trabajo me exige cuidar la salud de otras personas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p26') == '4' ? 'checked' : ''}} name="p26" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p26') == '3' ? 'checked' : ''}} name="p26" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p26') == '2' ? 'checked' : ''}} name="p26" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p26') == '1' ? 'checked' : ''}} name="p26" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p26') == '0' ? 'checked' : ''}} name="p26" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">27</td>
							<td>En el trabajo me dan órdenes contradictorias</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '4' ? 'checked' : ''}} name="p27" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '3' ? 'checked' : ''}} name="p27" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '2' ? 'checked' : ''}} name="p27" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '1' ? 'checked' : ''}} name="p27" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '0' ? 'checked' : ''}} name="p27" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">28</td>
							<td>En mi trabajo me piden hacer cosas innecesarias</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p28') == '4' ? 'checked' : ''}} name="p28" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p28') == '3' ? 'checked' : ''}} name="p28" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p28') == '2' ? 'checked' : ''}} name="p28" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p28') == '1' ? 'checked' : ''}} name="p28" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p28') == '0' ? 'checked' : ''}} name="p28" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">29</td>
							<td>En mi trabajo se presentan situaciones en las que debo pasar por alto normas o procedimientos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p29') == '4' ? 'checked' : ''}} name="p29" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p29') == '3' ? 'checked' : ''}} name="p29" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p29') == '2' ? 'checked' : ''}} name="p29" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p29') == '1' ? 'checked' : ''}} name="p29" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p29') == '0' ? 'checked' : ''}} name="p29" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">30</td>
							<td>En mi trabajo tengo que hacer cosas que se podrían hacer de una forma más práctica</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p30') == '4' ? 'checked' : ''}} name="p30" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p30') == '3' ? 'checked' : ''}} name="p30" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p30') == '2' ? 'checked' : ''}} name="p30" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p30') == '1' ? 'checked' : ''}} name="p30" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p30') == '0' ? 'checked' : ''}} name="p30" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S4'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S4s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's5')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes pregunras están relacionadas con la jornada de trabajo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p31') == '4' ? 'checked' : ''}} name="p31" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p31') == '3' ? 'checked' : ''}} name="p31" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p31') == '2' ? 'checked' : ''}} name="p31" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p31') == '1' ? 'checked' : ''}} name="p31" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p31') == '0' ? 'checked' : ''}} name="p31" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">32</td>
							<td>En mi trabajo es posible tomar pausas para descansar</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p32') == '0' ? 'checked' : ''}} name="p32" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p32') == '1' ? 'checked' : ''}} name="p32" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p32') == '2' ? 'checked' : ''}} name="p32" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p32') == '3' ? 'checked' : ''}} name="p32" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p32') == '4' ? 'checked' : ''}} name="p32" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">33</td>
							<td>Mi trabajo me exige laborar en días de descanso, festivos o fines de semana</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p33') == '4' ? 'checked' : ''}} name="p33" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p33') == '3' ? 'checked' : ''}} name="p33" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p33') == '2' ? 'checked' : ''}} name="p33" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p33') == '1' ? 'checked' : ''}} name="p33" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p33') == '0' ? 'checked' : ''}} name="p33" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">34</td>
							<td>En mi trabajo puedo tomar fines de semana o días de descanso al mes</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p34') == '0' ? 'checked' : ''}} name="p34" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p34') == '1' ? 'checked' : ''}} name="p34" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p34') == '2' ? 'checked' : ''}} name="p34" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p34') == '3' ? 'checked' : ''}} name="p34" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p34') == '4' ? 'checked' : ''}} name="p34" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">35</td>
							<td>Cuando estoy en casa sigo pensando en el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p35') == '4' ? 'checked' : ''}} name="p35" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p35') == '3' ? 'checked' : ''}} name="p35" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p35') == '2' ? 'checked' : ''}} name="p35" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p35') == '1' ? 'checked' : ''}} name="p35" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p35') == '0' ? 'checked' : ''}} name="p35" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">36</td>
							<td>Discuto con mi familia o amigos por causa de mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p36') == '4' ? 'checked' : ''}} name="p36" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p36') == '3' ? 'checked' : ''}} name="p36" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p36') == '2' ? 'checked' : ''}} name="p36" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p36') == '1' ? 'checked' : ''}} name="p36" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p36') == '0' ? 'checked' : ''}} name="p36" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">37</td>
							<td>Debo atender asuntos de trabajo cuando estoy en casa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p37') == '4' ? 'checked' : ''}} name="p37" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p37') == '3' ? 'checked' : ''}} name="p37" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p37') == '2' ? 'checked' : ''}} name="p37" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p37') == '1' ? 'checked' : ''}} name="p37" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p37') == '0' ? 'checked' : ''}} name="p37" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">38</td>
							<td>Por mi trabajo el tiempo que paso con mi familia y amigos es muy poco</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p38') == '4' ? 'checked' : ''}} name="p38" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p38') == '3' ? 'checked' : ''}} name="p38" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p38') == '2' ? 'checked' : ''}} name="p38" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p38') == '1' ? 'checked' : ''}} name="p38" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p38') == '0' ? 'checked' : ''}} name="p38" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S5'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S5s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's6')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con las decisiones y el control que le permite su trabajo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p39') == '0' ? 'checked' : ''}} name="p39" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p39') == '1' ? 'checked' : ''}} name="p39" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p39') == '2' ? 'checked' : ''}} name="p39" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p39') == '3' ? 'checked' : ''}} name="p39" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p39') == '4' ? 'checked' : ''}} name="p39" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">40</td>
							<td>Mi trabajo me permite aplicar mis conocimientos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p40') == '0' ? 'checked' : ''}} name="p40" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p40') == '1' ? 'checked' : ''}} name="p40" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p40') == '2' ? 'checked' : ''}} name="p40" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p40') == '3' ? 'checked' : ''}} name="p40" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p40') == '4' ? 'checked' : ''}} name="p40" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">41</td>
							<td>Mi trabajo me permite aprender nuevas cosas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p41') == '0' ? 'checked' : ''}} name="p41" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p41') == '1' ? 'checked' : ''}} name="p41" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p41') == '2' ? 'checked' : ''}} name="p41" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p41') == '3' ? 'checked' : ''}} name="p41" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p41') == '4' ? 'checked' : ''}} name="p41" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">42</td>
							<td>Me asignan el trabajo teniendo en cuenta mis capacidades</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p42') == '0' ? 'checked' : ''}} name="p42" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p42') == '1' ? 'checked' : ''}} name="p42" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p42') == '2' ? 'checked' : ''}} name="p42" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p42') == '3' ? 'checked' : ''}} name="p42" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p42') == '4' ? 'checked' : ''}} name="p42" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">43</td>
							<td>Puedo tomar pausas cuando las necesite</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p43') == '0' ? 'checked' : ''}} name="p43" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p43') == '1' ? 'checked' : ''}} name="p43" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p43') == '2' ? 'checked' : ''}} name="p43" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p43') == '3' ? 'checked' : ''}} name="p43" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p43') == '4' ? 'checked' : ''}} name="p43" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">44</td>
							<td>Puedo decidir cuanto trabajo hago en el día</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p44') == '0' ? 'checked' : ''}} name="p44" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p44') == '1' ? 'checked' : ''}} name="p44" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p44') == '2' ? 'checked' : ''}} name="p44" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p44') == '3' ? 'checked' : ''}} name="p44" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p44') == '4' ? 'checked' : ''}} name="p44" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">45</td>
							<td>Puedo decidir la velocidad a la que trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p45') == '0' ? 'checked' : ''}} name="p45" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p45') == '1' ? 'checked' : ''}} name="p45" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p45') == '2' ? 'checked' : ''}} name="p45" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p45') == '3' ? 'checked' : ''}} name="p45" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p45') == '4' ? 'checked' : ''}} name="p45" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">46</td>
							<td>Puedo cambiar el orden de las actividades en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p46') == '0' ? 'checked' : ''}} name="p46" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p46') == '1' ? 'checked' : ''}} name="p46" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p46') == '2' ? 'checked' : ''}} name="p46" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p46') == '3' ? 'checked' : ''}} name="p46" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p46') == '4' ? 'checked' : ''}} name="p46" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">47</td>
							<td>Puedo parar un momento mi trabajo para atender algún asunto personal</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p47') == '0' ? 'checked' : ''}} name="p47" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p47') == '1' ? 'checked' : ''}} name="p47" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p47') == '2' ? 'checked' : ''}} name="p47" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p47') == '3' ? 'checked' : ''}} name="p47" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p47') == '4' ? 'checked' : ''}} name="p47" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S6'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S6s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's7')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con cualquier tipo de cambio que ocurra en su trabajo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p48') == '0' ? 'checked' : ''}} name="p48" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p48') == '1' ? 'checked' : ''}} name="p48" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p48') == '2' ? 'checked' : ''}} name="p48" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p48') == '3' ? 'checked' : ''}} name="p48" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p48') == '4' ? 'checked' : ''}} name="p48" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">49</td>
							<td>Me explican claramente los cambios que ocurren en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p49') == '0' ? 'checked' : ''}} name="p49" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p49') == '1' ? 'checked' : ''}} name="p49" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p49') == '2' ? 'checked' : ''}} name="p49" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p49') == '3' ? 'checked' : ''}} name="p49" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p49') == '4' ? 'checked' : ''}} name="p49" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">50</td>
							<td>Puedo dar sugerencias sobre los cambios que ocurren en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p50') == '0' ? 'checked' : ''}} name="p50" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p50') == '1' ? 'checked' : ''}} name="p50" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p50') == '2' ? 'checked' : ''}} name="p50" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p50') == '3' ? 'checked' : ''}} name="p50" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p50') == '4' ? 'checked' : ''}} name="p50" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">51</td>
							<td>Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas y sugerencias</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p51') == '0' ? 'checked' : ''}} name="p51" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p51') == '1' ? 'checked' : ''}} name="p51" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p51') == '2' ? 'checked' : ''}} name="p51" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p51') == '3' ? 'checked' : ''}} name="p51" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p51') == '4' ? 'checked' : ''}} name="p51" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">52</td>
							<td>Los cambios que se presentan en mi trabajo dificultan mi labor</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p52') == '4' ? 'checked' : ''}} name="p52" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p52') == '3' ? 'checked' : ''}} name="p52" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p52') == '2' ? 'checked' : ''}} name="p52" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p52') == '1' ? 'checked' : ''}} name="p52" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p52') == '0' ? 'checked' : ''}} name="p52" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S7'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S7s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's8')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con la información que la empresa le ha dado sobre su trabajo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p53') == '0' ? 'checked' : ''}} name="p53" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p53') == '1' ? 'checked' : ''}} name="p53" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p53') == '2' ? 'checked' : ''}} name="p53" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p53') == '3' ? 'checked' : ''}} name="p53" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p53') == '4' ? 'checked' : ''}} name="p53" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">54</td>
							<td>Me informas cuáles son las decisiones que puedo tomar en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p54') == '0' ? 'checked' : ''}} name="p54" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p54') == '1' ? 'checked' : ''}} name="p54" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p54') == '2' ? 'checked' : ''}} name="p54" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p54') == '3' ? 'checked' : ''}} name="p54" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p54') == '4' ? 'checked' : ''}} name="p54" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">55</td>
							<td>Me explican claramente los resultados que debo lograr en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p55') == '0' ? 'checked' : ''}} name="p55" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p55') == '1' ? 'checked' : ''}} name="p55" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p55') == '2' ? 'checked' : ''}} name="p55" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p55') == '3' ? 'checked' : ''}} name="p55" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p55') == '4' ? 'checked' : ''}} name="p55" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">56</td>
							<td>Me explican claramente el efecto de mi trabajo en la empresa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p56') == '0' ? 'checked' : ''}} name="p56" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p56') == '1' ? 'checked' : ''}} name="p56" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p56') == '2' ? 'checked' : ''}} name="p56" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p56') == '3' ? 'checked' : ''}} name="p56" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p56') == '4' ? 'checked' : ''}} name="p56" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">57</td>
							<td>Me explican claramente los objetivos de mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p57') == '0' ? 'checked' : ''}} name="p57" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p57') == '1' ? 'checked' : ''}} name="p57" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p57') == '2' ? 'checked' : ''}} name="p57" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p57') == '3' ? 'checked' : ''}} name="p57" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p57') == '4' ? 'checked' : ''}} name="p57" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">58</td>
							<td>Me informan claramente quien me puede orientar para hacer mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p58') == '0' ? 'checked' : ''}} name="p58" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p58') == '1' ? 'checked' : ''}} name="p58" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p58') == '2' ? 'checked' : ''}} name="p58" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p58') == '3' ? 'checked' : ''}} name="p58" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p58') == '4' ? 'checked' : ''}} name="p58" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">59</td>
							<td>Me informan claramente con quien puedo resolver los asuntos del trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p59') == '0' ? 'checked' : ''}} name="p59" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p59') == '1' ? 'checked' : ''}} name="p59" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p59') == '2' ? 'checked' : ''}} name="p59" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p59') == '3' ? 'checked' : ''}} name="p59" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p59') == '4' ? 'checked' : ''}} name="p59" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S8'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S8s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's9')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con la formación y capacitación que la empresa le facilita para hacer su trabajo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p60') == '0' ? 'checked' : ''}} name="p60" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p60') == '1' ? 'checked' : ''}} name="p60" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p60') == '2' ? 'checked' : ''}} name="p60" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p60') == '3' ? 'checked' : ''}} name="p60" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p60') == '4' ? 'checked' : ''}} name="p60" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">61</td>
							<td>Recibo capacitación útil para hacer mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p61') == '0' ? 'checked' : ''}} name="p61" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p61') == '1' ? 'checked' : ''}} name="p61" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p61') == '2' ? 'checked' : ''}} name="p61" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p61') == '3' ? 'checked' : ''}} name="p61" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p61') == '4' ? 'checked' : ''}} name="p61" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">62</td>
							<td>Recibo capacitación que me ayuda a hacer mejor mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p62') == '0' ? 'checked' : ''}} name="p62" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p62') == '1' ? 'checked' : ''}} name="p62" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p62') == '2' ? 'checked' : ''}} name="p62" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p62') == '3' ? 'checked' : ''}} name="p62" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p62') == '4' ? 'checked' : ''}} name="p62" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S9'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S9s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's10')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con el o los jefes con quien tenga más contacto.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p63') == '0' ? 'checked' : ''}} name="p63" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p63') == '1' ? 'checked' : ''}} name="p63" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p63') == '2' ? 'checked' : ''}} name="p63" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p63') == '3' ? 'checked' : ''}} name="p63" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p63') == '4' ? 'checked' : ''}} name="p63" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">64</td>
							<td>Mi jefe ayuda a organizar mejor el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p64') == '0' ? 'checked' : ''}} name="p64" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p64') == '1' ? 'checked' : ''}} name="p64" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p64') == '2' ? 'checked' : ''}} name="p64" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p64') == '3' ? 'checked' : ''}} name="p64" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p64') == '4' ? 'checked' : ''}} name="p64" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">65</td>
							<td>Mi jefe tiene en cuenta mis puntos de vista y opiniones</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p65') == '0' ? 'checked' : ''}} name="p65" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p65') == '1' ? 'checked' : ''}} name="p65" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p65') == '2' ? 'checked' : ''}} name="p65" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p65') == '3' ? 'checked' : ''}} name="p65" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p65') == '4' ? 'checked' : ''}} name="p65" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">66</td>
							<td>Mi jefe me anima para hacer mejor mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p66') == '0' ? 'checked' : ''}} name="p66" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p66') == '1' ? 'checked' : ''}} name="p66" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p66') == '2' ? 'checked' : ''}} name="p66" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p66') == '3' ? 'checked' : ''}} name="p66" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p66') == '4' ? 'checked' : ''}} name="p66" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">67</td>
							<td>Mi jefe distribuye las tareas de forma que me facilita el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p67') == '0' ? 'checked' : ''}} name="p67" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p67') == '1' ? 'checked' : ''}} name="p67" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p67') == '2' ? 'checked' : ''}} name="p67" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p67') == '3' ? 'checked' : ''}} name="p67" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p67') == '4' ? 'checked' : ''}} name="p67" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">68</td>
							<td>Mi jefe me comunica a tiempo la información relacionada con el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p68') == '0' ? 'checked' : ''}} name="p68" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p68') == '1' ? 'checked' : ''}} name="p68" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p68') == '2' ? 'checked' : ''}} name="p68" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p68') == '3' ? 'checked' : ''}} name="p68" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p68') == '4' ? 'checked' : ''}} name="p68" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">69</td>
							<td>La orientación que me da mi jefe me ayuda a hacer mejor el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p69') == '0' ? 'checked' : ''}} name="p69" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p69') == '1' ? 'checked' : ''}} name="p69" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p69') == '2' ? 'checked' : ''}} name="p69" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p69') == '3' ? 'checked' : ''}} name="p69" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p69') == '4' ? 'checked' : ''}} name="p69" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">70</td>
							<td>Mi jefe me ayuda a progresar en el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p70') == '0' ? 'checked' : ''}} name="p70" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p70') == '1' ? 'checked' : ''}} name="p70" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p70') == '2' ? 'checked' : ''}} name="p70" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p70') == '3' ? 'checked' : ''}} name="p70" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p70') == '4' ? 'checked' : ''}} name="p70" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">71</td>
							<td>Mi jefe me ayuda a sentirme bien en el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p71') == '0' ? 'checked' : ''}} name="p71" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p71') == '1' ? 'checked' : ''}} name="p71" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p71') == '2' ? 'checked' : ''}} name="p71" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p71') == '3' ? 'checked' : ''}} name="p71" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p71') == '4' ? 'checked' : ''}} name="p71" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">72</td>
							<td>Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p72') == '0' ? 'checked' : ''}} name="p72" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p72') == '1' ? 'checked' : ''}} name="p72" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p72') == '2' ? 'checked' : ''}} name="p72" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p72') == '3' ? 'checked' : ''}} name="p72" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p72') == '4' ? 'checked' : ''}} name="p72" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">73</td>
							<td>Siento que puedo confiar en mi jefe</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p73') == '0' ? 'checked' : ''}} name="p73" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p73') == '1' ? 'checked' : ''}} name="p73" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p73') == '2' ? 'checked' : ''}} name="p73" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p73') == '3' ? 'checked' : ''}} name="p73" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p73') == '4' ? 'checked' : ''}} name="p73" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">74</td>
							<td>Mi jefe me escucha cuando tengo problemas de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p74') == '0' ? 'checked' : ''}} name="p74" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p74') == '1' ? 'checked' : ''}} name="p74" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p74') == '2' ? 'checked' : ''}} name="p74" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p74') == '3' ? 'checked' : ''}} name="p74" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p74') == '4' ? 'checked' : ''}} name="p74" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">75</td>
							<td>Mi jefe me brinda su apoyo cuando lo necesito</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p75') == '0' ? 'checked' : ''}} name="p75" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p75') == '1' ? 'checked' : ''}} name="p75" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p75') == '2' ? 'checked' : ''}} name="p75" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p75') == '3' ? 'checked' : ''}} name="p75" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p75') == '4' ? 'checked' : ''}} name="p75" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S10'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S10s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's11')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas indagan sobre las relaciones con otras personas y el apoyo entre las personas de su trabajo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p76') == '0' ? 'checked' : ''}} name="p76" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p76') == '1' ? 'checked' : ''}} name="p76" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p76') == '2' ? 'checked' : ''}} name="p76" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p76') == '3' ? 'checked' : ''}} name="p76" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p76') == '4' ? 'checked' : ''}} name="p76" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">77</td>
							<td>En mi grupo de trabajo me tratan de forma respetuosa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p77') == '0' ? 'checked' : ''}} name="p77" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p77') == '1' ? 'checked' : ''}} name="p77" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p77') == '2' ? 'checked' : ''}} name="p77" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p77') == '3' ? 'checked' : ''}} name="p77" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p77') == '4' ? 'checked' : ''}} name="p77" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">78</td>
							<td>Siento que puedo confiar en mis compañeros de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p78') == '0' ? 'checked' : ''}} name="p78" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p78') == '1' ? 'checked' : ''}} name="p78" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p78') == '2' ? 'checked' : ''}} name="p78" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p78') == '3' ? 'checked' : ''}} name="p78" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p78') == '4' ? 'checked' : ''}} name="p78" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">79</td>
							<td>Me siento a gusto con mis compañeros de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p79') == '0' ? 'checked' : ''}} name="p79" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p79') == '1' ? 'checked' : ''}} name="p79" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p79') == '2' ? 'checked' : ''}} name="p79" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p79') == '3' ? 'checked' : ''}} name="p79" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p79') == '4' ? 'checked' : ''}} name="p79" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">80</td>
							<td>En mi grupo de trabajo algunas personas me maltratan</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p80') == '4' ? 'checked' : ''}} name="p80" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p80') == '3' ? 'checked' : ''}} name="p80" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p80') == '2' ? 'checked' : ''}} name="p80" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p80') == '1' ? 'checked' : ''}} name="p80" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p80') == '0' ? 'checked' : ''}} name="p80" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">81</td>
							<td>Entre compañeros solucionamos los problemas de forma respetuosa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p81') == '0' ? 'checked' : ''}} name="p81" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p81') == '1' ? 'checked' : ''}} name="p81" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p81') == '2' ? 'checked' : ''}} name="p81" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p81') == '3' ? 'checked' : ''}} name="p81" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p81') == '4' ? 'checked' : ''}} name="p81" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">82</td>
							<td>Hay integración en mi grupo de trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p82') == '0' ? 'checked' : ''}} name="p82" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p82') == '1' ? 'checked' : ''}} name="p82" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p82') == '2' ? 'checked' : ''}} name="p82" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p82') == '3' ? 'checked' : ''}} name="p82" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p82') == '4' ? 'checked' : ''}} name="p82" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">83</td>
							<td>Mi grupo de trabajo es muy unido</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p83') == '0' ? 'checked' : ''}} name="p83" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p83') == '1' ? 'checked' : ''}} name="p83" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p83') == '2' ? 'checked' : ''}} name="p83" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p83') == '3' ? 'checked' : ''}} name="p83" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p83') == '4' ? 'checked' : ''}} name="p83" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">84</td>
							<td>Las personas en mi trabajo me hacen sentir parte del grupo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p84') == '0' ? 'checked' : ''}} name="p84" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p84') == '1' ? 'checked' : ''}} name="p84" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p84') == '2' ? 'checked' : ''}} name="p84" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p84') == '3' ? 'checked' : ''}} name="p84" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p84') == '4' ? 'checked' : ''}} name="p84" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">85</td>
							<td>Cuando tenemos que realizar trabajo de grupo los compañeros colaboran</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p85') == '0' ? 'checked' : ''}} name="p85" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p85') == '1' ? 'checked' : ''}} name="p85" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p85') == '2' ? 'checked' : ''}} name="p85" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p85') == '3' ? 'checked' : ''}} name="p85" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p85') == '4' ? 'checked' : ''}} name="p85" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">86</td>
							<td>Es fácil poner de acuerdo al grupo para hacer el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p86') == '0' ? 'checked' : ''}} name="p86" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p86') == '1' ? 'checked' : ''}} name="p86" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p86') == '2' ? 'checked' : ''}} name="p86" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p86') == '3' ? 'checked' : ''}} name="p86" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p86') == '4' ? 'checked' : ''}} name="p86" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">87</td>
							<td>Mis compañeros de trabajo me ayudan cuando tengo dificultades</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p87') == '0' ? 'checked' : ''}} name="p87" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p87') == '1' ? 'checked' : ''}} name="p87" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p87') == '2' ? 'checked' : ''}} name="p87" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p87') == '3' ? 'checked' : ''}} name="p87" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p87') == '4' ? 'checked' : ''}} name="p87" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">88</td>
							<td>En mi trabajo las personas nos apoyamos unos a otros</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p88') == '0' ? 'checked' : ''}} name="p88" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p88') == '1' ? 'checked' : ''}} name="p88" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p88') == '2' ? 'checked' : ''}} name="p88" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p88') == '3' ? 'checked' : ''}} name="p88" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p88') == '4' ? 'checked' : ''}} name="p88" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">89</td>
							<td>Algunos compañeros de trabajo me escuchan cuando tengo problemas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p89') == '0' ? 'checked' : ''}} name="p89" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p89') == '1' ? 'checked' : ''}} name="p89" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p89') == '2' ? 'checked' : ''}} name="p89" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p89') == '3' ? 'checked' : ''}} name="p89" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p89') == '4' ? 'checked' : ''}} name="p89" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S11'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S11s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's12')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas indagan sobre las relaciones con otras personas y el apoyo entre las personas de su trabajo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p90') == '0' ? 'checked' : ''}} name="p90" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p90') == '1' ? 'checked' : ''}} name="p90" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p90') == '2' ? 'checked' : ''}} name="p90" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p90') == '3' ? 'checked' : ''}} name="p90" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p90') == '4' ? 'checked' : ''}} name="p90" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">91</td>
							<td>Me informan sobre lo que debo mejorar en mi trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p91') == '0' ? 'checked' : ''}} name="p91" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p91') == '1' ? 'checked' : ''}} name="p91" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p91') == '2' ? 'checked' : ''}} name="p91" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p91') == '3' ? 'checked' : ''}} name="p91" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p91') == '4' ? 'checked' : ''}} name="p91" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">92</td>
							<td>La informaión que recibo sobre mi rendimiento en el trabajo es clara</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p92') == '0' ? 'checked' : ''}} name="p92" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p92') == '1' ? 'checked' : ''}} name="p92" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p92') == '2' ? 'checked' : ''}} name="p92" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p92') == '3' ? 'checked' : ''}} name="p92" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p92') == '4' ? 'checked' : ''}} name="p92" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">93</td>
							<td>La forma como evalúan mi trabajo en la empresa me ayuda a mejorar</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p93') == '0' ? 'checked' : ''}} name="p93" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p93') == '1' ? 'checked' : ''}} name="p93" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p93') == '2' ? 'checked' : ''}} name="p93" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p93') == '3' ? 'checked' : ''}} name="p93" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p93') == '4' ? 'checked' : ''}} name="p93" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">94</td>
							<td>Me informan a tiempo sobre lo que debo mejorar en el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p94') == '0' ? 'checked' : ''}} name="p94" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p94') == '1' ? 'checked' : ''}} name="p94" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p94') == '2' ? 'checked' : ''}} name="p94" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p94') == '3' ? 'checked' : ''}} name="p94" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p94') == '4' ? 'checked' : ''}} name="p94" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S12'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S12s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's13')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con la satisfacción, reconocimiento y la seguridad que le ofrece su trabajo.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif


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
									<input type="radio" {{old('p95') == '0' ? 'checked' : ''}} name="p95" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p95') == '1' ? 'checked' : ''}} name="p95" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p95') == '2' ? 'checked' : ''}} name="p95" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p95') == '3' ? 'checked' : ''}} name="p95" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p95') == '4' ? 'checked' : ''}} name="p95" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">96</td>
							<td>En la empresa me pagan a tiempo mi salario</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p96') == '0' ? 'checked' : ''}} name="p96" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p96') == '1' ? 'checked' : ''}} name="p96" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p96') == '2' ? 'checked' : ''}} name="p96" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p96') == '3' ? 'checked' : ''}} name="p96" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p96') == '4' ? 'checked' : ''}} name="p96" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">97</td>
							<td>El pago que recibo es el que me ofreció la empresa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p97') == '0' ? 'checked' : ''}} name="p97" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p97') == '1' ? 'checked' : ''}} name="p97" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p97') == '2' ? 'checked' : ''}} name="p97" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p97') == '3' ? 'checked' : ''}} name="p97" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p97') == '4' ? 'checked' : ''}} name="p97" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">98</td>
							<td>El pago que recibo es el que merezco por el trabajo que realizo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p98') == '0' ? 'checked' : ''}} name="p98" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p98') == '1' ? 'checked' : ''}} name="p98" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p98') == '2' ? 'checked' : ''}} name="p98" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p98') == '3' ? 'checked' : ''}} name="p98" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p98') == '4' ? 'checked' : ''}} name="p98" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">99</td>
							<td>En mi trabajo tengo posibilidades de progresar</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p99') == '0' ? 'checked' : ''}} name="p99" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p99') == '1' ? 'checked' : ''}} name="p99" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p99') == '2' ? 'checked' : ''}} name="p99" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p99') == '3' ? 'checked' : ''}} name="p99" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p99') == '4' ? 'checked' : ''}} name="p99" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">100</td>
							<td>Las personas que hacen bien el trabajo pueden progresar en la empresa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p100') == '0' ? 'checked' : ''}} name="p100" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p100') == '1' ? 'checked' : ''}} name="p100" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p100') == '2' ? 'checked' : ''}} name="p100" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p100') == '3' ? 'checked' : ''}} name="p100" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p100') == '4' ? 'checked' : ''}} name="p100" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">101</td>
							<td>La empresa se preocupa por el bienestar de los trabajadores</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p101') == '0' ? 'checked' : ''}} name="p101" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p101') == '1' ? 'checked' : ''}} name="p101" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p101') == '2' ? 'checked' : ''}} name="p101" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p101') == '3' ? 'checked' : ''}} name="p101" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p101') == '4' ? 'checked' : ''}} name="p101" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">102</td>
							<td>Mi trabajo en la empresa es estable</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p102') == '0' ? 'checked' : ''}} name="p102" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p102') == '1' ? 'checked' : ''}} name="p102" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p102') == '2' ? 'checked' : ''}} name="p102" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p102') == '3' ? 'checked' : ''}} name="p102" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p102') == '4' ? 'checked' : ''}} name="p102" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">103</td>
							<td>El trabajo que hago me hace sentir bien</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p103') == '0' ? 'checked' : ''}} name="p103" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p103') == '1' ? 'checked' : ''}} name="p103" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p103') == '2' ? 'checked' : ''}} name="p103" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p103') == '3' ? 'checked' : ''}} name="p103" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p103') == '4' ? 'checked' : ''}} name="p103" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">104</td>
							<td>Siento orgullo de trabajar en esta empresa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p104') == '0' ? 'checked' : ''}} name="p104" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p104') == '1' ? 'checked' : ''}} name="p104" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p104') == '2' ? 'checked' : ''}} name="p104" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p104') == '3' ? 'checked' : ''}} name="p104" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p104') == '4' ? 'checked' : ''}} name="p104" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">105</td>
							<td>Hablo bien de la empresa con otras personas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p105') == '0' ? 'checked' : ''}} name="p105" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p105') == '1' ? 'checked' : ''}} name="p105" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p105') == '2' ? 'checked' : ''}} name="p105" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p105') == '3' ? 'checked' : ''}} name="p105" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p105') == '4' ? 'checked' : ''}} name="p105" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S13'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S13s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's14')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con la atención al cliente y usuarios.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif

					<p>Soy jefe de otras personas en mi trabajo:</p>
					<table class="table table-bordered flex-row" style="width: 100px;">
						<tr>
							<td style="width: 50%; text-align: center">
								SI
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;" onchange="pv1(true);">
									<input type="radio" {{old('pv1') == 'SI' ? 'checked' : ''}} name="pv1" value="SI" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="width: 50%; text-align: center">
								NO
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;" onchange="pv1(false);">
									<input type="radio" {{old('pv1') == 'NO' ? 'checked' : ''}} name="pv1" value="NO" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

					<script type="text/javascript">
						function pv1(b){
							if(b){
								document.getElementById("pv1").style.display = "inline-table";
								document.getElementById("btnPv1").style.display = "inline-table";
							}else{
								document.getElementById("pv1").style.display = "none";
								document.getElementById("btnPv1").style.display = "inline-table";
							}
						}
					</script>

					<hr>

					<table class="table table-bordered" id="pv1" style="display: {{old('pv1') == 'SI' ? 'inline-table' : 'none'}};">
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
									<input type="radio" {{old('p106') == '4' ? 'checked' : ''}} name="p106" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p106') == '3' ? 'checked' : ''}} name="p106" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p106') == '2' ? 'checked' : ''}} name="p106" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p106') == '1' ? 'checked' : ''}} name="p106" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p106') == '0' ? 'checked' : ''}} name="p106" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">107</td>
							<td>Atiendo clientes o usuarios muy preocupados</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p107') == '4' ? 'checked' : ''}} name="p107" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p107') == '3' ? 'checked' : ''}} name="p107" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p107') == '2' ? 'checked' : ''}} name="p107" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p107') == '1' ? 'checked' : ''}} name="p107" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p107') == '0' ? 'checked' : ''}} name="p107" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">108</td>
							<td>Atiendo clientes o usuarios muy tristes</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p108') == '4' ? 'checked' : ''}} name="p108" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p108') == '3' ? 'checked' : ''}} name="p108" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p108') == '2' ? 'checked' : ''}} name="p108" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p108') == '1' ? 'checked' : ''}} name="p108" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p108') == '0' ? 'checked' : ''}} name="p108" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">109</td>
							<td>Mi trabajo me exige atender personas muy enfermas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p109') == '4' ? 'checked' : ''}} name="p109" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p109') == '3' ? 'checked' : ''}} name="p109" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p109') == '2' ? 'checked' : ''}} name="p109" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p109') == '1' ? 'checked' : ''}} name="p109" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p109') == '0' ? 'checked' : ''}} name="p109" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">110</td>
							<td>Mi trabajo me exige atender personas muy necesitadas de ayuda</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p110') == '4' ? 'checked' : ''}} name="p110" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p110') == '3' ? 'checked' : ''}} name="p110" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p110') == '2' ? 'checked' : ''}} name="p110" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p110') == '1' ? 'checked' : ''}} name="p110" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p110') == '0' ? 'checked' : ''}} name="p110" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">111</td>
							<td>Atiendo clientes o usuarios que me maltratan</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p111') == '4' ? 'checked' : ''}} name="p111" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p111') == '3' ? 'checked' : ''}} name="p111" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p111') == '2' ? 'checked' : ''}} name="p111" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p111') == '1' ? 'checked' : ''}} name="p111" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p111') == '0' ? 'checked' : ''}} name="p111" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">112</td>
							<td>Para hacer mi trabajo debo demostrar sentimientos distintos a los míos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p112') == '4' ? 'checked' : ''}} name="p112" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p112') == '3' ? 'checked' : ''}} name="p112" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p112') == '2' ? 'checked' : ''}} name="p112" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p112') == '1' ? 'checked' : ''}} name="p112" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p112') == '0' ? 'checked' : ''}} name="p112" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">113</td>
							<td>Mi trabajo me exige atender situaciones de violencia</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p113') == '4' ? 'checked' : ''}} name="p113" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p113') == '3' ? 'checked' : ''}} name="p113" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p113') == '2' ? 'checked' : ''}} name="p113" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p113') == '1' ? 'checked' : ''}} name="p113" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p113') == '0' ? 'checked' : ''}} name="p113" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">114</td>
							<td>Mi trabajo me exige atender situaciones muy tristes o dolorosas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p114') == '4' ? 'checked' : ''}} name="p114" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p114') == '3' ? 'checked' : ''}} name="p114" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p114') == '2' ? 'checked' : ''}} name="p114" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p114') == '1' ? 'checked' : ''}} name="p114" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p114') == '0' ? 'checked' : ''}} name="p114" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>
				</div>

				<div class="box-footer">
					<button type="submit" class="btn btn-primary" id="btnPv1" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S14'])}}" style="display: {{old('pv1') == 'SI' ? 'inline-table' : 'none'}}">
						Continuar
					</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S14s'])}}">
						Continuar de todas formas
					</button>
					@endif
				</div>
			</form>
		</div>
		@endif
		@if($seccion == 's15')
		<div class="box box-primary">
			<form method="POST">

				@csrf {{method_field('PUT')}}
				<div class="box-header with-border">
					<h3 class="box-title">
						Las siguientes preguntas están relacionadas con las personas que usted supervisa o dirige.
					</h3>
				</div>

				<div class="box-body">

					@if ($errors->any())
					<div class="alert alert-warning">
						Faltan datos por diligenciar, Si desea continuar presione "Continuar de todas formas"
					</div>
					@endif

					<p>Soy jefe de otras personas en mi trabajo:</p>
					<table class="table table-bordered flex-row" style="width: 100px;">
						<tr>
							<td style="width: 50%; text-align: center">
								SI
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;" onchange="pv2(true);">
									<input type="radio" {{old('pv2') == 'SI' ? 'checked' : ''}} name="pv2" value="SI" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="width: 50%; text-align: center">
								NO
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;" onchange="pv2(false);">
									<input type="radio" {{old('pv2') == 'NO' ? 'checked' : ''}} name="pv2" value="NO" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

					<script type="text/javascript">
						function pv2(b){
							if(b){
								document.getElementById("pv2").style.display = "inline-table";
								document.getElementById("btnPv2").style.display = "inline-table";
							}else{
								document.getElementById("pv2").style.display = "none";
								document.getElementById("btnPv2").style.display = "inline-table";
							}
						}
					</script>

					<hr>

					<table class="table table-bordered" id="pv2" style="display: {{old('pv2') == 'SI' ? 'inline-table' : 'none'}};">
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
									<input type="radio" {{old('p115') == '4' ? 'checked' : ''}} name="p115" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p115') == '3' ? 'checked' : ''}} name="p115" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p115') == '2' ? 'checked' : ''}} name="p115" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p115') == '1' ? 'checked' : ''}} name="p115" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p115') == '0' ? 'checked' : ''}} name="p115" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">116</td>
							<td>Tengo colaboradores que tienen comportamientos irrespetuosos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p116') == '4' ? 'checked' : ''}} name="p116" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p116') == '3' ? 'checked' : ''}} name="p116" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p116') == '2' ? 'checked' : ''}} name="p116" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p116') == '1' ? 'checked' : ''}} name="p116" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p116') == '0' ? 'checked' : ''}} name="p116" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">117</td>
							<td>Tengo colaboradores que dificultan la organización del trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p117') == '4' ? 'checked' : ''}} name="p117" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p117') == '3' ? 'checked' : ''}} name="p117" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p117') == '2' ? 'checked' : ''}} name="p117" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p117') == '1' ? 'checked' : ''}} name="p117" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p117') == '0' ? 'checked' : ''}} name="p117" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">118</td>
							<td>Tengo colaboradores que guardan silencio cuando les piden opiniones</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p118') == '4' ? 'checked' : ''}} name="p118" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p118') == '3' ? 'checked' : ''}} name="p118" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p118') == '2' ? 'checked' : ''}} name="p118" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p118') == '1' ? 'checked' : ''}} name="p118" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p118') == '0' ? 'checked' : ''}} name="p118" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">119</td>
							<td>Tengo colaboradores que dificultan el logro de los resultados del trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p119') == '4' ? 'checked' : ''}} name="p119" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p119') == '3' ? 'checked' : ''}} name="p119" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p119') == '2' ? 'checked' : ''}} name="p119" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p119') == '1' ? 'checked' : ''}} name="p119" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p119') == '0' ? 'checked' : ''}} name="p119" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">120</td>
							<td>Tengo colaboradores que expresan de forma irrespetuosa sus desacuerdos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p120') == '4' ? 'checked' : ''}} name="p120" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p120') == '3' ? 'checked' : ''}} name="p120" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p120') == '2' ? 'checked' : ''}} name="p120" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p120') == '1' ? 'checked' : ''}} name="p120" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p120') == '0' ? 'checked' : ''}} name="p120" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">121</td>
							<td>Tengo colaboradores que cooperan poco cuando se necesita</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p121') == '4' ? 'checked' : ''}} name="p121" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p121') == '3' ? 'checked' : ''}} name="p121" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p121') == '2' ? 'checked' : ''}} name="p121" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p121') == '1' ? 'checked' : ''}} name="p121" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p121') == '0' ? 'checked' : ''}} name="p121" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">122</td>
							<td>Tengo colaboradores que me preocupan por su desempeño</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p122') == '4' ? 'checked' : ''}} name="p122" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p122') == '3' ? 'checked' : ''}} name="p122" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p122') == '2' ? 'checked' : ''}} name="p122" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p122') == '1' ? 'checked' : ''}} name="p122" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p122') == '0' ? 'checked' : ''}} name="p122" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">123</td>
							<td>Tengo colaboradores que ignoran las sugerencias para mejorar su trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p123') == '4' ? 'checked' : ''}} name="p123" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p123') == '3' ? 'checked' : ''}} name="p123" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p123') == '2' ? 'checked' : ''}} name="p123" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p123') == '1' ? 'checked' : ''}} name="p123" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p123') == '0' ? 'checked' : ''}} name="p123" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" id="btnPv2" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S15'])}}" style="display: {{old('pv2') == 'SI' ? 'inline-table' : 'none'}}">
						Continuar
					</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpifa.update', [$user->id, $frpifa, 'S15s'])}}">
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
					value="{{old('cedula', $frpifa->cedula)}}"
					readonly="true">
					{!!$errors->first('cedula', '<span class="help-block">:message</span>')!!}
				</div>

				<div class="form-group {{$errors->has('fecha_cuestionario') ? 'has-error' : ''}}">
					<label>Fecha de la Encuesta:</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input name="fecha_cuestionario"
						type="text"
						class="form-control pull-right"
						value="{{old('fecha_cuestionario', $frpifa->fecha_cuestionario ? $frpifa->fecha_cuestionario->format('m/d/Y') : null)}}"
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