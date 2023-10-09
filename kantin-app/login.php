<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<?php include 'style.php' ?>
</head>

<style>
	.main-content {
		width: 50%;
		border-radius: 20px;
		box-shadow: 0 5px 5px rgba(0, 0, 0, .4);
		margin: 5em auto;
		display: flex;
	}

	.company__info {
		background-color: var(--color-primary);
		border-top-left-radius: 20px;
		border-bottom-left-radius: 20px;
		display: flex;
		flex-direction: column;
		justify-content: center;
		color: #fff;
	}

	.fa-android {
		font-size: 3em;
	}

	@media screen and (max-width: 640px) {
		.main-content {
			width: 90%;
		}

		.company__info {
			display: none;
		}

		.login_form {
			border-top-left-radius: 20px;
			border-bottom-left-radius: 20px;
		}
	}

	@media screen and (min-width: 642px) and (max-width:800px) {
		.main-content {
			width: 70%;
		}
	}

	.row>h2 {
		color: var(--color-primary);
	}

	.login_form {
		background-color: #fff;
		border-top-right-radius: 20px;
		border-bottom-right-radius: 20px;
		border-top: 1px solid #ccc;
		border-right: 1px solid #ccc;
	}

	form {
		padding: 0 2em;
	}

	.form__input {
		width: 100%;
		border: 0px solid transparent;
		border-radius: 0;
		border-bottom: 1px solid #aaa;
		padding: 1em .5em .5em;
		padding-left: 2em;
		outline: none;
		margin: 1.5em auto;
		transition: all .5s ease;
	}

	.form__input:focus {
		border-bottom-color: var(--color-primary);
		box-shadow: 0 0 5px rgba(0, 80, 80, .4);
		border-radius: 4px;
	}

	.btn {
		transition: all .5s ease;
		width: 70%;
		border-radius: 30px;
		color: #var(--color-primary);
		font-weight: 600;
		background-color: #fff;
		border: 1px solid var(--color-primary);
		margin-top: 1.5em;
		margin-bottom: 1em;
	}

	.btn:hover,
	.btn:focus {
		background-color: var(--color-primary);
		color: #fff;
	}
</style>

<body>
	
	<!-- Main Content -->
	<div class="container-fluid" data-aos="fade-up">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo">
					<h2><span class="fa fa-android"></span></h2>
				</span>
				<img src="assets/img/hero-img.svg" class="img-fluid company_title" alt="" data-aos="zoom-out"
					data-aos-delay="100">
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row" style="padding: 18px">
						<h2>Log In</h2>
					</div>
					<div class="row">
						<form action="proses_login.php" method="post" class="form-group">
							<div class="row">
								<input type="email" name="email" id="email" class="form__input" placeholder="Email"
									autocomplete="off" required>
							</div>
							<div class="row">
								<input type="password" name="password" id="password" class="form__input"
									placeholder="Password" required>
							</div>

							<div class="row text-center d-flex align-items-center">
								<div class="col">
									<button type="submit" class="btn">Login</button>
								</div>

						</form>
					</div>
					<div class="row">
						<p>Don't have an account? <a href="tambah_siswa.php">Register Here</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'scripts.php' ?>
</body>

</html>