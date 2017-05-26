$(document).ready(function(){ /* Cualquier funcionalidad que queramos agregar a la página por medio de jQuery, debe ser incluida cuando el documento está listo para recibir acciones que modifiquen el DOM de la página. */
      $('.azul').click(function(event){ /* Seleccionamos el elemento que queremos que realice la función */ 
         $('body').css('background', '#08c');/* La función a realizar añadir CSS al body previamente seleccionado */
      }); 
      $('.blanco').click(function(event){/* Seleccionamos el elemento que queremos que realice la función */ 
         $('body').css('background', '#fff');/* La función a realizar añadir CSS al body previamente seleccionado */
      }); 
}); 