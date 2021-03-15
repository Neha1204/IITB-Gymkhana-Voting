<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$starttime = $_POST['starttime'];
		$endtime = $_POST['endtime'];
		
		$sql = "INSERT INTO election (title, starttime, endtime) VALUES ('$title', '$starttime', '$endtime')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Election added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
		
		$connec = new mysqli('localhost', 'root', '');
           // Check connection
        if ($connec->connect_error) {
           die("Connection failed: " . $connec->connect_error);
        } 
		
		$sql = "CREATE DATABASE ".$title;
        if ($connec->query($sql) === TRUE) {
            $_SESSION['success'] = 'Election added successfully';
        } else {
            $_SESSION['error'] = $connec->error;
        }
		
		$mysql_host = "localhost";
		$db = new PDO("mysql:host=$mysql_host;dbname=$title", 'root', '');
        $query = file_get_contents("./election_database.sql");
        $stmt = $db->prepare($query);

        if ($stmt->execute()){
           echo "Database created successfully";
        }else{ 
           echo "Fail";
        }

		

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>