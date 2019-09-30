/*
* @Author: Timi Wahalahti
* @Date:   2019-06-03 22:07:25
* @Last Modified by:   Roni Laukkarinen
* @Last Modified time: 2019-06-07 09:11:10
*/

( function( $ ) {

  var cart = [];

  // # LISTENERS
  // Model select
  $('.col-product .models button').on( 'click', function() {
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
  $('.col-product .sizes button').on( 'click', function() {
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
  $('body').on( 'click', '.col-product button.add-to-cart', function() {
    addToCart( $(this) );
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

    // console.log( element.closest('.col-product').data('product') );
    // console.log( cart[0].model );
    // console.log( cart[0].product );
    // console.log( cart[0].qty );
    // console.log( cart[0].size );

    var totals = 0;
    for (var i = 0; i < cart.length; i++) {
      totals += cart[i].qty;
    }

    var pricetotals = 0;
    for (var i = 0; i < cart.length; i++) {
      pricetotals += cart[i].price * cart[i].qty;
    }

    var products = '';
    for (var i = 0; i < cart.length; i++) {
      products = '<span class="products">1 x <b>' + cart[i].productname + '</b>, malli: ' + cart[i].modelname + ' <span class="size">' + cart[i].size + '</span></span><span class="comma">, </span>';
    }

    document.getElementById('totals').innerHTML = totals;
    document.getElementById('price').innerHTML = pricetotals;
    document.getElementById('products').innerHTML += products;
    $('span.cart-text').css('display', 'inline');
    $('span.empty-cart').hide();
  }

} )( jQuery );
