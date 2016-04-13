<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">

      <div class="starter-template">

	<p>
# st-phil-generator</br></br>
## Générateur de ID et MDP</br></br>

Pour troller un peu un certain maire qui préfère soigner son égo plutot que... Ouais, la liste est trop longue. Déjà, d'écrire de vrai mot de passe ayant plus de possibilités que ce qu'il y a là. Ensuite, de créer un **vrai** système de mot de passe pour ses questionnaires, où le mot de passe sert vraiment à vérouiller l'accès. Bref, amusez-vous bien avec ça !</br></br>

( Après, peut-être que la sécurité informatique, c'est comme la culture et les services associatifs, ça passe après le sport, qui sait ? )</br></br>
		
| ID     | MDP    |</br>
| ------ | ------ |</br>
		<?php
		$i = 3000;
		$possibilities = 0;
		while($i<6000) {
			$numberMDP = $i-1989;
			$stringID = "SP".$i;
			$stringMDP = "GL".$numberMDP;

			$millierID = (int)($i / 1000);
			$centaineID = (int)(($i - ($millierID*1000)) / 100);
			$dizaineID = (int)(($i - (($millierID*1000)+($centaineID*100)))/10);
			$uniteID = (int)(($i - (($millierID*1000)+($centaineID*100)+($dizaineID*10))));

			$hashID = $millierID + $centaineID + $dizaineID + $uniteID;

			$millierMDP = (int)($numberMDP / 1000);
			$centaineMDP = (int)(($numberMDP - ($millierMDP*1000)) / 100);
			$dizaineMDP = (int)(($numberMDP - (($millierMDP*1000)+($centaineMDP*100)))/10);
			$uniteMDP = (int)(($numberMDP - (($millierMDP*1000)+($centaineMDP*100)+($dizaineMDP*10))));

			$hashMDP = $millierMDP + $centaineMDP + $dizaineMDP + $uniteMDP;
			if ($hashID==$hashMDP) {
				$possibilities++;
				echo "| ".$stringID." | ".$stringMDP."|</br>";
			}
			$i++;
		}
		
		
		?>
		</table>

		<br />Vous noterez que cela nous fait en tout <?php echo $possibilities; ?> possibilités :) ( *#SoSecure* )
		</p>
		

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

