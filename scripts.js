jQuery(document).ready(function ($) {
    if( $('body.woocommerce-cart .cart').length > 0  )
    {
        $('body.woocommerce-cart .cart .cart_item .variation').each( function() {
            $(this).before(
                $('<a></a>').text('Attributes').prop('class', 'attribute-toggle').prop('href', '#')
            );
            $(this).hide();
        });

        $('body.woocommerce-cart .cart .cart_item .attribute-toggle').on('click', function() {
            $(this).next('.variation').slideToggle();
            $(this).toggleClass('active');
        });
    }
});