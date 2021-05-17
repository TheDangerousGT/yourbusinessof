<?php
$name  = $_POST['nombre'];
$email  = $_POST['email'];
$contrasenia = $_POST['contra'];
$repassword = $_POST['repassword'];

$conection=mysqli_connect("127.0.0.1","root","","loginyb");

$insert=  "INSERT INTO user (Nombre, Correo, contrasenia) VALUES ('$name', '$email', '$contrasenia')";

$resultado = mysqli_query($conection, $insert);

if($resultado){
  
    echo "<script> alert('Usuario Registrado Exitosamente');
    location.href = '../index.php';
    </script>";
}else{
    echo "<script> alert('Usuario no Registrado ¡Error!');
    location.href = 'singup.php';
    </script>";
}

mysqli_close($conection);
?>