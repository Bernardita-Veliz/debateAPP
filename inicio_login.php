<?php
session_start();

//si nadie inicia sesión, vuelve a la pagina de index
if($_SESSION["s_usuario"] === null){
    header("Location: login.php");
}else{
    if($_SESSION["s_idRol"]!= 1)
        header("Location: inicio_loginUsuario.php");
}
?>
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/css/sweetalert2.min.css">            
    </head>    
    <body>
      
        <div class="container" style="background: #adadad">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        
                        <h1 class="display-4 text-center">¡Bienvenido!</h1>
                        <h2 class="text-center">Usuario: <span class="badge badge-primary"><?php echo $_SESSION["s_usuario"];?></span></h2>    
                        <p class="lead text-center">Esta es la página de inicio, luego de un LOGIN correcto.</p>
                        <hr class="my-4">
                        <div class="button">
                            <a class="btn btn-success btn-lg" href="seccion_admin.php" role="button">Mi sección</a>          
                            <a class="btn btn-danger btn-lg" href="../debateAPP/BD/logout.php" role="button">Cerrar Sesión</a>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>        
     <script src="assets/js/jquery-3.3.1.min.js"></script>    
     <script src="assets/js/bootstrap.min.js"></script>    
     <script src="assets/js/popper.min.js"></script>    
        
     <script src="assets/js/sweetalert2.all.min.js"></script>    
     <script src="assets/js/codigo.js"></script>    
    </body>
</html>