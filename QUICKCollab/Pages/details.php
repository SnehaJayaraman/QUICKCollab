<?php 
	include('config.php');
	// check GET request id param
	if(isset($_GET['id'])){
		
		// escape sql chars
		$id = mysqli_real_escape_string($conn, $_GET['id']);
		// make sql
		$sql = "SELECT * FROM faculty WHERE id = $id";
		// get the query result
		$result = mysqli_query($conn, $sql);
		// fetch result in array format
		$student = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		mysqli_close($conn);
	}
?>

<!DOCTYPE html>
<html>

	
    
	<!--<div class="container center brand-text" style="font-size:1.5em;max-width: 460px;
  		margin: 20px auto;
		  padding: 20px;">-->
	<div class="card z-depth-0" style="width: 25rem">
		<div class="card-content center">
		<?php if($student): ?>
			<h4><?php echo $student['FirstName']; ?></h4>
			<p><b>Email ID:</b> <?php echo $student['EmailID']; ?></p>
			<p><b>Phone Number:</b> <?php echo $student['PhoneNo']; ?></p>
			<ul >
								<li><b>Areas Of Interest</b></li>
								<?php foreach(explode(',', $student['Area_Of_Interest']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
			</ul>
            <ul >
								<li><b>Areas Of Expertise</b></li>
								<?php foreach(explode(',', $student['Area_Of_Expertise']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
		<?php else: ?>
			<h5>No such faculty exists.</h5>
		<?php endif ?>

	</div>
	<div class="card-action right-align">
					<a class="grey-text" href="collaborate.php">Collaborate</a>
	</div>
	</div>


</html>


