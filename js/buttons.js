$(document).ready(function(){
    $('.button-group').on('click', 'button', function() {
       var filterValue = $(this).attr('data-filter');

       // Mostrar los elementos correspondientes y ocultar el resto
       $('.special-list .special-grid').hide();
       if (filterValue === '*') {
             $('.special-list .special-grid').show();
       } else {
             $('.special-list').find(filterValue).show();
       }

       // Agregar/Quitar clase 'active' en los botones
       $('.button-group button').removeClass('active');
       $(this).addClass('active');
    });
 });