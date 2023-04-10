jQuery(document).ready(function ($) {
    console.log('Quantity box script loaded.');

    // Append plus and minus buttons
    $('.quantity').prepend('<span class="minus">-</span>');
    $('.quantity').append('<span class="plus">+</span>');

    // Handle plus button click
    $('.plus').click(function () {
        var currentVal = parseFloat($(this).prev('input').val());
        if (!isNaN(currentVal)) {
            $(this).prev('input').val(currentVal + 1);
        }
    });

    // Handle minus button click
    $('.minus').click(function () {
        console.log('Minus button clicked.');
        var currentVal = parseFloat($(this).siblings('input[type="number"]').val());
        if (!isNaN(currentVal) && currentVal > 1) {
          $(this).siblings('input[type="number"]').val(currentVal - 1);
        }
    });  


    // Append CSS styles
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


    //walker menu

});