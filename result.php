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
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Aperitif</title>
    <link rel="stylesheet" href="result.css">
</head>
<body>
	<?php
	$query = "SELECT question, ip, nom, reponse FROM reponse WHERE etape = 'etape1'";

	$stmt = $DB->query($query);
	$rows = $stmt->fetchAll(PDO::FETCH_GROUP);
	?>
    <div class="etape">
        <h1>Apéritif</h1>
        <div class="question">
            <h2>Notes pour la cuisine</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
                if(isset($rows["question1"]))
				{
                    foreach($rows["question1"] as $value)
                    {
                        $moyenne += intval($value['reponse']);
                        echo '
                        <div class="reponse-joueur">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
                    }
                    $moyenne = round($moyenne / count($rows["question1"]), 1);
                } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour l'ambiance</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question2"]))
				{
                    foreach($rows["question2"] as $value)
                    {
                        $moyenne += intval($value['reponse']);
                        echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
                    }
                    $moyenne = round($moyenne / count($rows["question2"]), 1);
                    ?>

                <?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour présentation</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question3"]))
				{
                    foreach($rows["question3"] as $value)
                    {
                        $moyenne += intval($value['reponse']);
                        echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
                    }
                    $moyenne = round($moyenne / count($rows["question3"]), 1);
                    ?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Commentaires</h2>
            <div class="reponse-box2">
				<?php
				if(isset($rows["question4"]))
				{
                    foreach($rows["question4"] as $value)
                    {
                        echo '
                        <div class="reponse-joueur2">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
                    }
				}
				?>
            </div>
        </div>
    </div>

	<?php
	$query = "SELECT question, ip, nom, reponse FROM reponse WHERE etape = 'etape2'";

	$stmt = $DB->query($query);
	$rows = $stmt->fetchAll(PDO::FETCH_GROUP);
	?>
    <div class="etape">
        <h1>Entrée froide</h1>
        <div class="question">
            <h2>Notes pour la cuisine</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question1"]))
				{
					foreach($rows["question1"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                        <div class="reponse-joueur">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
					}
					$moyenne = round($moyenne / count($rows["question1"]), 1);
				} ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour l'ambiance</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question2"]))
				{
					foreach($rows["question2"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
					}
					$moyenne = round($moyenne / count($rows["question2"]), 1);
					?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour présentation</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question3"]))
				{
					foreach($rows["question3"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
					}
					$moyenne = round($moyenne / count($rows["question3"]), 1);
					?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Commentaires</h2>
            <div class="reponse-box2">
				<?php
				if(isset($rows["question4"]))
				{
					foreach($rows["question4"] as $value)
					{
						echo '
                        <div class="reponse-joueur2">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
					}
				}
				?>
            </div>
        </div>
    </div>

	<?php
	$query = "SELECT question, ip, nom, reponse FROM reponse WHERE etape = 'etape3'";

	$stmt = $DB->query($query);
	$rows = $stmt->fetchAll(PDO::FETCH_GROUP);
	?>
    <div class="etape">
        <h1>Entrée chaude</h1>
        <div class="question">
            <h2>Notes pour la cuisine</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question1"]))
				{
					foreach($rows["question1"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                        <div class="reponse-joueur">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
					}
					$moyenne = round($moyenne / count($rows["question1"]), 1);
				} ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour l'ambiance</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question2"]))
				{
					foreach($rows["question2"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
					}
					$moyenne = round($moyenne / count($rows["question2"]), 1);
					?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour présentation</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question3"]))
				{
					foreach($rows["question3"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
					}
					$moyenne = round($moyenne / count($rows["question3"]), 1);
					?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Commentaires</h2>
            <div class="reponse-box2">
				<?php
				if(isset($rows["question4"]))
				{
					foreach($rows["question4"] as $value)
					{
						echo '
                        <div class="reponse-joueur2">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
					}
				}
				?>
            </div>
        </div>
    </div>

	<?php
	$query = "SELECT question, ip, nom, reponse FROM reponse WHERE etape = 'etape4'";

	$stmt = $DB->query($query);
	$rows = $stmt->fetchAll(PDO::FETCH_GROUP);
	?>
    <div class="etape">
        <h1>Plat</h1>
        <div class="question">
            <h2>Notes pour la cuisine</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question1"]))
				{
					foreach($rows["question1"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                        <div class="reponse-joueur">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
					}
					$moyenne = round($moyenne / count($rows["question1"]), 1);
				} ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour l'ambiance</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question2"]))
				{
					foreach($rows["question2"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
					}
					$moyenne = round($moyenne / count($rows["question2"]), 1);
					?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour présentation</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question3"]))
				{
					foreach($rows["question3"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
					}
					$moyenne = round($moyenne / count($rows["question3"]), 1);
					?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Commentaires</h2>
            <div class="reponse-box2">
				<?php
				if(isset($rows["question4"]))
				{
					foreach($rows["question4"] as $value)
					{
						echo '
                        <div class="reponse-joueur2">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
					}
				}
				?>
            </div>
        </div>
    </div>

	<?php
	$query = "SELECT question, ip, nom, reponse FROM reponse WHERE etape = 'etape5'";

	$stmt = $DB->query($query);
	$rows = $stmt->fetchAll(PDO::FETCH_GROUP);
	?>
    <div class="etape">
        <h1>Animation</h1>
        <div class="question">
            <h2>Notes pour le thème</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question1"]))
				{
					foreach($rows["question1"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                        <div class="reponse-joueur">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
					}
					$moyenne = round($moyenne / count($rows["question1"]), 1);
				} ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour l'ambiance</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question2"]))
				{
					foreach($rows["question2"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
					}
					$moyenne = round($moyenne / count($rows["question2"]), 1);
					?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour le niveau de divertissement</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question3"]))
				{
					foreach($rows["question3"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
					}
					$moyenne = round($moyenne / count($rows["question3"]), 1);
					?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Commentaires</h2>
            <div class="reponse-box2">
				<?php
				if(isset($rows["question4"]))
				{
					foreach($rows["question4"] as $value)
					{
						echo '
                        <div class="reponse-joueur2">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
					}
				}
				?>
            </div>
        </div>
    </div>

	<?php
	$query = "SELECT question, ip, nom, reponse FROM reponse WHERE etape = 'etape6'";

	$stmt = $DB->query($query);
	$rows = $stmt->fetchAll(PDO::FETCH_GROUP);
	?>
    <div class="etape">
        <h1>Dessert</h1>
        <div class="question">
            <h2>Notes pour la cuisine</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question1"]))
				{
					foreach($rows["question1"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                        <div class="reponse-joueur">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
					}
					$moyenne = round($moyenne / count($rows["question1"]), 1);
				} ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour l'ambiance</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question2"]))
				{
					foreach($rows["question2"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
					}
					$moyenne = round($moyenne / count($rows["question2"]), 1);
					?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Notes pour présentation</h2>
            <div class="reponse-box">
				<?php
				$moyenne = 0;
				if(isset($rows["question3"]))
				{
					foreach($rows["question3"] as $value)
					{
						$moyenne += intval($value['reponse']);
						echo '
                            <div class="reponse-joueur">
                                <div class="nom">' . $value['nom'] . '</div>
                                <div class="reponse">' . $value['reponse'] . '</div>
                            </div>
                            ';
					}
					$moyenne = round($moyenne / count($rows["question3"]), 1);
					?>

				<?php } ?>
            </div>
            <div class="moyenne">
                <div>Moyenne</div>
                <div class="number"><?= $moyenne ?></div>
            </div>
        </div>
        <div class="question">
            <h2>Commentaires</h2>
            <div class="reponse-box2">
				<?php
				if(isset($rows["question4"]))
				{
					foreach($rows["question4"] as $value)
					{
						echo '
                        <div class="reponse-joueur2">
                            <div class="nom">' . $value['nom'] . '</div>
                            <div class="reponse">' . $value['reponse'] . '</div>
                        </div>
                        ';
					}
				}
				?>
            </div>
        </div>
    </div>
</body>
</html>
