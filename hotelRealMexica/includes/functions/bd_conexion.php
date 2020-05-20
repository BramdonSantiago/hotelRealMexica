<?php 
    $conn = new mysqli('localhost', 'root', '', 'hotelrealmexica');

    if ($conn -> connect_error) {
        echo $error -> $conn -> connect_error;
    }
?>