<?php if (isset($_POST['boton_login_administrador'])): ?>
    <?php   
        $usuario = $_POST['nombre_usuario'];
        $password = $_POST['password'];

        // echo $usuario . "<br>";
        
        try {
            require_once('includes/functions/bd_conexion.php');
            $stmt = $conn -> prepare("SELECT * FROM administradores WHERE nombre = ?");
            $stmt -> bind_param("s", $usuario);
            $stmt -> execute();
            $stmt -> bind_result($id_admin, $nombre_admin, $password_admin, $fotografia_admin, $fecha_agrego);
            
            if ($stmt -> affected_rows) {
                $existe = $stmt -> fetch();
                
                if ($existe) {
                    if ($password == $password_admin) {
                        session_start();
                        $_SESSION['usuario'] = $usuario;
                        $_SESSION['fotografia'] = $fotografia_admin;
                        $_SESSION['fecha_agrego'] = $fecha_agrego;
                        echo "<p style='font-size:22px;'>Bienvenido: $usuario";
                        echo "</p>";
                        // header("refresh:4;url=administracion");
                        header("Location: login?login=true");
                    } else {
                        echo "<p style='font-size:22px;'>Usuario y/o Contraseña incorrecta";
                        echo "</p>";
                        // header("refresh:4;url=login");
                        header("Location: login?login=false");
                    }  
                } else {
                    echo "<p style='font-size:22px;'>Usuario y/o Contraseña incorrecta";
                    echo "</p>";
                    // header("refresh:4;url=login");
                    header("Location: login?login=false");
                }
            }
            $stmt -> close();
            $conn -> close();
            
        } catch (Exception $e) {
            echo $e -> getMessage();
        }
    ?>   
<?php endif ?>