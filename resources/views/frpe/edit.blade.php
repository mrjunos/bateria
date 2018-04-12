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
						Las siguientes preguntas están relacionadas con varias condiciones de la zona donde usted vive.
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
							<td>Es fácil transportarme entre mi casa y el trabajo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '0' ? 'checked' : ''}} name="p1" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '1' ? 'checked' : ''}} name="p1" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '2' ? 'checked' : ''}} name="p1" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '3' ? 'checked' : ''}} name="p1" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '4' ? 'checked' : ''}} name="p1" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">2</td>
							<td>Tengo que tomar varios medios de transporte para llegar a mi lugar de trabajo</td>
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
							<td>Paso mucho tiempo viajando de ida y regreso al trabajo</td>
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
							<td>Me transporto cómodamente entre mi casa y el trabajo</td>
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
							<td>La zona donde vivo es segura</td>
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
							<td>En la zona donde vivo se presentan hurtos y mucha delincuencia</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '4' ? 'checked' : ''}} name="p6" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '3' ? 'checked' : ''}} name="p6" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '2' ? 'checked' : ''}} name="p6" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '1' ? 'checked' : ''}} name="p6" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '0' ? 'checked' : ''}} name="p6" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">7</td>
							<td>Desde donde vivo me es fácil llegar al centro médico donde me atienden</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p7') == '0' ? 'checked' : ''}} name="p7" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p7') == '1' ? 'checked' : ''}} name="p7" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p7') == '2' ? 'checked' : ''}} name="p7" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p7') == '3' ? 'checked' : ''}} name="p7" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p7') == '4' ? 'checked' : ''}} name="p7" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">8</td>
							<td>Cerca a mi vivienda las vías están en buenas condiciones</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p8') == '0' ? 'checked' : ''}} name="p8" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p8') == '1' ? 'checked' : ''}} name="p8" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p8') == '2' ? 'checked' : ''}} name="p8" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p8') == '3' ? 'checked' : ''}} name="p8" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p8') == '4' ? 'checked' : ''}} name="p8" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">9</td>
							<td>Cerca a mi vivienda encuentro fácilmente transporte</td>
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
							<td>Las condiciones de mi vivienda son buenas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '0' ? 'checked' : ''}} name="p10" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '1' ? 'checked' : ''}} name="p10" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '2' ? 'checked' : ''}} name="p10" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '3' ? 'checked' : ''}} name="p10" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '4' ? 'checked' : ''}} name="p10" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">11</td>
							<td>En mi vivienda hay servicios de agua y luz</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '0' ? 'checked' : ''}} name="p11" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '1' ? 'checked' : ''}} name="p11" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '2' ? 'checked' : ''}} name="p11" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '3' ? 'checked' : ''}} name="p11" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '4' ? 'checked' : ''}} name="p11" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">12</td>
							<td>Las condiciones de mi vivienda me permiten descansar cuando lo requiero</td>
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
						<tr>
							<td style="text-align: center;">13</td>
							<td>Las condiciones de mi vivienda me permiten sentirme cómodo</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '0' ? 'checked' : ''}} name="p13" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '1' ? 'checked' : ''}} name="p13" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '2' ? 'checked' : ''}} name="p13" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '3' ? 'checked' : ''}} name="p13" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '4' ? 'checked' : ''}} name="p13" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpe.update', [$user->id, $frpe, 'S1'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpe.update', [$user->id, $frpe, 'S1s'])}}">
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
						Las siguientes preguntas están relacionadas con su vida fuera del trabajo:
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
							<td style="text-align: center;">14</td>
							<td>Me queda tiempo para actividades de recreación</td>
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
							<td>Fuera del trabajo tengo tiempo suficiente para descansar</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '0' ? 'checked' : ''}} name="p15" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '1' ? 'checked' : ''}} name="p15" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '2' ? 'checked' : ''}} name="p15" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '3' ? 'checked' : ''}} name="p15" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '4' ? 'checked' : ''}} name="p15" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">16</td>
							<td>Tengo tiempo para atender mis asuntos personales y del hogar</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '0' ? 'checked' : ''}} name="p16" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '1' ? 'checked' : ''}} name="p16" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '2' ? 'checked' : ''}} name="p16" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '3' ? 'checked' : ''}} name="p16" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '4' ? 'checked' : ''}} name="p16" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">17</td>
							<td>Tengo tiempo para compartir con mi familia o amigos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '0' ? 'checked' : ''}} name="p17" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '1' ? 'checked' : ''}} name="p17" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '2' ? 'checked' : ''}} name="p17" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '3' ? 'checked' : ''}} name="p17" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '4' ? 'checked' : ''}} name="p17" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">18</td>
							<td>Tengo buena comunicación con las personas cercanas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '0' ? 'checked' : ''}} name="p18" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '1' ? 'checked' : ''}} name="p18" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '2' ? 'checked' : ''}} name="p18" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '3' ? 'checked' : ''}} name="p18" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '4' ? 'checked' : ''}} name="p18" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">19</td>
							<td>Las relaciones con mis amigos son buenas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '0' ? 'checked' : ''}} name="p19" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '1' ? 'checked' : ''}} name="p19" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '2' ? 'checked' : ''}} name="p19" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '3' ? 'checked' : ''}} name="p19" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '4' ? 'checked' : ''}} name="p19" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">20</td>
							<td>Converso con personas cercanas sobre diferentes temas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p20') == '0' ? 'checked' : ''}} name="p20" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p20') == '1' ? 'checked' : ''}} name="p20" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p20') == '2' ? 'checked' : ''}} name="p20" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p20') == '3' ? 'checked' : ''}} name="p20" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p20') == '4' ? 'checked' : ''}} name="p20" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">21</td>
							<td>Mis amigos están dispuestos a escucharme cuando tengo problemas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p21') == '0' ? 'checked' : ''}} name="p21" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p21') == '1' ? 'checked' : ''}} name="p21" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p21') == '2' ? 'checked' : ''}} name="p21" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p21') == '3' ? 'checked' : ''}} name="p21" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p21') == '4' ? 'checked' : ''}} name="p21" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">22</td>
							<td>Cuento con el apoyo de mi familia cuando tengo problemas</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p22') == '0' ? 'checked' : ''}} name="p22" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p22') == '1' ? 'checked' : ''}} name="p22" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p22') == '2' ? 'checked' : ''}} name="p22" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p22') == '3' ? 'checked' : ''}} name="p22" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p22') == '4' ? 'checked' : ''}} name="p22" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">23</td>
							<td>Puedo hablar con personas cercanas sobre las cosas que me pasan</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '0' ? 'checked' : ''}} name="p23" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '1' ? 'checked' : ''}} name="p23" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '2' ? 'checked' : ''}} name="p23" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '3' ? 'checked' : ''}} name="p23" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '4' ? 'checked' : ''}} name="p23" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">24</td>
							<td>Mis problemas personales o familiares afectan mi trabajo</td>
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
							<td>La relación con mi familia cercana es cordial</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '0' ? 'checked' : ''}} name="p25" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '1' ? 'checked' : ''}} name="p25" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '2' ? 'checked' : ''}} name="p25" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '3' ? 'checked' : ''}} name="p25" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '4' ? 'checked' : ''}} name="p25" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">26</td>
							<td>Mis problemas personales o familiares me quitan la energía que necesito para trabajar</td>
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
							<td>Los problemas con mis familiares los resolvemos de manera amistosa</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '0' ? 'checked' : ''}} name="p27" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '1' ? 'checked' : ''}} name="p27" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '2' ? 'checked' : ''}} name="p27" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '3' ? 'checked' : ''}} name="p27" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '4' ? 'checked' : ''}} name="p27" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">28</td>
							<td>Mis problemas personales o familiares afectan mis relaciones en el trabajo</td>
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
							<td>El dinero que ganamos en el hogar alcanza para cubrir los gastos básicos</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p29') == '0' ? 'checked' : ''}} name="p29" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p29') == '1' ? 'checked' : ''}} name="p29" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p29') == '2' ? 'checked' : ''}} name="p29" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p29') == '3' ? 'checked' : ''}} name="p29" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p29') == '4' ? 'checked' : ''}} name="p29" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">30</td>
							<td>Tengo otros compromisos económicos que afectan mucho el presupuesto familiar</td>
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
						<tr>
							<td style="text-align: center;">31</td>
							<td>En mi hogar tenemos deudas difíciles de pagar</td>
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
					</table>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" formaction="{{route('frpe.update', [$user->id, $frpe, 'S2'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('frpe.update', [$user->id, $frpe, 'S2s'])}}">
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
					value="{{old('cedula', $frpe->cedula)}}">
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
						id="datepicker"
						value="{{old('fecha_cuestionario', $frpe->fecha_cuestionario ? $frpe->fecha_cuestionario->format('m/d/Y') : null)}}">
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