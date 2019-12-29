$(function(){
    
    noticias = document.getElementById('noticias');
    noticias.innerHTML = "";
    let objNews ={};
    function ApiNoticias(){
        fetch('https://newsapi.org/v2/top-headlines?country=mx&category=business&apiKey=b23cd6f2642a4ecd96dbfe4df4c067b3')
        .then(res => res.json())
        .then(data => {

            for (let item of data.articles){

               noticias.innerHTML += `
                <a href="${item.url}" style="text-decoration: none;">
                    <div class="card rounded-top" style="border: none;">
                        <img src="${item.urlToImage}" class="card-img-top rounded-top" alt="${item.title}">
                        <div class="card-body">
                            <h5 class="card-title">${item.title}</h5>
                            <p class="card-text">${item.description}</p>
                            <p class="card-text"><small class="text-muted">${item.publishedAt}</small></p>
                        </div>
                    </div>
                </a>
               `
              
            }
            
        })
    }

    ApiNoticias();
    

    
    $('#ocultarNoticias').click(function(){
        $('#noticias').hide(500);
    })

    $('#mostrarNoticias').click(function(){
        $('#noticias').show(500);
    })
})