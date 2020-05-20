<?php
    include_once 'includes/templates/admin.php';
?>

        <main>
            <div>
                <h1 class="titulo-principal">Tablero</h1>
                
                <div class="etiquetas">
                    <?php
                        try {
                            require_once('includes/functions/bd_conexion.php');
                            $sql = "SELECT COUNT(num_reservacion) FROM reservaciones";
                            $sql2 = "SELECT SUM(total) FROM reservaciones";
                            $sql3 = "SELECT SUM(numero_personas) FROM reservaciones";
                            $sql4 = "SELECT *FROM reservaciones order by num_reservacion desc limit 1";
                            $resultado = $conn -> query($sql);
                            $resultado2 = $conn -> query($sql2);
                            $resultado3 = $conn -> query($sql3);
                            $resultado4 = $conn -> query($sql4);

                            
                        } catch(Exception $e) {
                            echo $e -> getMessage();
                        }
                    ?>

                    <?php
                       $total_reservaciones = $resultado -> fetch_assoc();
                       $total_pagos = $resultado2 -> fetch_assoc();
                       $total_personas_esperadas = $resultado3 -> fetch_assoc();
                       $ultima_reservacion = $resultado4 -> fetch_assoc();
                        $conn -> close();
                    ?>
                    
                    <div class="etiqueta primera">
                        <h2>Total Reservaciones</h2>
                        <div class="contenido">
                            <div class="dato">
                                <span class="numero"><?php echo $total_reservaciones['COUNT(num_reservacion)'];?></span>
                            </div>
                            <div class="thumb">
                            <img src="img/thumb-numero-reservaciones.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="etiqueta segunda">
                        <h2>Total Pagos</h2>
                        <div class="contenido">
                            <div class="dato">
                                <span class="numero">$<?php echo $total_pagos['SUM(total)'];?></span>
                            </div>
                            <div class="thumb">
                            <img src="img/thumb-numero-pagos.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="etiqueta tercera">
                        <h2>Total Personas Esperadas</h2>
                        <div class="contenido">
                            <div class="dato">
                                <span class="numero"><?php echo $total_personas_esperadas['SUM(numero_personas)'];?></span>
                            </div>
                            <div class="thumb">
                            <img src="img/thumb-numero-personas.png">
                            </div>
                        </div>
                    </div>
                    <div class="etiqueta cuarta">
                        <h2>Última Reservación</h2>
                        <div class="contenido">
                            <div class="dato" style="text-align: left;">
                                <span class="datos-ultima-reservacion"><?php echo $ultima_reservacion['nombre_cliente'];?></span><br>
                                <span class="datos-ultima-reservacion"><?php echo $ultima_reservacion['apellidos_cliente'];?></span><br>
                                <span class="datos-ultima-reservacion"><?php echo $ultima_reservacion['fecha_reservacion'];?></span>
                            </div>
                            <div class="thumb">
                            <img src="img/thumb-ultima-reservacion.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p>©2020. <strong>Bramdon Santiago & Brayan Santiago</strong> | Todos los derechos reservados.</p>
            </footer>
        </main>

        

    </div>

  
   
    <script 
        src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>

    <script src="js/toggleadministracion.js"></script>
    
    
</body>
</html>