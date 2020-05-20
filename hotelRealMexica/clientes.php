<?php
    include_once 'includes/templates/admin.php';
?>    
        
        <main>
                <h1 class="titulo-principal">Clientes</h1>
                
                <?php
                    try {
                        require_once('includes/functions/bd_conexion.php');
                        $sql = "SELECT nombre, apellidos, email, telefono FROM clientes";
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
                                <th>Teléfono</th>
                                <th class="ocultar">Email</th>
                            </tr>
                <?php
                    while($clientes = $resultado -> fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $clientes['nombre'];?></td>
                            <td><?php echo $clientes['apellidos'];?></td>
                            <td><?php echo $clientes['telefono'];?></td>
                            <td class="ocultar"><?php echo $clientes['email'];?></td> 
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