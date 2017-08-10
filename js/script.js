

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
		url			:'helpers/action.php',
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
})


	
});



console.log('ddd');
