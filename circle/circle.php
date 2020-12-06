<?php




if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	#COMPLETES PROBLEM
	
	$radius = $_GET['radius'];
	
	
	if (is_numeric($radius)){
	
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
