<?php
include('conection.php');
$usuario = $_POST['user'];
$password = $_POST['contra'];
session_start();
$_SESSION['user']=$usuario;


$conexion=mysqli_connect("127.0.0.1","root","","loginyb");

$consulta="SELECT*FROM user where Nombre='$usuario' and contrasenia='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
  echo "<script> alert('Bienvenido');
  location.href = 'bienvenido.php';
  </script>";

}else{
    ?>
    <?php
    include("login.php");
    echo "<script> alert('Usuario no encontrado ¡404!');
    location.href = 'bienvenido.php';
    </script>";
  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
