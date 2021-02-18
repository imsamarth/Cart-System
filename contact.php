<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con, 'gym_contact');


$name = $_POST['name'];
$mobile = $_POST['email'];
$place = $_POST['mobile'];
$description = $_POST['description'];


$query = "insert into contact (name, email, mobile, description) values ('$name', '$email', '$mobile', '$description')";


mysqli_query($con,$query);



?>