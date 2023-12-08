<?php

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

$query = "SELECT question, ip, nom, reponse FROM reponse WHERE etape = 'etape1'";

$stmt = $DB->query($query);
$rows = $stmt->fetchAll(PDO::FETCH_GROUP);

echo "<pre>";
print_r($rows);
echo "<pre>";

?>
<h1>Etape 1</h1>
<h2>Question1</h2>

<?php
$moyenne = 0;
foreach ($rows["question1"] as $value) {
	echo '
<div>
	<div class="nom">'.$value['nom'].'</div>
	<div class="reponse">'.$value['reponse'].'</div>
</div>
';
}
?>
