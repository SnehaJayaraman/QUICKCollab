<?php 

$conn =mysqli_connect('localhost','sneha','snehapes1!','reg_details');
if(!$conn)
	echo 'connection error';

$sql ='SELECT * FROM faculty';
$result =mysqli_query($conn,$sql);
$student=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
//print_r($student);
?>

<!DOCTYPE html>
<html>
	<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
	<script>
//document.getElementById("content").innerHTML = "details.php?id=1";
	//$('#content').load($(this).attr('href'));
	
 	$(document).ready(function() {
  	$('#c a').click(function(e) {
   	e.preventDefault();
   	$('#content').load($(this).attr('href'));
  	});
	$('#a1').load(function(e) {
   	e.preventDefault();
   	$('#content').load($(this).attr('href'));
  	});
	});
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<?php include('header1.php'); ?>
	<div class="center grey-text">
	<h4 >Faculty Listing</h4>
	</div>
	<a id="a1" href="details.php?id+'1'"></a>
	
	<div class="container">
		<div class="row">
		<!--<div class="center" id="content" >Show</div>-->
		<div class="col" style="width:100px; ">
		<?php foreach($student as $student): ?>
			
				<div  id="c">
				<ul>
				<li><a class="brand-text" style="font-size:1.5em" href="details.php?id=<?php echo $student['ID'] ?>"><?php echo htmlspecialchars($student['UserName']); ?></a></li>
				</ul>		
				</div>			
					
		<?php endforeach; ?>
		<ul class=" pagination">
    		
    		<li class="page-item active"><a class="brand-text" href="#">1</a></li>
    		<li class="page-item "><a class="brand-text" href="#">2</a></li>
    		<li class="page-item"><a class="brand-text" href="#">3</a></li>
    		
  		</ul>
		</div>
		<div class="col" id="content"style="width:500px" >
		<script>
		$(this).load($(student[0]).attr('href'));
		</script>
		</div>
		</div>	
		
		
		
		
		
		
	</div><br><br><br>
	
	

	<?php include('footer.php'); ?>

</html>