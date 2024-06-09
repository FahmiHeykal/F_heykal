<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>Sistem Informasi Pengajuan Cuti Online - <?php echo $pagedesc ?></title>
	<link href="libs/images/logo_perusahaan.png" rel="icon" type="images/x-icon">
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Gaze Sign up & login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="./login/css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
</head>

<body>

	<body>
		<div class="mid-class">
			<!---728x90--->

			<div class="art-right-w3ls">
				<!---728x90--->
				<h2>Login</h2>
				<?php if (isset($_GET['err'])) : ?>
					<?php if ($_GET['err'] == 'not_found') : ?>
						<p style="margin-bottom: 10px; color:#f9f9f9">Maaf, nama pengguna atau password salah.</p>
					<?php endif ?>
					<?php if ($_GET['err'] == 'empty') : ?>
						<p style="margin-bottom: 10px; color:#f9f9f9">Maaf, nama pengguna atau password harus di isi</p>
					<?php endif ?>
				<?php endif ?>
				<form action="login_auth.php" method="post">
					<div class="main">
						<div class="form-left-to-w3l">
							<input type="text" name="username" placeholder="Username" name="username" required="">
						</div>
						<div class="form-left-to-w3l ">
							<input type="password" name="password" placeholder="Password" name="password" required="">
							<div class="clear"></div>
						</div>
						<div class="form-left-to-w3l ">
							<select name="akses" required>
								<option value=""> Login Sebagai </option>
								<option value="Admin">Staf Admin</option>
								<option value="Mng">HRD</option>
								<option value="Pgw">Karyawan</option>
							</select>
						</div>
					</div>
					<div class="btnn">
						<button type="submit" name="login">Masuk</button>
					</div>
				</form>
			</div>
			<!---728x90--->
			<div class="art-left-w3ls">
				<h1 class="header-w3ls">
					Sistem Informasi Pengajuan Cuti
					CV. Indosari
				</h1>
			</div>
		</div>
		<footer class="bottem-wthree-footer">
			<p>
				Sistem Informasi Pengajuan Cuti Online CV. Indosari
			</p>
		</footer>
	</body>

</html>