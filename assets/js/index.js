$(function(){ //Cuando cargue el documento, es lo mismo que $(document).ready(function(){}).

    setTimeout(function(){ //Cargador, se muestra antes de cargar toda la pagina
        $("#loader").hide();
    },2000); // Duración 2 seg.


    
//BANNER    
    
    //----->Modal Form Registrarse<-----

    
    //Botón cancelar registro
    $("#cancelar").click(function(){  //Button id=cancelar
        $("#registrarme")[0].reset(); //Borramos todos los inputs y dejamos en blanco. <form id="registrarme"></form>
        $('#passwordHelp').hide(); //Ocultamos texto de ayuda en contraseña <small id="passwordHelp"></small>
        $('#emailHelp').hide(); //Ocultamos texto de ayuda en email
        $('#passwordConfirm').html(''); //Borramos contenido de elemento <small id="passwordConfirm"></small>
    });

    //Textos de ayuda Contraseña y Correo
    $('#passwordHelp').hide();//Ocultamos texto de ayuda para contraseña al cargar el documento, por que solo se mostrara cuando demos clic.
    $('#emailHelp').hide(); //Ocultamos texto de ayuda para email al cargar el documento, por que solo se mostrara cuando demos clic.
    $('#r-contra').click(function(){
        $('#passwordHelp').show();
    }); //Cuando demos click en el input contraseña mostraremos texto ayuda en contraseña (No debe incluir caracteres especiales).
    $('#r-email').click(function(){
        $('#emailHelp').show();
    });

    //Validación de contraseñas
    function contraCoincide(){ //Funcion si la contraseña coincide
        $('#passwordConfirm').css('color','#1aac0d'); //Establecemos color verde al texto de el elemento con id #passwordConfirm
        $('#passwordConfirm').html('Las contraseñas coinciden.') //Ingresamos texto a el elemento
    };
    function contraNoCoincide(){ //Funcion si la contraseña no coincide
        $('#passwordConfirm').css('color','red'); //Establecemos color rojo al texto de el elemento con id #passwordConfirm
        $('#passwordConfirm').html("Las contraseñas no coinciden."); //Ingresamos texto a el elemento 
    }

    $('#r-confirmacontra').keyup(function(){ //Input id=r-confirmacontra. Al precionar una tecla
        if($('#r-contra').val()==$('#r-confirmacontra').val()){ //Comparamos si coincide la contraseña con la contraseña confirmada
            contraCoincide();
        }else{ //Si la comparación no se cumplio entonces 
            contraNoCoincide();
        }
        if ($('#r-confirmacontra').val()=='' && $('#r-contra').val()==''){ //Comparamos si las contraseñas se quedaron en blanco si es asi entonces...Esto es para evitar un error logico de que cuando quedan en blanco los inputs sigue mostrando mensaje "contraseñas coinciden".            contraNoCoincide(); 
            contraNoCoincide();
        }
    });

    $('#r-contra').keyup(function(){ //Input id=r-contra. Al precionar una tecla
        if ($('#r-confirmacontra').val()){ //Comparamos si Input id=r-confirmacontra contiene algo. si es asi entonces...
            if ($('#r-contra').val()==$('#r-confirmacontra').val()){ //Comparamos si las contraseñas coinciden, si es asi entonces...
                contraCoincide();
            }else{
                contraNoCoincide();
            }
        } 
  
    })


    $('#registrarme').submit(function(e){
        e.preventDefault();

        if($('#r-contra').val()==$('#r-confirmacontra').val()){
            $.ajax({
                 type: "POST",
                 url: "includesphp/registrarse.php",
                 data: $('#registrarme').serialize(),
                 success: function (response) {
                   
                    if(response=='Registrado'){
                        window.location = 'User/';
                    }else if(response=='Existe'){
                        alert("Ya existe una cuenta con esta dirección de correo eléctronico.");
                    }
                    
                 }
             });
        }

    });   
       

 


    //----->Fin Modal Form Registrarse<-----
    



    //----->Modal Form Login<-----

    $('#cancelarIS').click(function(){  //Botón cancelar inicio de sesión
        $('#login')[0].reset(); //Borramos todos los inputs y dejamos en blanco.
        $('.alert').hide();
    });

    $(".alert").hide(); //Ocultamos alerta de email y/o contraseña incorrectos al cargar el documento.

    //Ajax para el login
    
    $("#login").submit(function(e){
        e.preventDefault();
    /*    const postData = {
            email: $('#email').val(),
            password: $('#password').val(),
            //Otra opción de enviar los datos, de momento me da error.
        }; */

        $.ajax({
            type: "POST",
            url: "includesphp/login.php",
            data: $('#login').serialize(),
            success: function (response) {
                const respuesta = JSON.parse(response);
                
                if(!respuesta.error){
                    if (respuesta.tipo=='0'){
                        window.location = 'Admin/';
                    }else if (respuesta.tipo=='1'){
                        window.location = 'User/';
                    }
                }else{

                    $('.alert').show();
                    setTimeout(function(){
                        $('.alert').hide();
                    },2000)
                    
                }

            }
        });

    });
    
    //----->Fin Form Login<-----


    

   //----->Cambio de imagen del body<-----

    //Cambio de imagen en el Banner de la pagina inicio.
    var imgB = 1; //Variable auxiliar para indicar en que imagen vamos.
    setInterval(function(){ //Funcion de jquery que establece intervalos cada cierto tiempo (como un ciclo).
        $('body').css('background-image',`url(assets/img/bg/${imgB}.jpg)`); //Seleccionamos la etiqueta body y accedemos a las propiedades css para indicar una nueva imagen "${imgB}" es la variable que indica que imagen va a cargar.
        imgB = parseInt(imgB) + parseInt(1); //Sumamos 1 a la variable que contiene la imagen que que se mostro para mostrar la siguiente imagen en el siguiente intervalo.
        if (imgB==5) imgB = 1; // Si la variable imgB es igual a 5, entonces imgB lo igualamos a 1. Es decir si ya se mostraron todas las imagenes, entonces vuelve a mostrar la primera (imgB = 1).
    },6000) //Aqui declaramos la duración del intervalo en milisegundos, lo que es igual a 6seg.

    //----->Fin Cambio de imagen del body<-----

//FIN BANNER
    
    
});
   
