<?php

	// Connect to database
	$con=mysqli_connect("localhost","root","","crud");

	// Check if id is set or not if true toggle,
	// else simply go back to the page
	if (isset($_GET['id'])){

		// Store the value from get to a
		// local variable "course_id"
		$employee_id=$_GET['id'];

		// SQL query that sets the status
		// to 1 to indicate activation.
		$sql="UPDATE `userlogin` SET
			`designation`= 0 WHERE employee_data_id='$employee_id'";

		// Execute the query
		mysqli_query($con,$sql);
	}

	// Go back to course-page.php
	header('location: employee-account.php');
?>