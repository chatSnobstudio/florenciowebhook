<?php
$method = $SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == "POST"){
	$requestBody = file_get_content('php://imput')
	$json = json_decode($requestBody);

	$text = $json->result->parameters->text;

	switch($text) {
	case 'clima';
		$speech = "Hola, probando WebHook";
		break;

	default:
		$speech = "Tomo default";
		break;
	}

	$response = new \stdClass();
	$response->Speech = "";
	$response->DisplayText = "";
	$response->source = "webhook";
	echo json_encode($response);
}
else{
	echo "Method not allowed"
}


?>
