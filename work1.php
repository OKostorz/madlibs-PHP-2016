<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styleML.css">
</head>
<body>
<div id="container">
		<header>
			<img src="logo.png">
			<div id="navigatie">
				<nav>
					<ul>
						<li><a href="index.php">Er heerst paniek...</a></li>
						<li><a href="onkunde.php">Onkunde</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<main>
			<h3>Onkunde</h3>
			<div id="text">
				<p> Er zijn veel mensen die niet kunnen <?= $_POST['message'] ?>. Neem nou <?= $_POST['message2'] ?>. Zelfs met de hulp van een <?= $_POST['message4'] ?> of zelfs <?= $_POST['message3'] ?> kan <?= $_POST['message2'] ?> niet <?= $_POST['message'] ?>. Dat heeft niet te maken met een gebrek aan <?= $_POST['message5'] ?>, maar met een te veel aan <?= $_POST['message6'] ?>. <?= $_POST['message6'] ?> leidt tot <?= $_POST['message7'] ?> en dat is niet goed als je wilt <?= $_POST['message'] ?>. Helaas voor <?= $_POST['message2'] ?>.</p><br>
			</div>
		</main>
		<footer>
			<h4>by Livv - 2017 </h4>
		</footer>

</body>
</html>