
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
        $('#account-plus').addClass('hide-click');
        $('#accordionExample').removeClass('hide-click');
    });

    $('#billing-plus').on("click", function (){
        $('#billing-plus').addClass('hide-click');
        $('#accordionExample2').removeClass('hide-click');
    });

    //services
    $('#services-plus').on("click", function (){
        $('#services-plus').addClass('hide-click');
        $('#accordionExample3').removeClass('hide-click');
    });

     $('#how-it-works-plus').on("click", function (){
        $('#how-it-works-plus').addClass('hide-click');
        $('#accordionExample4').removeClass('hide-click');
    });

    $('#filler-plus').on("click", function (){
        $('#filler-plus').addClass('hide-click');
        $('#accordionExample5').removeClass('hide-click');
    });

    $('#diet-plus').on("click", function (){
        $('#diet-plus').addClass('hide-click');
        $('#accordionExample6').removeClass('hide-click');
    });

});
