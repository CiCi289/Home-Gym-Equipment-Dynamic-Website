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
	$txtbookingreasonname = $_POST['txtbookingreasonname'];
	$query = "INSERT INTO BookingReason
				(BookingReasonName)
				Values('$txtbookingreasonname')";
	$result = mysqli_query($connection,$query);

	if($result) 
	{
		echo "<script>window.alert('Booking Reason Entry Successful!')</script>";
		echo "<script>window.location='BookingReason_Entry.php'</script>";
	} 
	else 
	{
		echo "<p>Error in BookingReason Entry : " . mysqli_error($connection) . "</p>";
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BookingReason Entry</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<form method="POST" action="BookingReason_Entry.php">

		<fieldset>
			<legend>BookingReason Information</legend>

			<table class="Framed-table Black-Bg">

				<tr class="Border">
					<td class="Border">BookingReason Name</td>
					<td class="Border">
						<input type="text" name="txtbookingreasonname" required/>
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