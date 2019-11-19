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
    $eventname = mysqli_real_escape_string($conn, $_POST['eventname']);
    $eventdate = mysqli_real_escape_string($conn, $_POST['eventdate']);
    $eventtime = mysqli_real_escape_string($conn, $_POST['eventtime']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $eventtype = mysqli_real_escape_string($conn, $_POST['eventtype']);
    
    // create sql
    $sql = "INSERT INTO events(EventName,EventDate,EventTime,Venue,EventType) VALUES('$eventname','$eventdate','$eventtime','$location','$eventtype')";
    // save to db and check
    if(mysqli_query($conn, $sql)){
    // success
    header('Location: admin_login.php');
    } else {
    echo 'query error: '. mysqli_error($conn);
    }
    mysqli_close($conn);

    ?>
</body>
</html>