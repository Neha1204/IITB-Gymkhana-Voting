<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['vote'])){
		if(count($_POST) == 1){
			$_SESSION['error'][] = 'Please vote atleast one candidate';
		}
		else{
			$_SESSION['post'] = $_POST;
			$conn = new mysqli('localhost', 'root', '', 'sports');
			$sql = "SELECT * FROM positions";
			$query = $conn->query($sql);
			$error = false;
			$sql_array = array();
			while($row = $query->fetch_assoc()){
				$position = slugify($row['description']);
				$pos_id = $row['id'];
				if(isset($_POST[$position])){
					if($row['max_vote'] > 1){
						if(count($_POST[$position]) > $row['max_vote']){
							$error = true;
							$_SESSION['error'][] = 'You can only choose '.$row['max_vote'].' candidates for '.$row['description'];
						}
						else{
							$updat = "UPDATE voters SET voted = 1 WHERE id = '".$voter['id']."'";
							$que = $conn->query($updat);
							foreach($_POST[$position] as $key => $values){
								$sql_array[] = "INSERT INTO votes (candidate_id, position_id) VALUES ('$values', '$pos_id')";
							}

						}
						
					}
					else{
						$updat = "UPDATE voters SET voted = 1 WHERE id = '".$voter['id']."'";
					    $que = $conn->query($updat);
						$candidate = $_POST[$position];
						$sql_array[] = "INSERT INTO votes ( candidate_id, position_id) VALUES ('$candidate', '$pos_id')";
					}

				}
				
			}

			if(!$error){
				foreach($sql_array as $sql_row){
					$conn->query($sql_row);
				}

				unset($_SESSION['post']);
				$_SESSION['success'] = 'Ballot Submitted';

			}

		}

	}
	else{
		$_SESSION['error'][] = 'Select candidates to vote first';
	}

	header('location: home.php');

?>