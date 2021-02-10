<?php
    include("../conexion/conexion.php");
	/*include("../controlador/ususarios.class.php");	*/
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/estilos3.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <link rel="stylesheet" href="../css/css.pie.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <link rel="stylesheet" href="../css/iniciosecion.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keyswords" content="html5, css3">
        <link rel="stylesheet" type="text/css" href="../css/estilos3.css" >
            <!--IMPLEMENTANDO BOOTSTRAP - Ajax -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Unlimited Tecnhology-Iniciar Sesion</title>
    </head>  

     <body>
        
    <div class="box">
        
        <img id="img" src="../imagenes/user_icon.png" alt="icono-usiario">

           <form>
               <input type="text" class="field" placeholder="Nombre de usuario" required>
               <input type="password" class="field" placeholder="Contraseña" required ><br>
               <input type="checkbox" class="check-box" ><span>Recordar contraseña</span>
               <button type="submit" class="submit">Acceder</button>     
          </form>


        <div class="cajabotones">
            <button type="button" class="botones">Iniciar Sesion</button>
            <button type="button" class="botones">Resgistrar</button>
        </div>
        
            <p id="terminos-condiciones" ><a href="../vista/terminos y condiciones.html">Terminos y condiciones</a></p><br>


    </div>
     </body>
</html