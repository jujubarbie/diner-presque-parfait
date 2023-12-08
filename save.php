<?php

IF (!isset($_SESSION['ip']))
{
	$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
}

$DB = null;
try
{
	$DB = new PDO('mysql:host=localhost;dbname=anniv', 'root', 'none', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$DB->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
}
catch(Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

IF (isset($_POST['etape1']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
				$req->execute(array(
								  $_SESSION['ip'],
								  $_POST['nom'],
								  $_POST['question1'],
								  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
				$req->execute(array(
								  $_SESSION['ip'],
								  $_POST['nom'],
								  $_POST['question2'],
								  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
				$req->execute(array(
								  $_SESSION['ip'],
								  $_POST['nom'],
								  $_POST['question3'],
								  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
				$req->execute(array(
								  $_SESSION['ip'],
								  $_POST['nom'],
								  $_POST['question3'],
								  $_POST['reponse3']));
}

IF (isset($_POST['etape2']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question1'],
					  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question2'],
					  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question3'],
					  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question3'],
					  $_POST['reponse3']));
}

IF (isset($_POST['etape3']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question1'],
					  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question2'],
					  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question3'],
					  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question3'],
					  $_POST['reponse3']));
}

IF (isset($_POST['etape4']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question1'],
					  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question2'],
					  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question3'],
					  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question3'],
					  $_POST['reponse3']));
}

IF (isset($_POST['etape5']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question1'],
					  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question2'],
					  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question3'],
					  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question3'],
					  $_POST['reponse3']));
}

IF (isset($_POST['etape6']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question1'],
					  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question2'],
					  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question3'],
					  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, question, reponse) VALUES (?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom'],
					  $_POST['question3'],
					  $_POST['reponse3']));
}

//header("Location: http://");
exit;
