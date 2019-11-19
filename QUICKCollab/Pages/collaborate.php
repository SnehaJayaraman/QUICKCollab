

  <html>
  
  <head>
      <title>QUICKCollab</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .brand{
		  background: white;
		  color:black;
	  }
  	.brand-text{
		  color: black !important;
		  font-size: 1.875em;
		  font-family: "Times New Roman", Times, serif;
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

      <script>
        function validateInput() {
          var e_name = document.forms["myForm"]["name"].value;
          var e_user = document.forms["myForm"]["user_type"].value;
          var e_date = document.forms["myForm"]["topic"].value;
          var e_time = document.forms["myForm"]["cgpa"].value;
          var e_location = document.forms["myForm"]["sem"].value;
          var e_type = document.forms["myForm"]["mailID"].value;
          var e_area = document.forms["myForm"]["aoi"].value;

            if (e_name=="") {
            alert("Please fill in your name");
            return false;
            }
            else if (e_user=="") {
            alert("Please fill in User Type");
            return false;
            }
            else if (e_date=="") {
            alert("Please fill in Topic");
            return false;
            }
            else if (e_time=="") {
            alert("Please fill in CGPA");
            return false;
            }
            else if (e_location=="") {
            alert("Please fill in Semester");
            return false;
            }
            else if (e_type=="") {
            alert("Please fill in mail ID");
            return false;
            }
            else if (e_area=="") {
            alert("Please fill in Area Of Interest");
            return false;
            }
            else if (e_name=="" && e_date=="" && e_time=="" && e_location=="" && e_type=="" && e_area=="") {
            alert("Please fill in all details before submitting");
            return false;
            }
}


      </script>

  </head>
  <body>
      <section class="container ">
          <h4 class="center">Collaboration</h4>
          <form class="white" name="myForm" id="form1" onsubmit="return validateInput()" action="collabaction.php" method="POST">
              <table>
                  <tr>
                      <td>
                          Name*:
                      </td>
                      <td>
                          <input type="text" name="name" placeholder="Enter Your Name" required>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          User Type*:
                      </td>
                      <td>
                      <select class="custom-select"  name="user_type" required >
                        <option selected>Select the User Type </option>
                        <option value="s">Student</option>
                        <option value="f">Faculty</option>
                        
                          
                      </select>
                      </td>
                  </tr>
                  <tr>
                      <td>
                            Topic*:
                      </td>
                      <td>
                          <input type="text" name="topic" placeholder="Enter Topic of interest" required>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          CGPA*:
                      </td>
                      <td>
                      <select class="custom-select"  name="cgpa" required >
                        <option selected>Select the CGPA </option>
                        <option value="8">7 or more</option>
                        <option value="9">8 or more</option>
                        <option value="10">9 or more</option>
                          
                      </select>
                      </td>
                  </tr>
                  
                  <tr>
                      <td>
                          Semester*:
                      </td>
                      <td>
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
                          Email*:
                      </td>
                      <td>
                          <input type="email" name="mailID" placeholder="Enter Email" required>
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
                  
              </table>
              <div class="center">
                  <br>	<input type="submit" name="submit" value="Submit" class="btn brand ">
              </div>

          </form>
      </section>

  </body>
  
  </html>