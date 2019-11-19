<?php session_start(); ?>
<?php 

$conn =mysqli_connect('localhost','sneha','snehapes1!','reg_details');
if(!$conn)
	echo 'connection error';

$sql ='SELECT * FROM student';
$result =mysqli_query($conn,$sql);
$student=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
//print_r($student);
?>

<!DOCTYPE html>
<html>
<div style="font-size:20px;font-family: Verdana,sans-serif;">
<ul >
	<li>Welcome, <?php echo htmlspecialchars($_SESSION['firstname']) ?> </li></ul></div>
	<?php include('header1.php'); ?>
	<h4 class="center grey-text">Details</h4>
	<div class="container">
		<div class="row">

			<?php foreach($student as $student): ?>

				<div class="col s6 m4">
					<div class="card z-depth-0" style="width: 20rem">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($student['FirstName']); ?></h6>
							<ul class="grey-text">
							<li><b>SRN:</b><?php echo htmlspecialchars($student['SRN']); ?></li>
							<li><b>Email:</b><?php echo htmlspecialchars($student['Email']); ?></li>
							<li><b>Phone No:</b><?php echo htmlspecialchars($student['PhoneNo']); ?></li>
							<li><b>Semester:</b><?php echo htmlspecialchars($student['Semester']); ?></li>
							</ul>
							<ul class="grey-text">
								<li><b>Areas Of Interest</b></li>
								<?php foreach(explode(',', $student['Area_Of_Interest']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
							<ul class="grey-text">
								<li><b>Areas Of Expertise</b></li>
								<?php foreach(explode(',', $student['Area_Of_Expertise']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="grey-text" href="collaborate.php">COLLABORATE</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

	<?php include('footer.php'); ?>

</html>