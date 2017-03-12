<?php  
	try {

		$source = 'mysql:host=tsuts.tskoli.is;dbname=2811992349_Gg_Verkefni_5';
		$user = '2811992349';
		$password = 'mypassword';

			$pdo = new PDO($source, $user, $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->exec('SET NAMES "utf8"');
	} 
	catch (PDOException $e) {
		
		echo "tenging tókst ekki". "<br>" . $e->getMessage();

	}
?>