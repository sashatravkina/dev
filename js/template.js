$(document).ready(function() {
    $(".menu-icon-open").click(function(){
        $(".mobile-navigation").addClass("expanded");
    });
    $(".mobile-navigation .mobile-icon").click(function(){
        $(".mobile-navigation").removeClass("expanded");
    });
    $(".mobile-navigation .mobile-close").click(function(){
        $(".mobile-navigation").removeClass("expanded");
    });
});