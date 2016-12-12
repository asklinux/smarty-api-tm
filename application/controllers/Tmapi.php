<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tmapi extends CI_Controller {
	
	
	
	
	function login(){
		
		$user = $this->input->post('username');
		$pass = $this->input->post('pass');
		$ch = curl_init();

		// set URL and other appropriate options
		curl_setopt($ch, CURLOPT_URL, "https://ompserver.tm.com.my/rest/fastlogin/v1.0?app_key=fFbNuAmc5e14qf5c7RVXXo5Mv78a&username=".$user."&format=json");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		
		$headers = [
    	'Authorization:'.$pass
		];

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		
		//$post = "app_key=fFbNuAmc5e14qf5c7RVXXo5Mv78a&username=%2B601546010268&format=json";

		//curl_setopt ($ch,CURLOPT_POSTFIELDS,$post);
		
		$hantar = array (
		  
		  'app_key' => 'fFbNuAmc5e14qf5c7RVXXo5Mv78a',
		  'username' => $user, 
		  'format' => 'json'
		  
		);

		curl_setopt ($ch,CURLOPT_POSTFIELDS,$hantar);
		
		// grab URL and pass it to the browser
		curl_exec($ch);
		
		// close cURL resource, and free up system resources
		curl_close($ch);
		
		
	}
	function send_sms(){
		
		$phone = $this->input->post('phone');
		//$phone = "60193009310";
	    $msg = $this->input->post('msg');
		$hkey = sha1('ceoceotab'.$phone);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curl, CURLOPT_USERAGENT, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt_array($curl, array(
		  CURLOPT_PORT => "8443",
		  CURLOPT_URL => "https://developer.tm.com.my:8443/SMSSBV1/SMSImpl/SMSImplRS/SendMessage",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "{\n\t\t  \"username\" : \"ceo\",\n\t\t  \"password\" :  \"9b55148c9acf5d400756ec35eede5ee7e078b0ef\",\n\t\t  \"msgtype\" :  \"text\",\n\t\t  \"message\" :  \"$msg\",\n\t\t  \"to\" :  \"$phone\",\n\t\t  \"hashkey\" :  \"$hkey\",\n\t\t  \"filename\" :  null,\n\t\t  \"transcid\" : \"12345123\"\n}",
		  CURLOPT_HTTPHEADER => array(
		    "apitokenid: FJUeyHYap98WzbAbKl+BMDwE1qI=",
		    "cache-control: no-cache",
		    "content-type: application/json",
		    "partnerid: sGueZNKci3Cl45ocaMNpjxuQGLY=",
		    "partnertokenid: PJb/zYIM1vSELzUxH4UMFGJja0o=",
		    
		  ),
		));
		
		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		curl_close($curl);
		
		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  
		  $data= array(
		  	'sms_to' => $phone,
		  	'sms_from' => 'server',
		  	'msg' => $msg
		  );
		  
		  $this->mydata->save($data,'sms');
		  echo $response;
		}
				  
		
	}
	function sms_v2(){
		//SMS INI BERMASALAH
		$token = $this->input->post('access_token');
		//echo $token = $this->mydata->gettoken();
		
		
		$ch = curl_init();

		// set URL and other appropriate options
		curl_setopt($ch, CURLOPT_URL, "https://ompserver.tm.com.my/sandbox/rest/httpsessions/sendMessage/v1.0?app_key=fFbNuAmc5e14qf5c7RVXXo5Mv78a&access_token=".$token."&username=%2B601546010268&format=json");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		
		
		$headers = [
    	'Authorization: Caas12345'
		];

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
		
		$hantar = array (
		  
		  'access_token' => $token,
		  'app_key' => 'fFbNuAmc5e14qf5c7RVXXo5Mv78a',
		  'username' => '%2B601546010268',
		  'displayNumber' => '0199999900',
		  'calleeNumber' => '0193009310',
		  'languageType' => 0,
		  'smsContent' => 'TEst sms',
		  'messageType' => 0,
		  'format' => 'json'
		  
		);
		 

		curl_setopt ($ch,CURLOPT_POSTFIELDS,$hantar);
		curl_exec($ch);
		curl_close($ch);
	}
	function make_call_stop(){
		
		$ch = curl_init();

		// set URL and other appropriate options
		curl_setopt($ch, CURLOPT_URL, "https://ompserver.tm.com.my/rest/httpsessions/callStop/v1.0");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		
		  
		/*
		array(
			CURLOPT_URL => "https://ompserver.tm.com.my/rest/httpsessions/callStop/v1.0",
			CURLOPT_HEADER => 0,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_HTTPHEADER => 
		
		$headers = [
    	'Authorization: Caas12345'
		];
		 * 
		*/
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			   "Authorization: Caas12345",
			   "Content-Type: application/json; charset=UTF-8"
			)
		);
		
		
		$hantar = array (
		  
		  'app_key' => 'fFbNuAmc5e14qf5c7RVXXo5Mv78a',
		  'username' => '%2B601546010268', 
		  'format' => 'json',
		  'displayNumber' => '01546010575',
		  'callerNumber' => '01546010575',
		  'calleeNumber' => '0193009310',
		  'languageType' => 0
		);

		curl_setopt($ch,CURLOPT_POSTFIELDS,$hantar);
		curl_exec($ch);
		
		curl_close($ch);
			
	}
	function click_to_dail(){
		
		$token = $_SESSION['token'];
		$phone = $this->input->post('phone');
		$staffno = $this->input->post('staffno');

		$curl = curl_init();
		
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://ompserver.tm.com.my/sandbox/rest/httpsessions/click2Call/v1.0?app_key=fFbNuAmc5e14qf5c7RVXXo5Mv78a&access_token=".$token."&format=json",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "{\"calleeNbr\":\"$phone\",\"callerNbr\":\"$staffno\",\"displayNbr\":\"$staffno\",\"languageType\":\"0\"}",
		  CURLOPT_HTTPHEADER => array(
		    "cache-control: no-cache",
		    "content-type: application/json",
		   
		  ),
		));
		
		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		curl_close($curl);
		
		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
		
	}
	function tts_call(){
		
	$token = $_SESSION['token'];
	$phone = $this->input->post('phone');
	$msg = $this->input->post('msg');
	$curl = curl_init();
	
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://ompserver.tm.com.my/sandbox/rest/httpsessions/tts2Note/v1.0?app_key=fFbNuAmc5e14qf5c7RVXXo5Mv78a&access_token=".$token."&format=json",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "{\"calleeNbr\":\"+6$phone\",\"displayNbr\":\"+60193009310\",\"languageType\":\"0\",\"replayTimes\":\"1\",\"ttsContent\":\"$msg\"}",
	  CURLOPT_HTTPHEADER => array(
	    "cache-control: no-cache",
	    "content-type: application/json",
	   
	  ),
	));
	
	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);
	
	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  echo $response;
	}
	}
	function voice_msg(){
		
	}
	
	
}



