<?php

if(empty($_POST["name"]) || empty($_POST["sex"]) || empty($_POST["tel_front3"]) || empty($_POST["tel_middle4"])|| empty($_POST["tel_back4"])){
	echo "<script>alert('There are some missing values')</script>";
	exit();
}

include "connectDB.php";

$name = $_POST["name"];
$sex = $_POST["sex"];
$telephone = $_POST["tel_front3"].$_POST["tel_middle4"].$_POST["tel_back4"];
$email = $_POST["email"];
$notes = $_POST["notes"];

$sql = "INSERT INTO user VALUES ('$name', '$sex', '$telephone', '$email', '$notes');";
$result = mysqli_query($DB_Link, $sql);

if(!$result){
	print(mysqli_error($DB_Link));
}

mysqli_close($DB_Link);
?>

<script type="text/javascript">
history.go(-2);
</script>