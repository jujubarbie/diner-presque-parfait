<?php
session_set_cookie_params(3600*10);
session_start();

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

IF (isset($_POST['register']))
{
	$req = $DB->prepare('INSERT INTO joueur (ip, nom) VALUES (?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_POST['nom']));
	$_SESSION['nom'] = $_POST['nom'];
}

$query = "SELECT nom FROM joueur WHERE ip='" . $_SESSION['ip'] . "'";

$stmt = $DB->query($query);
$data = $stmt->fetchAll();

if(isset($data[0]['nom']))
{
	$_SESSION['nom'] = $data[0]['nom'];
	Echo "tu es " . $_SESSION['nom'];
}
else
{
	echo "Participant inconnu";
}



IF (isset($_POST['etape1']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
				$req->execute(array(
								  $_SESSION['ip'],
								  $_SESSION['nom'],
								  'etape1',
								  'question1',
								  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
				$req->execute(array(
								  $_SESSION['ip'],
								  $_SESSION['nom'],
								  'etape1',
								  'question2',
								  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
				$req->execute(array(
								  $_SESSION['ip'],
								  $_SESSION['nom'],
								  'etape1',
								  'question3',
								  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
				$req->execute(array(
								  $_SESSION['ip'],
								  $_SESSION['nom'],
								  'etape1',
								  'question4',
								  $_POST['reponse4']));
}

IF (isset($_POST['etape2']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape2',
					  'question1',
					  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape2',
					  'question2',
					  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape2',
					  'question3',
					  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape2',
					  'question4',
					  $_POST['reponse4']));
}

IF (isset($_POST['etape3']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape3',
					  'question1',
					  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape3',
					  'question2',
					  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape3',
					  'question3',
					  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape3',
					  'question4',
					  $_POST['reponse4']));
}

IF (isset($_POST['etape4']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape4',
					  'question1',
					  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape4',
					  'question2',
					  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape4',
					  'question3',
					  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape4',
					  'question4',
					  $_POST['reponse4']));
}

IF (isset($_POST['etape5']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape5',
					  'question1',
					  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape5',
					  'question2',
					  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape5',
					  'question3',
					  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape5',
					  'question4',
					  $_POST['reponse4']));
}

IF (isset($_POST['etape6']))
{
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape6',
					  'question1',
					  $_POST['reponse1']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape6',
					  'question2',
					  $_POST['reponse2']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape6',
					  'question3',
					  $_POST['reponse3']));
	$req = $DB->prepare('INSERT INTO reponse (ip, nom, etape, question, reponse) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array(
					  $_SESSION['ip'],
					  $_SESSION['nom'],
					  'etape6',
					  'question4',
					  $_POST['reponse4']));
}

header("Location: ok.html");
exit;
