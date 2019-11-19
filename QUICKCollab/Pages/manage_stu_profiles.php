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

$sql = "SELECT FirstName,LastName,SRN FROM students  ";

$result = mysqli_query($conn,$sql);
$finalresult = mysqli_fetch_all($result , MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);







?>
<!DOCTYPE html>

<html>
<head>

    <link rel="stylesheet" type="text/css" href="manage_stu_profilescss.css" />
    <meta charset="utf-8" />
    <title>Welcome to QuickCollab</title>
    <script>
        function validateInput() {
          var srn = document.forms["myForm"]["srn"].value;
          var cgpa = document.forms["myForm"]["cgpa"].value;
            if (srn=="") {
            alert("Please fill in student SRN");
            return false;
            }
            else if (cgpa=="") {
            alert("Please fill in student CGPA");
            return false;
            }
            else if (srn=="" && cgpa=="" ) {
            alert("Please fill in all details before submitting");
            return false;
            }
}


      </script>
      
</head>
<body>
    <h4>Welcome, Admin </h4>
    <div class="container">
        <p class="heading">Display Students</p><br>
        <table class ="center">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>SRN</th>
               
            <tr>
                <?php foreach($finalresult as $finalresult): ?>

            <tr>
                <td><?php echo htmlspecialchars($finalresult['FirstName']); ?></td>
                <td><?php echo htmlspecialchars($finalresult['LastName']); ?></td>
                <td><?php echo htmlspecialchars($finalresult['SRN']); ?></td>
             </tr>   


            <?php endforeach; ?>
    </div>
    </table>

    
             
          <h4 class="center">Edit Student Details</h4>
          
              <table class="center" >
                  <tr>
                      <td>
                          SRN*:
                      </td>
                      <td>
                          <input type="text" name="srn" placeholder="Enter SRN" required>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          CGPA*:
                      </td>
                      <td>
                          <input type="text" name="cgpa" placeholder="Enter CGPA" required>
                      </td>
                  </tr>
              </table>
           
             <form name="myForm" id="form1" onsubmit="return validateInput()" action="detailsaction.php" method="POST">
             <div class="SubmitBtn">        
                 <br> <br>

                  <input  type="button" name="submit" value="Submit" >
              </div>

               

          </form>
      
     



</body>
</html>