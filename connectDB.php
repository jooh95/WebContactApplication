<?php

$DB_Link = mysqli_connect("localhost", "user", "user", "my_contact");
if(mysqli_connect_errno()){
	print("Connecting to DB Server is unavailable");
	exit();
}
?>