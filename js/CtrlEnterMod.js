 window.humhub.require('ui.additions').register('ctrlEnterSave', '.ProsemirrorEditor', function($match) {
    $match.on('keydown', function(event) {
        if(event.ctrlKey && event.key == 'Enter') {
            event.preventDefault();
            let form = event.target.closest('form');

            if(!form.length) {
                return;
            }

            let input = form.querySelector('.atwho-input');
            let lastBR = input.querySelector("p:last-child br:last-child");
            lastBR.remove();
            lastBR = input.querySelector("p:last-child br:last-child");
            lastBR.remove();

			// debugger;
            input.blur();
            form.querySelector('[type="submit"]').click();
        }
    });
});

// Show-hide search field onclick
$('#checksearch').click(function() {
    if ($(this).is(':checked')){
        $('.search-menu').show(100);
        console.log('clickshow');
	} else {
        $('.search-menu').hide(100);
        console.log('clickhide');
	}
});
$(document).click(function (e){ 
    var div = $(".checksearch"); 
    if (!div.is(e.target) && div.has(e.target).length === 0) { 
        $('.search-menu').hide();
        $('#checksearch').prop('checked', false);
        console.log('clickhide2');
    }
});