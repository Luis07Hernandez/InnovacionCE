$(function(){

    setTimeout(function(){
        $('#loader').hide();
    },2000);

    //----->Cambio de imagen del body<-----

    //Cambio de imagen en el Banner de la pagina inicio.
    var imgB = 1; //Variable auxiliar para indicar en que imagen vamos.
    setInterval(function(){ //Funcion de jquery que establece intervalos cada cierto tiempo (como un ciclo).
        $('body').css('background-image',`url(../assets/img/bg/${imgB}.jpg)`); //Seleccionamos la etiqueta body y accedemos a las propiedades css para indicar una nueva imagen "${imgB}" es la variable que indica que imagen va a cargar.
        imgB = parseInt(imgB) + parseInt(1); //Sumamos 1 a la variable que contiene la imagen que que se mostro para mostrar la siguiente imagen en el siguiente intervalo.
        if (imgB==5) imgB = 1; // Si la variable imgB es igual a 5, entonces imgB lo igualamos a 1. Es decir si ya se mostraron todas las imagenes, entonces vuelve a mostrar la primera (imgB = 1).
    },6000) //Aqui declaramos la duración del intervalo en milisegundos, lo que es igual a 6seg.

    //----->Fin Cambio de imagen del body<-----
    
})