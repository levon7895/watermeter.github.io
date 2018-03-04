<?php require "header.php"; ?>
	<section class="adduser">
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<h2>Կարգավորումներ</h2>
				<div class="row">
					<form action="" method="">
						<div class="input-poly clearfix">
							<label for="phonenum">Հեռախոսահամար`</label>
							<input required id="phonenum" type="text" placeholder="099-99-99-99">
						</div>
						<div class="input-poly clearfix">
							<label for="username">Գաղտնանուն`</label>
							<input required id="username" type="text" placeholder="username">
						</div>
						<div class="input-poly clearfix">
							<label for="password">Գաղտնաբառ`</label>
							<input required id="password" type="text" placeholder="password">
						</div>
						<div class="input-poly clearfix">
							<label for="password">Էլեկտրոնային հասցե`</label>
							<input required id="password" type="email" placeholder="E-mail">
						</div>
						<input type="submit" value="Փոփոխել">
					</div>
				</form>
			</div>
		</div>
	</section>
<?php require "footer.php"; ?>
