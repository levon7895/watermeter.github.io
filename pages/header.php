<?php 
require "../rb.php";
if($_SESSION["Logged_user"]->Provilegy == '')
{
	header("Location: /");
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title> T.E.K - Water</title>

	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Изображение для соц. сетей - СТАРТ -->
	<meta property="og:image" content="path/to/image.jpg">
	<!-- Изображение для соц. сетей - КОНЕЦ -->
	<link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
	<!-- фавикон - СТАРТ -->
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
	<!-- фавикон - КОНЕЦ -->

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<link rel="stylesheet" href="/css/main.min.css">

</head>
<body>
	<header class="clearfix">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="logo">
					<img src="/img/logo.png" height="30" alt="">
					<a onclick="javascript:history.back(); return false;"><h1>T.E.K.</h1>
				</a>
				</div>
				<div class="right-bar">
					<ul>
						<li class="hili">
							<button><i class="fa fa-angle-double-down" aria-hidden="true"></i></button>
							<p>Բարև <?php echo $_SESSION["Logged_user"]->firstname; ?><br><span><?php 
							if ($_SESSION["Logged_user"]->Provilegy == '0') {
								echo "Օգտատեր";
							}
							else if($_SESSION["Logged_user"]->Provilegy == '2' || $_SESSION["Logged_user"]->Provilegy == '1')
							{
								echo "Ադմինիստրատոր";
							}
							?></span></p>
							<form action="" method="POST">
								<div class="down-slide">
									<a name="settings" href="http://myproject/pages/edituser.php/">Կարգավորումներ</a>
								</div>
							</form>
						</li>
						<li class="logout notification">
							<a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i>(1)</a>
						</li>
						<li class="logout">
							<a href="/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
