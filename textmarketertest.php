<?php
// Send SMS Example
class SendSMS
{
	private $url = 'http://api.textmarketer.co.uk/services/rest/sms'; // url of the service
	private $username = '9qqkd'; // CHANGE THIS!!!
	private $password = 'azr90'; // CHANGE THIS!!
	private $message_id,$credits_used;
	function __construct()
	{
	}
	public function getMessageID()
	{
		return $this->message_id;
	}
	public function getCreditsUsed()
	{
		return $this->credits_used;
	}
	// public function to commit the send
	public function send($message,$mobile,$originator)
	{
		$url_array= array('message'=>$message,'mobile_number'=>$mobile, 'originator'=>$originator,
		'username'=>$this->username, 'password'=>$this->password);
		$url_string = $data = http_build_query($url_array, '', '&');
		// we're using the curl library to make the request
		$curlHandle = curl_init();
		curl_setopt($curlHandle, CURLOPT_URL, $this->url);
		curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $url_string);
		curl_setopt($curlHandle, CURLOPT_POST, 1);
		$responseBody = curl_exec($curlHandle);
		$responseInfo  = curl_getinfo($curlHandle);
		curl_close($curlHandle);
		return $this->handleResponse($responseBody,$responseInfo);
	}
	private function handleResponse($body,$info)
	{
		if ($info['http_code']==200){ // successful submission
			$xml_obj = simplexml_load_string($body);
			// extract message id and credit usuage
			$this->message_id = (int) $xml_obj->message_id;
			$this->credits_used = (int) $xml_obj->credits_used;
			return true;
		}
		else{
			$this->message_id = null;
			$this->credits_used = null;
			// error handling
			return false;
		}
	}
}
/*
 * Example of use
 * Remember to change the username and password!
 */
/*
$sms = new SendSMS();
if($sms->send("hello this is a test from PHP ",'+447507295797',"Nod")) echo "Yay, sent!";
else echo "Boo, not sent";
*/
?>