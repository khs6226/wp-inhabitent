$(function() {
    $('.toggle').on('click', function() {
        $('.search-label').show();
        $('.search-field').focus();
    });
    $('.search-field').blur(function() {
        $('.search-label').hide();
    });
});