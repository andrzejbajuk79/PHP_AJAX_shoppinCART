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
				<div class='col-md-4'>
					<div class='panel panel-info ' style='height:270px;'>
						<div class='panel-heading' style='height:15%;'>$product4</div>
						<div class='panel-body' style='height:70%'>
							<img src='$product6' style='width:150px; height:80%'>

						</div>
						<div class='panel-heading' style='width:100%; height:15%;'>$product5
						<button  id='product' pid='$product1' style='float:right' class='btn btn-danger btn-xs $product1'>Add to Cart</button>
						</div>
					</div>

				</div>
			";
			

		}



	}


}
 ?>