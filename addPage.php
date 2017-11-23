<!DOCTYPE html>
<html>
<head>
	<title>Add Page</title>
</head>

<body>

	<header>
		
	</header>

	<section>
		<form method="post" action="addAction.php" onsubmit="return checkInsertedData()">
			<table border="1" width="450" cellspacing="0" cellpadding="3">
				<tr>
					<td colspan="2" align="center"><font size="5">Insert Contact Data</td>
				</tr>
				<tr>
					<td><font color="red">*</font>Name</td>
					<td><input type="text" name="name" id="name"></td>
				</tr>
				<tr>
					<td><font color="red">*</font>Sex</td>
					<td>
						<input type="radio" name="sex" value="male" class="sex" checked>Male
						<input type="radio" name="sex" value="female" class="sex">Female
					</td>
				</tr>
				<tr>
					<td><font color="red">*</font>Telehpone</td>
					<td>
						<select name="tel_front3" id="tel_front3">
							<option value="010">010</option>
							<option value="011">011</option>
							<option value="016">016</option>
							<option value="017">017</option>
							<option value="018">018</option>
							<option value="019">019</option>
						</select> -
						<input type="text" name="tel_middle4" size="4" maxlength="4" id="tel_middle4"> - 
						<input type="text" name="tel_back4" size="4" maxlength="4" id="tel_back4">
					</td>
				</tr>
				<tr>    
					<td>Email</td>
					<td><input type="email" name="email" id="email"></td>
				</tr>
				
				<tr>
					<td>Notes</td>
					<td><textarea name="notes" rows="3" cols="45"></textarea></td>
				</tr>
				<tr >
					<td colspan="2" align="center">
					<input type="submit" name="submit" value="Submit">
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

		if(document.getElementById('tel_front3').value == ""){
			alert("Please Insert the Telehpone Number");
			document.getElementById('tel_front3').focus();
			return false;
		}

		if(document.getElementById('tel_middle4').value == ""){
			alert("Please Insert the Telehpone Number");
			document.getElementById('tel_middle4').focus();
			return false;
		}

		if(document.getElementById('tel_back4').value == ""){
			alert("Please Insert the Telehpone Number");
			document.getElementById('tel_back4').focus();
			return false;
		}




	}
</script>