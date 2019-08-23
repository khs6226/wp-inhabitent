$(function() {
    const $label = $('.search-label');
    const $input = $('.search-field');
    $('.toggle').on('click', function() {
        $label.css('width', '200');
        $input.css('width', '195');
        $input.focus();
    });
    $input.blur(function() {
        $lable.css('width', '0');
        $input.css('width', '0');
    });
});