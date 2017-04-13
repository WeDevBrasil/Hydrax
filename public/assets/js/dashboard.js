$(document).ready(function(){

    $('.panel-heading').find('.btn-action').click(function(){

        $(this).text($(this).text() == '-' ? '+' : '-');

        $(this).parent('.panel-heading').siblings('.panel-body').toggle();
    });
});