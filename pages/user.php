	<?php require "header.php"; ?>
	<section class="admin-sect clearfix">
		<div class="container">
			<div class="col-md-5 hidden-sm hidden-xs">
				<h2>Հին ցուցմունք</h2>
			</div>
			<div class="col-md-5 hidden-sm hidden-xs">
				<h2>Նոր ցուցմունք</h2>
			</div>
			<div class="col-md-2 hidden-sm hidden-xs">
				<h2>Ծախս ( մ <sup>3</sup> )</h2>
			</div>
			<div class="row">
				<div class="col-md-5">
					<h2 class="hidden-md hidden-lg nom">Հին ցուցմունք</h2>
					<div class="old-inputs inputs userinputs clearfix">
						<div class="col-md-6 col-sm-5 nop">
							<form action="" method="POST">
								<select name="old-indic-dates" id="">
									<option name = "old-indic-date" value="">Դեկտեբմեր, 2018</option>
									<option name = "old-indic-date" value="">Դեկտեբմեր, 2018</option>
								</select>
							</form>
						</div>
						<div class="col-md-6 col-sm-7 nop">
							<input type="text" value="00005678" name="old-indic-value" disabled>
							<div class="m3">
								մ <sup>3</sup>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<h2 class="hidden-md hidden-lg nom">Նոր ցուցմունք</h2>
					<div class="inputs new-inputs userinputs clearfix">
						<div class="col-md-5 col-sm-5 nop">
							<select name="user-old-indic" id="">
								<option value="">Դեկտեբմեր, 2018</option>
								<option value="">Դեկտեբմեր, 2018</option>
								<option value="">Դեկտեբմեր, 2018</option>
							</select>
						</div>
						<form action="" method="POST">
							<div class="col-md-5 col-sm-5 nop">
								<input type="text" maxlength="8" value="" disabled name="">
								<div class="m3">
									մ <sup>3</sup>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 nop">
								<button class="jqueryedit" style="line-height: 28px"><i class="fa fa-arrow-right"></i></button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-2">
					<h2 class="hidden-md hidden-lg nom">Ծախս ( մ <sup>3</sup> )</h2>
					<div class="inputs">
						<div class="delta obshidelta">
							<input type="text" disabled value="56789">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="adduser">
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="input-poly clearfix">
						<label for="idlabel">Վճարման ենթակա գումար ( AMD )`</label>
						<input disabled id="idlabel" type="text" value="48000">
					</div>
					<div class="input-poly clearfix">
						<label for="idlabel">Ձեր ID-ն`</label>
						<input disabled id="idlabel" type="text" value="48">
					</div>
					<div class="input-poly clearfix">
						<label for="idlabel">Վճարված գումար ( AMD )`</label>
						<input disabled id="idlabel" type="text" value="52460">
					</div>
					<div class="input-poly clearfix">
						<label for="idlabel">Հաշվի մնացորդ ( AMD )`</label>
						<input disabled id="idlabel" type="text" value="7640">
					</div>
					<div class="input-poly clearfix">
						<label for="idlabel">Վարկանիշ`</label>
						<div class="rate">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>
					<a href="#" class="onlinepay">Կատարել վճարում</a>
				</div>
			</div>
		</div>
	</section>
	<?php require "footer.php"; ?>