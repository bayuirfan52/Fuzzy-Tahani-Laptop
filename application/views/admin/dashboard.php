<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/w3.css">
	<script src="<?=base_url()?>/assets/js/jquery-3.4.1.min.js"></script>
	<script src="<?=base_url()?>/assets/js/bootstrap.min.js"></script>
    <title>Admin</title>
</head>
<body>
    <!-- Sidebar -->
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
        <h3 class="w3-bar-item">Admin Dashboard</h3>
        <a href="<?= base_url()?>index.php/admin/" class="w3-bar-item w3-button">Data</a>
        <a href="<?= base_url()?>index.php/admin/program" class="w3-bar-item w3-button">Program</a>
    </div>
