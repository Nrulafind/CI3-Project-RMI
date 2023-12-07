<?php if ($this->session->userdata('access') == "Vice President") { ?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="icon" href="<?= base_url('assets/img/1b0c0a19ffaa8d2b63f1df011a1cf536_400x400.png');  ?>">

		<title>ARMI - App</title>

		<!-- Custom fonts for this template-->
		<link href="<?= base_url('assets/adminsb2/vendor/fontawesome-free/css/all.min.css');  ?>" rel=" stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Custom styles for this template-->
		<link href="<?= base_url('assets/adminsb2/css/sb-admin-2.min.css');  ?> " rel=" stylesheet" />
		<script type="text/javascript" src="<?= base_url('assets/Chart.js');  ?>"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<!-- <script src="<?= base_url("proyeksiA"); ?>"></script> -->
	</head>
<?php } elseif ($this->session->userdata('access') == "Manager") { ?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="icon" href="<?= base_url('assets/img/1b0c0a19ffaa8d2b63f1df011a1cf536_400x400.png');  ?>">

		<title>ARMI - App</title>

		<!-- Custom fonts for this template-->
		<link href="<?= base_url('assets/adminsb2/vendor/fontawesome-free/css/all.min.css');  ?>" rel=" stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Custom styles for this template-->
		<link href="<?= base_url('assets/adminsb2/css/sb-admin-2.min.css');  ?> " rel=" stylesheet" />
		<script type="text/javascript" src="<?= base_url('assets/Chart.js');  ?>"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<!-- <script src="<?= base_url("proyeksi"); ?>"></script> -->
	</head>
<?php } elseif ($this->session->userdata('access') == "Officer") { ?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="icon" href="<?= base_url('assets/img/1b0c0a19ffaa8d2b63f1df011a1cf536_400x400.png');  ?>">

		<title>ARMI - App</title>

		<!-- Custom fonts for this template-->
		<link href="<?= base_url('assets/adminsb2/vendor/fontawesome-free/css/all.min.css');  ?>" rel=" stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Custom styles for this template-->
		<link href="<?= base_url('assets/adminsb2/css/sb-admin-2.min.css');  ?> " rel=" stylesheet" />
		<script type="text/javascript" src="<?= base_url('assets/Chart.js');  ?>"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<!-- <script src="<?= base_url("proyeksi"); ?>"></script> -->
	</head>
<?php } else { ?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="icon" href="<?= base_url('assets/img/1b0c0a19ffaa8d2b63f1df011a1cf536_400x400.png');  ?>">

		<title>ARMI - App</title>

		<!-- Custom fonts for this template-->
		<link href="<?= base_url('assets/adminsb2/vendor/fontawesome-free/css/all.min.css');  ?>" rel=" stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Custom styles for this template-->
		<link href="<?= base_url('assets/adminsb2/css/sb-admin-2.min.css');  ?> " rel=" stylesheet" />
		<script type="text/javascript" src="<?= base_url('assets/Chart.js');  ?>"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<!-- <script src="<?= base_url("proyeksi"); ?>"></script> -->
	</head>
<?php } ?>