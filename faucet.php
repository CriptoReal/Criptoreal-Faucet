<?php
$response = $_POST["g-recaptcha-response"];

$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => 'YOURCAPTCHASECRETKEY',
		'response' => $response
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success=json_decode($verify);
	if ($captcha_success->success==false) {

			$errors['human'] = 'Human Test failed.';
			$data['errors'] = true;
			$data['errors']  = $errors;
			echo json_encode($data);


	} elseif ($captcha_success->success==true) {

require_once("jsonRPCClient.php");
		$alt = new jsonRPCClient('http://USER:PASSWORD=@127.0.0.1:PORT'); //set to coin daemon user/pass/port
$min = 1; //set to minimum payout
$max = 3; //set to max payout
$amount = rand($min,$max);
		$username = $_POST['address'];
		$check = $alt->validateaddress($username);

		if($alt->getbalance() <= 0){
						$errors['balance'] = 'The faucet is empty :s <br> Please let <a href="https://twitter.com/criptoreal" target="_blank">@Criptoreal</a> know';
						$data['errors'] = true;
						$data['errors']  = $errors;
						echo json_encode($data);
						}



		elseif($check->{'isvalid'} == 1){

						$alt->sendtoaddress($username, $amount);

						 $data['success'] = true;
						 $data['boa'] = "You got " . $amount . " CRS!";
						 echo json_encode($data);

						}


}
