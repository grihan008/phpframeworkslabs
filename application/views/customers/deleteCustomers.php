<h1>Delete Customers</h1>
<table>
<tr><th>Firstname</th><th>Lastname</th><th>Delete</th></tr>
<?php
	foreach ($customers as $row) {
		echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td><form action='".site_url('customers/deleteCustomers')."' method='POST'><input type='hidden' name='delete_id' value=".$row["id_customers"]."><button type='submit' name='delbtn'>Delete</button></form></td></tr>";
	}
?>
</table>