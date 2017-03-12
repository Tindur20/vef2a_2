<?php 
	include './config/conection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verkefni_5</title>
</head>
<body>
<?php 
	include './model/query.php';
?>
	<ul>
	<?php 
		# birtir töflu með player og score
		foreach ($verkefni as $entry) {
			
			echo '<li>'.$entry[0].'</li>';
		}
	 ?>
	 </ul>
	 <p>fann ekki leið til að birta bara einum af countinu í SQL það birtir 2 utaf foreach</p>
	 <?php 

	 	foreach ($amount_of_myndir as $amount) {
			echo '<p>'.$amount.'</p>';
		}
	 	
	?>

</body>
</html>