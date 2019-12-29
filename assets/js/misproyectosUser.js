$(function(){
    setTimeout(function(){
        $('#loader').hide();
    },2000);

    //Variable bandera
    let edit = false;

    //Cargamos funcion cargar proyectos al iniciar el documento.
    fetchProyectos();
    
    // Funcion para cargar proyectos...
    function fetchProyectos(){
        $.ajax({
            type: 'GET',
            url: '../includesphp/cargarProyectosUser.php',
            success: function (response) {
                const proyectos = JSON.parse(response);
                let list='';
                proyectos.forEach(proyecto => {
                    list += `
                        <tr proyectoId="${proyecto.id}">
                            <td>${proyecto.name}</td>
                            <td>${proyecto.description}</td>
                            <td>
                                <button class="btn btn-sm my-2 btn-danger proyecto-eliminar">Eliminar</button>
                                <button class="btn btn-sm my-2 btn-success proyecto-editar">Editar</button>
                            </td>
                        </tr>
                    
                    `
                });
                $('#proyectos').html(list);
            }
        });
        
    }
    
    //Funcion Agregar Proyectos
    $('#proyecto-form').submit(e => {
        e.preventDefault();

        const postData = {
            name: $('#name').val(),
            description: $('#description').val(),
            id: $('#proyectoId').val()
        }

        const url = edit === false ? '../includesphp/registrarProyecto.php' : '../includesphp/editarProyecto.php';

        $.post(url, postData, (response) => {

            console.log(response);
            $('#proyecto-form').trigger('reset');
            fetchProyectos();
            edit = false;
        });

    })

    //Obtener un proyecto por ID
    $(document).on('click', '.proyecto-editar', (e) => {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr('proyectoId');
        $.post('../includesphp/proyecto-single.php', {id}, (response) => {
            const proyecto = JSON.parse(response);
            $('#name').val(proyecto.name);
            $('#description').val(proyecto.description);
            $('#proyectoId').val(proyecto.id);
            edit=true;
        })
        e.preventDefault();
    })


    //Eliminar Proyecto
    $(document).on('click', '.proyecto-eliminar', (e) => {
        if(confirm('¿Confirmas eliminar este elemento')){
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr('proyectoId');

            $.post('../includesphp/eliminar-proyecto.php', {id} , (response) => {
                console.log(response);
                fetchProyectos();
            })
        }
        

    })


})