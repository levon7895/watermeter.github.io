<?php 
require "rb.php";

$data = $_POST;
if (isset ($data["do_signup"])) {
	$errors = array();
	if (trim($data["login"]) == '') {
		$errors[] = "datark login";
	}
	if (R::count('bajanord' , "login = ?" , array($data['login']))) {
			$errors[] = 'nuyn login';
	}
	if (trim($data["password"]) == '') {
		$errors[] = "datark password";
	}
	if (empty($errors)) {
		$user = R::dispense('bajanord');
		$user->login = $data['login'];
		$user->password = password_hash($data['password'],PASSWORD_DEFAULT);
		R::store($user);
		echo "sax tochniya gnac baza";
	}else
	{
		echo array_shift($errors);
	}
}
?>
<form action="/signup.php" method="POST">
	<p>Login</p>
	<input type="text" name="login" value="<?php echo @$data["login"] ?>">
	<p>Password</p>
	<input type="password" name="password">
	<button type="submit" name="do_signup">Regist</button>
</form>
