<?php
    include_once 'includes/templates/admin.php';
?>    
        
        <main>
                <h1 class="titulo-principal">Clientes</h1>
                
                <?php
                    try {
                        require_once('includes/functions/bd_conexion.php');
                        $sql = "SELECT nombre_cliente, apellidos_cliente, id_habitacion, numero_personas, total, fecha_reservacion, fecha_llegada, fecha_salida FROM reservaciones";
                        $resultado = $conn -> query($sql);
                    } catch (\Exception $e) {
                        echo $e -> getMesssage();
                    }
                ?>

                <div class="table">
                    <h2>Datos de los Clientes</h2>
                    <table>
                        <tbody>
                            <tr>
                                <th>Nombre(s)</th>
                                <th>Apellidos</th>
                                <th>Tipo de Habitación</th>
                                <th class="ocultar">Número de Personas</th>
                                <th class="ocultar">Fecha y Hora de la Reservación</th>
                                <!-- <th class="ocultar">Fecha y Hora en la que Reservó</th> -->
                                <th class="ocultar">Estancia</th>
                                <th class="ocultar">Total</th>
                            </tr>
                <?php
                    while($clientes = $resultado -> fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $clientes['nombre_cliente'];?></td>
                            <td><?php echo $clientes['apellidos_cliente'];?></td>
                            <td><?php echo $clientes['id_habitacion'];?></td>
                            <td class="ocultar"><?php echo $clientes['numero_personas'];?></td> 
                            <td class="ocultar"><?php echo $clientes['fecha_reservacion'];?></td> 
                            <td class="ocultar">del <span class="periodo"><?php echo $clientes['fecha_llegada'];?></span> al <span class="periodo"><?php echo $clientes['fecha_salida'];?></span></td> 
                            <td class="ocultar">$<?php echo $clientes['total'];?></td> 
                        </tr>
                    <?php } ?>
                        </tbody>
                        </table>
                    <?php $conn -> close(); ?>
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