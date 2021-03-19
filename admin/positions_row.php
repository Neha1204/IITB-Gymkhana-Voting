<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = new mysqli('localhost', 'root', '', 'sports');
		$sql = "SELECT * FROM positions WHERE id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>