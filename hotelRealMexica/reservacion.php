<?php
	
	$url = $_SERVER["REQUEST_URI"];
	session_start();
	
	if ($url == '/hotelrealmexica/reservacion?reservacion=true') {
		if(!$_SESSION['boton_reservar']) {
			header("Location: reservacion");
		}
	} 
	
	
	include_once 'includes/templates/header.php';

		
?>
	
    
    <main>
        <section class="seccion-formulario-reservacion">
            <div class="contenedor">
                <h2>Reservación</h2>
                <form action="enviar-reservacion" method="post" class="formulario-reservacion">
					
					<div class="datos-cliente">
						<div class="validacion-datos">
							<input type="text" id="nombre" name="nombre" placeholder="Nombre(s)">
							<span class="mensaje-validacion">Este campo es requerido<span>
						</div>
						<div class="validacion-datos">
							<input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
							<span class="mensaje-validacion">Este campo es requerido</span>
						</div>
						<div class="validacion-datos">
							<input type="text" id="email" name="email" placeholder="Email">
							<span class="mensaje-validacion">Este campo es requerido</span>
						</div>
						<div class="validacion-datos">
							<input type="text" id="telefono" name="telefono" placeholder="Teléfono">
							<span class="mensaje-validacion">Este campo es requerido</span>
						</div>
					</div>

					<div class="datos-cliente">
						<div class="validacion-datos">
							<select name="tipoHabitacion" id="tipo-habitacion">
								<option value="" selected disabled>Tipo de Habitación</option>
								<option value="1">Simple</option>
								<option value="2">Standard</option>
								<option value="3">de Lujo 1</option>
								<option value="4">de Lujo 2</option>
								<option value="5">de Lujo 3</option>
							</select>
							<span class="mensaje-validacion">Este campo es requerido</span>
						</div>
						<!-- <label for="fecha-llegada" style="font-size: 12px; padding: 12px 0;">Fecha Llegada</label> -->
						<div class="fechas-reservacion validacion-datos">
							<input class="date-picker" id="fecha-llegada" type="text" name="fechaLlegada" placeholder="Fecha Llegada" data-dd-roundtrip="my-trip">
							<i class="icono-calendario fas fa-calendar-day"></i>
							<span class="mensaje-validacion">Este campo es requerido</span>
						</div>
						<!-- <label for="fecha-salida" style="font-size: 12px; padding: 12px 0;">Fecha Salida</label> -->
						<div class="fechas-reservacion validacion-datos">
							<input class="date-picker" id="fecha-salida" type="text" name="fechaSalida" placeholder="Fecha Salida" data-dd-roundtrip="my-trip">
							<i class="icono-calendario fas fa-calendar-day"></i>
							<span class="mensaje-validacion">Este campo es requerido</span>
						</div>
						<div class="validacion-datos">
							<select name="numeroPersonas" id="numero-personas">
								<option value="" selected disabled>Número de Personas</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
							<span class="mensaje-validacion">Este campo es requerido</span>
						</div>
					</div>
					<div class="sugerencia-reservacion">
						<p class="sugerencia-habitaciones" id="sugerencia-habitaciones">* Recuerda que las habitaciones Simples y Standard solamente pueden reservarse para máximo 2 personas</p>
					</div>
					<div class="boton-enviar">
						<input type="hidden" id="precio" name="precio">
						<input class="boton disabled" id="boton-enviar" type="submit" name="botonReservar" value="RESERVAR HABITACIÓN">
					</div>
                </form>
            </div>
        </section>
      
	<?php
		$url = $_SERVER["REQUEST_URI"];
		
		if ($url == '/hotelrealmexica/reservacion?reservacion=true' && $_SESSION['boton_reservar']): ?>
			<div class="mensaje-reservacion-exitosa">
				<p><i class="icono-check fas fa-check"></i>¡RESERVACIÓN EXITOSA!</p>
			</div>
			<?php unset($_SESSION['boton_reservar']); ?>
		<?php endif; ?>
    </main>

<?php
	include_once 'includes/templates/footer.php';
?>