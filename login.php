<?php 
require "rb.php";

$data = $_POST;
if (isset($data['do_login'])) {
	$errors = array();
	$users = R::findOne('bajanord' , 'login = ?' , array($data['login']));
	if ( $users ) 
	{
		if (password_verify($data['password'] , $users->password)) 
		{
			$_SESSION["Logged_user"] = $users;
			echo 'duq mtaq sait karas gnas het <a href = "/">glavni</a> ';
		}
		else
		{
			$errors[] = "paroly sxala";
		}
	}
	else
	{
		$errors[] = "ytenc login chka ho du debil ches";
	}
	if (! empty($errors)) 
	{
		echo array_shift($errors);
	}
}
?>
<form action="/login.php" method="POST">
	<p>Login</p>
	<input type="text" name="login" value="<?php echo @$data["login"] ?>">
	<p>Password</p>
	<input type="password" name="password">
	<button type="submit" name="do_login">login</button>
</form>