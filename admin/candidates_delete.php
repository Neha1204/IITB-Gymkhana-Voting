<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$conn = new mysqli('localhost', 'root', '', 'sports');
		$sql = "DELETE FROM candidates WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: candidates.php');
	
?>