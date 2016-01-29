<?php
//============ ============  ============ ============
//
// Sử dụng dịch vụ esms để gửi tin nhắn
// Link: http://esms.vn
//
//============ ============  ============ ============

	$APIKey    = "92D86A116DE98FD0905F2BA8E3E1BCCCC";
	$SecretKey = "688522148E153A316C43BB75BFE668888";
	$YourPhone = "0932784141";
	$Content   = "";

	function send_sms($APIKey,$SecretKey,$YourPhone,$Content){
		$ch = curl_init();
		$SampleXml = "<RQST>"
		. "<APIKEY>". $APIKey ."</APIKEY>"
		. "<SECRETKEY>". $SecretKey ."</SECRETKEY>"
		. "<ISFLASH>0</ISFLASH>"
		. "<SMSTYPE>7</SMSTYPE>"
		. "<CONTENT>"."[No-reply] ". $Content ."</CONTENT>"
		. "<CONTACTS>"
		. "<CUSTOMER>"
		. "<PHONE>". $YourPhone ."</PHONE>"
		. "</CUSTOMER>"
		. "</CONTACTS>"
		. "</RQST>";
		curl_setopt($ch, CURLOPT_URL,            "http://api.esms.vn/MainService.svc/xml/SendMultipleMessage_V2/" );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($ch, CURLOPT_POST,           1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS,     $SampleXml );
		curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: text/plain'));
		$result=curl_exec ($ch);
		$xml = simplexml_load_string($result);
		if ($xml === false) {
			die('Error parsing XML');
		}
		if($xml->CodeResult==100){
			return true;
		}
		return false;
	}

?>