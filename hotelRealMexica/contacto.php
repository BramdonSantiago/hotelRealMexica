<?php
	include_once 'includes/templates/header.php';
?>
    
    <main>
        <section class="mapa">
            <div class="mapa-google">
                <iframe class="frame-mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.037035666111!2d-101.51877418560775!3d20.090738624513033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c51d3b5cd34d3%3A0xadc2898164039f7d!2sCalle%20Manuel%20Villalongin%20274%2C%20Centro%2C%2058500%20Puru%C3%A1ndiro%2C%20Mich.!5e0!3m2!1ses!2smx!4v1588306001014!5m2!1ses!2smx" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
        <section class="formulario-seccion">
            <div class="contenedor">
                <div class="formulario-contacto">
                    <form action="" class="formulario-contacto-pagina">
						<div class="dato-contacto">
							<input type="text" placeholder="Nombre" required>
							<input type="email" placeholder="Email" required>
						</div>
						<div class="dato-contacto">
							<textarea placeholder="Tú Mensaje" required></textarea>
						</div>
						<div class="boton-contacto">
							<input class="boton2" type="submit" value="ENVIAR">
						</div>
                    </form>
                    <div class="contacto">
                        <h2>Contacto</h2>
                        <ul>
                            <li><span class="bold">Teléfono:</span> (438)-133-85-61</li>
                            <li><span class="bold">Email:</span> bramdsantiago@gmail.com</li>
                            <li><span class="bold">Localización:</span> Manuel Villalongin #274, Puruándiro Michoacán, México.</li>
                        </ul>
                    </div>    
                </div>
            </div>
        </section>
    </main>

<?php
	include_once 'includes/templates/footer.php';
?>