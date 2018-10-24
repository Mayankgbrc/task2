<?php
	$conn=new mysqli("localhost","root","","task");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$pass = $_POST['pass'];
	$passmd = md5($pass);
	$sql ="INSERT INTO user(name,email,dob,pass) VALUES('$name','$email','$dob','$passmd')";
	if($conn->query($sql)===TRUE){
		echo "Registration Successful";
	}
	else{
		echo "Error";
	}
?>