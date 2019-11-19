

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
          var e_name = document.forms["myForm"]["eventname"].value;
          var e_date = document.forms["myForm"]["eventdate"].value;
          var e_time = document.forms["myForm"]["eventtime"].value;
          var e_location = document.forms["myForm"]["location"].value;
          var e_type = document.forms["myForm"]["eventtype"].value;
            if (e_name=="") {
            alert("Please fill in event name");
            return false;
            }
            else if (e_date=="") {
            alert("Please fill in event date");
            return false;
            }
            else if (e_time=="") {
            alert("Please fill in event time");
            return false;
            }
            else if (e_location=="") {
            alert("Please fill in event location");
            return false;
            }
            else if (e_type=="") {
            alert("Please fill in event type");
            return false;
            }
            else if (e_name=="" && e_date=="" && e_time=="" && e_location=="" && e_type=="" ) {
            alert("Please fill in all details before submitting");
            return false;
            }
}


      </script>

  </head>
  <body>
      <section class="container">
          <h4 class="center">Event Registration</h4>
          <form class="white" name="myForm" id="form1" onsubmit="return validateInput()" action="eventaction.php" method="POST">
              <table>
                  <tr>
                      <td>
                          Event name*:
                      </td>
                      <td>
                          <input type="text" name="eventname" placeholder="Enter Event Name" required>
                      </td>
                  </tr>
                  <tr>
                      <td>
                            Event date*:
                      </td>
                      <td>
                          <input type="text" name="eventdate" placeholder="Enter Event date" required>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          Event Time*:
                      </td>
                      <td>
                          <input type="text" name="eventtime" placeholder="Enter Event time" required>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          Location*:
                      </td>
                      <td>
                          <input type="text" name="location" placeholder="Enter Event Location" required>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          Event Type*:
                      </td>
                      <td>
                          <input type="text" name="eventtype" placeholder="Enter Event Type" required>
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