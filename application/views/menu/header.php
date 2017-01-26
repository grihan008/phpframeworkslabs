<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Example</title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>">
</head>
<body>
	
	<h1>Menu</h1>
	<ul>
		<li><a href="<?php echo site_url('main/index');?>">Main</a></li>
		<li><a href="<?php echo site_url('customers/ShowCustomers');?>">ShowCustomers</a></li>
		<li><a href="<?php echo site_url('customers/addCustomers') ?>">Add a customer</a></li>
		<li><a href="<?php echo site_url('customers/deleteCustomers') ?>">Delete customers</a></li>
		<li><a href="<?php echo site_url('customers/updateCustomers') ?>">Update customers</a></li>
	</ul>

<!-- </body>
</html> -->