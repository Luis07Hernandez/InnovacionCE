<?php

    session_start();
    if (isset($_SESSION['usuario'])){
        if ($_SESSION['usuario']['tipo']=="0"){
            header('Location: Admin/');
        } else if ($_SESSION['usuario']['tipo']=="1"){
            header('Location: User/');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Titulo de el documento-->
    <title>InnovaciónCE</title>
    <!--Estilos locales-->
    <link href="assets/css/index.css" rel="stylesheet">
    <!--Estilos de bootstrap 4-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
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

    <!--BANNER-->
    <section class="banner">
        <!--NavBar-->
        <div class="navbar navbar-expand-md py-2 navbar-dark ">
            <a class="navbar-brand" href="#">Innovación</a> <!--Titulo Pagina-->
            <!--Button collapse responsive, cuando la pagina se haga pequeña aparecera el botón-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation"><!--Este botón abre el menu-->
                    <span class="navbar-toggler-icon"></span>
            </button>
            
            <!--Se collapsa cuando es <= 767px -->
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav ml-auto"><!--Lista-->
                    <li class="nav-item active"> <!--Elemento de lista-->
                        <a class="nav-link" href="#">Inicio</a> <!--Link a el inicio de la pagina index.html-->
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Cursos</a> <!--Link a la pagina de cursos courses.html-->
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Mis Proyectos</a> <!--Link a la pagina mis proyectos myprojects.html-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a> <!--Link a la pagina acerca de about.html-->
                    </li>
                </ul>
            </div>
        </div>  
        <!--Fin NavBar-->
        
        <div class="header-1">
            <h2 style="color:white;">¡Las oportunidades no pasan, las creas!</h2>
            <p></p>
        <!--Register-->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#RegisterModal">Registrarme</button><!--Botón para abrir el formulario de Registrararse en un modal-->
            <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!--Inicio Modal Cabecera-->
                        <div class="modal-header">
                            <h5 class="modal-tittle" id="RegisterModalLabel">Registrarse</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--Fin Modal Cabcerea-->
                        <form id="registrarme"> <!--Form registrarse-->
                            <!--Inicio Cuerpo Modal-->
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <input type="text" name="Nombre" id="r-nombre" class="form-control" placeholder="Nombre" title="Solo debe tener letras" minlength="1" maxlength="30" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="ApellidoPaterno" id="r-apellidop" class="form-control" placeholder="Apellido Paterno" title="Solo debe tener letras. Longitud máxima 25" minlength="1" maxlength="25" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="ApellidoMaterno" id="r-apellidom" class="form-control" placeholder="Apellido Materno" title="Solo debe tener letras. Longitud máxima 25" minlength="1" maxlength="25" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <input type="email" name="Email" id="r-email" class="form-control" placeholder="Correo Electrónico" minlength="1" maxlength="50" title="Por ejemplo juan@hotmail.com" required>
                                        <small id="emailHelp">Nunca compartiremos su correo electrónico con nadie más.</small>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <input type="password" name="Contra" id="r-contra" class="form-control" placeholder="Contraseña" title="No debe incluir caracteres especiales, debe tener entre 8 y 16 caracteres." minlength="8" maxlength="16" pattern="[A-Za-z0-9]{8,16}" required>
                                        <small id="passwordHelp">No debe incluir caracteres especiales, debe tener entre 8 y 16 caracteres.</small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="password" name="Confirmacontra" id="r-confirmacontra" class="form-control" placeholder="Confirma Contraseña" title="No debe incluir caracteres especiales, debe tener entre 8 y 16 caracteres." minlength="8" maxlength="16" pattern="[A-Za-z0-9]{8,16}" required>
                                        <small id="passwordConfirm"></small>
                                    </div>
                                </div>
                            </div>
                            <!--Fin Cuerpo Modal-->
                            <!--Inicio Pie Modal-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" value="Cancelar" id="cancelar">Cancelar</button>
                                <input id='r-submit' type="submit" class="btn btn-warning" value="Registrarme">
                            </div>
                            <!--Fin Pie Modal-->
                        </form> <!--Fin Form Registrarme-->
                    </div>
                </div>
            </div>
        <!--Fin Register-->

            &nbsp; <!--Espacio-->
            
        <!--Login-->
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#LoginModal">Iniciar Sesión</button><!--Botón para abrir el formulario de login en un modal-->
            <!--Formulario Modal Login-->
            <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!--Inicio Modal Cabecera-->
                        <div class="modal-header">
                            <h5 class="modal-title" id="LoginModalLabel">Iniciar Sesión</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--Fin Modal Cabecera-->
                        <!--Inicio Cuerpo Modal-->
                        <form id="login"> <!--Form-->
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope prefix grey-text"></i></span>
                                    </div>
                                    <input id="email" name="email" type="email" class="form-control" title="Por ejemplo juan@hotmail.com"placeholder="Ingresa tú email" minlength="1" maxlength="50" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock prefix grey-text"></i></span>
                                    </div>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Ingresa tú contraseña" minlength="8" maxlength="16" pattern="[A-Za-z0-9]{8,16}" required>
                                </div>
                                <div class="alert alert-dismissible alert-danger">
                                    <strong>Correo electrónico y/o contraseña incorrectos.</strong>
                                </div>
                            </div>
                        <!--Fin Cuerpo Modal-->
                        <!--Inicio Pie de Modal-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" id="cancelarIS"  data-dismiss="modal">Cancelar</button>
                                <input type="submit" class="btn btn-warning" value="Iniciar Sesión" id="iniciarSesion">
                            </div>
                        </form><!--Fin Form-->
                        <!--Fin Pie de Modal-->
                    </div>
                </div>
            </div>
            <!--Fin Formulario Modal Login-->
        <!--Fin Login-->
        </div>
    </section>
    <!--BANNER-->

    <!--Noticias sobre negocios-->
    <section class="w-100 bg-primary" style=" padding-top: 80px; padding-bottom:60px;">
        <div class="container" >
            <h2 class="text-secondary">Noticias más recientes sobre negocios</h2>
            <button id="ocultarNoticias" class="btn btn-secondary">Ocultar noticias</button>
            &nbsp;
            <button id="mostrarNoticias" class="btn btn-warning">Mostrar noticias</button>
            <div style="padding-top: 20px;" class="card-columns" id="noticias">
                
            </div>
        </div>
    </section>
    <!--Fin Noticias sobre negocios-->


    <!--BLOG MOTIVACIÓN-->
    <section class="motivacion w-100">
        <div class="container">
            <!--Titulo del blog-->
            <h1>Los Mejores Consejos de Motivación para Emprendedores</h1>
                       
            <!--Introducción blog-->
            <div class="row" style="padding-top: 50px;">
                <div class="col-md-4 py-2">
                    <!--Imagen persona viendo pizarra-->
                    <img src="assets/img/pexels-photo-212286.jpeg" style="width: 100%;">
                </div>
                <div class="col-md-8" style="padding-left: 10px;">
                    <p class="lead"> <!--Lead clase de bootstrap que hace que un parrafo destaque-->
                        Por necesidad, por auténtica vocación o por oportunidad, emprender parece que está de moda. Pero, ¿te has planteado realmente qué es emprender? Dice la Real Academia de la Lengua Española que emprender es “acometer y comenzar una obra, un negocio o un empeño, especialmente si encierran dificultad o peligro”.
                    <p class="lead"> <!--Lead clase de bootstrap que hace que un parrafo destaque-->
                        Pero emprender es mucho más que eso. Es lanzarse, hacer que las ideas sucedan, apostar, ilusionarse, temer el fracaso, crecer, avanzar, no quedarse quieto, caerse, levantarse, tener incertidumbre, desear que los días tuvieran 35 horas, saborear los logros y capear las dificultades.  Emprender es una aventura en toda regla con sus luces y sus sombras pero, sobre todo, es el orgullo de poder luchar por levantar algo de la nada y el miedo por saltar al vacío.
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 py-2">
                    <!--Imagen Persona con luz de bengala-->
                    <img src="assets/img/photo-1494389945381-0fe114b8ea4b.jpg" class="img-creatividad"> <!--img-creatividad en archivo main.css-->
                </div>
                <div class="col-md-8">
                    <p class="lead">Emprender es divertido pero, no olvidemos que, también es muy duro. Por desgracia, la motivación, ganas e ilusión que siente un Emprendedor durante los dos primeros meses en los que está dando forma a su Proyecto, desaparecen al tercer mes. Es muy difícil mantener esa actitud sobre todo cuándo empezamos a ver cómo los hitos del Plan de Negocio no se cumplen.<!--Lead clase de bootstrap que hace que un parrafo destaque-->
                    <p class="lead">La motivación es intangible. A veces estamos golpeando el teclado y surge una lluvia de ideas o mientras farfullamos en el teléfono después de una comida. Especialmente durante todo el período de descanso, es difícil permanecer motivado. Estas son algunas técnicas de motivación más utilizadas:<!--Lead clase de bootstrap que hace que un parrafo destaque-->
                </div>
            </div>
            <!--Fin Introducción blog-->
            

            <div class="row" style="padding-top: 40px;">
                <div class="col-md-8">
                    <!--Lista para los consejos-->
                    <ul class="ul-tips"> <!--Clase ul-tips en main.css-->
                        <li> <!--Elementos de la lista-->
                            <h5 class="py-2">1. La inspiración necesita ser redescubierta:</h5> <!-- La clase de bootstrap py indica Padding top y bottom-->
                            <p class="lead">De hecho esa es la raíz. Para ponerse en marcha, tendrás que tener en cuenta por qué en realidad estás motivado en la posición inicial: ¿Por qué haces lo que estás haciendo?. Tal vez deseas cambiar el mundo, crear un pequeño placer, tal vez mantener a la gente feliz … lo que sea. <!--Lead clase de bootstrap que hace que un parrafo destaque-->
                        </li>
                        <li>
                            <h5 class="py-2">2. Refrescarse un poco y tomar algo de tiempo libre:</h5>
                            <p class="lead">Cambiar de escenario y salir de la rutina supone una reparación evidente, pero eficaz. Abre tu cerebro e incluso aumenta tu imaginación, revelándote nuevas ideas que en última instancia, pueden permitirte ser más innovador en tu campo. Y, ni que decir tiene que, algunas personas obtienen sus ideas más brillantes, mientras que no está trabajando de manera activa.
                            <p class="lead">En realidad, la técnica Pomodoro para la administración de la producción y el tiempo gira en torno a las pausas, que tienen lugar entre los períodos de 25 minutos de trabajo concentrado. La teoría determina que tu trabajo aumenta en eficiencia al tomar un pequeño descanso entre dichos períodos.
                            <p class="lead">El Funcionamiento continuo puede empantanar tu rendimiento mental. Una forma frecuente es invertir esos descansos en ejercicio. Puedes dar un paseo, ver una película o decidir sobre unas mini-vacaciones.</p>
                        </li>
                        <li>
                            <h5 class="py-2">3. Céntrate únicamente en las variables que se puedan controlar: </h5>
                            <p class="lead">La obsesión del comercial en, sin duda, los resultados. Se mueven por números y, muchas veces, por objetivos. Por esto, en este punto Mónica Mendoza aconseja que el profesional se centre en las variables que puede controlar y no en las que no puede controlar. "Por ejemplo, no se puede controlar vender pero sí realizar 100 llamadas de concertación en un día o sí se puede controlar el realizar bien todas las etapas de la venta y no obsesionarse tanto con la venta final", asegura Mendoza.</p>
                        </li>
                        <li>
                            <h5 class="py-2">4. Tus clientes deben ser tu máxima prioridad:</h5>
                            <p class="lead">Una gran diferencia entre las empresas online y las tiendas físicas es la conversación del cliente, lo cuál influye en la motivación. Mientras que los dueños de negocios pueden ver risas y miradas de satisfacción durante todo el día, los Emprendedores OnLine están ocupados mirando sus escritorios en la pantalla del ordenador.
                            <p class="lead">Los consumidores y las personas son muy importantes para una Startup, son los que se benefician de lo que estás creando, y mejoran tu negocio. Por lo tanto, muchos Emprendedores cambian sus sentimientos relacionados con sus consumidores para obtener así su motivación.
                        </li>
                        <li>
                            <h5 class="py-2">5. Debes tener en todo momento actitud de servicio:</h5>
                            <p class="lead">"A veces es algo que se olvida con frecuencia. Al fin y al cabo, la venta es un servicio al otro. Se está trabajando para que la otra persona disponga de un servicio que va a satisfacer su demanda. Hay que trabajar la actitud de servicio. El hecho de querer lo mejor para el interlocutor y que de por sí ya sea motivante, el poder satisfacer necesidades del otro”, continúa.</p>
                        </li>
                        <li>
                            <h5 class="py-2">6. Asumir la responsabilidad general:</h5>
                            <p class="lead">Mucha personas se sienten atraídas por el espíritu Emprendedor, debido a la independencia. Cuando la motivación se desvanece, recordándote que todo recae sobre tus hombros, que tus actividades pueden suponer el cumplimiento o la decepción en los objetivos de la Startup, puede ser muy motivador.
                            <p class="lead">Los plazos establecidos y pequeñas “penas” pueden animar, pero al final no dejan de ser malos incentivos.</p>
                        </li>
                        <li>
                            <h5 class="py-2">7. Huye de los pensamientos negativos cuando las cosas salen mal:</h5>
                            <p class="lead">"No hay que dejarse dominar por la mente cuando las cosas no van bien. En este sentido, es clave practicar el control mental, “cuando las cosas no salen como queremos tenemos tendencia a obsesionarnos, sentirnos culpables y entrar en espirales de pensamientos negativos. Hay maneras de practicar el control mental para que no sea nuestra mente negativista la que nos domine”, sigue.</p>
                        </li>
                        <li>
                            <h5 class="py-2">8. Las Aspiraciones del equipo tienen mucha importancia:</h5>
                            <p class="lead">En el caso de que pases por alto el por qué de que estés haciendo lo que estás haciendo, los miembros del equipo pueden ayudar. Al igual que tus visitantes de la web, ya que también se benefician de tus proyectos: consiguen carreras profesionales interesantes y la oportunidad de construir algo nuevo.
                        </li>
                        <li>
                            <h5 class="py-2">9. Prueba cosas diferentes:</h5>
                            <p class="lead">Las deficiencias en la motivación también puede ser la consecuencia de la atmósfera de aburrimiento que te rodea. Así que dar un cambio de imagen a tu rutina podría cambiar mucho las cosas.
                        </li>
                        <li>
                            <h5 class="py-2">10. Socializa con los demás:</h5>
                            <p class="lead">Mantenerse en contacto con los diferentes Emprendedores te animará, sobre todo cuando se está desmotivado. En particular, puede ayudarte a saber que las ventajas e inconvenientes de las Startups son completamente normales.
                        </li>
                        <li>
                            <h5 class="py-2">11. Busca oportunidades inexploradas:</h5> 
                            <p class="lead">La gente paga mucho por las cosas que realmente desean tener. En tal escenario, los productos más baratos, pueden solicitarse con el uso de las últimas tecnologías. Esto se traduce en un aumento de las oportunidades de mercado para el lanzamiento de nuevos productos que la gente pudiera realmente permitirse.
                            <p class="lead">Como ejemplo, los teléfonos móviles eran un producto de lujo en otro tiempo, pero ahora se han convertido en una necesidad con demasiados alrededor.
                        </li>
                        <li>
                            <h5 class="py-2">12. Descubre nuevas soluciones mejoradas:</h5>
                            <p class="lead"> Mantente centrado en el resultado final de lo que realmente quieres lograr. Comienza con una solución simple para empezar y luego poco a poco descubre más alternativas. En última instancia, encontrarás soluciones para casi cualquier tipo de problemas que te encuentres.
                        </li>
        
                    </ul>
                </div>
                <div class="col-md-4">
                        <!--Video de Motivación-->
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/e6ZHqzM5SHE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
                        <!--Frases motivadoras-->
                        <!--Blockquote citas en bloque, marca las citas a otros autores o documentos.-->
                        <blockquote class="blockquote text-right" style="padding-top: 20px;"> 
                            <!--mb-0 clase de bootstrap, indica el margen bottom-->
                            <p class="mb-0">"Mis cosas favoritas en la vida no cuestan dinero. Está claro que el recurso más preciado que tenemos es el tiempo"</p>
                            <footer class="blockquote-footer"><cite title="Source Title">Steve Jobs</cite></footer><!--Define the title of a work with the <cite>-->
                            <!--<footer class="blockquote-footer"> Para identificar la fuente. Envuelva el nombre de la fuente de trabajo <cite>.-->
                        </blockquote>
                        <blockquote class="blockquote text-right" style="padding-top: 20px;">
                            <p class="mb-0">"El poder de la imaginación nos hace infinitos"</p>
                            <footer class="blockquote-footer"><cite title="Source Title">John Muir</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote text-right" style="padding-top: 20px;">
                            <p class="mb-0">"Estoy convencido de que por lo menos la mitad de lo que separa a los emprendedores exitosos de los que no lo son es mera perseverancia"</p>
                            <footer class="blockquote-footer"><cite title="Source Title">Steve Jobs</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote text-right" style="padding-top: 20px; padding-bottom: 20px;">
                            <p class="mb-0">"Sueña en grande y atrévete a fallar"</p>
                            <footer class="blockquote-footer"><cite title="Source Title">Norman Vaughan</cite></footer>
                        </blockquote>

                        <!--Video de Motivación-->
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/f5oBaQ5cJS8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <blockquote class="blockquote text-right" style="padding-top: 20px;">
                            <p class="mb-0">"Toda idea nueva pasa inevitablemente por tres fases: primero es ridícula, luego es peligrosa y después… ¡todos la sabían!"</p>
                            <footer class="blockquote-footer">Victor Hugo<cite title="Source Title"></cite></footer>
                        </blockquote>
                        <blockquote class="blockquote text-right" style="padding-top: 20px;">
                            <p class="mb-0">"Conquistar el miedo es el comienzo de la riqueza"</p>
                            <footer class="blockquote-footer"><cite title="Source Title">Bertrand Russell</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote text-right" style="padding-top: 20px;">
                            <p class="mb-0">"La innovación es lo que distingue a un líder de los demás".</p>
                            <footer class="blockquote-footer"><cite title="Source Title">Steve Jobs</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote text-right" style="padding-top: 20px; padding-bottom: 20px;">
                            <p class="mb-0">"Es duro caer, pero es peor todavía no haber intentado nunca subir"</p>
                            <footer class="blockquote-footer"><cite title="Source Title">Theodore Roosevelt</cite></footer>
                        </blockquote>

                        <!--Video de Motivación-->
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/7vNKPWrC96g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <blockquote class="blockquote text-right" style="padding-top: 20px;">
                            <p class="mb-0">"Cuatro cosas hay que no vuelven más: una bala disparada, una palabra hablada, un tiempo pasado y una ocasión desaprovechada"</p>
                            <footer class="blockquote-footer"><cite title="Source Title">Proverbio árabe</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote text-right" style="padding-top: 20px;">
                            <p class="mb-0">"Si añades un poco a lo poco y lo haces así con frecuencia, pronto llegará a ser mucho"</p>
                            <footer class="blockquote-footer"><cite title="Source Title">Hesiodo</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote text-right" style="padding-top: 20px;">
                            <p class="mb-0">“He fallado una y otra vez y es por ello que he tenido éxito” </p>
                            <footer class="blockquote-footer"><cite title="Source Title">Michael Jordan</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote text-right" style="padding-top: 20px; padding-bottom: 20px;">
                            <p class="mb-0">“Mucha gente tiene ideas pero solo unos pocos deciden llevarlas a cabo hoy y no mañana” </p>
                            <footer class="blockquote-footer"><cite title="Source Title">Nolan Brsuchell</cite></footer>
                        </blockquote>
                    </div>
            </div>

            <!--Video de Motivación-->
            <div class="row" style="padding-top: 40px; padding-bottom: 40px;">
                <div class="col-md-10 mx-auto">
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/oRUtkvAKWnI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>


        </div>
    </section>
    <!--FIN BLOG MOTIVACIÓN-->

<!--INICIO FOOTER-->
    <section class="footer">
        <div class="container">
            <div class="text-center" style="padding-top: 80px; padding-bottom: 80px;"> <!--Centramos el texto con la clase text-center de bootstrap y con estilos de damos padding top y bot-->
                <h1 class="text-center" style="color: white;">¿Quieres comenzar a emprender?</h1>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#RegisterModal">¡Si quiero!</button> <!--En este botón mandamos a llamar el modal form de registrar-->
            </div>

            <div class="row">
                <div class="col-md-12 ">
                    <img src="assets/img/Dolphah Portada.jpg" class="dolphah-img"> <!--Imagen Dolphah-->
                    
                </div>
                <div class="col-md-4 mx-auto py-2 text-center"> <!--py-2 es una clas de bootstrap que que el elemento tenga un padding en todos los ejes. Mx-auto es clase de bootstrap para centrar elementos-->
                    <!--Iconos de redes sociales-->
                    <a href="https://www.facebook.com/DolphaH-925494127798592/"><i class="fab fa-facebook fa-2x" style="color:white;"></i></a><!--Icono Facebook-->
                    <a href="#"><i class="fab fa-github-square fa-2x" style="color:white;"></i> </a><!--Icono GitHub-->
                    <a href="#"> <i class="fab fa-twitter-square fa-2x" style="color:white;"></i> </a><!--Icono Twitter-->
                    <br><p></p>
                    <h6 style="color:white;"> © Luis Hernandez, Dolphah Inc. 2019</h6> <!--Derechos reservados-->
                </div>
            </div>
        </div>
    </section>
<!--FIN FOOTER-->

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
    <!--Script local app.js para tener control del Dom-->
    <script src="assets/js/index.js"></script>
    <script src="assets/js/noticias.js"></script>
<!--FIN SCRIPTS-->

</body>
</html>