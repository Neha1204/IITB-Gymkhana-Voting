<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		// fetching title of election from id  
		$sql = "SELECT title FROM election WHERE id = '".$id."'" ;
		$result = $conn -> query($sql);
		$row = $result -> fetch_assoc();
        $title = $row['title'];
	
	    // Deleting election from iitbvoting database
		$sql = "DELETE FROM election WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Election deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
		
		// connecting to root so as to delete database
		$connec =  new mysqli('localhost', 'root', '');
		
		if(! $connec ) {
           die('Could not connect: ' . mysql_error());
        }
		
		$title = str_replace(' ', '', $title);
		$sql = "DROP DATABASE ".$title;
	
        if(!$connec->query($sql)) {
           die('Could not delete database db_test: ' . mysql_error());
        } 
		
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: index.php');
	
?>