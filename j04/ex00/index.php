<?php session_start(); ?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
	<style>
	form{
		margin: 0 auto;
		width: 400px;
		padding: 1em;
		border: 1px solid #CCC;
		border-radius: 1em;
	}
	input{
		font: 1em sans-serif;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	</style>
	</head>
	<body>
<?php
if (isset($_GET["submit"]))
{
	if ($_GET["submit"] == "OK")
	{
		if (isset($_GET["login"]))
			$_SESSION["login"] = $_GET["login"];
		if (isset($_GET["passwd"]))
			$_SESSION["passwd"] = $_GET["passwd"];
	}
?>
		<form action="index.php" method="get">
			<input type="text" name="login" value="<?php echo $_SESSION["login"] ?>" placeholder="Entrez votre login">
			<input type="password" name="passwd" value="<?php echo $_SESSION["passwd"] ?>" placeholder="Entrez votre password">
			<input type="submit" name="submit" value="OK">
		</form>
	</body>
</html>
