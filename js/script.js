

$(document).ready(function() {
cat();
brand();
product();
function cat( ) {
$.ajax({
		url				:'helpers/action.php',
		method			:'post',
		data 			: {category :1 },
		success 		: function(data) {
								$('#get_cat').html(data);
		}
	});

}

function brand( ) {
$.ajax({
		url				:'helpers/action.php',
		method			:'post',
		data 			: {brand :1 },
		success			: function(data) {
							$('#get_brand').html(data);
							}
	});

}

function product( ) {
$.ajax({
		url			:'helpers/action.php',
		method		:'post',
		data 		: {getProduct :1 },
		success 	: function(data) {
						$('#get_prod').html(data);
						}
	});

}

$('body').delegate ('.category','click',function(e){
	e.preventDefault();

	var cid = $(this).attr('cid');
	
	$.ajax({
		url			:'helpers/action.php',
		method		:'post',
		data 		: {get_selected_Category :1,cat_id :cid },
		success 	: function(data) {
						$('#get_prod').html(data);
						}

	})
});

$('body').delegate ('.sel_brand','click',function(e){
	e.preventDefault();

	var bid = $(this).attr('bid');
	// alert(bid);
	$.ajax({
		url			:'helpers/add_prod_to_cart.php.php',
		method		:'post',
		data 		: {selectedBrand :1,brand_id :bid },
		success 	: function(data) {
						$('#get_prod').html(data);
						}

	})
});

$('#search_btn').click(function() {

	var keyword1 = $('#search').val();
	// alert(keyword1);
	if(keyword1 != "") {
			$.ajax({
		url			:'helpers/action.php',
		method		:'post',
		data 		: {search :1,keyword :keyword1 },
		success 	: function(data) {
						$('#get_prod').html(data);
						}

	});

	};
});



$('#signup_button').click(function(e) {
	e.preventDefault();
			$.ajax({
		url			:'helpers/register.php',
		method		:'post',
		data 		: $('form').serialize(),
		success 	: function(data) {
						$('#signup-msg').html(data);
						
						}

	});

});

$('#login').click(function(e){
e.preventDefault();
var email = $('#email').val();
var pass = $('#password').val();


$.ajax({
url			:	'helpers/login.php',
method		: 'post',
data 		: {userLogin :1, userEmail :email, userPassword : pass},
success		: function(data){
if(data == "ala ma kota i psa"){
 		window.location.href = 'profile.php';
}
 
}
});
});
$('body').delegate('#product','click',function(e) {
	e.preventDefault();
	var p_id = $(this).attr('pid');

	$.ajax({
		url : "helpers/action.php",
		method		: 'post',
		data 		: {addToProduct:1,prodId:p_id},
		success 	: function(data){
			alert(data);
		}


	});
});

	
});



console.log('ddd');
