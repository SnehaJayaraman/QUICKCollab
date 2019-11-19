<?php session_start(); ?>
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
	<div class="container"><br><br><br><br><br><br><br>
	<nav class="white z-depth-0">
    <div class="container">
      
      <ul id="nav-mobile" class="right hide-on-small-and-down">
		<li class="nav-item"><a href="index_student.php" class="btn brand">Collaboration with students</a></li>
        <li class="nav-item"><a href="faculty_display_req.php" class="btn brand">Display Requests</a></li>
      </ul>
    </div>
  </nav><br><br><br><br><br><br><br><br>
  </div>
</body>
  <?php include('footer.php'); ?>

</html>