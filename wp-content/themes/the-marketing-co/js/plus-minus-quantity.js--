jQuery(document).ready(function ($) {
    // Append plus and minus buttons
    $('.quantity').prepend('<span class="minus">-</span>');
    $('.quantity').append('<span class="plus">+</span>');

    // Handle plus button click
    $(document).on('click', '.plus', function () {
        var input = $(this).prev('input');
        var currentVal = parseFloat(input.val());
        if (!isNaN(currentVal)) {
            input.val(currentVal + 1);
            input.trigger('change');
        }
    });

    // Handle minus button click
    $(document).on('click', '.minus', function () {
        var input = $(this).siblings('input[type="number"]');
        var currentVal = parseFloat(input.val());
        if (!isNaN(currentVal) && currentVal > 1) {
            input.val(currentVal - 1);
            input.trigger('change');
        }
    });

    // Re-add plus and minus buttons when cart is updated
    $(document).on('updated_cart_totals', function () {
        $('.quantity:not(:has(.plus))').prepend('<span class="minus">-</span>');
        $('.quantity:not(:has(.plus))').append('<span class="plus">+</span>');
    });

    // Trigger cart recalculation when quantity is changed
    $(document).on('change', '.quantity input[type="number"]', function () {
        $(document.body).trigger('woocommerce-cart-calculate-fees');
    });

});