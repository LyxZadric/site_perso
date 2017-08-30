<?php
$errors = [];
// test des variables reçues en post
if(!isset($_POST['nom']) || $_POST['nom'] == ''){
	$errors['nom'] = "Vous n'avez pas renseigné votre nom";
}
if(!isset($_POST['mail']) || $_POST['mail'] == '' || filter_var($_POST['mail'], FILTER_VALIDATE_MAIL)){
	$errors['mail'] = "Vous n'avez pas renseigné un e-mail valide";
}
if(!isset($_POST['sujet']) || $_POST['sujet'] == ''){
	$errors['sujet'] = "Vous n'avez pas renseigné de sujet";
}
if(!isset($_POST['message']) || $_POST['message'] == ''){
	$errors['message'] = "Vous n'avez pas renseigné de message";
}

session_start();

if(!empty($errors)){
	$_SESSION['errors'] = $errors;
	$_SESSION['inputs'] = $_POST;
	header('Location: index.php#form');
}else{
	$_SESSION['success'] = 1;
	$message = $_POST['messsage'];
	$headers = "FROM: site@local.dev";
	mail("deborah.boodhoo@gmail.com", "test", $message, $headers);
	header('Location: index.php#form');
}
?>
