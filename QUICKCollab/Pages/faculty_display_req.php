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

$sql = "SELECT * FROM requests WHERE (User_Type ='S') AND (";
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
//concatenate the last matching bracket
$sql = $sql . ")" ;


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
<html>
<head>

    <link rel="stylesheet" type="text/css" href="faculty_display_reqcss.css" />
    <meta charset="utf-8" />
    <title>Welcome to QuickCollab</title>
    <style>
    body{
        background-image:url(background.png);
    }
    </style>
</head>
<body>
    <h4>Welcome, <?php echo htmlspecialchars($_SESSION['firstname']) ?> </h4>
    <div class="container">
        <p class="heading">Display Requests</p><br>
        <table class="center">
            <tr>
                <th>Name</th>
                <th>Topic</th>
                <th>CGPA</th>
                <th>Student Level</th>
                <th>Email</th>
                <th>Area</th>

            <tr>
                <?php foreach($finalresult as $finalresult): ?>

            <tr>
                <td><?php echo htmlspecialchars($finalresult['Name']); ?></td>
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