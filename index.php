<?php 
require "rb.php";
$data = $_POST;
if (isset($data['login_submit'])) 
{
	$errors = array();
	$users = R::findOne('users' , 'username = ?' , array($data['username']));
	if ( $users ) 
	{
		if (password_verify($data['password'],$users->password))
		{
			$_SESSION["Logged_user"] = $users;
			if ($users->Provilegy == '0') {
				header("Location: ../pages/user.php/");
			}
			else if($users->Provilegy == '2')
			{
				header("Location: ../pages/admin.php/");
			}
			else if($users->Provilegy == '1')
			{
				header("Location: ../pages/admin.php/");
			}
			
		}
		else
		{
			$errors[] = "Ձեր գաղտնանունը կամ գաղտնաբառը սխալ է";
		}
	}
	else
	{
		$errors[] = "Ձեր գաղտնանունը կամ գաղտնաբառը սխալ է";
	}
}
?>


<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>T.E.K Water</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Изображение для соц. сетей - СТАРТ -->
	<meta property="og:image" content="path/to/image.jpg">
	<!-- Изображение для соц. сетей - КОНЕЦ -->

	<!-- фавикон - СТАРТ -->
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<!-- фавикон - КОНЕЦ -->


	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>
	<section class="register-index">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
					<span class="error_login"><?php if (! empty($errors)) 
						{
							echo array_shift($errors);
						} ?></span>
					<div class="round">
					<div class="truba"></div>
					<div class="truba truba2"></div>
					<div class="round-div">
						<div class="meter">
							<p>
								<span>0</span>
								<span>0</span>
								<span>0</span>
								<span>0</span>
								<span>5</span>
								<span>6</span>
								<span>7</span>
								<span>8</span>
							</p>
						</div>
						<form action="/index.php" method="POST" class="loginform">
							<input type="text" name="username" placeholder="Username" class="username" value="<?php echo @$data['username'] ?>" required="required">
							<input type="password" name="password" placeholder="Password" class="password" required="required">
							<input type="submit" name="login_submit" value="login" class="submit">
						</form>
						<div class="dashed-round">
							<img src="img/arrow.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/common.js"></script>

</body>
</html>
