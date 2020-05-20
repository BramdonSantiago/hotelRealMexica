<?php
	include_once 'includes/templates/header.php';
?>
    
    <main>

        <section class="informacion-habitacion">
            <div class="contenedor">
                <div class="habitacion-servicios">
                    <div class="imagen-habitacion-servicio">
                        <img src="img/habitacion-simple.jpg" alt="Habitación Sencilla">
                    </div>
                    <div class="caracteristicas-habitacion-servicio">
                        <h2>Habitación Simple <span>$1,900.00\noche</span></h2>
                        <details open class="detalles">
                            <summary>Descripción</summary>
                            <p>Habitación sencilla, pero elegante, con detalles modernos y una decoración agradable. Muy acogedoras y de gran confort; diseñadas para momentos especiales y estancias tranquilas. Las habitaciones simples, tienen 2 camas individuales.</p>
                          </details>
                        <details class="detalles">
                        <summary>Caracteristicas</summary>
                            <ul>
                                <li><i class="fas fa-wifi icono-caracteristicas-cuarto-hover"></i> Wifi</li>
                                <li><i class="fas fa-tv icono-caracteristicas-cuarto-hover"></i> Cable TV</li>
                                <li><i class="fas fa-glass-whiskey icono-caracteristicas-cuarto-hover"></i> Bebidas</li>
                                <li><i class="fas fa-wind icono-caracteristicas-cuarto-hover"></i> Aire Acondicionado</li>
                                <li><i class="fas fa-user-friends"></i> 2 Personas</li>
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