<html>
<body>
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
    $eventname = mysqli_real_escape_string($conn, $_POST['name']);
    $eventuser = mysqli_real_escape_string($conn, $_POST['user_type']);
    $eventdate = mysqli_real_escape_string($conn, $_POST['topic']);
    $eventtime = mysqli_real_escape_string($conn, $_POST['cgpa']);
    $location = mysqli_real_escape_string($conn, $_POST['sem']);
    $eventtype = mysqli_real_escape_string($conn, $_POST['mailID']);
    $eventarea = mysqli_real_escape_string($conn, $_POST['aoi']);
    
    // create sql
    $sql = "INSERT INTO requests(Name,User_Type,Topic,CGPA,Student_Level,Email,Area) VALUES('$eventname','$eventuser','$eventdate','$eventtime','$location','$eventtype','$eventarea')";
    // save to db and check
    if(mysqli_query($conn, $sql)){
    // success
    if($eventuser=='s')
    header('Location: events.php');
    else
    header('Location: faculty_login.php');
    } else {
    echo 'query error: '. mysqli_error($conn);
    }
    mysqli_close($conn);

    ?>
</body>
</html>