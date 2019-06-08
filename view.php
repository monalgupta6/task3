<?php
	require_once "connect.php";
	$response=array();
	$var1=mysqli_query($conn, "select * from user ") or die(mysqli_error($conn));
	if(mysqli_num_rows($var1)>0){
		while($row=mysqli_fetch_assoc($var1)){
			array_push($response,array(
			"id"=>$row["id"],
	"username"=>$row["username"],
	"email"=>$row["email"],
	"phonenumber"=>$row["phonenumber"],
	"password"=>$row["password"]));
	}
	echo json_encode($response);
}
?>

