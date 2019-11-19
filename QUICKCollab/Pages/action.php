<html>
<body>
<?php 
    include('config.php');

/*UserName <?php echo $_POST["username"]; ?><br>
Password: <?php echo $_POST["pswd1"]; ?><br>
Confirm Password: <?php echo $_POST["pswd2"]; ?><br>
First Name: <?php echo $_POST["fname"]; ?><br>
Last Name: <?php echo $_POST["lname"]; ?><br>
SRN: <?php echo $_POST["srn"]; ?><br>
Mail ID: <?php echo $_POST["mailID"]; ?><br>
Phone: <?php echo $_POST["phone"]; ?><br>
Sem: <?php echo $_POST["sem"]; ?><br>
Year Of Join: <?php echo $_POST["year"]; ?><br>
Area Of Interest: <?php echo $_POST["aoi"]; ?><br>
Area Of Expertise: <?php echo $_POST["aoe"]; ?><br>*/
$username = mysqli_real_escape_string($conn, $_POST['username']);
$pswd1 = mysqli_real_escape_string($conn, $_POST['pswd1']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$srn = mysqli_real_escape_string($conn, $_POST['srn']);
$mailID= mysqli_real_escape_string($conn, $_POST['mailID']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$sem = mysqli_real_escape_string($conn, $_POST['sem']);
$year= mysqli_real_escape_string($conn, $_POST['year']);
$aoi = mysqli_real_escape_string($conn, $_POST['aoi']);
$aoe = mysqli_real_escape_string($conn, $_POST['aoe']);
			// create sql
$sql = "INSERT INTO student(UserName,Password,FirstName,LastName,SRN,Email,PhoneNo,Semester,year_join,Area_Of_Interest,Area_Of_Expertise) VALUES('$username','$pswd1','$fname','$lname','$srn','$mailID','$phone','$sem','$year','$aoi','$aoe')";
			// save to db and check
if(mysqli_query($conn, $sql)){
				// success
				header('Location: trial1.html');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}

?>
</body>
</html>