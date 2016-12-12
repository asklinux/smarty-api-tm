<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jsondata extends CI_Controller {

		function index(){
			
			$this->output->set_header("Access-Control-Allow-Origin: *");
			
			
			$order = $this->mydata->listdataall('tempah')->num_rows();
			$task = $this->mydata->listdataall('task')->num_rows();
			$sms = $this->mydata->listdataall('sms')->num_rows();
			echo '{
			"data":[
			    {"order":"'.$order.'", "order_done":"0"}, 
			    {"task":"'.$task.'", "task_done":"0"},
			    {"sms":"'.$sms.'"}
			]
			}';			
			
		}
		function gettask(){
			
			$this->output->set_header("Access-Control-Allow-Origin: *");
			
			
			$order = $this->mydata->listdataall('tempah')->result();
			$task = $this->mydata->listdataall('task')->result();
			$sms = $this->mydata->listdataall('sms')->result();
			
			foreach ($task as $t) {
					
				
				echo '{
				"task":[
				    {"taskName":"'.$t->taskName.'"}, 
				    {"startDateTime":"'.$t->taskName.'"},
				    {"recipient":"'.$t->recipient.'"}
				]
				}';	
			
			}		
			
		}
		function save_task(){
			
			$this->output->set_header("Access-Control-Allow-Origin: *");
			/*
			$data = array (
				'start_time' => $this->input->post('starttime'),
				'end_time' => $this->input->post('endtime'),
				'data_form' => $this->input->post('date'),
				'date_to' => $this->input->post('date_to'),
				'task' => $this->input->post('taskname'),
				'penerima' => $this->input->post('recipient'),
				'status' => $this->input->post('taskstatus'),
				'message' => $this->input->post('message')
			);
			 * 
			 */
			 $data = (array)json_decode(file_get_contents('php://input'));
	      	 
			 $this->mydata->save($data,'task');
	
	      	 $response = array(
	         'Success' => true,
	         'Info' => 'Save');
	
	      	$this->output
	        	->set_status_header(201)
	        	->set_content_type('application/json', 'utf-8')
	        	->set_output(json_encode($response, JSON_PRETTY_PRINT))
	        	->_display();
	        exit;
			
			
			
		}
		function save_order(){
			
			$this->output->set_header("Access-Control-Allow-Origin: *");
			
			$data = array (
			
				'pelangan' => $this->input->post('pelangan'),
				'maklumat' => $this->input->post('maklumat')
			);
			
			echo $this->mydata->save($data,'tempah');
		}
		
}