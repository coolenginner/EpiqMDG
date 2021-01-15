
$(document).ready(function () {
    $('.collapse')
        .on('shown.bs.collapse', function () {
            $(this)
                .parent()
                .find(".fa-plus")
                .removeClass("fa-plus")
                .addClass("fa-minus");
        })
        .on('hidden.bs.collapse', function () {
            $(this)
                .parent()
                .find(".fa-minus")
                .removeClass("fa-minus")
                .addClass("fa-plus");
        });

    $('#account-plus').on("click", function (){
        $('#account-plus').fadeOut( 1000, function() {
            $('#accordionExample').find('.icon-green').hide();
            $( "#accordionExample" ).slideDown( 1500);
            $('#accordionExample').find('.icon-green').fadeIn(3000 );
          });
    });

    $('#billing-plus').on("click", function (){
        $('#billing-plus').fadeOut( 1000, function() {
            $('#accordionExample2').find('.icon-white').hide();
            $( "#accordionExample2" ).slideDown( 1500);
            $('#accordionExample2').find('.icon-white').fadeIn(3000 );
          });
    });

    //services
    $('#services-plus').on("click", function (){
        $('#services-plus').fadeOut( 1000, function() {
            $('#billing-plus').fadeOut( 1000, function() {
                $('#accordionExample3').find('.icon-green').hide();
                $( "#accordionExample3" ).slideDown( 1500);
                $('#accordionExample3').find('.icon-green').fadeIn(3000 );
              });
          });
    });

     $('#how-it-works-plus').on("click", function (){
        $('#how-it-works-plus').fadeOut( 1000, function() {
            $('#accordionExample4').find('.icon-white').hide();
            $( "#accordionExample4" ).slideDown( 1500);
            $('#accordionExample4').find('.icon-white').fadeIn(3000 );
          });
    });

    $('#filler-plus').on("click", function (){
        $('#filler-plus').fadeOut( 1000, function() {
            $('#accordionExample5').find('.icon-green').hide();
            $( "#accordionExample5" ).slideDown( 1500);
            $('#accordionExample5').find('.icon-green').fadeIn(3000 );
          });
    });

    $('#diet-plus').on("click", function (){
        $('#diet-plus').fadeOut( 1000, function() {
            $('#accordionExample6').find('.icon-white').hide();
            $( "#accordionExample6" ).slideDown( 1500);
            $('#accordionExample6').find('.icon-white').fadeIn(3000 );
          });
    });

});
