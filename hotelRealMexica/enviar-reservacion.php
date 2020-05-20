
<?php if (isset($_POST['botonReservar'])): ?>

    <?php 
    header("Location: reservacion?reservacion=true");  
    $boton_reservar = $_POST['botonReservar'];
    session_start();
    $_SESSION['boton_reservar'] = $boton_reservar;
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $tipo_habitacion = $_POST['tipoHabitacion'];
        $numero_personas = $_POST['numeroPersonas'];
        $precio = $_POST['precio'];
        $fecha_reservacion = Date("Y-m-d H:i:s");
        // $newDateTime = Date('Y-m-d h:i:s A', strtotime($fecha_reservacion));
        // echo $newDateTime;
        $fecha_llegada = $_POST['fechaLlegada'];
        $fecha_salida = $_POST['fechaSalida'];
        $date1 = new DateTime($fecha_llegada);
        $date2 = new DateTime($fecha_salida);
        $diferencia_dias = $date1 -> diff($date2);
        
        if ($diferencia_dias -> days == 0) {
            $total = $precio;
        } else {
            $total = $precio * $diferencia_dias -> days;
        }

        try {
            require_once ('includes/functions/bd_conexion.php');
            $stmt = $conn -> prepare("INSERT INTO reservaciones (nombre_cliente, apellidos_cliente, email_cliente, telefono_cliente, id_habitacion, numero_personas, total, fecha_reservacion, fecha_llegada, fecha_salida) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt2 = $conn -> prepare("INSERT INTO clientes (nombre, apellidos, email, telefono) VALUES (?, ?, ?, ?)");
            $stmt -> bind_param("ssssiiisss", $nombre, $apellidos, $email, $telefono, $tipo_habitacion, $numero_personas, $total, $fecha_reservacion, $fecha_llegada, $fecha_salida);
            $stmt2 -> bind_param("ssss", $nombre, $apellidos, $email, $telefono);
            $stmt -> execute();
            $stmt2 -> execute();
            $stmt -> close();
            $stmt2 -> close();
            $conn -> close();
        } catch (Exception $e) {
            $error = $e -> getMessage();  
        }
    ?>
    
<?php endif; ?>
