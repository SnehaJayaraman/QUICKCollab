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
    <section class="container grey-text">
		<h4 class="center">Student Registration</h4>
    <form class="white" name="myForm" id="form1"  onsubmit="return validateForm()" action="action.php" method="POST" >
    
    
        <label>
         UserName*:
        </label>
        
        <input type="text" name="username" placeholder="Enter Username" required>
        
            <label>
                    Password*:
</label>
            
                    <input type="password" name="pswd1" placeholder="Enter Password" required>
            <label>
                    Enter password again*:
</label>
            
                    <input type="password" name="pswd2" placeholder="Enter Password Again" required>
            
            <label>
                    First Name*:
</label>
            
                    <input  type="text" name="fname" placeholder="Enter First Name" required>
            
    
            <label>
                    Last Name*:
</label>
           
                    <input type="text" name="lname" placeholder="Enter Last Name" required>

            <label>
                    SRN*:
</label>
            
                    <input type="text" name="srn" placeholder="Enter SRN" required>
            
            <label>
                    Mail ID:*
</label>
            
                    <input type="email" name="mailID" placeholder="Enter Mail ID" required>
            
            <label>
                    Phone No:*
</label>
            
                    <input name="phone" placeholder="Enter Phone Number" required>
            
            <label>
                    Semester:*
</label>
             
        <!--<input name="sem" placeholder="Enter Semester" required>-->
        
        <div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Option 1
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Option 2
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="" disabled>Option 3
  </label>
</div>


            <label>
                    Year Of Joining:
</label>
            
                    <!--<input  name="year" placeholder="Enter Year Of Join">-->
                    <div>
                        <select name="year">
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                      </select>
</div>
            <label>
                    Area of Interest*:
</label>
            
                    <textarea rows=4 cols=50 name="aoi" placeholder="Enter comma separated interests..." required></textarea>
            
            <label>
                    Areas Of Expertise*:
</label>
            
                    <textarea rows=4 cols=50 name="aoe" placeholder="Enter comma separated interests.." required></textarea>
    
            
    <div class="center">
			<br>	<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
    </div>
         
    </form>
</section>
    
</body>
<?php include('footer.php'); ?>
</html>