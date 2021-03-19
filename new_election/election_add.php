<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$starttime = $_POST['starttime'];
		$endtime = $_POST['endtime'];

		// inserting new election added to iitbvoting database
		
		$sql = "INSERT INTO election (title, starttime, endtime) VALUES ('$title', '$starttime', '$endtime')";
		if($conn->query($sql)){
			//$_SESSION['success'] = 'Election added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
		
		
		// connection with root and adding new database corresponding to the new election 
		$connec = new mysqli('localhost', 'root', '');
           // Check connection
        if ($connec->connect_error) {
           die("Connection failed: " . $connec->connect_error);
        } 

        $title = str_replace(' ', '', $title);
		$sql = "CREATE DATABASE ".$title;
        if ($connec->query($sql) === TRUE) {
            $_SESSION['success'] = 'Election added successfully';
        } else {
            $_SESSION['error'] = $connec->error;
        }
		
		
		// Adding voters, positions, candidates in the new database
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