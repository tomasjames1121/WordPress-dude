/*! dude 14-07-2020 15:03 - Digitoimisto Dude Oy (moro@dude.fi) */
!function($){var cart=[];$('input[name="simpay_billing_address_city"]').keyup(function(event){$('input[name="simpay_billing_address_state"]').val($(this).val())}),$(".simpay-form-4535").attr("autocomplete","off"),$(".simpay-form-4535 input").attr("autocomplete","off"),$(".col-product .models button").on("click",function(e){e.preventDefault();var modelslug=$(this).data("model-slug");$(this).closest(".models").find("button").removeClass("active"),$(this).addClass("active");var productimage=$(this).data("image"),changethis=$(this).parent().parent().prev().children().find(".full-image");$(changethis).css("background-image","url('"+productimage+"')"),$(this).closest(".col-product").find(".sizes").removeClass("visible"),$(this).closest(".col-product").find('.sizes[data-model-slug="'+modelslug+'"]').addClass("visible"),$(this).closest(".col-product").find('.sizes.visible[data-model-slug="'+modelslug+'"] button').length>0?($(this).closest(".col-product").find(".add-to-cart").removeClass("active"),$(this).closest(".col-product").find(".add-to-cart").prop("disabled",!0)):($(this).closest(".col-product").find(".add-to-cart").addClass("active"),$(this).closest(".col-product").find(".add-to-cart").prop("disabled",!1))}),$(".col-product .sizes button").on("click",function(e){e.preventDefault();var instock=$(this).data("instock");$(this).closest(".sizes").find("button").removeClass("active"),$(this).addClass("active"),instock?($(this).closest(".col-product").find("button.add-to-cart").removeClass("disabled"),$(this).closest(".col-product").find("button.add-to-cart").prop("disabled",!1)):($(this).closest(".col-product").find("button.add-to-cart").addClass("disabled"),$(this).closest(".col-product").find("button.add-to-cart").attr("disabled","true"))}),$("body").on("click",".col-product button.add-to-cart",function(e){e.preventDefault(),function(element){var product=element.closest(".col-product").data("product"),price=element.closest(".col-product").data("price"),productname=escape(element.closest(".col-product").data("product-name")),modelname=element.closest(".col-product").find(".models button.active").data("model-name"),modelslug=element.closest(".col-product").find(".models button.active").data("model-slug"),size=element.closest(".col-product").find(".sizes.visible button.active").data("size"),size_instock=element.closest(".col-product").find(".sizes.visible button.active").data("instock"),cart_index=_.findIndex(cart,{product:product,modelslug:modelslug,size:size});-1!==cart_index?cart[cart_index].qty<size_instock&&(cart[cart_index].qty=cart[cart_index].qty+1):cart.push({product:product,productname:productname,modelname:modelname,modelslug:modelslug,size:size,stock:size_instock,price:price,qty:1});for(var totals=0,i=0;i<cart.length;i++)totals+=cart[i].qty;for(var pricetotals=0,i=0;i<cart.length;i++)pricetotals+=cart[i].price*cart[i].qty;for(var products="",i=0;i<cart.length;i++)products+='<span class="products">'+cart[i].qty+" x <b>"+cart[i].productname+"</b>, malli: "+cart[i].modelname+' <span class="size">'+cart[i].size+'</span></span><span class="comma">, </span>';document.getElementById("totals").innerHTML=totals,document.getElementById("price").innerHTML=pricetotals,document.getElementById("products").innerHTML=products,$("span.cart-text").css("display","inline"),$(".empty-cart-text").hide(),$(".full-cart").show();var plaintext=$(".full-cart").text();document.getElementById("simpay-4535-text-8").value=plaintext,document.getElementById("simpay-custom-amount-4535").value=pricetotals,$("#simpay-form-4535").find("#simpay-custom-amount-4535").click()}($(this)),$(".cart").addClass("show")})}(jQuery),function($){"use strict";$("#buy").click(function(e){e.preventDefault(),document.getElementById("simpay-custom-amount-4535").focus({preventScroll:!0}),document.getElementById("simpay-4535-customer-name-4").focus({preventScroll:!0}),simpayAppPro.toggleOverlayForm(4535)}),$("#buy").click(function(e){e.preventDefault(),$("#simpay-form-4535").find(".simpay-payment-btn").click(),$("#simpay-form-4535").find("#simpay-custom-amount-4535").click()})}(jQuery);