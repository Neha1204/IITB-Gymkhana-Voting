<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		//$title = $_POST['title'];
		$starttime = $_POST['starttime'];
		$endtime = $_POST['endtime'];

		$sql = "SELECT * FROM election WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		
		$sql = "UPDATE election SET starttime = '$starttime', endtime = '$endtime' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Election updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
		
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: index.php');

?>