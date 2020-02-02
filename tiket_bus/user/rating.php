<?php
require '../funcions.php';
session_start();

$niknumber = $_SESSION['niknumber'];
$rating = query("SELECT * FROM rating WHERE niknumber = $niknumber AND rating = 0");


?>


<!DOCTYPE html>
<html>
<head>
	<title>RATING</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
		
	<style type="text/css">
		body{
    		background-position: 50% -100%;
  		}
		.login{
			float: right;
			font-style: Smoolthan;
			font-size:20px;
			font-family:Agency FB;
			color:#fff;
			margin-right: 20px;

		}

		.table1 {
			font-family: monospace;
			font-size: 20px;
      		font-style: bold;
			color: #444;
			border-collapse: collapse;
			width: 100%;
			border: 1px solid #f2f5f7;
			}

		.table1 tr th{
			background: #35A9DB;
			color: #fff;
			font-weight: normal;
			}


		.table1, th, td {
			padding: 8px 20px;
			text-align: center;
			}

		.table1 tr:hover {
			background-color: #f5f5f5;
			}

		.table1 tr:nth-child(even) {
			background-color: #A9E2F3;
			}
		.kotak_login{
			font-family: monospace;
			border: 2px solid white;
			border-radius: 15px;
      		background-color: transparent;
			/*background-color: white;*/
			width: 90%;
			/*meletakkan form ke tengah*/
			margin: 100px auto;
			padding: 30px 20px;

		}
		a{                 
			text-decoration: none;

			}

	</style>
</head>
<body>
	<div class="header">Welcome!
		<div class="login">
			<a href="mytiket.php" style="color: white">My Tiket</a>
			<a href="../logout.php" style="color: white">Logout</a>
		</div>
	</div>
	<div class= "menu">
	 	<ul>
	 		<li><a href="index.php"><img src="../css/busz.png" style="margin-top:7px;width:20px;height:20px"></a></li>
			<li><a href="booking.php">Ekonomi</a></li>
			<li><a href="#">Eksekutif</a></li>
			<li><a href="#">Royal</a></li>
		</ul>
	</div>
	<div class="col-md-12">
	<h3 class="page-header" align="center">
    	<strong>Jadwal Keberangkatan</strong> 
    	<p align="center">1. Pagi : 07.00</p>
    	<p align="center">1. Pagi : 07.00</p>
    	<p align="center">2. Siang: 13:00</p>
    	
	</h3>
	<br><br><br>
</div>
<div class="footer">
			<div class="left"><a>.Tentang Kami</a></div>
			<div class="right"><a>.PT. politeknik Gorontalo</a></div>
			<center>
			<div class="mid">
				<img src="../css/fb.png"><a>Julis Hulopi</a><br>
				<img src="../css/gmail.png"><a>louishulopi@gmail.com</a><br>
				<img src="../css/ig.png"><a>@hulopi_julis</a><br>
				<img src="../css/maps.png"><a>JL. sapta marga</a>
			</center>
			</div>
			
	</div>

