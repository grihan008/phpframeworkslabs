<h1>Update Customers</h1>
<form action='<?php echo site_url('customers/doUpdate');?>' method='POST'>
<table>
<tr><th>Firstname</th><th>Lastname</th></tr>
<?php
	foreach ($customers as $row) {
		echo "<tr><td><input type='hidden' name='id[]' value=".$row["id_customers"]."><input type='text' name='fn[]' value=".$row["fname"]."></td><td><input type='text' name='ln[]' value=".$row["lname"]."></td><td></td></tr>";
	}
?>
</table>
<button type="submit" name="btnUpdate">Update</button>
</form>