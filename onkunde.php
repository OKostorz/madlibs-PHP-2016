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
			<h3>Onkunde</h3>
				<form action="work1.php" method="POST">
					<label>Wat zou je graag willen kunnen?</label>
						<input type="text" name="message"><br><br>
					<label>Met welke persoon kun je goed opschieten?</label>
						<input type="text" name="message2"><br><br>
					<label>Wat is je favoriete getal?</label>
						<input type="text" name="message3"><br><br>
					<label>Wat heb je altijd bij je als je op vakantie gaat?</label>
						<input type="text" name="message4"><br><br>
					<label>Wat is je beste persoonlijke eingenschap?</label>
						<input type="text" name="message5"><br><br>
					<label>Wat is je slechtste persoonlijke eigenschap?</label>
						<input type="text" name="message6"><br><br>
					<label>Wat is het ergste dat je kan overkomen?</label>
						<input type="text" name="message7"><br><br>

					<input type="submit" name="submit"><br><br>
				</form>
		</main>

		<footer>
			<h4>by Livv - 2017 </h4>
		</footer>


			

	</div>
</body>
</html>