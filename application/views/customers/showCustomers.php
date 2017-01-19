<h1>Customers from DB</h1>
<?php
	foreach ($customers as $row) {
		echo $row["fname"]." ".$row["lname"]."<br>";
	}
?>