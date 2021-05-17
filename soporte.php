<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/desingsoporte.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/Yourbusiness2.png" type="image/x-icon">
<link rel="stylesheet" href="js/">
    <title>Soporte</title>
</head> 
<body>
    <header>
		<div class="contenedor">
            <a href="explorador.html" style="text-decoration: none;"><h2 class="logotipo">YourBusiness</h2></a>
			<nav>
				<a class="home" href="explorador.html">Inicio</a>
				<a class="nosotros1" href="quienessomos.html">Nosotros</a>
                <a href="soporteosc.html"><img class="oscuro" src="img/luna (2).png" alt="404"></a>
            </nav>
        </div>
    </header>
 <!-- formulario de contacto en html y css -->  

 <div class="contact_form">

    <div class="formulario">      
      <h1>Formulario de contacto</h1>
        <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>


          <form action="submeter-formulario.php" method="post">       

            
                <p>
                  <label for="nombre" class="colocar_nombre">Nombre
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                </p>
              
                <p>
                  <label for="email" class="colocar_email">Email
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                </p>
            
                <p>
                  <label for="telefone" class="colocar_telefono">Teléfono
                  </label>
                    <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                </p>    
              
                <p>
                  <label for="website" class="colocar_website">Sitio web
                  </label>
                    <input type="url" name="introducir_website" id="website" placeholder="Escribe la URL de tu web">
                </p>    
              
                <p>
                  <label for="asunto" class="colocar_asunto">Asunto
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                </p>    
              
                <p>
                  <label for="mensaje" class="colocar_mensaje">Mensaje
                    <span class="obligatorio">*</span>
                  </label>                     
                                    <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                                </p>                    
              
                <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

                <p class="aviso">
                  <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>          
            
          </form>
    </div>  
  </div>
    
    <h5 class="copyright"> 𝐘𝐨𝐮𝐫𝐁𝐮𝐬𝐢𝐧𝐞𝐬𝐬 © 𝟐𝟎𝟐𝟏 </h5>
</div>
</main>
<div class="final">
<a href="https://www.instagram.com/yourbusiness_of/">
    <img class="instagram" src="img/instagram.png" alt="404">
</a>
<a href="https://twitter.com/yourbusiness_gt">
    <img class="facebook" src="img/gorjeo.png" alt="404">
</a>
<a href="https://www.facebook.com/thedangerous.gt">
    <img class="facebook" src="img/facebook.png" alt="404">
</a>
</div>
</body>
</html>