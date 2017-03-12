<?php 
	try {
		$sql = "SELECT myndheiti FROM myndir";
		$result = $pdo->query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}

	while($row = $result -> fetch()){
		$verkefni[] = array($row['myndheiti']);
	}
?>

<?php 
	try {
			$sql = "SELECT COUNT(id) FROM myndir";
			$result = $pdo->query($sql);
			
		} catch (Exception $e) {
			echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
		}

		while($amount = $result -> fetch()){
		$amount_of_myndir = $amount;
	}
 ?>