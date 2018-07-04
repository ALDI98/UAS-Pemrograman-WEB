<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="FaberNainggolan">
		<title>CodeIgneter dengan Bootsrtap</title>
		<link href="<?=base_url()?>assets/css/bootsrtap.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/bootsrtap-dateimepicker.min.css" rel="stylesheet" media="screen">
		<link href="<?=base_url()?>assets/css/bootsrtap-datepicker.min.css" rel="stylesheet" media="screen">
	</head>

	<body>
		<div class="alert alert-success">
		<strong> Data Berhasil dihapus</strong>
		<?php 
		echo anchor('event/index', 'Lihat data event'); ?>
		</div>
		<script src="<?=base_url()?>assets/js/jquery.js"></script>
		<script src="<?=base_url()?>assets/js/bootsrtap.min.js"></script>
	</body>
</html>