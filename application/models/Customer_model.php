<?php

class Customer_model extends CI_Model
{
	public function getCustomers()
	{
		$this->db->select('*');
		$this->db->from('Customers');
		return $this->db->get()->result_array();
	}

	public function addCustomers($insert_data)
	{
		$this->db->insert('Customers',$insert_data);
		return $this->db->affected_rows();
	}

	public function deleteCustomers($delete_id)
	{
		$this->db->delete('Customers', array("id_customers"=>$delete_id));
	}

	public function updateCustomers($update_data, $id)
	{
		$this->db->where("id_customers", $id);
		$this->db->update("Customers", $update_data);
	}
}