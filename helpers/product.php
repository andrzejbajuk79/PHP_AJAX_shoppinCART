<?php 
if(isset($_POST['getProduct'])) {
	$prod_query = "SELECT * FROM products ORDER BY  RAND() LIMIT 0,9";
	$query2 = mysqli_query($con,$prod_query);

	if(mysqli_num_rows($query2) >0) {
		while($row = mysqli_fetch_array($query2)) {
			$product1 = $row['product_id'] ;
			$product2 = $row['product_cat'] ;
			$product3 = $row['product_brand'] ;
			$product4 = $row['product_title'] ;
			$product5 = $row['product_price'] ;
			$product6 = $row['product_image'] ;
			echo " 
			<div class='col-md-4' style='overflow:auto'>
				<div class='panel panel-info ' style='height:250px;'>
					<div class='panel-heading'>$product4</div>
					<div class='panel-body' style='height:80%'><img src='$product6' style='width:150px; height:80%'>$product4</div>
					<div class='panel-footer ' >$ $product5
					<button  pid='$product1' style='float:right' class='btn btn-danger btn-xs $product1'>Add</button>
					</div>
				</div>
			</div>


			";
			

		}

	}


}
 ?>