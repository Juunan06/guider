<?php

session_start();

require '../../../class/Database.php';

$date = $schedule = $value = "";

$id = $_SESSION['guide'];
$guide_last = $_SESSION['name'];
$last = $_SESSION['u_last'];
$phone = $_SESSION['u_phone'];
$email = $_SESSION['u_email'];
$error = "vous devez sélectionner les champs avant de valider";

if(isset($_POST['reserve']) && !empty($_POST['reserve'])){

	
	$date = $_POST['date'];
	$schedule = $_POST['schedule'];
	$value = $_POST['value'];
	

	
	// errors handling after submit:

	if(empty($date) || empty($schedule) || empty($value)){

			 $_SESSION["error"] = $error;
			 header('Location:../index.html?error');

			 
	} else {

		$db = Database::connect();

		$statement = $db->prepare('INSERT INTO `events`(`users_last`, `users_email`, `users_phone`, `date`, `start`, `value`, `id_guide`, `guide_last`) VALUES (:u_last,:u_email,:u_phone,:u_date,:u_schedule,:u_value,:u_guide,:u_guide_last)');

		$statement->bindValue(':u_last',$last);
		$statement->bindValue(':u_email',$email);
		$statement->bindValue(':u_phone',$phone);
		$statement->bindValue(':u_date',$date);
		$statement->bindValue(':u_schedule',$schedule);
		$statement->bindValue(':u_value',$value);
		$statement->bindValue(':u_guide',$id);
		$statement->bindValue(':u_guide_last',$guide_last);
        $statement->execute();

        Database::disconnect();

        header('Location:/index.php?reserve=success');


	}
} 

	



