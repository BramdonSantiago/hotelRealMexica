<?php
	include_once 'includes/templates/header.php';
?>
    
    <main>

        <section class="informacion-habitacion">
            <div class="contenedor">
                <div class="habitacion-servicios">
                    <div class="imagen-habitacion-servicio">
                        <img src="img/habitacion-lujo3.jpg" alt="Habitación Sencilla">
                    </div>
                    <div class="caracteristicas-habitacion-servicio">
                        <h2>Habitación de Lujo 3 <span>$5,200.00\noche</span></h2>
                        <details open class="detalles">
                            <summary>Descripción</summary>
                            <p>Ni hablar, necesitas quedarte en estas habitaciones para que tu mismo compruebes que no hay nada igual, habitaciones con dimensiones muy grandes y 3 camas king Size de altisima calidad, habitaciones de lujo como tú.</p>
                          </details>
                        <details class="detalles">
                        <summary>Caracteristicas</summary>
                            <ul>
                                <li><i class="fas fa-wifi icono-caracteristicas-cuarto-hover"></i> Wifi + Netflix</li>
                                <li style="border: none;"><i class="fas fa-tv icono-caracteristicas-cuarto-hover"></i> Cable TV</li>
                                <li class="icono-banera"><i class="fas fa-bath icono-caracteristicas-cuarto-hover"></i> Bañera</li>
                                <li style="border: none;"><i class="fas fa-glass-whiskey icono-caracteristicas-cuarto-hover"></i> Bebidas</li>
                                <li><i class="fas fa-wind icono-caracteristicas-cuarto-hover"></i> Aire Acondicionado</li>
                                <li style="border: none;"><i class="fas fa-bed icono-caracteristicas-cuarto-hover"></i> Camas Grandes</li>
                                <li><i class="fas fa-gamepad"></i> Consola de Videojuegos</li>
                                <li><i class="fas fa-water icono-caracteristicas-cuarto-hover"></i> Vista al Mar</li>
                                <li><i class="fas fa-users"></i> Familiar</li>
                            </ul>
                        </details>
                        <details class="detalles">
                        <summary>Imágenes extra</summary>

                            <?php
                                include_once 'includes/templates/imagenesextrahabitacion.php';
                            ?>

						</details>
						<div class="boton-reservar">
							<a class="boton2" href="reservacion.php">RESERVAR HABITACIÓN</a>
						</div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php
	include_once 'includes/templates/footer.php';
?>