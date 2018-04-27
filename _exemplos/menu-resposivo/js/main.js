$(document).ready(main);

var contador = 1;

function main() {
    $('.menu_bar').click(function() {
        if (contador == 1) {
            $('nav').animate({
                left: '15%'
            });
            contador = 0;
        } else {
            contador = 1;
            $('nav').animate({
                left: '100%'
            });
        }
    });

    //Mostrando e ocultando submenus

    $('.submenu').click(function() {
        $(this).children('.children').slideToggle();
    });
}