<!DOCTYPE html>
<html>
	<head>
		<title>Mini-Chat</title>
	</head>
	<body>
		<?php
		if ($_POST['username'] == "abcd" && $_POST['password'] == "misterroger")
		{
			
			?>
			<form action="minichat_post.php" method="POST">
			<p><label>Pseudo : </label><input type="text" name="name"></p>
			<p><label>Message : </label><input type="text" name="msg"></p>
			<p><input type="submit" value="Envoyer" /></p>
		</form>

		<?php
			$bdd = new PDO('mysql:host=localhost;dbname=minichat', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$reponse = $bdd->query('SELECT name, msg FROM msg');

			while($data = $reponse->fetch())
			{
				echo '<p>' . htmlspecialchars($data['name']) . '</p>';
				echo '<p>' . htmlspecialchars($data['msg']) . '</p>';
			}
		?>
			<?php
		}
		else
		{
			echo 'Identifiant non reconnu.'
			
		}
		?>
	</body>
</html>