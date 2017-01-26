<h1>Add a new Customer</h1>
<form action="<?php echo site_url('customers/addCustomers'); ?>" method="POST">
	<table>
		<tr>
			<td>Firstname</td>
			<td><input type="text" name="fn"></td>
		</tr>
		<tr>
			<td>Lastname</td>
			<td><input type="text" name="ln"></td>
		</tr>
		<tr>
			<td colspan="2"><button type="submit" name="btnSave">ADD</button></td>
		</tr>
	</table>
</form>

<?php
	if ($test>0){
		echo "Data was successfully inserted";
	}
?>