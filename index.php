<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
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
				<form action="work.php" method="POST">
					<label>Welk dier zou je nooit als huisdier willen hebben?</label>
						<input type="text" name="antwoord"><br><br>
					<label>Wie is de belangrijkste persoon in je leven?</label>
						<input type="text" name="antwoord2"><br><br>
					<label>In welk land zou je graag willen wonen?</label>
						<input type="text" name="antwoord3"><br><br>
					<label>Wat doe je als je je verveelt?</label>
						<input type="text" name="antwoord4"><br><br>
					<label>Met welk speelgoed speelde je als kind het meest?</label>
						<input type="text" name="antwoord5"><br><br>
					<label>Bij welke docent spijbel je het liefst?</label>
						<input type="text" name="antwoord6"><br><br>
					<label>Als je €100.000,- had, wat zou je dan kopen?</label>
						<input type="text" name="antwoord7"><br><br>
					<label>Wat is je favoriete bezigheid?</label>
						<input type="text" name="antwoord8"><br><br>

					<input type="submit" name="submit"><br><br>
				</form>
		</main>

		<footer>
			<p>by Livv - 2017 </p>
		</footer>


			

	</div>
</body>
</html>