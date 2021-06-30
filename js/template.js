$(document).ready(function () {
    $(".menu-icon-open").click(function () {
        $(".mobile-navigation").addClass("expanded");
    });
    $(".mobile-navigation .mobile-icon").click(function () {
        $(".mobile-navigation").removeClass("expanded");
    });
    $(".mobile-navigation .mobile-close").click(function () {
        $(".mobile-navigation").removeClass("expanded");
        $('.account-menu').removeClass('expanded');
        $('.toggle-menu').removeClass('expanded');
        $('#toggle-menu').removeClass('toggle-close');
    });
});

$(document).ready(function () {
    $(".account-menu-open").click(function () {
        $(".account-menu").addClass("expanded");
    });
});

jQuery(document).ready(function ($) {

    var openSidebar = function () {
        $('.account-menu').addClass('expanded');
        $('.toggle-menu').addClass('expanded');
        $('#toggle-menu').addClass('toggle-close');
    }
    var closeSidebar = function () {
        $('.account-menu').removeClass('expanded');
        $('.toggle-menu').removeClass('expanded');
        $('#toggle-menu').removeClass('toggle-close');
    }

    $('.toggle-menu').click(function (event) {
        event.stopPropagation();
        if ($(this).is('.expanded')) {
            closeSidebar();
        } else {
            openSidebar();
        }
    });

    $(document).click(function (event) {
        if (!$(event.target).closest('.account-menu').length) {
            closeSidebar();
        }
    });
});
$('.sidebar .topbar-frame .topbar').scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('.account-menu').removeClass('expanded');
        $('.toggle-menu').removeClass('expanded');
        $('#toggle-menu').removeClass('toggle-close');
    }
});

/* Apple fix */

function setDocHeight() {
    document.documentElement.style.setProperty('--vh', `${window.innerHeight/100}px`);
};

window.addEventListener('resize', function () {
    setDocHeight();
});
window.addEventListener('orientationchange', function () {
    setDocHeight();
});

setDocHeight();