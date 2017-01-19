<?php
	
class Customer extends CI_Controller
{
	public function showCustomers()
	{
		$this->load->model('Customer_model');
		$data['customers']=$this->Customer_model->getCustomers();
		$this->load->view('customers/showCustomers',$data);
	}
}