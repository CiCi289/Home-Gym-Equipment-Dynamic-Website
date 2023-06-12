<?php 
session_start();
include('connect.php');
if (!isset($_SESSION['StaffID']))
{
   echo "<script>window.alert(Please Login First)</script>";
   echo "<script>window.location='Staff_Login.php'</script>";
   exit();
}

if (isset($_POST['btnSave']))
{
	$txtproducttypename = $_POST['txtproducttypename'];
	$query = "INSERT INTO ProductType
				(ProductTypeName)
				Values('$txtproducttypename')";
	$result = mysqli_query($connection,$query);

	if($result) 
	{
		echo "<script>window.alert('Product Type Entry Successful!')</script>";
		echo "<script>window.location='ProductType_Entry.php'</script>";
	} 
	else 
	{
		echo "<p>Error in Product Type Entry : " . mysqli_error($connection) . "</p>";
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ProductType Entry</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<form method="POST" action="ProductType_Entry.php">

		<fieldset>
			<legend>Product Type Information</legend>

			<table class="Framed-table Black-Bg">

				<tr class="Border">
					<td>Product Type Name</td>
					<td>
						<input type="text" name="txtproducttypename" required/>
					</td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="btnSave" value="Save"/>
						<input type="reset" value="Clear"/>
					</td>
				</tr>

			</table>
		</fieldset>
		
	</form>
	<form action="Staff_Panel.php">
      <input type="submit" value="Back to Staff Panel">
   </form>
</body>
</html>