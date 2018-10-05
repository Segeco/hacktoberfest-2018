<?php
$url = 'http://' . $url . '/verification.txt';
$website = file_get_contents($url);
if ($website == "VerificationCodeHere"){
	$value = true;
}
else{
	$url = 'https://' . $url . '/verification.txt';
	$website = file_get_contents($url);
	if($website == "VerificationCodeHere"){
		$value = true;
	}
	else{
		$erorr = "Unable to verify/find the file located on the domain. Please ensure that this is publicly accessable.";
	}
}
?>
