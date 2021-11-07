$(document).ready(function(){

    $('#nav-menu').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $(window).on('scroll load',function(){

        $('#nav-menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        if($(window).scrollTop() > 60){
            $('header').addClass('header-active');
        }else{
            $('header').removeClass('header-active');
        }

        $('section').each(function(){

            let top = $(window).scrollTop();
            let height = $(this).height();
            let offset = $(this).offset().top - 200;
            let id = $(this).attr('id');

            if(top >= offset && top < offset + height){
                $('.navbar ul li a').removeClass('active');
                $('.navbar').find(`[href="#${id}"]`).addClass('active');
            }
            
        });

    });

});

function addToCart(proId){
    $.ajax({
        type: "POST",
        url: "system/addProductCart.php",
        data: {
            id : proId
        },
        success: function(data){
            alert("Product added!");
            $('#pCount').html(data);
        },
        error: function(e){
            alert("Something went wrong!!!");
        }
    });
}