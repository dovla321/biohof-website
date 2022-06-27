//acordian dropdown 

const accos = document.querySelectorAll(".accordion-main-title");


accos.forEach(acco => {
    acco.addEventListener("click",event =>{
        acco.classList.toggle("active");

        const accoBodey=acco.nextElementSibling;
        if(acco.classList.contains("active")){
            accoBodey.style.maxHeight = accoBodey.scrollHeight + "px";
        }
        else{
           accoBodey.style.maxHeight =0; 
        }
    });
});


/*$(document).ready(function() {           
                $(".ac-cow").mouseover(function() { 

                    $(".cow").addClass('bg'); 
                });
                $(".ac-cow").mouseout(function() { 
                     $(".cow").removeClass( 'bg'); 
                });
                 
            }); */










/*$(function(){

    var image= $("#acord").find('img').attr('src');

    $("acord .accordion-item").mouseover(function(){
        var currentImage = $(this).attr('data-image');

        $(this).parent().parent().parent().find('img').attr("src", currentImage);
        $("#acord img").css("opacity","1");
    });
     

     $("acord .accordion-item").mouseout(function(){
      $("#acord img").css("opacity","0");s
     });
});*/






//search bar


$(document).ready(function(){
  $(".search").click(function(){
    $(".search").toggleClass("active");
    $("input[type='text']").toggleClass("active");
  });

});





      
    











(function($) {
    "use strict";

    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 56)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });


    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });


    $('body').scrollspy({
        target: '#mainNav',
        offset: 56
    });

    $(window).on("load scroll", function(e) {
        if ($(".navbar").offset().top > 100) {
            $(".navbar").addClass("top-nav-collapse");
        } else {
            $(".navbar").removeClass("top-nav-collapse");
        }

    });


    
    
    jQuery(function($) {
        if ($(window).width() < 991) {


            $('.navbar .dropdown > a').click(function() {
                location.href = this.href;
            });

        }
    });

    $(document).ready(function() {
        $('.menu-btn button').click(function() {
            $(".navbar-collapse").toggleClass("navbar250");
            $(".c-hamburger").toggleClass("is-active");
            $(".dark-overly").toggleClass("active");
        });
        $('.menu-btn-close').click(function() {
            $(".navbar-collapse").removeClass("navbar250");
            $(".menu-btn").removeClass("active");
            $(".dark-overly").removeClass("active");

        });
        $('.navbar-nav li a').click(function() {
            var windowWidth = $(window).width();
            if (windowWidth < 768) {
                $(".navbar-collapse").removeClass("navbar250");
                $(".c-hamburger").removeClass("is-active");
                $(".dark-overly").removeClass("active");
            }
        });
    });

    $('.navbar .dropdown > a').click(function() {
        location.href = this.href;
    });



   


    $(window).on("load scroll", function(e) {
        if ($(window).scrollTop() > 500) {
            $(".to-top img").show(100);


        } else {
            $(".to-top img").hide(100);

        }
    });
    $(".to-top").click(function() {

        $("html, body").animate({ scrollTop: 0 }, 800, 'easeInOutExpo');
    });


})(jQuery);

