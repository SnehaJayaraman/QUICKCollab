<?php
session_start();

$server_name = "localhost";
$user_name = "sneha";
$pass_word = "snehapes1!";
$dbname = "reg_details";

//Creating the connection
$conn = mysqli_connect($server_name,$user_name,$pass_word,$dbname);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error()); //If connection was not established
}

$sql = "SELECT * FROM requests WHERE ";
$counter = 0;
foreach(explode(',', $_SESSION['aoi']) as $topic){
foreach(explode(" ", $topic) as $dummy)
{
        if($counter == 0){
            $sql = $sql . " upper(Area) LIKE upper('%" . $dummy . "%')";
            $counter = $counter+1;
        }
        else{
            $sql = $sql . " OR upper(Area) LIKE upper('%" . $dummy . "%')";
        }
        
}

}


/*if(mysqli_query($conn, $sql)){
            echo "Database created successfully<br>";
        }
else{
            echo "Error creating database: ". mysqli_error($conn)."<br>";
        }*/
$result = mysqli_query($conn, $sql);
$finalresult = mysqli_fetch_all($result , MYSQLI_ASSOC);
 mysqli_free_result($result);
 mysqli_close($conn);
?>

<!DOCTYPE html>
<html >
<head>

    <link rel="stylesheet" type="text/css" href="stu_display_reqcss.css" />
    <meta charset="utf-8" />
    <title>Welcome to QuickCollab</title>
    
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
     body{
         background-image:url(background.png);
     }
     
  </style>

</head>
<body>
    <p class="brand-text">Welcome, <?php echo htmlspecialchars($_SESSION['firstname']) ?> </p>
    <div class="container">
    <p class="brand-text" style="text-align:center">Display Requests</p><br>
        <table style="align:center">
            <tr>
                <th style="color:black">Name</th>
                <th style="color:black">User Type</th>
                <th style="color:black">Topic</th>
                <th style="color:black">CGPA</th>
                <th style="color:black">Student Level</th>
                <th style="color:black">Email</th>
                <th style="color:black">Area</th>
                
            <tr>
    <?php foreach($finalresult as $finalresult): ?>

        <tr>
		                <td><?php echo htmlspecialchars($finalresult['Name']); ?></td>
                        <td><?php echo htmlspecialchars($finalresult['User_Type']); ?></td>
                        <td><?php echo htmlspecialchars($finalresult['Topic']); ?></td>
                        <td><?php echo htmlspecialchars($finalresult['CGPA']); ?></td>
		                <td><?php echo htmlspecialchars($finalresult['Student_Level']); ?></td>
		                <td><?php echo htmlspecialchars($finalresult['Email']); ?></td>
                        <td><?php echo htmlspecialchars($finalresult['Area']); ?></td>
        </tr>
							
							

			<?php endforeach; ?>
</div>
</table>
    

    
</body>
</html>