<?php




if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	#COMPLETES PROBLEM
	
	$radius = $_GET['radius'];
	
	
	if (is_numeric($radius)){ // https://www.php.net/manual/en/function.is-numeric.php
	
		echo $radius;
		
	}else{
		
		http_response_code(400);
		echo("Bad Request");
		exit(); 
		
	}

}else{
		
	#issue with info
	http_response_code(405);
	exit();
}


?>
