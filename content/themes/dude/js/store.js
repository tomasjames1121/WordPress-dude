/*! dude2019 30-09-2019 11:57 - Digitoimisto Dude Oy (moro@dude.fi) */
!function($){var cart=[];$(".col-product .models button").on("click",function(){var modelslug=$(this).data("model-slug");$(this).closest(".models").find("button").removeClass("active"),$(this).addClass("active");var productimage=$(this).data("image"),changethis=$(this).parent().parent().prev().children().find(".full-image");$(changethis).css("background-image","url('"+productimage+"')"),$(this).closest(".col-product").find(".sizes").removeClass("visible"),$(this).closest(".col-product").find('.sizes[data-model-slug="'+modelslug+'"]').addClass("visible")}),$(".col-product .sizes button").on("click",function(){var instock=$(this).data("instock");$(this).closest(".sizes").find("button").removeClass("active"),$(this).addClass("active"),instock?($(this).closest(".col-product").find("button.add-to-cart").removeClass("disabled"),$(this).closest(".col-product").find("button.add-to-cart").prop("disabled",!1)):($(this).closest(".col-product").find("button.add-to-cart").addClass("disabled"),$(this).closest(".col-product").find("button.add-to-cart").attr("disabled","true"))}),$("body").on("click",".col-product button.add-to-cart",function(){!function(element){var product=element.closest(".col-product").data("product"),productname=element.closest(".col-product").data("product-name"),modelname=element.closest(".col-product").find(".models button.active").data("model-name"),modelslug=element.closest(".col-product").find(".models button.active").data("model-slug"),size=element.closest(".col-product").find(".sizes.visible button.active").data("size"),size_instock=element.closest(".col-product").find(".sizes.visible button.active").data("instock"),cart_index=_.findIndex(cart,{product:product,modelslug:modelslug,size:size});-1!==cart_index?cart[cart_index].qty<size_instock&&(cart[cart_index].qty=cart[cart_index].qty+1):cart.push({product:product,productname:productname,modelname:modelname,modelslug:modelslug,size:size,stock:size_instock,qty:1});for(var totals=0,i=0;i<cart.length;i++)totals+=cart[i].qty;for(var i=0;i<cart.length;i++)products='<span class="products">1 x <b>'+cart[i].productname+"</b>, malli: "+cart[i].modelname+' <span class="size">'+cart[i].size+'</span></span><span class="comma">, </span>';document.getElementById("totals").innerHTML=totals,document.getElementById("products").innerHTML+=products,$("span.cart-text").css("display","inline"),$("span.empty-cart").hide()}($(this))})}(jQuery);