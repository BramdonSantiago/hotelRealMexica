<?php 
    $url = $_SERVER["REQUEST_URI"];
    session_start();
    if ($url == '/hotelrealmexica/login?cerrar-sesion=true') {
        
        session_destroy();
    } 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="css/styleslogin.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
    <title>Hotel | Real Mexica Login</title>
</head>
<body>
    <div class="seccion-formulario">
        <div class="contenedor">
            <h1 class="titulo">Login</h1>
            
            <form action="enviar-login" class="formulario-login" method="post">
                <div class="usuario">
                    <input type="text" name="nombre_usuario" placeholder="Nombre de Usuario" required>
                    <i class="icono active fas fa-user-tie"></i>
                </div>
                <div class="password">
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <i class="icono active fas fa-key"></i>
                </div>
                <input type="submit" name="boton_login_administrador" value="INICIAR SESIÓN">
            </form>

        </div>
    </div>
    <div class="footer">
        <div class="contenedor">
            <p>©2020. <strong>Bramdon Santiago & Brayan Santiago</strong> | Todos los derechos reservados.</p>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    
    
    <?php
        $url = $_SERVER["REQUEST_URI"];
        if ($url == '/hotelrealmexica/login?login=true'): ?>
            
        <script>

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '¡BIENVENIDO!',
                text: '<?php echo $_SESSION['usuario'];?>',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true
            })

            <?php 
                header("refresh:4;url=administracion");
            ?>
                
        </script> <?php endif; ?> 
    
    
    <?php
        $url = $_SERVER["REQUEST_URI"];
        if ($url == '/hotelrealmexica/login?login=false'): ?>
            
        <script>

            Swal.fire({
                icon: 'error',
                title: '¡Ups...!',
                text: 'Usuario y/o Contraseña incorrecta',
                showConfirmButton: false,
            })

            <?php 
                header("refresh:4;url=administracion");
            ?>
                
        </script> <?php endif; ?> 
    
</body>
</html>