<?php
    function periodoReservacionJson(&$periodo_reservacion) {
        $fechas = array(
            0 => "fecha_llegada", 
            1 => "fecha_salida");
        $periodo = array_combine($fechas, $periodo_reservacion);
        echo "<pre>";  
            var_dump($periodo);
        echo "</pre>"; 
    }      
?>