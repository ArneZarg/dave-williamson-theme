$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop()>=100){
            $('#desktop-menu').addClass("scrolled");
        }else{
            $('#desktop-menu').removeClass("scrolled");
        }
    })
    $('#menu-btn').click(function(){
        $('#dropdown-menu').toggleClass("show");
    })
    $(function() {
    $('body').removeClass('fade-out');
    });
})