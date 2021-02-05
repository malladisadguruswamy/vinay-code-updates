<?php
include 'config.php';

//echo '<pre>'; print_r($_POST); exit();
$fname =  $_POST["user_fname"];
$lname =  $_POST["user_lname"];
$email =  $_POST["user_email"];
$mobile = $_POST["user_mobile"];
$email  =  $_POST["user_email"];
$membership_plan =       $_POST["membership_plan"];
$membership_plan_cost =  $_POST["membership_plan_cost"];
$street =  $_POST["user_street"];
$city =    $_POST["user_city"];
$state =   $_POST["user_state"];
$country =   $_POST["user_country"];
$password =$_POST["user_pwd"];
$sfname =  $_POST["user_sfname"];
$slname =  $_POST["user_slname"];
$name_coumns = '';
$age_coumns = '';
$name_values = '';
$age_values = '';
if(isset($_POST['Child_name'])){
	foreach ($_POST['Child_name'] as $key => $value) {
		$i = $key+1;
		if($i ==3){
			continue;
		}
		$name_coumns.= ',child_name_'.$i; 
		$age_coumns.= ',child_age_'.$i;
		$name_values.= ",'".$_POST['Child_name'][$key]."'";
		$age_values.=",'".$_POST['Child_age'][$key]."'";
	}
}else{
	$name_coumns = '';$name_values = '';
	$age_coumns = '';$age_values = '';
}


$sql = "INSERT INTO tata_users (first_name, last_name, email_id, mobile_number,membership_plan_name,membership_price,password,street,city,state,country,spouse_first_name,spouse_last_name,status ".$name_coumns." ".$age_coumns." )
VALUES ('$fname', '$lname', '$email','$mobile', '$membership_plan', '$membership_plan_cost','$password','$street', '$city', '$state','$country', '$sfname', '$slname','0' ".$name_values." ".$age_values. ")";

// echo $sql; exit();
if (mysqli_query($conn, $sql)) {
  $tata_user = mysqli_insert_id($conn);
  echo json_encode(array('uid' =>  $tata_user ,'status' => 'success' ,'msg' => 'New record created successfully' ));
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
