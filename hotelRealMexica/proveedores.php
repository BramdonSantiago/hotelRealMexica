<?php
    include_once 'includes/templates/admin.php';
?>
        
        <main>
                <h1 class="titulo-principal">Proveedores</h1>
                <div class="table">
                    <h2>Datos de los Proveedores de Productos</h2>
                    <table>
                        <tbody>
                            <tr>
                                <th>Nombre de la Empresa</th>
                                <th class="ocultar">Ciudad</th>
                                <th>Teléfono</th>
                                <th class="ocultar">Email</th>
                                <th class="ocultar">Sitio Web</th>
                                <th class="ocultar">Tipo de Proveedor</th>
                                <th>Producto</th>
                                <th class="ocultar">Responsable</th>
                            </tr>
                            <?php
                                try {
                                    require_once('includes/functions/bd_conexion.php');
                                    $sql = "SELECT nombre_empresa, ciudad, telefono, email, sitio_web, tipo_proveedor, producto_servicio, responsable FROM proveedores WHERE tipo_proveedor = 'producto'";
                                    $resultado = $conn -> query($sql);
                                    $sql2 = "SELECT nombre_empresa, ciudad, telefono, email, sitio_web, tipo_proveedor, producto_servicio, responsable FROM proveedores WHERE tipo_proveedor = 'servicio'";
                                    $resultado2 = $conn -> query($sql2);
                                } catch (\Exception $e) {
                                    echo $e -> getMesssage();
                                }
                            ?>
                            <?php
                                while($proveedores_producto = $resultado -> fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $proveedores_producto['nombre_empresa'];?></td>
                                        <td class="ocultar"><?php echo $proveedores_producto['ciudad'];?></td>
                                        <td><?php echo $proveedores_producto['telefono'];?></td>
                                        <td class="ocultar"><?php echo $proveedores_producto['email'];?></td>
                                        <td class="ocultar"><?php echo $proveedores_producto['sitio_web'];?></td>
                                        <td class="ocultar"><?php echo $proveedores_producto['tipo_proveedor'];?></td>
                                        <td><?php echo $proveedores_producto['producto_servicio'];?></td>
                                        <td class="ocultar"><?php echo $proveedores_producto['responsable'];?></td>
                                    </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="table">
                    <h2>Datos de los Proveedores de Servicios</h2>
                    <table>
                        <tbody>
                            <tr>
                                <th>Nombre de la Empresa</th>
                                <th class="ocultar">Ciudad</th>
                                <th>Teléfono</th>
                                <th class="ocultar">Email</th>
                                <th class="ocultar">Sitio Web</th>
                                <th class="ocultar">Tipo de Proveedor</th>
                                <th>Servicio</th>
                                <th class="ocultar">Responsable</th>
                            </tr>
                            
                            <?php
                                while($proveedores_servicio = $resultado2 -> fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $proveedores_servicio['nombre_empresa'];?></td>
                                        <td class="ocultar"><?php echo $proveedores_servicio['ciudad'];?></td>
                                        <td><?php echo $proveedores_servicio['telefono'];?></td>
                                        <td class="ocultar"><?php echo $proveedores_servicio['email'];?></td>
                                        <td class="ocultar"><?php echo $proveedores_servicio['sitio_web'];?></td>
                                        <td class="ocultar"><?php echo $proveedores_servicio['tipo_proveedor'];?></td>
                                        <td><?php echo $proveedores_servicio['producto_servicio'];?></td>
                                        <td class="ocultar"><?php echo $proveedores_servicio['responsable'];?></td>
                                    </tr>
                                <?php } ?>
                            <?php $conn -> close(); ?>
                        </tbody>
                    </table>
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