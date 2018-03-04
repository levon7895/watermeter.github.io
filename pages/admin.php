<?php require "header.php"; ?>

<div class="edit-user">
	<div class="container">
		<div class="col-md-12">
			<div class="edit-box clearfix">
				<span>x</span>
				<form action="" method="POST">
					<div class="row-edit clearfix">
						<p><span>Բ</span>աժանորդի ID`</p>
						<input type="text" name="userID" placeholder="1">
					</div>
					<div class="row-edit clearfix">
						<p><span>Ա</span>նուն`</p>
						<input type="text" name="first_name" placeholder="Պողոս">
					</div>
					<div class="row-edit clearfix">
						<p><span>Ա</span>զգանուն`</p>
						<input type="text" name="last_name" placeholder="Պողոսյան">
					</div>
					<div class="row-edit clearfix">
						<p><span>Գ</span>աղտնանուն`</p>
						<input type="text" name="username" placeholder="username">
					</div>
					<div class="row-edit clearfix">
						<p><span>Գ</span>աղտնաբառ`</p>
						<input type="text" name="password" placeholder="password">
					</div>
					<div class="row-edit clearfix">
						<p><span>Հ</span>ասցե`</p>
						<input type="text" name="address" placeholder="Առինջ, Դուրյան, 5-րդ փ, 2-րդ տուն">
					</div>
					<div class="row-edit clearfix">
						<p><span>Հ</span>եռախոս`</p>
						<input type="text" name="telephone" placeholder="099-999-999">
					</div>
					<div class="row-edit clearfix">
						<p><span>Է</span>լեկտրոնային հասցե`</p>
						<input type="text" name="email" placeholder="099-999-999">
					</div>
					<div class="row-edit clearfix">
						<p><span>Ն</span>որ ցուցմունք ( մ<sup> 3</sup> )`</p>
						<input name="admin-new-indic" type="text" placeholder="00005678">
					</div>
					<div class="row-edit clearfix">
						<p><span>Վ</span>ճարված գումար ( AMD )`</p>
						<input type="text" name="charged" placeholder="0">
					</div>
					<div class="row-edit clearfix">
						<p><span>Ս</span>տատուս`</p>
						<select name="" id="">
							<option value="">Անջատված</option>
							<option value="">Ակտիվացված</option>
						</select>
					</div>
					<div class="row-edit tokos clearfix">
						<p><span>Վ</span>արկանիշ ( % )`</p>
						<input type="number" name="rate" placeholder="52" min="1" max="100">
					</div>
					<div class="row-payment row-edit">
						<div class="col-md-12 nop">
							<p><span>Մ</span>ուծումների օրացուցակ՝</p>
						</div>
						<div class="col-md-6 nop">
							<div class="payments-date">
								<p>01.01.18 - 12560 AMD</p>
								<p>01.01.18 - 12560 AMD</p>
								<p>01.01.18 - 12560 AMD</p>
								<p>01.01.18 - 125600 AMD</p>
								<p>01.01.18 - 12560 AMD</p>
								<p>01.01.18 - 12560 AMD</p>
								<p>01.01.18 - 12560 AMD</p>
								<p>01.01.18 - 12560 AMD</p>
								<p>01.01.18 - 12560 AMD</p>
								<p>01.01.18 - 12560 AMD</p>
								<p>01.01.18 - 12560 AMD</p>
								<p>01.01.18 - 12560 AMD</p>
							</div>
						</div>
						<div class="col-md-6">
							<input type="submit" value="Փոփոխել տվյալները" name="edit_user_inform">
							<a href="#">Ջնջել բաժանորդին ( <i class="fa fa-trash"></i> )</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<p class="hidden-lg hidden-md">Կայքի այս բաժինը չի աշխատում հեռախոսների և պլանշետների վրա։ <br>Նվազագույն էկրանի չափը պետք է լինի 1024px:</p>
</div>
<section class="admin-sect hidden-sm hidden-xs clearfix">
	<div class="container">
		<div class="col-md-1"> </div>
		<div class="col-md-4">
			<h2>Հին ցուցմունք</h2>
		</div>
		<div class="col-md-5">
			<h2>Նոր ցուցմունք</h2>
		</div>
		<div class="col-md-2">
			<h2>Ծախս ( մ <sup>3</sup> )</h2>
		</div>
		<div class="row">
			<div class="col-md-1 nop">
				<h3>T.</h3>
			</div>
			<div class="col-md-4">
				<div class="old-inputs inputs clearfix">
					<div class="col-md-6 nop">
						<select name="" id="">
							<option value="">Դեկտեբմեր, 2018</option>
							<option value="">Դեկտեբմեր, 2018</option>
						</select>
					</div>
					<div class="col-md-6 nop">
						<input type="text" value="00005678" disabled>
						<div class="m3">
							մ <sup>3</sup>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="inputs new-inputs clearfix">
					<div class="col-md-5 nop">
						<select name="" id="">
							<option value="">Դեկտեբմեր, 2018</option>
							<option value="">Դեկտեբմեր, 2018</option>
							<option value="">Դեկտեբմեր, 2018</option>
						</select>
					</div>
					<form action="" method="">
						<div class="col-md-5 nop">
							<input type="text" maxlength="8" value="00005678" required>
							<div class="m3">
								մ <sup>3</sup>
							</div>
						</div>
						<div class="col-md-2 nop">
							<button><i class="fa fa-save"></i></button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-2">
				<div class="inputs">
					<div class="delta">
						<input type="text" disabled value="56789">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 nop">
				<h3>E.</h3>
			</div>
			<div class="col-md-4">
				<div class="old-inputs inputs clearfix">
					<div class="col-md-6 nop">
						<select name="" id="">
							<option value="">Դեկտեբմեր, 2018</option>
							<option value="">Դեկտեբմեր, 2018</option>
						</select>
					</div>
					<div class="col-md-6 nop">
						<input type="text" value="00005678" disabled>
						<div class="m3">
							մ <sup>3</sup>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="inputs new-inputs clearfix">
					<div class="col-md-5 nop">
						<select name="" id="">
							<option value="">Դեկտեբմեր, 2018</option>
							<option value="">Դեկտեբմեր, 2018</option>
							<option value="">Դեկտեբմեր, 2018</option>
						</select>
					</div>
					<form action="" method="">
						<div class="col-md-5 nop">
							<input type="text" maxlength="8" value="00005678" required>
							<div class="m3">
								մ <sup>3</sup>
							</div>
						</div>
						<div class="col-md-2 nop">
							<button><i class="fa fa-save"></i></button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-2">
				<div class="inputs">
					<div class="delta">
						<input type="text" disabled value="56789">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 nop">
				<h3>K.</h3>
			</div>
			<div class="col-md-4">
				<div class="old-inputs inputs clearfix">
					<div class="col-md-6 nop">
						<select name="" id="">
							<option value="">Դեկտեբմեր, 2018</option>
							<option value="">Դեկտեբմեր, 2018</option>
						</select>
					</div>
					<div class="col-md-6 nop">
						<input type="text" value="00005678" disabled>
						<div class="m3">
							մ <sup>3</sup>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="inputs new-inputs clearfix">
					<div class="col-md-5 nop">
						<select name="" id="">
							<option value="">Դեկտեբմեր, 2018</option>
							<option value="">Դեկտեբմեր, 2018</option>
							<option value="">Դեկտեբմեր, 2018</option>
						</select>
					</div>
					<form action="" method="">
						<div class="col-md-5 nop">
							<input type="text" maxlength="8" value="00005678" required>
							<div class="m3">
								մ <sup>3</sup>
							</div>
						</div>
						<div class="col-md-2 nop">
							<button><i class="fa fa-save"></i></button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-2">
				<div class="inputs">
					<div class="delta lastdelta">
						<input type="text" disabled value="56789">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"> </div>
			<div class="col-md-4">
				<div class="inputs clearfix">
					<div class="col-md-6 nop">
						<div class="m3-gin">1մ <sup>3</sup> = 500 AMD</div>
					</div>
					<form action="" method="" class="m3ginform">
						<div class="col-md-4 nop">
							<input type="text" value="0" maxlength="3">
							<div class="m3">
								AMD
							</div>
						</div>
						<div class="col-md-2 nop">
							<button><i class="fa fa-save"></i></button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-5">
				<div class="inputs caxs clearfix">
					<div class="col-md-8 nop">
						<input type="text" disabled value="12565000">
					</div>
					<div class="col-md-4 nop">
						<div class="amd">
							AMD
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="inputs">
					<div class="delta obshidelta">
						<input type="text" disabled value="567897887">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="col-md-12 nop">
			<form action="" method="POST">
				<table class="table_info">
					<tr>
						<th>Բաժանորդի ID</th>
						<th>Անուն Ազգանուն</th>
						<th>Նոր Ցուցմունք</th>
						<th>Ծախս</th>
						<th>Գին</th>
						<th>Վճարված գումար</th>
						<th>Հաշվի մնացորդ</th>
						<th>Վարկանիշ</th>
					</tr>
					
					
					
				</table>
			</form>
		</div>
		<form action="" method="POST">
			<div class="col-md-2 col-md-offset-10 nop">
				<a href="http://myproject/pages/adduser.php" name="adduser" class="adduser-btn">Ավելացնել բաժանորդ</a>
			</div>
		</form>
	</div>
</section>
<?php require "footer.php"; ?>