<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Login</title>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script> 
    <script type="text/javascript" src="js/cambiar-fondo.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/desingindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link  rel="icon"   href="img/LogoYBosc.png" type="404" />
  </head>
  <body>
  <form action="welcome.php" method="post">
    <!---------------------Copyright 𝐘𝐨𝐮𝐫𝐁𝐮𝐬𝐢𝐧𝐞𝐬𝐬 © 𝟐𝟎𝟐𝟏----------------------------->
      <div class="login-box">
        <h1>Login</h1>
    <!-----------------------------Login Username------------------------------------->
        <div class="textbox">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Username" name="user" required title="Debes completar este campo">
        </div>
    <!--------------------------END Login Username------------------------------------->
  <!-----------------------------------Password----------------------------------------->
        <div class="textbox">
          <i class="fas fa-lock"></i>
          <input id="contrasena" type="password" placeholder="Password" name= "contra" required title="Debes llenar esta casilla"/>
        </div>
        <div style="margin-top:15px;">
          <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena">
          &nbsp;&nbsp;Mostrar Contraseña</div>
  <!---------------------------------END Password--------------------------------------->
    <!----------------------------------Log In------------------------------------------>
      <a href="welcome.php">
      <input type="submit" class="btn" value="Sign in">
      </a>
      ¿No tienes una cuenta?<a href="servidor/signup.php" class="link-primary"> Registrate</a>
      </div>
  <!---------------------------------END Log In--------------------------------------->
    <!---------------------Copyright 𝐘𝐨𝐮𝐫𝐁𝐮𝐬𝐢𝐧𝐞𝐬𝐬 © 𝟐𝟎𝟐𝟏----------------------------->
  <!-------------------------Script Para mostrar Password---------------------------->
    <script>
      $(document).ready(function () {
        $('#mostrar_contrasena').click(function () {
          if ($('#mostrar_contrasena').is(':checked')) {
            $('#contrasena').attr('type', 'text');
          } else {
            $('#contrasena').attr('type', 'password');
          }
        });
      });
      </script>
  <script>
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
    }
  </script>
  <script type="text/javascript">
function validar(){


	// Validamos los campos de input text
	camposTexto = document.getElementById("formulario").elements; 

	for (x=0; x < camposTexto.length; x++) {
		if (camposTexto[x].value == '' && camposTexto[x].type=='text'){
			alert("El campo " + camposTexto[x].id + " está vacio y es OBLIGATORIO");
			return false;
    	}    
   }
   
   // Validamos si hay alguna opción marcada
   camposCheck = document.getElementsByName("deporte");   
   opcion = false;
   x = 0;
   
   while (x<camposCheck.length && !opcion) {
   		if (camposCheck[x].checked){
   			opcion = true;
   		}
   		x++;
   	}
   	
   	if (!opcion)
   		alert("Tienes que seleccionar alguna opción");   


}
</script>
  </form>
  <!--------------------------------------------------------------------------------->
  </body>
</html>