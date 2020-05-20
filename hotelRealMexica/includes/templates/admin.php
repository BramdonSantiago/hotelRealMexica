<?php
    session_start();
    
    if (!isset($_SESSION['usuario'])) {
        header("Location: login");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="css/stylesadmin.css">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Hotel Real Mexica | Administracion</title>
</head>
<body>

    <?php
        try {
            require_once('includes/functions/bd_conexion.php');
            $sql_clientes = "SELECT COUNT(id_cliente) FROM clientes";
            $resultado_clientes = $conn -> query($sql_clientes);
        } catch (Exception $e) {
            echo $e -> getMessage();
        }
    ?>

    <?php
        $total_clientes = $resultado_clientes -> fetch_assoc();
    ?>

    <header>
        <div class="contenedor">
            <nav>
                <p class="logo"><a href="administracion">Real Mexica <span class="iniciales">Hotel</span></a></p>
                
                <div class="perfil">
                    <div class="menu-mobile">
                        <img src="img/menu-icon8.png" class="menu-icon">
                    </div>

                    <div class="notificaciones">
                        <i class="icono-notificacion far fa-bell"></i>
                        <div class="cuadro-notificacion"><?php echo $total_clientes['COUNT(id_cliente)'];?></div>
                    </div>
                   
                    <div class="foto">
                        <img src="img/<?php echo $_SESSION['fotografia'];?>">
                    </div>
                    
                    <div class="nombre">
                        <p><?php echo $_SESSION['usuario'];?></p>
                    </div>
                </div>
            </nav>
           
        </div>
    </header>

    

    <div class="main">
        <!-- <a href="login?cerrar-sesion=true" class="cerrar-sesion">CERRAR SESIÓN</a> -->
        <div class="notificacion-clientes">
            <div class="notificacion-cliente">
                <p><i class="fas fa-users-cog"></i> <?php echo $total_clientes['COUNT(id_cliente)'];?> CLIENTES HASTA HOY</p>  
            </div>
        </div>
        <div class="datos-usuario">
            <div class="usuario">
                <img src="img/<?php echo $_SESSION['fotografia'];?>">
                <p class="nombre-descripcion-administrador"><?php echo $_SESSION['usuario'];?> - Administrador</p>
                <p class="fecha-miembro">Miembro desde: <?php echo $_SESSION['fecha_agrego'];?></p>
                <div class="div-cerrar-sesion">
                     <a class="boton-cerrar-sesion" href="login?cerrar-sesion=true">CERRAR SESIÓN</a>
                </div>
            </div>
        </div>
        <aside>
             <div class="buscar">
                <input type="text" placeholder="Buscar...">
                <i class="icono fas fa-search"></i> 
             </div>
             <div class="titulo-menu-navegacion">
                 <h2>Menú de Navegación</h2>
             </div>
             <div class="enlaces">
                <a href="administracion">Tablero</a>
                <i class="icono fas fa-hotel"></i>
             </div>
             <div class="enlaces">
                <a href="clientes">Clientes</a>
                <i class="icono fas fa-users-cog"></i>
             </div>
             <div class="enlaces relacion-interna">
                <a href="reservaciones">Reservaciones</a>
                <i class="icono fas fa-luggage-cart"></i>
             </div>
             <div class="enlaces">
                <a href="proveedores">Proveedores</a>
                <i class="icono fas fa-address-book"></i>
             </div>
        </aside>
        
    
   
    