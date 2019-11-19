<?php session_start(); ?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<head>
    <style>
        body{
            background-image: url('background.png');
        }
    </style>
</head>
  <body>
  <div class="container center" style=";margin-top:150px;margin-left:350px">
	<div class="row"  >


					<div class="card z-depth-0 center" style="width: 36rem;">
						<div class="card-content center">
                            
                            <b>First Name :</b> <?php echo htmlspecialchars($_SESSION['firstname']); ?><br>
                            <b>Last Name : </b><?php echo htmlspecialchars($_SESSION['lastname']); ?><br>
                            
                            <b>Email : </b><?php echo htmlspecialchars($_SESSION['Email']) ?><br>
                            <b>Phone Number : </b><?php echo htmlspecialchars($_SESSION['PhoneNo']) ?><br>
                            
                            
							<ul >
								<li><b>Areas Of Interest</b></li>
								<?php foreach(explode(',', $_SESSION['aoi']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
							<ul >
								<li><b>Areas Of Expertise</b></li>
								<?php foreach(explode(',', $_SESSION['aoe']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
                            </ul>
                            
                            
                            
						</div>
						
					
				</div>

                                </div>
                                </div>


<body>

</html>

