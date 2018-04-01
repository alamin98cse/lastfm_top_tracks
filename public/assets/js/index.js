

// skills sliders
$(document).ready(function() {
    new WOW().init();

    //accordians tab panels toggle buttons
    $('.collapse').on('shown.bs.collapse', function() {
        $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
    }).on('hidden.bs.collapse', function() {
        $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
    });


    /* Pagination start */
var triggerPagination = function(){
    $("#pagin li a").click(function() {
                
        $.get( "bands-perpage", { country: $('#country_label').text(), page: $(this).data('page') } )
          .done(function( data ) {
            $('#band-list-perpage').empty();
            $('#band-list-perpage').append(data);
            triggerPagination();
          });       
    }); 
};
   
triggerPagination();
/* Pagination end */


});
