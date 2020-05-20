$(document).ready(function() {
    $(".menu-icon").click(function() {
        $("aside").toggle(1000, "linear");
    });

    $("div.nombre").click(function() {
        $(".datos-usuario").slideToggle();
    });

    $(".notificaciones").click(function() {
        $(".notificacion-cliente p").slideToggle(100);
    });

})