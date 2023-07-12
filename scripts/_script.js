$(document).ready(function () {

    $('.close').on('click', e => {
        $(e.target).parent().slideUp('slow');
    })

});
