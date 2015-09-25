<!DOCTYPE html>
<HTML>
<head>

	<meta charset="utf-8">
	<title>Zamówienie</title>
</head>
<body>

	<h1>Formularz</h1>
	<form action="hello.php" method="post">
	Podaj swoje imię:
		<input type="text" name="twojeimie" placeholder="Wpisz imię"/>
	<br/><br/>
	
		<input type = "submit" value="Wyślij"/>
	</form>
	<br/><br/>
	
	
<?php

$twojeimie = '';
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		if(isset($_POST['twojeimie']) && strlen(trim($_POST['twojeimie'])) > 1) {
			$twojeimie = trim($_POST['twojeimie']);
				echo "Czesc $twojeimie !";
		}

	}


?>

</body>
</html>