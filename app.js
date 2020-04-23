$(document).ready(function(){
    $('#search').keyup(function(e){
        let search = $('#search').val();
        $.ajax({
            url: 'buscar.php',
            type: 'POST',
            data: {search: search},
            success: function(response){
                let articulos = JSON.parse(response);
                let template = '';

                articulos.forEach(art => {
                    template += `<li>
                        ${art.nombre}
                    </li>`;
                } );

                $('#container').html(template);
            }
        });
    });
});