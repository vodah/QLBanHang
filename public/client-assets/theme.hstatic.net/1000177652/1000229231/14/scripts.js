// Biến khởi tạo
var timeOut_modalCart;
var viewout = true;
var check_show_modal = true;
// Add a product and show modal cart
var add_item_show_modalCart = function(id) {
	if( check_show_modal ) {
		check_show_modal = false;
		timeOut_modalCart = setTimeout(function(){ 
			check_show_modal = true;
		}, 3000);
		if ( $('.addtocart-modal').hasClass('clicked_buy') ) {
			var quantity = $('#quantity').val();
		} else {
			var quantity = 1;
		}
		var params = {
			type: 'POST',
			url: '/cart/add.js',
			async: true,
			data: 'quantity=' + quantity + '&id=' + id,
			dataType: 'json',
			success: function(line_item) {
				if ( jQuery(window).width() >= 768 ) {
					getCartModal();					
					jQuery('#myCart').modal('show');				
					jQuery('.modal-backdrop').css({'height':jQuery(document).height(),'z-index':'99'});
				} else {
					window.location = '/cart';
				}
				$('.addtocart-modal').removeClass('clicked_buy');
			},
			error: function(XMLHttpRequest, textStatus) {
				alert('Sản phẩm bạn vừa mua đã vượt quá tồn kho');
			}

		};
		jQuery.ajax(params);
	}
}
// Modal Cart
function getCartModal(){
	var cart = null;
	jQuery('#cartform').hide();
	jQuery('#myCart #exampleModalLabel').text("Giỏ hàng");
	jQuery.getJSON('/cart.js', function(cart, textStatus) {
		if(cart)
		{
			jQuery('#cartform').show();
			jQuery('.line-item:not(.original)').remove();
			jQuery.each(cart.items,function(i,item){
				var total_line = 0;
				var total_line = item.quantity * item.price;
				tr = jQuery('.original').clone().removeClass('original').appendTo('table#cart-table tbody');
				if(item.image != null)
					tr.find('.item-image').html("<img src=" + Haravan.resizeImage(item.image,'small') + ">");
				else
					tr.find('.item-image').html("<img src='//hstatic.net/0/0/global/design/theme-default/no-image.png'>");
				vt = item.variant_options;
				if(vt.indexOf('Default Title') != -1)
					vt = '';
				tr.find('.item-title').children('a').html(item.product_title + '<br><span>' + vt + '</span>').attr('href', item.url);
				tr.find('.item-quantity').html("<input id='quantity1' name='updates[]' min='1' type='number' value=" + item.quantity + " class='' />");
				if ( typeof(formatMoney) != 'undefined' ){
					tr.find('.item-price').html(Haravan.formatMoney(total_line, formatMoney));
				}else {
					tr.find('.item-price').html(Haravan.formatMoney(total_line, ''));
				}
				tr.find('.item-delete').html("<a href='javascript:void(0);' onclick='deleteCart(" + item.variant_id + ")' ><i class='fa fa-times'></i></a>");
			});
			jQuery('.item-total').html(Haravan.formatMoney(cart.total_price, formatMoney));
			jQuery('.modal-title').children('b').html(cart.item_count);
			jQuery('.cart-number').html(cart.item_count );
			if(cart.item_count == 0){				
				jQuery('#exampleModalLabel').html('Giỏ hàng của bạn đang trống. Mời bạn tiếp tục mua hàng.');
				jQuery('#cart-view').html('<tr><td>Hiện chưa có sản phẩm</td></tr>');
				jQuery('#cartform').hide();
			}
			else{			
				jQuery('#exampleModalLabel').html('Bạn có ' + cart.item_count + ' sản phẩm trong giỏ hàng.');
				jQuery('#cartform').removeClass('hidden');
				jQuery('#cart-view').html('');
			}
			if ( jQuery('#cart-pos-product').length > 0 ) {
				jQuery('#cart-pos-product span').html(cart.item_count + ' sản phẩm');
			}
			// Get product for cart view

			jQuery.each(cart.items,function(i,item){
				clone_item(item);
			});
			jQuery('#total-view-cart').html(Haravan.formatMoney(cart.total_price, formatMoney));
		}
		else{
			jQuery('#exampleModalLabel').html('Giỏ hàng của bạn đang trống. Mời bạn tiếp tục mua hàng.');
			if ( jQuery('#cart-pos-product').length > 0 ) {
				jQuery('#cart-pos-product span').html(cart.item_count + ' sản phẩm');
			}
			jQuery('#cart-view').html('<tr><td>Hiện chưa có sản phẩm</td></tr>');
			jQuery('#cartform').hide();
		}
	});
}
//clone item cart
function clone_item(product){
	var item_product = jQuery('#clone-item-cart').find('.item_2');
	if ( product.image == null ) {
		item_product.find('img').attr('src','//hstatic.net/0/0/global/design/theme-default/no-image.png').attr('alt', product.url);
	} else {
		item_product.find('img').attr('src',Haravan.resizeImage(product.image,'small')).attr('alt', product.url);
	}
	item_product.find('a:not(.remove-cart)').attr('href', product.url).attr('title', product.url);
	item_product.find('.pro-title-view').html(product.title);
	item_product.find('.pro-quantity-view').html(product.quantity);
	item_product.find('.pro-price-view').html(Haravan.formatMoney(product.price,formatMoney));
	item_product.find('.remove-cart').html("<a href='javascript:void(0);' onclick='deleteCart(" + product.variant_id + ")' ><i class='fa fa-times'></i></a>");
	var title = '';
	if(product.variant_options.indexOf('Default Title') == -1){
		$.each(product.variant_options,function(i,v){
			title = title + v + ' / ';
		});
		title = title + '@@';
		title = title.replace(' / @@','')
		item_product.find('.variant').html(title);
	}else {
		item_product.find('.variant').html('');
	}
	item_product.clone().removeClass('hidden').prependTo('#cart-view');
}

// Delete variant in modalCart
function deleteCart(variant_id){
	var params = {
		type: 'POST',
		url: '/cart/change.js',
		data: 'quantity=0&id=' + variant_id,
		dataType: 'json',
		success: function(cart) {
			getCartModal();
		},
		error: function(XMLHttpRequest, textStatus) {
			Haravan.onError(XMLHttpRequest, textStatus);
		}
	};
	jQuery.ajax(params);
}

// Update product in modalCart
jQuery(document).on("click","#update-cart-modal",function(event){
	event.preventDefault();
	if (jQuery('#cartform').serialize().length <= 5) return;
	jQuery(this).html('Đang cập nhật');
	var params = {
		type: 'POST',
		url: '/cart/update.js',
		data: jQuery('#cartform').serialize(),
		dataType: 'json',
		success: function(cart) {
			if ((typeof callback) === 'function') {
				callback(cart);
			} else {
				getCartModal();
			}
			jQuery('#update-cart-modal').html('Cập nhật');
		},
		error: function(XMLHttpRequest, textStatus) {
			Haravan.onError(XMLHttpRequest, textStatus);
		}
	};
	jQuery.ajax(params);
});


// Cart header hover
jQuery(document).ready(function(){
	jQuery('.cart-link').hover(function() {
		jQuery('.cart-view').slideDown(200);
	}, function() {
		setTimeout(function() {
			if (viewout) jQuery('.cart-view').slideUp(200);
		}, 500)
	})
	jQuery('.cart-view').hover(function() {
		viewout = false;
	}, function() {
		viewout = true;
		jQuery('.cart-view').slideUp(100);
	})
});
/**
$(window).load(function() {
if ( jQuery(window).width() >991  ) {
	$(".leftsidebar-col").hcSticky({
		top:10
	})
}
});
**/
$(window).load(function() {
	$('.leftsidebar-col').hcSticky({
		responsive: true,
		bottomEnd: 5,
		innerTop: -10,
		offResolutions: [-991]  
	}); 
}); 

//mobile toggle menu 
jQuery(document).ready(function(){
	if ( jQuery(window).width() < 1200  ) {
		jQuery('.shop-by-content').on("click",".filter-box p",function(){
			if ( $(this).attr('aria-expanded') == 'true' ) {
				$(this).attr('aria-expanded','false');
				$(this).parent().children('ul').slideUp();
			} else {
				$(this).attr('aria-expanded','true');
				$(this).parent().children('ul').slideDown();
			}
		});
		jQuery('.btn-navbar-collection').click(function() {

			var chk = 0;
			if ( $('#navbar-inner').hasClass('navbar-inactive') && ( chk==0 ) ) {
				$('#navbar-inner').removeClass('navbar-inactive');
				$('#navbar-inner').addClass('navbar-active');
				$('#cssmenu').css('display','block');
				chk = 1;
			}
			if ($('#navbar-inner').hasClass('navbar-active') && ( chk==0 ) ) {
				$('#navbar-inner').removeClass('navbar-active');
				$('#navbar-inner').addClass('navbar-inactive');			
				$('#cssmenu').css('display','none');
				chk = 1;
			}
			//$('#ma-mobilemenu').slideToggle();
		}); 
		jQuery('.filter-title-coll').click(function() {

			var chk = 0;
			if ( $('#filter-shop-by').hasClass('navbar-inactive') && ( chk==0 ) ) {
				$('#filter-shop-by').removeClass('navbar-inactive');
				$('#filter-shop-by').addClass('navbar-active');
				$('#tags-filter-content').css('display','block');
				chk = 1;
			}
			if ($('#filter-shop-by').hasClass('navbar-active') && ( chk==0 ) ) {
				$('#filter-shop-by').removeClass('navbar-active');
				$('#filter-shop-by').addClass('navbar-inactive');			
				$('#tags-filter-content').css('display','none');
				chk = 1;
			}
			//$('#ma-mobilemenu').slideToggle();
		}); 


	}

})

jQuery(document).ready(function(){

	$("select.loc_on_change").change(function(){
		if($(this).attr("value") == "#") return false;
		window.location = $(this).attr("value");
	});

	
	 });
	 //focus email footer

	 jQuery(document).on("change",".group-input #contact_email", function(){
		 var e = jQuery(this);
		 "hidden" != e.attr("type") && e.toggleClass("not-empty", "" != e.val())

	 });



	 jQuery(document).ready(function($){



		 $("nav.mobile select").change(function(){ window.location = jQuery(this).val(); });
		 $('#product .thumbs a').click(function(){
			 
			 $('#placeholder').attr('href', $(this).attr('href'));
				$('#placeholder img').attr('src', $(this).attr('data-original-image'))
				
				$('#zoom-image').attr('href', $(this).attr('href'));
				 return false;
				});

				$('input[type="submit"], input.btn, button').click(function(){ // remove ugly outline on input button click
					$(this).blur();
				})

				$("li.dropdown").hover(function(){
					$(this).children('.dropdown').show();
					$(this).children('.dropdown').stop();
					$(this).children('.dropdown').animate({
						opacity: 1.0
					}, 200);
				}, function(){
					$(this).children('.dropdown').stop();
					$(this).children('.dropdown').animate({
						opacity: 0.0
					}, 400, function(){
						$(this).hide();
					});
				});

			 }); // end document ready

			 /* jQuery css bezier animation support -- Jonah Fox */

			 ;(function($){

				 $.path = {};

				 var V = {
					 rotate: function(p, degrees) {
						 var radians = degrees * Math.PI / 180,
								 c = Math.cos(radians),
								 s = Math.sin(radians);
						 return [c*p[0] - s*p[1], s*p[0] + c*p[1]];
					 },
					 scale: function(p, n) {
						 return [n*p[0], n*p[1]];
					 },
					 add: function(a, b) {
						 return [a[0]+b[0], a[1]+b[1]];
					 },
					 minus: function(a, b) {
						 return [a[0]-b[0], a[1]-b[1]];
					 }
				 };

				 $.path.bezier = function( params, rotate ) {
					 params.start = $.extend( {angle: 0, length: 0.3333}, params.start );
					 params.end = $.extend( {angle: 0, length: 0.3333}, params.end );

					 this.p1 = [params.start.x, params.start.y];
					 this.p4 = [params.end.x, params.end.y];

					 var v14 = V.minus( this.p4, this.p1 ),
							 v12 = V.scale( v14, params.start.length ),
							 v41 = V.scale( v14, -1 ),
							 v43 = V.scale( v41, params.end.length );

					 v12 = V.rotate( v12, params.start.angle );
					 this.p2 = V.add( this.p1, v12 );

					 v43 = V.rotate(v43, params.end.angle );
					 this.p3 = V.add( this.p4, v43 );

					 this.f1 = function(t) { return (t*t*t); };
					 this.f2 = function(t) { return (3*t*t*(1-t)); };
					 this.f3 = function(t) { return (3*t*(1-t)*(1-t)); };
					 this.f4 = function(t) { return ((1-t)*(1-t)*(1-t)); };

					 /* p from 0 to 1 */
					 this.css = function(p) {
						 var f1 = this.f1(p), f2 = this.f2(p), f3 = this.f3(p), f4=this.f4(p), css = {};
						 if (rotate) {
							 css.prevX = this.x;
							 css.prevY = this.y;
						 }
						 css.x = this.x = ( this.p1[0]*f1 + this.p2[0]*f2 +this.p3[0]*f3 + this.p4[0]*f4 +.5 )|0;
						 css.y = this.y = ( this.p1[1]*f1 + this.p2[1]*f2 +this.p3[1]*f3 + this.p4[1]*f4 +.5 )|0;
						 css.left = css.x + "px";
						 css.top = css.y + "px";
						 return css;
					 };
				 };

				 $.path.arc = function(params, rotate) {
					 for ( var i in params ) {
						 this[i] = params[i];
					 }

					 this.dir = this.dir || 1;

					 while ( this.start > this.end && this.dir > 0 ) {
						 this.start -= 360;
					 }

					 while ( this.start < this.end && this.dir < 0 ) {
						 this.start += 360;
					 }

					 this.css = function(p) {
						 var a = ( this.start * (p ) + this.end * (1-(p )) ) * Math.PI / 180,
								 css = {};

						 if (rotate) {
							 css.prevX = this.x;
							 css.prevY = this.y;
						 }
						 css.x = this.x = ( Math.sin(a) * this.radius + this.center[0] +.5 )|0;
						 css.y = this.y = ( Math.cos(a) * this.radius + this.center[1] +.5 )|0;
						 css.left = css.x + "px";
						 css.top = css.y + "px";
						 return css;
					 };
				 };

				 $.fx.step.path = function(fx) {
					 var css = fx.end.css( 1 - fx.pos );
					 if ( css.prevX != null ) {
						 $.cssHooks.transform.set( fx.elem, "rotate(" + Math.atan2(css.prevY - css.y, css.prevX - css.x) + ")" );
					 }
					 fx.elem.style.top = css.top;
					 fx.elem.style.left = css.left;
				 };

			 })(jQuery);


			 function getCartAjax(){
				 var cart = null;
				 $('#cartform').hide();
				 $('#myCart #exampleModalLabel').text("Giỏ hàng");
				 jQuery.getJSON('/cart.js', function(cart, textStatus) {
					 if(cart)
					 {
						 $('#cartform').show();
						 $('.line-item:not(.original)').remove();
						 $.each(cart.items,function(i,item){
							 var total_line = 0;
							 var total_line = item.quantity * item.price;
							 tr = $('.original').clone().removeClass('original').appendTo('table#cart-table tbody');
							 if(item.image != null)
								 tr.find('.item-image').html("<img src=" + Haravan.resizeImage(item.image,'small') + ">");
							 else
								 tr.find('.item-image').html("<img src='//hstatic.net/0/0/global/design/theme-default/no-image.png'>");
							 vt = item.variant_options;
							 if(vt.indexOf('Default Title') != -1)
								 vt = '';
							 tr.find('.item-title a').html(item.product_title + '<br><span>' + vt + '</span>').attr('href', item.url);
							 tr.find('.item-quantity').html("<input id='quantity1' name='updates[]' min='1' type='number' value=" + item.quantity + " class='' />");
							 if ( typeof(formatMoney) != 'undefined' ){
								 tr.find('.item-price').html(Haravan.formatMoney(total_line, formatMoney));
							 }else {
								 tr.find('.item-price').html(Haravan.formatMoney(total_line, ''));
							 }
							 tr.find('.item-delete').html("<a href='#' onclick='deleteCart(" + item.variant_id + ")' >Xóa</a>");
						 });
						 if ( typeof(formatMoney) != 'undefined' ){
							 $('.item-total').html(Haravan.formatMoney(cart.total_price, formatMoney));
						 }else {
							 $('.item-total').html(Haravan.formatMoney(cart.total_price, ''));
						 }
						 $('.modal-title b').html(cart.item_count);
						 $('*[id=cart-count]').html(cart.item_count);
						 if(cart.item_count == 0){
							 //$('#myCart button').attr('disabled', '');
							 $('#myCart #cartform').addClass('hidden');
							 $('#myCart #exampleModalLabel').html('Giỏ hàng của bạn đang trống. Mời bạn tiếp tục mua hàng.');
						 }
						 else{
							 $('#myCart #exampleModalLabel').html('Bạn có ' + cart.item_count + ' sản phẩm trong giỏ hàng.');
							 $('#myCart #cartform').removeClass('hidden');
							 $('#myCart button').removeAttr('disabled');
						 }

					 }
					 else{
						 $('#myCart #exampleModalLabel').html('Giỏ hàng của bạn đang trống. Mời bạn tiếp tục mua hàng.');
						 $('#cartform').hide();
					 }
				 });

			 }
			 $(document).ready(function(){
				 $('#cart-target a').click(function(event){
					 event.preventDefault() ;
					 getCartAjax();

					 $('#myCart').modal('show');
					 $('.modal-backdrop').css({'height':$(document).height(),'z-index':'99'});
				 });
				 $('a[data-spy=scroll]').click(function(){
					 event.preventDefault() ;
					 $('body').animate({scrollTop: ($($(this).attr('href')).offset().top - 20) + 'px'}, 500);
				 })

			 });
			 /**
			 function deleteCart(variant_id){
				 var params = {
					 type: 'POST',
					 url: '/cart/change.js',
					 data: 'quantity=0&id=' + variant_id,
					 dataType: 'json',
					 success: function(cart) {
						 getCartAjax();
					 },
					 error: function(XMLHttpRequest, textStatus) {
						 Haravan.onError(XMLHttpRequest, textStatus);
					 }
				 };
				 jQuery.ajax(params);
			 }

**/
			 $('#checkout').click(function(){
				 $('#cartform').submit();
			 })
			 // The following piece of code can be ignored.
			 $(function(){
				 $(window).resize(function() {
					 $('#info').text("Page width: "+$(this).width());
				 });
				 $(window).trigger('resize');
			 });

			 $(document).ready(function(){
				 jQuery(window).scroll(function() {
					 if ($(this).scrollTop() > 100) {
						 $('.scrollToTop').addClass('show');
					 } else {
						 $('.scrollToTop').removeClass('show');
					 }
				 });

				 //Click event to scroll to top
				 jQuery('.scrollToTop').on('click', function(){
					 jQuery("html, body").animate({ scrollTop: 0 }, "slow");
				 });
			 })