jQuery(document).ready(function($) {
    console.log('Quantity box script loaded.');
    $('.quantity').prepend('<span class="minus">-</span>');
    $('.quantity').append('<span class="plus">+</span>');
    $('.plus').click(function() {
        //console.log('Plus button clicked.');
        var currentVal = parseFloat($(this).prev('input').val());
        if (!isNaN(currentVal)) {
            $(this).prev('input').val(currentVal + 1);
        }
    });
    $('.minus').click(function() {
        //console.log('Minus button clicked.');
        var currentVal = parseFloat($(this).next('input').val());
        if (!isNaN(currentVal)) {
            $(this).next('input').val(currentVal - 1);
        }
    });

    // Add styles for the plus and minus buttons
    $('.quantity').css('position', 'relative');
    $('.quantity input').css('text-align', 'center');
    $('.quantity .plus, .quantity .minus').css({
        'position': 'absolute',
        'top': '50%',
        'transform': 'translateY(-50%)',
        'font-size': '16px',
        'cursor': 'pointer'
    });
    $('.quantity .minus').css('left', '10px');
    $('.quantity .plus').css('right', '10px');
});
