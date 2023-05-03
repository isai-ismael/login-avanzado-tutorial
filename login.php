<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
   <title>Inicio de sesión</title>
</head>

<body>
   <img class="wave" src="img/wave.png">
   <div class="container">
      <div class="img">
         <img src="img/bg.svg">
      </div>
      <div class="login-content">
         <form method="post" action="">
            <img src="img/avatar.svg">
            <h2 class="title">BIENVENIDO</h2>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Usuario</h5>
                  <input id="usuario" type="text" class="input" name="usuario">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="password">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>

            <div class="text-center">
               <a class="font-italic isai5" href="">Olvidé mi contraseña</a>
               <a class="font-italic isai5" href="">Registrarse</a>
            </div>
            <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
         </form>
      </div>
   </div>
   <script src="js/fontawesome.js"></script>
   <script src="js/main.js"></script>
   <script src="js/main2.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.bundle.js"></script>

</body>

</html>