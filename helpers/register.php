<?php 
include "database.php";


$data1 =  $_POST['f_name'];
$data2 =  $_POST['l_name'];
$data3 =  $_POST['email'];
$data4 =  $_POST['password'];
$data5 =  $_POST['repassword'];
$data6 =  $_POST['mobile'];
$data7 =  $_POST['address1'];
$data8 =  $_POST['address2'];

$name = "/^[A-Z][a-zA-Z]+$/";
// $emailVal = "/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9/+(\.[a-z]{2,4})$/";
         $emailVal =     "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
$number = "/^[0-9]+$/";

// echo $data1;

if(empty($data1) || empty($data2) || empty($data3) || empty($data4) || empty($data5) || empty($data6) || empty($data7) || empty($data8) ) {
	echo '

	   <div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert"  aria-label="close" >&times</a><b> Uzupelnij wszystkie pola</b>
                
              </div>

	';
}else {
if(!preg_match($name,$data1)) {
	echo "$data1 is not valid";
	exit();
}
if(!preg_match($name,$data2)) {
	echo "$data2 is not valid";
	exit();
}


if(!preg_match($emailVal,$data3)) {
	echo "$data3 is not valid";
	exit();
}
if(strlen($data4 <4)) {
	echo "jest za slabe";
	exit();
}
if($data5  != $data4) {
	echo "hasla nie sa identyczne";
	exit();
}
if(!preg_match($number,$data6)) {
	echo "numer telefonu $data6 nie jest prawidlowy";
	exit();
}
if(!strlen($data6 != 6)){
echo "numer telefonu powininien zawierac 6 znakow";
exit();
}

//check exist email in database
$query = "SELECT user_id FROM user_info WHERE email ='$data3' LIMIT 1";
$check_query = mysqli_query($con,$query);
$count_email = mysqli_num_rows($check_query);

if($count_email >0) {
	echo "try another email address";
	exit();
}else {
$data5= md5($data5);
$sql =" INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES (NULL, '$data1', '$data2', '$data3', '$data4', '$data5', '$data6', '$data7')";

$run_query = mysqli_query($con,$sql);

if($run_query) {
	echo "you are registerd succesfuly";
}

}


} 



 ?>