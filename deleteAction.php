<?php

if(empty($_GET["telephone"])){
	echo "<script>alert('Please enter the name')</script>";
	exit();
}

include "connectDB.php";

$telephone = $_GET["telephone"];

$sql = "DELETE FROM user WHERE (telephone = '$telephone');";
$result = mysqli_query($DB_Link, $sql);

if(!$result){
	print(mysqli_error($DB_Link));
}

mysqli_close($DB_Link);
?>

<script type="text/javascript">
history.go(-2);
</script>