/*
* @Author: Timi Wahalahti
* @Date:   2019-06-03 22:07:25
* @Last Modified by:   Roni Laukkarinen
* @Last Modified time: 2020-10-13 09:35:19
*/

( function( $ ) {

  var cart = [];

  // Automatically fill hidden state based on the city field
  $('input[name="simpay_billing_address_city"]').keyup(function( event ) {
    $('input[name="simpay_billing_address_state"]').val( $(this).val() );
  });

  // Disable autocomplete
  $('.simpay-form-4535').attr('autocomplete', 'off');
  $('.simpay-form-4535 input').attr('autocomplete', 'off');

  // # LISTENERS
  // Model select
  $('.col-product .models button').on( 'click', function(e) {
    e.preventDefault();
    var modelslug = $(this).data('model-slug');

    // Set this model as active
    $(this).closest('.models').find('button').removeClass('active');
    $(this).addClass('active');

    // Change model image
    var productimage = $(this).data('image');
    var changethis = $(this).parent().parent().prev().children().find('.full-image');
    $(changethis).css("background-image", "url('" + productimage + "')");

    // Set this model sizes visible
    $(this).closest('.col-product').find('.sizes').removeClass('visible');
    $(this).closest('.col-product').find('.sizes[data-model-slug="' + modelslug + '"]').addClass('visible');

    // If model is changed again and sizes are disabled, disable add to cart button
    if ( $(this).closest('.col-product').find('.sizes.visible[data-model-slug="' + modelslug + '"] button').length > 0) {
      $(this).closest('.col-product').find('.add-to-cart').removeClass('active');
      $(this).closest('.col-product').find('.add-to-cart').prop('disabled', true);
    } else {
      $(this).closest('.col-product').find('.add-to-cart').addClass('active');
      $(this).closest('.col-product').find('.add-to-cart').prop('disabled', false);
    }

  } );

  // Size select
  $('.col-product .sizes button').on( 'click', function(e) {
    e.preventDefault();
    var instock = $(this).data('instock');

    // Set this size as active
    $(this).closest('.sizes').find('button').removeClass('active');
    $(this).addClass('active');

    // Maybe activate the cart button
    if ( ! instock ) {
      $(this).closest('.col-product').find('button.add-to-cart').addClass('disabled');
      $(this).closest('.col-product').find('button.add-to-cart').attr('disabled', 'true');
    } else {
      $(this).closest('.col-product').find('button.add-to-cart').removeClass('disabled');
      $(this).closest('.col-product').find('button.add-to-cart').prop('disabled', false);
    }
  } );

  // Add to cart
  $('body').on( 'click', '.col-product button.add-to-cart', function(e) {
    e.preventDefault();
    addToCart( $(this) );
    $('.cart').addClass('show');
  } );

  // # FUNCTIONS
  function addToCart( element ) {
    var product = element.closest('.col-product').data('product');
    var price = element.closest('.col-product').data('price');
    var productname = escape( element.closest('.col-product').data('product-name') );
    var modelname = element.closest('.col-product').find('.models button.active').data('model-name');
    var modelslug = element.closest('.col-product').find('.models button.active').data('model-slug');
    var size = element.closest('.col-product').find('.sizes.visible button.active').data('size');
    var size_instock = element.closest('.col-product').find('.sizes.visible button.active').data('instock');

    // Check if similar item is already in cart
    var cart_index = _.findIndex( cart, {
      'product': product,
      'modelslug': modelslug,
      'size': size
    } );

    if ( cart_index !== -1 ) {
      // Is in cart, check tha we have enough in stock
      if ( cart[ cart_index ].qty < size_instock ) {
        // Add qty to cart
        cart[ cart_index ].qty = cart[ cart_index ].qty + 1;
      }
    } else {
      // Add product to cart
      cart.push( {
        'product': product,
        'productname': productname,
        'modelname': modelname,
        'modelslug': modelslug,
        'size': size,
        'stock': size_instock,
        'price': price,
        'qty': 1
      } );
    }

    // Get total quantities
    var totals = 0;
    for (var i = 0; i < cart.length; i++) {
      totals += cart[i].qty;
    }

    // Get total prices
    var pricetotals = 0;
    for (var i = 0; i < cart.length; i++) {
      pricetotals += cart[i].price * cart[i].qty;
    }

    // Get total products
    var products = '';
    for (var i = 0; i < cart.length; i++) {
      products += '<span class="products">' + cart[i].qty + ' x <b>' + cart[i].productname + '</b>, malli: ' + cart[i].modelname + ' <span class="size">' + cart[i].size + '</span></span><span class="comma">, </span>';
    }

    // Add item labels to cart
    document.getElementById('totals').innerHTML = totals;
    document.getElementById('price').innerHTML = pricetotals;
    document.getElementById('products').innerHTML = products;

    // Hide empty cart text, show cart
    $('span.cart-text').css('display', 'inline');
    $('.empty-cart-text').hide();
    $('.full-cart').show();

    // Add to cart modal input fields
    var plaintext = $('.full-cart').text();

    // Input inside div class="simpay-text-wrap simpay-field-wrap"
    document.getElementById('simpay-form-4535-field-9').value = plaintext;
    document.getElementById('simpay-custom-amount-4535').value = pricetotals;
    // document.getElementById("simpay-custom-amount-4535").focus({preventScroll: true});
    // document.getElementById("simpay-4535-customer-name-4").focus({preventScroll: true});
    $( '#simpay-form-4535' ).find( '#simpay-custom-amount-4535' ).click();
  }

} )( jQuery );

// Launch Overlay from Other Buttons or Links
// Source: https://docs.wpsimplepay.com/articles/launch-overlay-externally/
( function( $ ) {
  'use strict';

  // Custom Overlay forms
  $( '#buy' ).click( function( e ) {
    e.preventDefault();
    // Input name="simpay_custom_amount"
    document.getElementById("simpay-custom-amount-4535").focus({preventScroll: true});

    // Input name="simpay_customer_name"
    document.getElementById("simpay-form-4535-field-4").focus({preventScroll: true});
    simpayAppPro.toggleOverlayForm( 4535 );
  } );

  // Stripe Checkout forms
  $( '#buy' ).click( function( e ) {
    e.preventDefault();
    $( '#simpay-form-4535' ).find( '.simpay-payment-btn' ).click();

    // Input name="simpay_custom_amount"
    $( '#simpay-form-4535' ).find( '#simpay-custom-amount-4535' ).click();
  } );

}( jQuery ) );
