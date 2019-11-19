<html>
                <?php include('header.php'); ?>
<head>
<title>Web-tech</title>

<script>
        function validateForm() {
          var x = document.forms["myForm"]["pswd1"].value;
          var y=document.forms["myForm"]["pswd2"].value;
          if (x!=y) {
            alert("Password not matching");
            return false;
          }
          
          var phone=document.forms["myForm"]["phone"].value;
          if(isNaN(phone) || phone.length<10 || phone.length>10)
          {
              alert("Please enter a valid phone No");
              return false;
          }
        }
          
</script>


</head>
<body>
<section class="container ">
        <h4 class="center">Faculty Registration</h4>
    
    <form class="white" name="myForm" id="form1" action="action1.php" method="POST" onsubmit="return validateForm()">
    <table>
    <tr>
        <td>
         UserName*:
        </td>
        <td>
        <input type="text" name="username" placeholder="Enter UserName" required>
        </td>
    </tr>
    <tr>
            <td>
                    Password*:
            </td>
            <td>
                    <input type="password" name="pswd1" placeholder="Enter Password" required>
            </td>
    </tr>
    <tr>
            <td>
                    Enter password again*:
            </td>
            <td>
                    <input type="password" name="pswd2" placeholder="Enter Password Again" required>
            </td>
    </tr>
    <tr>
            <td>
                    First Name*:
            </td>
            <td>
                    <input  type="text" name="fname" placeholder="Enter FirstName" required>
            </td>
    </tr>
    <tr>
            <td>
                    Last Name*:
            </td>
            <td>
                    <input type="text" name="lname" placeholder="Enter LastName" required>
            </td>
    </tr>
    <tr>
            <td>
                    Employee ID*:
            </td>
            <td>
                    <input type="text" name="empID" placeholder="Enter Employee ID" required>
            </td>
    </tr>
    <tr>
            <td>
                    Mail ID:*
            </td>
            <td>
                    <input type="email" name="mailID" placeholder="Enter Email ID" required>
            </td>
    </tr>
    <tr>
            <td>
                    Phone No:*
            </td>
            <td>
                    <input name="phone" placeholder="Enter Phone Number" required>
            </td>
    </tr>
    
    <tr>
            <td>
                    Area of Interest*:
            </td>
            <td>
                    <textarea rows=4 cols=50 name="aoi" placeholder="Enter comma separated interests..." required></textarea>
            </td>
    </tr>
    <tr>
            <td>
                    Areas Of Expertise*:
            </td>
            <td>
                    <textarea rows=4 cols=50 name="aoe" placeholder="Enter comma separated interests.." required></textarea>
    
            </td>
    </tr>   
    </table>
    <div class="center">
			<br>	<input type="submit" name="submit" value="Submit" class="btn brand ">
    </div>    
    </form>
</section>
</body>
<?php include('footer.php'); ?>
</html>