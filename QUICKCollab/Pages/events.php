<?php session_start(); ?>
<?php 

$conn =mysqli_connect('localhost','sneha','snehapes1!','reg_details');
if(!$conn)
	echo 'connection error';

$sql ='SELECT * FROM events';
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
    
    <link rel="stylesheet" type="text/css" href="table.css" />
    <head>
    <style type="text/css">
	  .brand{
          
		  background: white;
		  color:black;
	  }
  	.brand-text{
		  color: black !important;
		  font-size: 1.875em;
		  font-family: Verdana,sans-serif;
  	}
  	form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
      }
     
  </style>
</head>
<body>
	<br><br>
	<div class="container">
    <p class="brand-text">Upcoming Events</p><br>
        <table style="align:center">
            <tr >
                <th style="color:black"><b>Event Name</b></th>
                <th style="color:black"><b>Event Date</b></th>
                <th style="color:black"><b>Event Time</b></th>
                <th style="color:black"><b>Event Type</b></th>
                <th style="color:black"><b>Venue</b></th>
            <tr>
			<?php foreach($student as $student): ?>

				
                    <tr>
                        <td><?php echo htmlspecialchars($student['EventName']); ?></td>
                        <td><?php echo htmlspecialchars($student['EventDate']); ?></td>
                        <td><?php echo htmlspecialchars($student['EventTime']); ?></td>
                        <td><?php echo htmlspecialchars($student['EventType']); ?></td>
                        <td><?php echo htmlspecialchars($student['Venue']); ?></td>
					<tr>		
							

			<?php endforeach; ?>
        </table>
		
    </div>
    
    <br><br><br>
	<nav class="white z-depth-0">
    <div class="container">
      
      <ul id="nav-mobile" class="right hide-on-small-and-down">
		<li class="nav-item"><a href="index_student.php" class="btn brand">Collaboration with students</a></li>
        <li class="nav-item"><a href="index.php" class="btn brand">Collaboration with faculty</a></li>
        <li class="nav-item"><a href="stu_display_req.php" class="btn brand">Display Requests</a></li>
      </ul>
    </div>
  </nav><br>
</body>
    <?php include('footer.php'); ?>
    

</html>