<?php
     session_start();

     if(isset($_SESSION['usuario'])){
 
         if($_SESSION['usuario']['tipo']=='0'){
             header("Location: ../Admin/");
         }
 
     } else {
         header('Location: ../');
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/misproyectosUser.css" rel="stylesheet">
</head>
<body>

    <!--LOADER SE MUESTRA ANTES DE CARGAR TODO EL DOCUMENTO--> 
    <div class="loader justify-content-center" id="loader">
        <!--Spinner de bootstrap 4-->
        <div class="spinner-grow text-dark" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!--FIN LOADER-->

    <!--NavBar-->
    <div class="navbar navbar-expand-md py-2 navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Innovación</a> <!--Titulo Pagina-->
            <!--Button collapse responsive, cuando la pagina se haga pequeña aparecera el botón-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation"><!--Este botón abre el menu-->
                    <span class="navbar-toggler-icon"></span>
            </button>
            
            <!--Se collapsa cuando es <= 767px -->
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav ml-auto"><!--Lista-->
                    <li class="nav-item"> <!--Elemento de lista-->
                        <a class="nav-link" href="index.php">Inicio</a> <!--Link a el inicio de la pagina index.html-->
                    </li>
                    <li class="nav-item">
                        <a href="cursos.php" class="nav-link">Cursos</a> <!--Link a la pagina de cursos courses.html-->
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Mis Proyectos</a> <!--Link a la pagina mis proyectos myprojects.html-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a> <!--Link a la pagina acerca de about.html-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user-edit"></i> <?php echo $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidop']; ?> <!--NOMBRE DE USUARIO--></a></li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cerraSesion" href="../includesphp/cerrarsesion.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
    </div>  
        <!--Fin NavBar-->


    
        <div class="container p-4">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form id="proyecto-form">
                            <div class="form-group">
                                <input type="hidden" id="proyectoId">
                                <input type="text" id="name" placeholder="Nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Descripción"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block text-center">
                                Agregar proyecto
                            </button>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card my-4" id="proyecto-result">
                    <div class="card-body text-center">
                        <h2>Mis proyectos</h2>
                    </div>
                </div>
                
                <table class="table table-bordered table-sm py-2">
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Acción</td>
                        </tr>
                    </thead>
                    <tbody id="proyectos">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    


    <!--SCRIPTS-->
    <!--CDN JQUERY-->
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <!--CDN BOOTSTRAP-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--CDN FONTAWESOME-->
    <script src="https://kit.fontawesome.com/9aad1ddb1d.js" crossorigin="anonymous"></script>
    <!--Script locales app.js para tener control del Dom-->
    <script src="../assets/js/misproyectosUser.js"></script>
    
    <!--FIN SCRIPTS-->


</body>
</html>