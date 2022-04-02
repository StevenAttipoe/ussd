<?php
    $msisdn = $_GET['msisdn'];
    $sequence_ID = $_GET['sequenceID'];
    $data = $_GET['data']; //user data
    $type = 0; //reply or end of message

  
    $mereply = "Welcome to SEA's USSD application \n
	1. Choose a movie\n
	2. Choose a music\n
	3. Choose a dance\n";

	if($data =='1'){
		$mereply = "Select a movie to watch \r\n 1. End Game \r\n 2. The Witcher \r\n 3. Peaky Blinders \r\n 4. Invincible \r\n 5. Locke and Key";
	}
	
    echo $mereply.'|'.$msisdn.'|'.$sequence_id.'|'.$type;

	//sequence_ID number (changes), msisdn (phone number)
 
?>
