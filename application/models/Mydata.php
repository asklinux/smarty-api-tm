<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydata extends CI_Model {

	function listdata($data=null,$table=null,$limit=null,$offset=null){
					
		return $this->db->get_where($table,$data,$limit,$offset);
		
	}
	function listdataall($table=null){
					
		return $this->db->get($table);
		
	}
	function save($data=null,$table=null){
			
		$this->db->insert($table,$data);
		
		return $this->db->insert_id();
	}
	function edit($id=null,$id_name=null,$data=null,$table=null){
		
		$this->db->where($id_name,$id);
			
		return $this->db->update($table,$data);
		
	}
	function remove($data=null,$table=null){
		
		//$this->db->where($id_nama,$id);		
		return $this->db->delete($table,$data);
	}
	function gettoken(){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://ompserver.tm.com.my/rest/fastlogin/v1.0?app_key=fFbNuAmc5e14qf5c7RVXXo5Mv78a&username=%2B601546010268&format=json");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		
		$headers = [
    	'Authorization: Caas12345'
		];

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		
		$hantar = array (
		  
		  'app_key' => 'fFbNuAmc5e14qf5c7RVXXo5Mv78a',
		  'username' => '%2B601546010268', 
		  'format' => 'json'
		  
		);

		curl_setopt($ch,CURLOPT_POSTFIELDS,$hantar);

		$mak = curl_exec($ch);
		
		curl_close($ch);
		
		return $mak;
	}
}	