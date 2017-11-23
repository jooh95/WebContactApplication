<!DOCTYPE html>
<html>
<head>
	<title>Search Page</title>
</head>

<body>

	<header>
	
	</header>

	<section>
		<form method="post" action="searchAction.php" onsubmit="return checkInsertedData()">
			<table border="1" width="450" cellspacing="0" cellpadding="3">
				<tr>
					<td colspan="2" align="center"><font size="5">Search Contact Data</td>
				</tr>
				<tr>
					<td><font color="red">*</font>Name</td>
					<td><input type="text" name="name" id="name"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="submit" name="search" value="Submit">
					<input type="reset" name="reset" value="Rest"></td>
				</tr>
			</table>
		</form>
		
	</section>

</body>
</html>

<script type="text/javascript">
	function checkInsertedData(){
		if(document.getElementById('name').value == ""){
			alert("Please Insert the Name");
			document.getElementById('name').focus();
			return false;
		}
	}
</script>