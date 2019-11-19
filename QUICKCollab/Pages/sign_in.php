<?php
    $server_name = "localhost";
    $user_name = "sneha";
    $pass_word = "snehapes1!";
    $dbname = "reg_details";

//Creating the connection
$conn = mysqli_connect($server_name,$user_name,$pass_word,$dbname);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error()); //If connection was not established
}

/*$sql = "SELECT * FROM students";
        
        if(mysqli_query($conn, $sql)){
            echo "Database created successfully<br>";
        }
else{
            echo "Error creating database: ". mysqli_error($conn)."<br>";
        }
*/

$error ="";
$result;
$username="";
$password="";
$rows = -1;


//if request method type is post
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

// if HTTP Post has a value for username and password
if(isset($_POST['username']) && isset($_POST['password'])){
            $username = mysqli_real_escape_string($conn,$_POST['username']);
             $password = mysqli_real_escape_string($conn,$_POST['password']);
    

$sql = "SELECT * FROM student WHERE Password = '$password' AND UserName = '$username'";
        $result = mysqli_query($conn, $sql);
        $finalresult = mysqli_fetch_array($result);
        //echo "FINAL: ".$finalresult['FirstName'];
        $rows = mysqli_num_rows($result);
        //echo $rows;
        if($rows == 1)
{
    
    session_start();
    $type=1;
    $_SESSION['firstname'] = $finalresult['FirstName'];
    $_SESSION['lastname'] = $finalresult['LastName'];
    $_SESSION['SRN'] = $finalresult['SRN'];
    $_SESSION['Email'] = $finalresult['Email'];
    $_SESSION['PhoneNo'] = $finalresult['PhoneNo'];
    $_SESSION['Semester'] = $finalresult['Semester'];
    $_SESSION['aoi'] = $finalresult['Area_Of_Interest'];
    $_SESSION['aoe'] = $finalresult['Area_Of_Expertise'];
}
        if($rows==1 ){
            header("Location: events.php"); //redirecting to other page
        }
        
    
        
        else{
        //mysqli_close($conn);
        $sql = "SELECT * FROM faculty WHERE Password = '$password' AND UserName = '$username'";
        $result = mysqli_query($conn, $sql);
        $finalresult = mysqli_fetch_array($result);
        //echo "FINAL: ".$finalresult;
        $rows = mysqli_num_rows($result);
       // echo $rows;
        if($rows == 1)
{ 
    session_start();
    $type=2;
    $_SESSION['firstname'] = $finalresult['FirstName'];
    $_SESSION['lastname'] = $finalresult['LastName'];
    $_SESSION['SRN'] = $finalresult['EmployeeId'];
    $_SESSION['Email'] = $finalresult['EmailID'];
    $_SESSION['PhoneNo'] = $finalresult['PhoneNo'];
    $_SESSION['aoi'] = $finalresult['Area_Of_Interest'];
    $_SESSION['aoe'] = $finalresult['Area_Of_Expertise'];
    
}
        if($rows==1 ){
            header("Location: faculty_login.php"); //redirecting to other page
        }
        
    
        else if($rows==0 && empty($finalresult)){
            $sql = "SELECT * FROM admin WHERE Password = '$password' AND UserName = '$username'";
        $result = mysqli_query($conn, $sql);
        $finalresult = mysqli_fetch_array($result);
        //echo "FINAL: ".$finalresult;
        $rows = mysqli_num_rows($result);
       // echo $rows;
        if($rows == 1)
        { 
            session_start();
            header("Location: admin_login.php");
        }
        else{
            $error = "Username or Password was not found in the database";
            echo $error;
        }
    }
}
}
}
    
?>






<html>
<head>
    <title> Welcome to Quick Collab </title>
    <link rel="stylesheet" type="text/css" href="sign_incss.css" />

</head>

<body>
    <h1> LOGIN </h1><br><br>
    <div class="imgcontainer">
    <img src="loginimage.jpg" id="loginimage">
    </div>
    <div class="login">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" placeholder="Username" name="username" id="username" required><br><br>
            <input type="password" placeholder="Password"  name="password" id="password" required> <br><br>

            <input type="submit" value="Sign in"  name = "sign_in" id="sign_in" onclick="validateForm()">
        </form>
    </div>

    <!--<script type="text/javascript">

        function mainpage() {

            location.href = "user_page.html";
        };

        function validateForm() {
            var x = document.getElementById("username").value;
            var y = document.getElementById("password").value;
            if (x == "" && y == "") {
                alert("Username and password must be filled out");
                return false;
            }
            else if (x == "") {
                alert("Username must be filled out");
                return false;
            }
            else if (y == "") {
                alert("Password must be filled out");
                return false;
            }
            else if (x != "" && y != "") {
                mainpage();
            }
        }





    </script>-->
<script type="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">

$(document).ready(function(){
$.validateForm = function()
{
var x = $("#username").val();
var y = $("#password").val();
if (x == "" && y == "") {
alert("Username and password must be filled out");
return false;
}
else if (x == "") {
alert("Username must be filled out");
return false;
}
else if (y == "") {
alert("Password must be filled out");
return false;
}
}

$("#sign_in").click($.validateForm);


});


</script>


</body>
</html>		