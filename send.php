<?php
include("conexion.php");

if(isset($_POST['submit'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['menssage']) >= 1 
    ){
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $menssage = trim($_POST['menssage']);

        $name = mysqli_real_escape_string($conex, $name);
        $phone = mysqli_real_escape_string($conex, $phone);
        $email = mysqli_real_escape_string($conex, $email);
        $menssage = mysqli_real_escape_string($conex, $menssage);

        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje) 
        VALUES ('$name', '$phone', '$email', '$menssage') ";

        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar datos: " . mysqli_error($conex);
        }
    }
}
?>
