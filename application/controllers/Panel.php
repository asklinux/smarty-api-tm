<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

		function index(){
			
			if ($_SESSION['token']){
					
				$this->load->view('header');
				$this->load->view('panel');
				$this->load->view('footer');
			}
		}
		function setlogin(){
			
				$_SESSION['id']     = (string)$this->input->post('id');
				$_SESSION['logged_in']    = (bool)true;
				$_SESSION['token']  = $this->input->post('access_token');
			
		}
		function logout(){
				
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			
			}
			redirect('', 'refresh');
		}
		function utama(){
			
			$this->load->view('module/utama');
		}
		function task(){
			
			$data['task'] = $this->mydata->listdataall('task')->result();
			$this->load->view('module/task',$data);
		}
		function order(){
			$data['order'] = $this->mydata->listdataall('tempah')->result();
			$this->load->view('module/order',$data);
		}
		function sms(){
			$data['sms'] = $this->mydata->listdataall('sms')->result();
			$this->load->view('module/sms',$data);
		}
		function call(){
		
			$data['call'] = $this->mydata->listdataall('client')->result();
			
			$this->load->view('module/call',$data);
		}
		function makecall(){
			
			$data['phoneno'] = $this->input->post('no');
			$this->load->view('module/makecall',$data);
		}
		function makesms(){
			$data['phoneno'] = $this->input->post('no');
			$this->load->view('module/makesms',$data);
		}
		function makevoip(){
			$data['phoneno'] = $this->input->post('no');
			$this->load->view('module/makevoip',$data);
		}
		function makenew(){
				
			$this->load->view('module/makenew');
		}
		function addclient(){
			
			$data = array (
			  'name' => $this->input->post('name'),
			  'phone' => $this->input->post('phone'),
			  'syarikat' => $this->input->post('company')
			);
			
			$this->mydata->save($data,'client');
		}
}
	
	