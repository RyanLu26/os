$(document).ready(function(){

	$('.row').on('click','.view-detail',function(){

		var id = $(this).data('id');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		var discount = $(this).data('discount');
		var brand = $(this).data('brand');
		var sub = $(this).data('subcategory');
		var des = $(this).data('description');

		// alert(id+name+photo+price+discount+brand+sub+des);

		$(".pimg").attr('src',"backend/"+photo);
		$(".pname").text(name);
		$(".pprice").text(price);
		$(".pcategory").text(sub);

	})

	// add to cart

	$('.row').on('click','.cart-btn',(function(){

		var cart_id = $(this).data('cid');
		var cart_name = $(this).data('cname');
		var cart_photo = $(this).data('cphoto');
		var cart_price = $(this).data('cprice');
		var cart_discount = $(this).data('cdiscount');
		var cart_brand = $(this).data('cbrand');
		var cart_sub = $(this).data('csubcategory');
		var cart_des = $(this).data('cdescription');

		var cart_item = {

			cid:cart_id,cname:cart_name,cphoto:cart_photo,cprice:cart_price,
			cdiscount:cart_discount,cbrand:cart_brand,csubcategory:cart_sub,
			cdescription:cart_des,qty:1

		}

		alert(cart_item);

	}));

}) 