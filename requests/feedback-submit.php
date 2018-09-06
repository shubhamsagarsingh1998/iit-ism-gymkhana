<?php

	try{
		require_once('../config/dbc.php');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e){
		$error = $e->getMessage();
	}

	if(isset($error)){
		echo $error;
	}
	else{
		if(isset($_POST) && !empty($_POST)){
			$sql = "INSERT INTO `feedbacks`(`name`, `contact`, `email`, `feedback`) VALUES (:name, :contact, :email, :feedback)";
			$result = $db->prepare($sql);
			$res = $result->execute(array(
				':name' => $_POST['name'],
				':contact' => $_POST['contact'],
				':email' => $_POST['email'],
				':feedback' => $_POST['feedback']
			));
			if($res) echo 1;
			else echo 'Internal Server Error';
		}
	}
?>
