<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<script>
import Swal from 'sweetalert2'
const Swal = require('sweetalert2')
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'
</script>
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
  
  echo "<script> alert('Bienvenido $usuario');
  location.href = 'welcome.php';
  </script>";

}else{
  include("index.php");
  echo "<script>
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Usuario no encontrado ¡404!',
    footer: '<a href=signup.php>¿No tienes una cuenta? Registrate</a>',
  })</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>  