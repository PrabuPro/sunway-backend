<?php
//load RSA library
include 'Crypt/RSA.php';
//initialize RSA
$rsa = new Crypt_RSA();
//decode & get POST parameters
$payment = base64_decode($_POST ["payment"]);
$signature = base64_decode($_POST ["signature"]);
$custom_fields = base64_decode($_POST ["custom_fields"]);
//load public key for signature matching
$publickey = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDvz8ruuIETG/IquGtBXzbbtDWV
TT43N67P/1vxbWhxnKbzYl5cHmTi0U5QtjZO/Hq2SKI8FG1FbqOGRLLE75bwAfKD
whNc3OaXXBgZrAzSb5XpF3wGe+YDRxzt7r+pdAzZAdo5Aem+ME3iyG+bbEL281Sf
1KsFVB+8PjF6+y9TGwIDAQAB
-----END PUBLIC KEY-----";
$rsa->loadKey($publickey);
//verify signature
$signature_status = $rsa->verify($payment, $signature) ? TRUE : FALSE;
//get payment response in segments
//payment format: order_id|order_refference_number|date_time_transaction|payment_gateway_used|status_code|comment;
$responseVariables = explode('|', $payment);       


	//display values
	echo $signature_status;
	$custom_fields_varible = explode('|', $custom_fields);
	var_dump($custom_fields_varible);
	echo '<br/>';
	var_dump($responseVariables);

	
?>  