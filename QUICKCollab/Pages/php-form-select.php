<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>PHP form select box example</title>
<!-- define some style elements-->
<style>
label,a 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}

</style>	
</head>

<body>
<?php
	if(isset($_POST['formSubmit'])) 
	{
		$aCountries = $_POST['formCountries'];
		
		if(!isset($aCountries)) 
		{
			echo("<p>You didn't select any countries!</p>\n");
		} 
		else 
		{
			$nCountries = count($aCountries);
			
			echo("<p>You selected $nCountries countries: ");
			for($i=0; $i < $nCountries; $i++)
			{
				echo($aCountries[$i] . " ");
			}
			echo("</p>");
		}
	}
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<label for='formCountries[]'>Select the countries that you have visited:</label><br>
	<select multiple="multiple" name="formCountries[]">
		<option value="US">United States</option>
		<option value="UK">United Kingdom</option>
		<option value="France">France</option>
		<option value="Mexico">Mexico</option>
		<option value="Russia">Russia</option>
		<option value="Japan">Japan</option>
	</select><br>
	<input type="submit" name="formSubmit" value="Submit" >
</form>

</body>
</html>