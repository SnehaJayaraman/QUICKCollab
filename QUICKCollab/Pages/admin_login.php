<?php session_start(); ?>

<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
    body{
    background-image:url(background.png); 
}

        h4{
        margin-left:15px;
        color: #061ca0;
        
    }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta charset="utf-8" />
    <title> QuickCollab </title>
</head>
<body>
    <h4> Welcome Admin </h4><br><br>
    <br><br><br>
    <div class= "container" align = "center">
        <!--<div class="row">-->
            <!--<div class="col s6 md3">
                <div class="card blue-grey lighten-4 z-depth-0">
                    <div class="card-content center">
                        <div card-action>
                        <a  href="manage_stu_profiles.php"><br><br>MANAGE STUDENT PROFILES<br><br> </a>
                        </div>
              
                        
                    </div>
                    
                </div>
            </div>-->

            <div class="col s6 md3">
                <div class="card blue-grey lighten-4 z-depth-0">
                    <div class="card-content center">
                        <div card-action>
                        <a href="manage_event_details.php"><br><br><span style="font-size: 1.875em;
		  font-family: Verdana,sans-serif;"> MANAGE EVENT DETAILS<span><br><br></a>
                        </div>
              
                        
                    </div>
                    
                </div>
            </div>

            

        <!--</div>-->
    </div>

</body>
</html>