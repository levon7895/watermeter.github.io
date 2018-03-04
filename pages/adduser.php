<?php require "header.php";
$data = $_POST;
if (isset($data["senduser"])) {
	$errors = array();
	if (trim($data['firstname']) == '') {
		$errors[] = 'Խնդրում եմ մուտքագրել անունը';
	}
	if (trim($data['lastname']) == '') {
		$errors[] = 'Խնդրում եմ մուտքագրել ազգանունը';
	}
	if (trim($data['address']) == '') {
		$errors[] = 'Խնդրում եմ մուտքագրել հասցե';
	}
	if (trim($data['telephone']) == '') {
		$errors[] = 'Խնդրում եմ մուտքագրել հեռախոսահամար';
	}
	if (trim($data['userId']) == '') {
		$errors[] = 'Խնդրում եմ մուտքագրել ID-ն';
	}
	if (trim($data['username']) == '') {
		$errors[] = 'Խնդրում եմ մուտքագրել գաղտնանուն';
	}
	if (R::count('users' , "username = ?" , array($data['username']))) {
		$errors[] = 'nuyn login';
	}
	if (trim($data['password']) == '') {
		$errors[] = 'Խնդրում եմ մուտքագրել գաղտնաբառ';
	}
	if (trim($data['email']) == '') {
		$errors[] = 'Խնդրում եմ մուտքագրել էլ. հասցե';
	}

	if (empty($errors)) {
		$users = R::dispense('users');
		$users->firstname = $data['firstname'];
		$users->lastname = $data['lastname'];
		$users->address = $data['address'];
		$users->telephone = $data['telephone'];
		$users->userID = $data['userId'];
		$users->username = $data['username'];
		$users->Email = $data['email'];
		$users->Provilegy = 0;
		$users->OLDindic = 0;
		$users->OLDindic_Date = '0';
		$users->NEWindic = 0;
		$users->NEWindic_Date = '0';
		$users->Charged = 0;
		$users->Rate = 0;
		$users->Value = 0;
		$users->Paid_amount = 0;
		$users->Balance = 0;																			
		$users->password = password_hash($data['password'],PASSWORD_DEFAULT);
		R::store($users);
	}
	else
	{
		echo array_shift($errors);
	}


}
?>
<div class="container">
<p class="hidden-lg hidden-md">Կայքի այս բաժինը չի աշխատում հեռախոսների և պլանշետների վրա։ <br>Նվազագույն էկրանի չափը պետք է լինի 1024px:</p>
</div>

<section class="adduser hidden-sm hidden-xs">
<div class="container">
<div class="col-md-8 col-md-offset-2">
<h2>Ավելացնել Բաժանորդ</h2>
<div class="row">
<form action="" method="POST">
<div class="input-poly clearfix">
<label for="name">Անուն`</label>
<input required autofocus id="name" type="text" placeholder="Գրել անունը" name="firstname" value="<?php echo @$data['firstname'] ?>">
</div>
<div class="input-poly clearfix">
<label for="surname">Ազգանուն`</label>
<input required id="surname" type="text" placeholder="Գրել ազգանունը" name="lastname" value="<?php echo @$data['lastname'] ?>">
</div>
<div class="input-poly clearfix">
<label for="address">Հասցե`</label>
<input required id="address" type="text" placeholder="Գրել հասցեն" name="address" value="<?php echo @$data['address'] ?>">
</div>
<div class="input-poly clearfix">
<label for="phonenum">Հեռախոսահամար`</label>
<input required id="phonenum" type="text" placeholder="Գրել հեռախոսահամարը" name="telephone" value="<?php echo @$data['telephone'] ?>">
</div>
<div class="input-poly clearfix">
<label for="idlabel">Բաժանորդի ID`</label>
<input required id="idlabel" type="text" placeholder="Գրել բաժանորդի ID-ն" name="userId" value="<?php echo @$data['userId'] ?>">
</div>
<div class="input-poly clearfix">
<label for="username">Գաղտնանուն`</label>
<input required id="username" type="text" placeholder="Գրել գաղտնանունը" name="username" value="<?php echo @$data['username'] ?>">
</div>
<div class="input-poly clearfix">
<label for="password">Գաղտնաբառ`</label>
<input required id="password" type="password" placeholder="Գրել գաղտնաբառը" name="password">
</div>
<div class="input-poly clearfix">
<label for="username">Էլէկտրոնային հասցե`</label>
<input required id="username" type="email" placeholder="Գրել E-mail" name="email" value="<?php echo @$data['email'] ?>">
</div>
<input type="submit" value="Ավելացնել" name="senduser">
</div>
</form>
</div>
</div>
</section>
<?php require "footer.php"; ?>
