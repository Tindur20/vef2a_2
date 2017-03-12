<?php 
	try {
			$sql = "SELECT COUNT(id) FROM myndir";
			$result = $pdo->amount($sql);
			
		} catch (Exception $e) {
			echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
		}

		while($amount = $result -> fetch()){
		$amount_of_myndir[] = $amount;
	}
 ?>