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
			<h3>Er heerst paniek...</h3>
			<div id="text">
				<p>	Er heerst paniek in het koninkrijk <?= $_POST['antwoord3'] ?>. Koning <?= $_POST['antwoord6'] ?> is ten einde raad en als koning Egmond ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= $_POST['antwoord2'] ?>.</p><br>
				<p>"<?= $_POST['antwoord2'] ?>! Het is een ramp! Het is een schandel!"</p><br>
				<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p><br>
				<p>"Mijn <?= $_POST['antwoord'] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?= $_POST['antwoord5'] ?> voor hem gekocht!"</p><br>
				<p>"Majesteit, uw <?= $_POST['antwoord'] ?> komt vast vanzelf weer terug?"</p><br>
				<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?= $_POST['antwoord8'] ?> leren?"</p><br>
				<p>"Maar Sire, daar kunt u toch uw <?= $_POST['antwoord7'] ?> voor gebruiken."</p><br>
				<p>"<?= $_POST['antwoord2'] ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p><br>
				<p>"<?= $_POST['antwoord4'] ?>, Sire"</p><br>
			</div>
		</main>
		<footer>
			<h4>by Livv - 2017 </h4>
		</footer>

</body>
</html>