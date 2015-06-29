{"changed":true,"filter":false,"title":"incomming.php","tooltip":"/incomming.php","value":"<?php\nclass SendSMS\n{\n\tprivate $url = 'http://api.textmarketer.co.uk/services/rest/sms'; // url of the service\n\tprivate $username = '9qqkd'; // CHANGE THIS!!!\n\tprivate $password = 'azr90'; // CHANGE THIS!!\n\tprivate $message_id,$credits_used;\n\t\n\tfunction __construct()\n\t{\n\t}\n\tpublic function getMessageID()\n\t{\n\t\treturn $this->message_id;\n\t}\n\tpublic function getCreditsUsed()\n\t{\n\t\treturn $this->credits_used;\n\t}\n\t// public function to commit the send\n\tpublic function send($message,$mobile,$originator)\n\t{\n\t\t$url_array= array('message'=>$message,'mobile_number'=>$mobile, 'originator'=>$originator,\n\t\t'username'=>$this->username, 'password'=>$this->password);\n\t\t$url_string = $data = http_build_query($url_array, '', '&');\n\t\t// we're using the curl library to make the request\n\t\t$curlHandle = curl_init();\n\t\tcurl_setopt($curlHandle, CURLOPT_URL, $this->url);\n\t\tcurl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);\n\t\tcurl_setopt($curlHandle, CURLOPT_POSTFIELDS, $url_string);\n\t\tcurl_setopt($curlHandle, CURLOPT_POST, 1);\n\t\t$responseBody = curl_exec($curlHandle);\n\t\t$responseInfo  = curl_getinfo($curlHandle);\n\t\tcurl_close($curlHandle);\n\t\treturn $this->handleResponse($responseBody,$responseInfo);\n\t}\n\tprivate function handleResponse($body,$info)\n\t{\n\t\tif ($info['http_code']==200){ // successful submission\n\t\t\t$xml_obj = simplexml_load_string($body);\n\t\t\t// extract message id and credit usuage\n\t\t\t$this->message_id = (int) $xml_obj->message_id;\n\t\t\t$this->credits_used = (int) $xml_obj->credits_used;\n\t\t\treturn true;\n\t\t}\n\t\telse{\n\t\t\t$this->message_id = null;\n\t\t\t$this->credits_used = null;\n\t\t\t// error handling\n\t\t\treturn false;\n\t\t}\n\t}\n}\n$allgood = 1;\n\nif (!empty($_GET['number']))\n    $number = $_GET[\"number\"];\nelse\n{ \n    echo \"No number\";\n    $allgood = 0;\n}\n\nif (!empty($_GET['message']))\n    $explodedmsg = explode(\" \", $_GET[\"message\"]);\nelse\n{ \n    echo \"No message\";\n    $allgood = 0;\n}\n\nif (!empty($_GET['network']))\n    $network = $_GET[\"network\"];\nelse\n{\n    echo \"No network\";\n    $allgood = 0;\n}\n\nif(count($explodedmsg) < 2)\n{\n    echo \"Message short\";\n    $allgood = 0;\n} \n    \n    else\n{    \n    $message = implode(\" \",array_slice($explodedmsg, 2));\n}    \n\n\nif($allgood)\n{\n    echo \"Message was: \".$_GET[\"message\"];\n    echo \"Message is: \".$message;\n    // Create connection\n    $con=mysqli_connect(\"127.3.124.2\",\"adminX8wp3r5\",\"NSQp-43aGVXv\",\"nod\");\n    \n    // Check connection\n    if (mysqli_connect_errno()) {\n      echo \"Failed to connect to MySQL: \" . mysqli_connect_error() . \"<p>\";\n    }\n    else \n    {\n        echo \"getting user\". $explodedmsg[1] . \"<p>\";\n        \n        $user_result = mysqli_query($con,\"SELECT * FROM users where username='\". $explodedmsg[1] .\"'\");\n        \n        echo \"rows \". mysqli_num_rows($user_result);\n        if(!$user_result)\n            echo \"Database error<p>\";\n        else if(!mysqli_num_rows($user_result))\n            echo \"User not found<p>\";\n        else\n        {\n             $user_result  = mysqli_fetch_array($user_result);\n             /*\n             echo $user_result['id'] .\"<p>\";\n             echo $user_result['username'] .\"<p>\";\n             echo $user_result['name'] .\"<p>\";\n             echo $user_result['number'] .\"<p>\";\n             echo $user_result['branch'] .\"<p>\";\n            */\n            echo \"Saving message to DB<p>\";\n            \n            $insertstr = \"INSERT INTO incoming (user, message, sender, network) VALUES ('\".\n                                                                                            $user_result['username'].\"', '\".\n                                                                                            $message.\"','\".\n                                                                                            $number.\"','\".\n                                                                                            $network.\"')\";\n            echo $insertstr .\"<p>\";\n  \n            echo \"inserting\";\n            $insertresult = mysqli_query($con, $insertstr);\n            \n            if(!$insertresult)\n            {\n               // echo \"Error\";\n                die('Error: ' . mysqli_error($con));\n            }\n            else\n            {\n                echo \"Insert done, now send to reciever<p>\";\n                \n                $smstext = \"Hi \".$user_result['name'].\" someone just gave you a nod! They said: '\".$message.\"'\";\n                \n                \n                echo \"Sending: <p>\";\n                echo $smstext.\"<p>\";\n                echo \"To: <p>\";\n                echo $user_result['number'].\"<p>\";\n               \n                //$sms = new SendSMS();\n                //if($sms->send($smstext,\"'\".$user_result['number'].\"'\",\"nod\")) echo \"Yay, sent!\"; else echo \"Boo, not sent\"; \n                \n              \n                \n                \n                echo \"Sending confirmation\";\n                \n                $smsconfirmtext = \"Brilliant thanks for your nod. It's great to know I was able to help, from \".$user_result['name'].\". White Stuff also have a simple questionnaire. We'd love to hear your thoughts and you'll get a £5 voucher off your next shop with us. Follow the link: http://bit.ly/1DVZyqH\";\n                \n                $confirmnumber = \"+\".$number;\n                \n                echo \"Sending: <p>\";\n                echo $smsconfirmtext.\"<p>\";\n                echo \"To: <p>\";\n                echo $confirmnumber.\"<p>\";\n               \n                //$confirmsms = new SendSMS();\n                //if($confirmsms->send($smsconfirmtext,\"'\".$confirmnumber.\"'\",\"nod\")) echo \"Yay, confirm sent!\"; else echo \"Boo, confirm not sent\";                 \n                \n            }\n\n        }\n     \n        \n        \n    }\n    /*\n    mysqli_query($con,\"INSERT INTO incoming (FirstName, LastName, Age)\n    VALUES ('Peter', 'Griffin',35)\");\n    \n    }\n    */\n\n}  \nelse\n{\n    echo \"Incorrect data. You suck\";\n}  \n\n\n?>","undoManager":{"mark":-91,"position":100,"stack":[[{"start":{"row":158,"column":231},"end":{"row":158,"column":232},"action":"insert","lines":["\\"],"id":90}],[{"start":{"row":158,"column":232},"end":{"row":158,"column":233},"action":"insert","lines":["\\"],"id":91}],[{"start":{"row":158,"column":233},"end":{"row":158,"column":234},"action":"insert","lines":["\\"],"id":92}],[{"start":{"row":158,"column":233},"end":{"row":158,"column":234},"action":"remove","lines":["\\"],"id":93}],[{"start":{"row":158,"column":232},"end":{"row":158,"column":233},"action":"remove","lines":["\\"],"id":94}],[{"start":{"row":158,"column":232},"end":{"row":158,"column":233},"action":"insert","lines":["\\"],"id":95}],[{"start":{"row":158,"column":232},"end":{"row":158,"column":233},"action":"remove","lines":["\\"],"id":96}],[{"start":{"row":158,"column":231},"end":{"row":158,"column":232},"action":"remove","lines":["\\"],"id":97}],[{"start":{"row":168,"column":17},"end":{"row":168,"column":18},"action":"remove","lines":["/"],"id":98}],[{"start":{"row":168,"column":16},"end":{"row":168,"column":17},"action":"remove","lines":["/"],"id":99}],[{"start":{"row":151,"column":17},"end":{"row":151,"column":18},"action":"remove","lines":["/"],"id":100}],[{"start":{"row":151,"column":16},"end":{"row":151,"column":17},"action":"remove","lines":["/"],"id":101}],[{"start":{"row":150,"column":16},"end":{"row":150,"column":17},"action":"insert","lines":["/"],"id":103}],[{"start":{"row":150,"column":17},"end":{"row":150,"column":18},"action":"insert","lines":["/"],"id":104}],[{"start":{"row":151,"column":16},"end":{"row":151,"column":17},"action":"insert","lines":["/"],"id":105}],[{"start":{"row":151,"column":17},"end":{"row":151,"column":18},"action":"insert","lines":["/"],"id":106}],[{"start":{"row":167,"column":16},"end":{"row":167,"column":17},"action":"insert","lines":["/"],"id":107}],[{"start":{"row":167,"column":17},"end":{"row":167,"column":18},"action":"insert","lines":["/"],"id":108}],[{"start":{"row":168,"column":16},"end":{"row":168,"column":17},"action":"insert","lines":["/"],"id":109}],[{"start":{"row":168,"column":17},"end":{"row":168,"column":18},"action":"insert","lines":["/"],"id":110}],[{"start":{"row":92,"column":1},"end":{"row":93,"column":0},"action":"insert","lines":["",""],"id":111},{"start":{"row":93,"column":0},"end":{"row":93,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":93,"column":4},"end":{"row":93,"column":5},"action":"insert","lines":["/"],"id":112}],[{"start":{"row":93,"column":5},"end":{"row":93,"column":6},"action":"insert","lines":["/"],"id":113}],[{"start":{"row":93,"column":6},"end":{"row":93,"column":7},"action":"insert","lines":["M"],"id":114}],[{"start":{"row":93,"column":7},"end":{"row":93,"column":8},"action":"insert","lines":["s"],"id":115}],[{"start":{"row":93,"column":8},"end":{"row":93,"column":9},"action":"insert","lines":["s"],"id":116}],[{"start":{"row":93,"column":8},"end":{"row":93,"column":9},"action":"remove","lines":["s"],"id":117}],[{"start":{"row":93,"column":7},"end":{"row":93,"column":8},"action":"remove","lines":["s"],"id":118}],[{"start":{"row":93,"column":6},"end":{"row":93,"column":7},"action":"remove","lines":["M"],"id":119}],[{"start":{"row":93,"column":5},"end":{"row":93,"column":6},"action":"remove","lines":["/"],"id":120}],[{"start":{"row":93,"column":4},"end":{"row":93,"column":5},"action":"remove","lines":["/"],"id":121}],[{"start":{"row":93,"column":4},"end":{"row":93,"column":5},"action":"insert","lines":["e"],"id":122}],[{"start":{"row":93,"column":5},"end":{"row":93,"column":6},"action":"insert","lines":["c"],"id":123}],[{"start":{"row":93,"column":6},"end":{"row":93,"column":7},"action":"insert","lines":["h"],"id":124}],[{"start":{"row":93,"column":7},"end":{"row":93,"column":8},"action":"insert","lines":["o"],"id":125}],[{"start":{"row":93,"column":4},"end":{"row":93,"column":8},"action":"remove","lines":["echo"],"id":126},{"start":{"row":93,"column":4},"end":{"row":93,"column":10},"action":"insert","lines":["echo()"]}],[{"start":{"row":93,"column":8},"end":{"row":93,"column":10},"action":"remove","lines":["()"],"id":127}],[{"start":{"row":93,"column":8},"end":{"row":93,"column":9},"action":"insert","lines":[" "],"id":128}],[{"start":{"row":93,"column":9},"end":{"row":93,"column":11},"action":"insert","lines":["\"\""],"id":129}],[{"start":{"row":93,"column":10},"end":{"row":93,"column":11},"action":"insert","lines":[" "],"id":130}],[{"start":{"row":93,"column":10},"end":{"row":93,"column":11},"action":"remove","lines":[" "],"id":131}],[{"start":{"row":93,"column":10},"end":{"row":93,"column":11},"action":"insert","lines":["M"],"id":132}],[{"start":{"row":93,"column":11},"end":{"row":93,"column":12},"action":"insert","lines":["e"],"id":133}],[{"start":{"row":93,"column":12},"end":{"row":93,"column":13},"action":"insert","lines":["s"],"id":134}],[{"start":{"row":93,"column":13},"end":{"row":93,"column":14},"action":"insert","lines":["s"],"id":135}],[{"start":{"row":93,"column":14},"end":{"row":93,"column":15},"action":"insert","lines":["a"],"id":136}],[{"start":{"row":93,"column":15},"end":{"row":93,"column":16},"action":"insert","lines":["g"],"id":137}],[{"start":{"row":93,"column":16},"end":{"row":93,"column":17},"action":"insert","lines":["e"],"id":138}],[{"start":{"row":93,"column":17},"end":{"row":93,"column":18},"action":"insert","lines":[" "],"id":139}],[{"start":{"row":93,"column":18},"end":{"row":93,"column":19},"action":"insert","lines":["w"],"id":140}],[{"start":{"row":93,"column":19},"end":{"row":93,"column":20},"action":"insert","lines":["a"],"id":141}],[{"start":{"row":93,"column":20},"end":{"row":93,"column":21},"action":"insert","lines":["s"],"id":142}],[{"start":{"row":93,"column":21},"end":{"row":93,"column":22},"action":"insert","lines":["s"],"id":143}],[{"start":{"row":93,"column":21},"end":{"row":93,"column":22},"action":"remove","lines":["s"],"id":144}],[{"start":{"row":93,"column":21},"end":{"row":93,"column":22},"action":"insert","lines":[" "],"id":145}],[{"start":{"row":93,"column":21},"end":{"row":93,"column":22},"action":"insert","lines":[":"],"id":146}],[{"start":{"row":93,"column":24},"end":{"row":93,"column":25},"action":"insert","lines":["."],"id":147}],[{"start":{"row":93,"column":25},"end":{"row":93,"column":26},"action":"insert","lines":[" "],"id":148}],[{"start":{"row":93,"column":25},"end":{"row":93,"column":26},"action":"remove","lines":[" "],"id":149}],[{"start":{"row":93,"column":25},"end":{"row":93,"column":33},"action":"insert","lines":["$message"],"id":150}],[{"start":{"row":93,"column":33},"end":{"row":93,"column":34},"action":"insert","lines":[";"],"id":151}],[{"start":{"row":92,"column":1},"end":{"row":93,"column":0},"action":"insert","lines":["",""],"id":152},{"start":{"row":93,"column":0},"end":{"row":93,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":93,"column":4},"end":{"row":93,"column":5},"action":"insert","lines":["e"],"id":153}],[{"start":{"row":93,"column":5},"end":{"row":93,"column":6},"action":"insert","lines":["c"],"id":154}],[{"start":{"row":93,"column":6},"end":{"row":93,"column":7},"action":"insert","lines":["h"],"id":155}],[{"start":{"row":93,"column":7},"end":{"row":93,"column":8},"action":"insert","lines":["o"],"id":156}],[{"start":{"row":93,"column":8},"end":{"row":93,"column":9},"action":"insert","lines":[" "],"id":157}],[{"start":{"row":94,"column":19},"end":{"row":94,"column":20},"action":"remove","lines":["a"],"id":158}],[{"start":{"row":94,"column":18},"end":{"row":94,"column":19},"action":"remove","lines":["w"],"id":159}],[{"start":{"row":94,"column":18},"end":{"row":94,"column":19},"action":"insert","lines":["i"],"id":160}],[{"start":{"row":94,"column":19},"end":{"row":94,"column":20},"action":"insert","lines":["s"],"id":161}],[{"start":{"row":94,"column":19},"end":{"row":94,"column":20},"action":"remove","lines":["s"],"id":162}],[{"start":{"row":93,"column":9},"end":{"row":93,"column":11},"action":"insert","lines":["\"\""],"id":163}],[{"start":{"row":93,"column":10},"end":{"row":93,"column":11},"action":"insert","lines":["M"],"id":164}],[{"start":{"row":93,"column":11},"end":{"row":93,"column":12},"action":"insert","lines":["e"],"id":165}],[{"start":{"row":93,"column":12},"end":{"row":93,"column":13},"action":"insert","lines":["s"],"id":166}],[{"start":{"row":93,"column":13},"end":{"row":93,"column":14},"action":"insert","lines":["s"],"id":167}],[{"start":{"row":93,"column":14},"end":{"row":93,"column":15},"action":"insert","lines":["a"],"id":168}],[{"start":{"row":93,"column":15},"end":{"row":93,"column":16},"action":"insert","lines":["g"],"id":169}],[{"start":{"row":93,"column":16},"end":{"row":93,"column":17},"action":"insert","lines":["e"],"id":170}],[{"start":{"row":93,"column":17},"end":{"row":93,"column":18},"action":"insert","lines":[" "],"id":171}],[{"start":{"row":93,"column":18},"end":{"row":93,"column":19},"action":"insert","lines":["a"],"id":172}],[{"start":{"row":93,"column":18},"end":{"row":93,"column":19},"action":"remove","lines":["a"],"id":173}],[{"start":{"row":93,"column":18},"end":{"row":93,"column":19},"action":"insert","lines":["w"],"id":174}],[{"start":{"row":93,"column":19},"end":{"row":93,"column":20},"action":"insert","lines":["a"],"id":175}],[{"start":{"row":93,"column":20},"end":{"row":93,"column":21},"action":"insert","lines":["s"],"id":176}],[{"start":{"row":93,"column":21},"end":{"row":93,"column":22},"action":"remove","lines":["\""],"id":177}],[{"start":{"row":93,"column":21},"end":{"row":93,"column":22},"action":"insert","lines":[":"],"id":178}],[{"start":{"row":93,"column":22},"end":{"row":93,"column":23},"action":"insert","lines":[" "],"id":179}],[{"start":{"row":93,"column":23},"end":{"row":93,"column":24},"action":"insert","lines":["\""],"id":180}],[{"start":{"row":93,"column":23},"end":{"row":93,"column":24},"action":"remove","lines":["\""],"id":181}],[{"start":{"row":93,"column":22},"end":{"row":93,"column":23},"action":"remove","lines":[" "],"id":182}],[{"start":{"row":93,"column":22},"end":{"row":93,"column":23},"action":"insert","lines":[":"],"id":183}],[{"start":{"row":93,"column":22},"end":{"row":93,"column":23},"action":"remove","lines":[":"],"id":184}],[{"start":{"row":93,"column":22},"end":{"row":93,"column":23},"action":"insert","lines":[" "],"id":185}],[{"start":{"row":93,"column":23},"end":{"row":93,"column":24},"action":"insert","lines":["\""],"id":186}],[{"start":{"row":93,"column":24},"end":{"row":93,"column":25},"action":"insert","lines":["/"],"id":187}],[{"start":{"row":93,"column":24},"end":{"row":93,"column":25},"action":"remove","lines":["/"],"id":188}],[{"start":{"row":93,"column":24},"end":{"row":93,"column":25},"action":"insert","lines":["."],"id":189}],[{"start":{"row":93,"column":25},"end":{"row":93,"column":41},"action":"insert","lines":["$_GET[\"message\"]"],"id":190}],[{"start":{"row":93,"column":41},"end":{"row":93,"column":42},"action":"insert","lines":[";"],"id":191}]]},"ace":{"folds":[],"scrolltop":1221.5,"scrollleft":0,"selection":{"start":{"row":93,"column":42},"end":{"row":93,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":75,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1424947549000}