$(function() {
    var includes = $('[data-include]');
    jQuery.each(includes, function() {
        var file = './components/' + $(this).data('include') + '.html';
        $(this).load(file);
    });

});