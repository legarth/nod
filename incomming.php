<?php
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
$allgood = 1;

if (!empty($_GET['number']))
    $number = $_GET["number"];
else
    $allgood = 0;

if (!empty($_GET['message']))
    $explodedmsg = explode(" ", $_GET["message"]);
else
    $allgood = 0;

if (!empty($_GET['network']))
    $network = $_GET["network"];
else
    $allgood = 0;
    
if(count($explodedmsg) < 2)
    $allgood = 0;
    else
{    
    $message = implode(" ",array_slice($explodedmsg, 2));
}    


if($allgood)
{
    // Create connection
    $con=mysqli_connect("127.3.124.2","adminX8wp3r5","NSQp-43aGVXv","nod");
    
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<p>";
    }
    else 
    {
        echo "getting user". $explodedmsg[1] . "<p>";
        
        $user_result = mysqli_query($con,"SELECT * FROM users where username='". $explodedmsg[1] ."'");
        
        echo "rows ". mysqli_num_rows($user_result);
        if(!$user_result)
            echo "Database error<p>";
        else if(!mysqli_num_rows($user_result))
            echo "User not found<p>";
        else
        {
             $user_result  = mysqli_fetch_array($user_result);
             /*
             echo $user_result['id'] ."<p>";
             echo $user_result['username'] ."<p>";
             echo $user_result['name'] ."<p>";
             echo $user_result['number'] ."<p>";
             echo $user_result['branch'] ."<p>";
            */
            echo "Saving message to DB<p>";
            
            $insertstr = "INSERT INTO incoming (user, message, sender, network) VALUES ('".
                                                                                            $user_result['username']."', '".
                                                                                            $message."','".
                                                                                            $number."','".
                                                                                            $network."')";
            echo $insertstr ."<p>";
  
            echo "inserting";
            $insertresult = mysqli_query($con, $insertstr);
            
            if(!$insertresult)
            {
               // echo "Error";
                die('Error: ' . mysqli_error($con));
            }
            else
            {
                echo "Insert done, now send to reciever<p>";
                
                $smstext = "Hi ".$user_result['name']." you have just recived a nod from someone. They said '".$message."'";
                
                
                echo "Sending: <p>";
                echo $smstext."<p>";
                echo "To: <p>";
                echo $user_result['number']."<p>";
               
                $sms = new SendSMS();
                if($sms->send($smstext,"'".$user_result['number']."'","Nod")) echo "Yay, sent!"; else echo "Boo, not sent"; 
                
            }

        }
     
        
        
    }
    /*
    mysqli_query($con,"INSERT INTO incoming (FirstName, LastName, Age)
    VALUES ('Peter', 'Griffin',35)");
    
    }
    */

}  
else
{
    echo "Incorrect data. You suck";
}  


?>