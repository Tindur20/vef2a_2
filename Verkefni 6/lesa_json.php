<?php
$url ="http://tsuts.tskoli.is/2t/2811992349/vef2a/Verkefni%206/myndir.json";          
$json = file_get_contents($url);
$colors = json_decode($json,true);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>JSON sýnidæmi</title>
	
<body>

	<div>
		<?php  	   
          
          foreach ($colors as $key => $value) 
          {
            $link = explode(":", $value)
          	 echo " ". "<img src=\"{$link}\">"; 
        	 
          }
      	?>    
    </div>

</body>
</html>