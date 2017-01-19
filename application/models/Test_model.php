<?php

class Test_model extends CI_model
{
	public function getCustomer()
	{
		$names=array(
			array("fn"=>"Ann","ln"=>"Smith"),
			array("fn"=>"John","ln"=>"Walker"),
			array("fn"=>"Postal","ln"=>"Dude")
		);
		return $names;		
	}
}