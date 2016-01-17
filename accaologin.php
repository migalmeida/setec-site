<?php

	include_once ("common/session.php");
	include_once ("common/database.php");
	
	$login = $_POST['nome'];
	$password = $_POST['pass'];
	$pass_md5 = md5($password);
	$teste1='admin';
	$teste2='normal';

	$query = "SELECT username, pass FROM users WHERE username='".$login."';";
	$result = pg_exec($conn, $query);
	echo


	$queryZ = "SELECT * FROM admintable";
	$resultZ = pg_exec($conn, $queryZ);

	
	if (pg_num_rows($resultZ) == 0)	
	{
		if(pg_num_rows($result) == 0)
		{
			// header("Location: index.php");
			header("Location: login.php");
		}
	}
	if (pg_num_rows($resultZ) == 0)	
	{
		if(pg_num_rows($result) != 0)
		{	
			$var = pg_fetch_result($result, 0, 0);
			$_SESSION['tipo'] = 'Normal User';
			$_SESSION['username'] = $login;
			$_SESSION['tipo'] = $teste2;
			// header("Location: perfil.php");
			header("Location: user_index.php");
		}
	}
	if (pg_num_rows($resultZ) != 0)	
	{	
			$_SESSION['username'] = $login;
			$_SESSION['tipo'] = 'Super User';
			// header("Location: inicial_admin.php");
			header("Location: user_index.php");

	}

?>
