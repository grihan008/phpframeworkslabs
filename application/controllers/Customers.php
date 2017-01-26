<?php
	
class Customers extends CI_Controller
{
	public function showCustomers()
	{
		$this->load->model('Customer_model');
		$data['customers']=$this->Customer_model->getCustomers();
		$data['page']="customers/showCustomers";
		$this->load->view('menu/content',$data);
	}

	public function addCustomers()
	{
		$this->load->model('Customer_model');
		$test=0;
		$btn=$this->input->post("btnSave");
		if (isset($btn)){
			$insert_data=array(
					"fname"=>$this->input->post("fn"),
					"lname"=>$this->input->post("ln")
				);

			$test=$this->Customer_model->addCustomers($insert_data);
		}
		$data['test']=$test;
		$data['page']="customers/addCustomers";
		$this->load->view('menu/content',$data);
	}

	public function deleteCustomers()
	{
		$btn=$this->input->post("delbtn");
		$this->load->model('Customer_model');
		if (isset($btn)){
			$this->Customer_model->deleteCustomers($this->input->post("delete_id"));
		}
		$data['customers']=$this->Customer_model->getCustomers();
		$data['page']="customers/deleteCustomers";
		$this->load->view('menu/content',$data);
	}

	public function updateCustomers()
	{
		$this->load->model('Customer_model');
		$data['customers']=$this->Customer_model->getCustomers();
		$data['page']="customers/updateCustomers";
		$this->load->view('menu/content',$data);
	}

	public function doUpdate()
	{
		$this->load->model('Customer_model');
		$id_customers=$this->input->post("id");
		$fname=$this->input->post("fn");
		$lname=$this->input->post("ln");
		
		$amount=count($id_customers);
		for ($x=0; $x<$amount; $x++){
			$update_data=array(
				"fname"=>$fname[$x],
				"lname"=>$lname[$x]
				);
			$this->Customer_model->updateCustomers($update_data,$id_customers[$x]);
		}
		$data['customers']=$this->Customer_model->getCustomers();
		$data['page']="customers/updateCustomers";
		$this->load->view('menu/content',$data);
	}
}