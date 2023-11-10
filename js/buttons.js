$(document).ready(function(){
      $('.button-group button').on('click', function() {
          var filterValue = $(this).attr('data-filter');
  
          // Agregar/Quitar clase 'active' en los botones con animación
          $('.button-group button').removeClass('active');
          $(this).addClass('active');
  
          // Mostrar u ocultar las imágenes con animación
          $('.special-list .special-grid').hide();
          if (filterValue === '*') {
              $('.special-list .special-grid').fadeIn('slow');
          } else {
              $('.special-list').find(filterValue).fadeIn('slow');
          }
      });
  
      $('.image-click').on('click', function() {
          var details = $(this).attr('data-details');
          console.log(details);
      });
  });
  