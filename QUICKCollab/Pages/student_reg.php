<html>
                <?php include('header.php'); ?>
<head>
<title>Web-tech</title>
<meta charset="utf-8">

<script>
        function validateForm() {
          var x = document.forms["myForm"]["pswd1"].value;
          var y=document.forms["myForm"]["pswd2"].value;
          if (x!=y) {
            alert("Password not matching");
            return false;
          }
          var sem=document.forms["myForm"]["sem"].value;
          if(isNaN(sem) || sem>8 || sem<1)
          {
              alert("Please enter a valid semester");
              return false;
          }
          var phone=document.forms["myForm"]["phone"].value;
          if(isNaN(phone) || phone.length<10 || phone.length>10)
          {
              alert("Please enter a valid phone No");
              return false;
          }
          //var year=document.forms["myForm"]["year"].value;
          //if(isNaN(year) || year.length>4 || year.length<4)
          //{
          //    alert("Please enter valid Year of join");
          //    return false;

        //}
}
       
    
</script>

</head>
<body >
    <section class="container ">
		<h4 class="center">Student Registration</h4>
    <form class="white" name="myForm" id="form1"  onsubmit="return validateForm()" action="action.php" method="POST" >
    <table>
    <tr>
        <td>
         UserName*:
        </td>
        <td>
        <input type="text" name="username" placeholder="Enter Username" required>
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
                    <input  type="text" name="fname" placeholder="Enter First Name" required>
            </td>
    </tr>
    <tr>
            <td>
                    Last Name*:
            </td>
            <td>
                    <input type="text" name="lname" placeholder="Enter Last Name" required>
            </td>
    </tr>
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
                    Mail ID:*
            </td>
            <td>
                    <input type="email" name="mailID" placeholder="Enter Mail ID" required>
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
                    Semester:*
            </td>
             <td>
        <!--<input name="sem" placeholder="Enter Semester" required>-->
                    <select class="custom-select"  name="sem" required >
                        <option selected>Select the Semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>   
                      </select>

                
                </td>
    </tr>
    <tr>
            <td>
                    Year Of Joining:
            </td>
            <td>
                    <!--<input  name="year" placeholder="Enter Year Of Join">-->
                    <select class="custom-select" name="year">
                        <option selected>Select the year of join</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                      </select>
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
			<br><input type="submit" name="submit" value="Submit" class="btn brand ">
    </div>
         
    </form>
</section>
    
</body>
<?php include('footer.php'); ?>
</html>