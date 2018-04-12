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
						Señale la casilla que indique la frecuencia con que se le han presentado los siguientes malestares en los últimos 3 meses.
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
							<th style="width: 7%; text-align: center;">A veces</th>
							<th style="width: 7%; text-align: center;">Nunca</th>
						</tr>
						<tr>
							<td style="text-align: center;">1</td>
							<td>Dolores en el cuello y espalda o tensión muscular.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '9' ? 'checked' : ''}} name="p1" value="9" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '6' ? 'checked' : ''}} name="p1" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p1') == '3' ? 'checked' : ''}} name="p1" value="3" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Problemas gastrointestinales, úlcera péptica, acidez, problemas digestivos o del colon.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p2') == '9' ? 'checked' : ''}} name="p2" value="9" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p2') == '6' ? 'checked' : ''}} name="p2" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p2') == '3' ? 'checked' : ''}} name="p2" value="3" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Problemas respiratorios.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p3') == '9' ? 'checked' : ''}} name="p3" value="9" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p3') == '6' ? 'checked' : ''}} name="p3" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p3') == '3' ? 'checked' : ''}} name="p3" value="3" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Dolor de cabeza.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p4') == '6' ? 'checked' : ''}} name="p4" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p4') == '4' ? 'checked' : ''}} name="p4" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p4') == '2' ? 'checked' : ''}} name="p4" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p4') == '0' ? 'checked' : ''}} name="p4" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">5</td>
							<td>Trastornos del sueño como somnolencia durante el día o desvelo en la noche.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p5') == '6' ? 'checked' : ''}} name="p5" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p5') == '4' ? 'checked' : ''}} name="p5" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p5') == '2' ? 'checked' : ''}} name="p5" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p5') == '0' ? 'checked' : ''}} name="p5" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">6</td>
							<td>Palpitaciones en el pecho o problemas cardíacos.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '6' ? 'checked' : ''}} name="p6" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '4' ? 'checked' : ''}} name="p6" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p6') == '2' ? 'checked' : ''}} name="p6" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Cambios fuertes del apetito.</td>
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
							<td>Problemas relacionados con la función de los órganos genitales (impotencia, frigidez).</td>
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
							<td>Dificultad en las relaciones familiares.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p9') == '9' ? 'checked' : ''}} name="p9" value="9" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p9') == '6' ? 'checked' : ''}} name="p9" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p9') == '3' ? 'checked' : ''}} name="p9" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p9') == '0' ? 'checked' : ''}} name="p9" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">10</td>
							<td>Dificultad para permanecer quieto o dificultad para iniciar actividades.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '6' ? 'checked' : ''}} name="p10" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '4' ? 'checked' : ''}} name="p10" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p10') == '2' ? 'checked' : ''}} name="p10" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Dificultad en las relaciones con otras personas.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '6' ? 'checked' : ''}} name="p11" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '4' ? 'checked' : ''}} name="p11" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p11') == '2' ? 'checked' : ''}} name="p11" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Sensación de aislamiento y desinterés.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p12') == '3' ? 'checked' : ''}} name="p12" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p12') == '2' ? 'checked' : ''}} name="p12" value="2" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p12') == '1' ? 'checked' : ''}} name="p12" value="1" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p12') == '0' ? 'checked' : ''}} name="p12" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">13</td>
							<td>Sentimiento de sobrecarga de trabajo.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '9' ? 'checked' : ''}} name="p13" value="9" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '6' ? 'checked' : ''}} name="p13" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p13') == '3' ? 'checked' : ''}} name="p13" value="3" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>dificultad para concentrarse, olvidos frecuentes.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p14') == '9' ? 'checked' : ''}} name="p14" value="9" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p14') == '6' ? 'checked' : ''}} name="p14" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p14') == '3' ? 'checked' : ''}} name="p14" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p14') == '0' ? 'checked' : ''}} name="p14" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">15</td>
							<td>Aumento en el número de accidentes de trabajo.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '9' ? 'checked' : ''}} name="p15" value="9" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '6' ? 'checked' : ''}} name="p15" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '3' ? 'checked' : ''}} name="p15" value="3" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p15') == '0' ? 'checked' : ''}} name="p15" value="0" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">16</td>
							<td>Sentimiento de frustración, de no haber hecho lo que se quería en la vida.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '6' ? 'checked' : ''}} name="p16" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '4' ? 'checked' : ''}} name="p16" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p16') == '2' ? 'checked' : ''}} name="p16" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Cansancio, tedio o desgano.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '6' ? 'checked' : ''}} name="p17" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '4' ? 'checked' : ''}} name="p17" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p17') == '2' ? 'checked' : ''}} name="p17" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Disminución del rendimiento en el trabajo o poca creatividad.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '6' ? 'checked' : ''}} name="p18" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '4' ? 'checked' : ''}} name="p18" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p18') == '2' ? 'checked' : ''}} name="p18" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Deseo de no asistir al trabajo.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '6' ? 'checked' : ''}} name="p19" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '4' ? 'checked' : ''}} name="p19" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p19') == '2' ? 'checked' : ''}} name="p19" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Bajo compromiso o poco interés con lo que se hace.</td>
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
							<td>Dificultad para tomar decisiones.</td>
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
						<tr>
							<td style="text-align: center;">22</td>
							<td>Deseo de cambiar de empleo.</td>
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
							<td>Sentimiento de soledad y miedo.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '9' ? 'checked' : ''}} name="p23" value="9" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '6' ? 'checked' : ''}} name="p23" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p23') == '3' ? 'checked' : ''}} name="p23" value="3" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Sentimiento de irritabilidad, actitudes y pensamientos negativos.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p24') == '9' ? 'checked' : ''}} name="p24" value="9" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p24') == '6' ? 'checked' : ''}} name="p24" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p24') == '3' ? 'checked' : ''}} name="p24" value="3" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Sentimiento de angustia, preocupación o tristeza.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '6' ? 'checked' : ''}} name="p25" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '4' ? 'checked' : ''}} name="p25" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p25') == '2' ? 'checked' : ''}} name="p25" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Consumo de drogas para aliviar la tensión o los nervios.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p26') == '6' ? 'checked' : ''}} name="p26" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p26') == '4' ? 'checked' : ''}} name="p26" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p26') == '2' ? 'checked' : ''}} name="p26" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Sentimientos de que "no vale nada", o "no sirve para nada".</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '6' ? 'checked' : ''}} name="p27" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '4' ? 'checked' : ''}} name="p27" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p27') == '2' ? 'checked' : ''}} name="p27" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Consumo de bebidas alcohólicas, o café, o cigarrillo.</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p28') == '6' ? 'checked' : ''}} name="p28" value="6" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p28') == '4' ? 'checked' : ''}} name="p28" value="4" style="margin-top: 10px; margin-bottom: 10px;">
								</label>
							</td>
							<td style="text-align: center; padding: 0;">
								<label style="margin:0; width: 100%;">
									<input type="radio" {{old('p28') == '2' ? 'checked' : ''}} name="p28" value="2" style="margin-top: 10px; margin-bottom: 10px;">
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
							<td>Sentimiento de que está perdiendo la razón.</td>
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
							<td>Comportamientos rígidos, obstinación o terquedad.</td>
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
							<td>Sensación de no poder manejar los problemas de la vida.</td>
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
					<button type="submit" class="btn btn-primary" formaction="{{route('cee.update', [$user->id, $cee, 'S1'])}}">Continuar</button>

					@if ($errors->any())
					<button type="submit" class="btn btn-warning pull-right" formaction="{{route('cee.update', [$user->id, $cee, 'S1s'])}}">
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
					value="{{$cee->cedula}}"
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
						value="{{$cee->fecha_cuestionario ? $cee->fecha_cuestionario->format('m/d/Y') : null}}"
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