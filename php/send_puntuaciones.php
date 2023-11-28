<?php

include_once("config.php");

if(isset($_POST['jugador'])&& isset($_POST['puntuacion'])){

    $jugador = mysqli_real_escape_string($conn,$_POST['jugador']);
    $puntuacion = mysqli_real_escape_string($conn,$_POST['puntuacion']);

    $sql = "INSERT INTO puntuaciones(jugador, puntuacion,fechaJuego) VALUES ('$jugador',$puntuacion, NOW());";
    if(mysqli_query($conn, $sql)){
        header("Location: ../puntuaciones.html");
    }
}
?>