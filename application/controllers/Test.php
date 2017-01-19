<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{
	public function sayHello()
	{
		echo 'Suuuuuup';
	}

	public function index()
	{
		echo 'this is index';
	}

	public function second()
	{
		$data['fname']='Jim';
		$data['lname']='Beam';
		$this->load->view('test/second',$data);
	}

	public function showNames()
	{
		$this->load->model('Test_model');
		$data['customers']=$this->Test_model->getCustomer();
		$this->load->view('test/showNames',$data);
	}
}