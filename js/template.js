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
    $(".mobile-navigation .mobile-close").click(function(){
        $(".account-menu").removeClass("expanded");
    });
});

$(document).ready(function() {
    $(".account-menu-open").click(function(){
        $(".account-menu").addClass("expanded");
    });
});

jQuery(document).ready(function($) {

    var openSidebar = function(){
        $('.account-menu').addClass('expanded');
        $('.toggle-menu').addClass('expanded');
        $('#toggle-menu').addClass('toggle-close');
    }
    var closeSidebar = function(){
        $('.account-menu').removeClass('expanded');
        $('.toggle-menu').removeClass('expanded');
        $('#toggle-menu').removeClass('toggle-close');
    }

    $('.toggle-menu').click( function(event) {
        event.stopPropagation();
        if( $(this).is('.expanded') ) {
            closeSidebar();
        } else {
            openSidebar();
        }
    });

    $(document).click( function(event){
        if ( !$(event.target).closest('.account-menu').length ) {
            closeSidebar();   
        }
    });
});