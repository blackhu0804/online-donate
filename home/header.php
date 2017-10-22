<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="./css/index.css">
	<script src="./js/js.js"></script>
	<title>Document</title>
</head>

<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="./index.php">
					<img src="./img/logo.png" alt="" /> </a>
			</div>
			<span class="menu">
				<img src="./img/icon.png" alt="" />
			</span>
			<div class="clear"> </div>
			<div class="navg">
				<ul class="res">
					<li>
						<a href="index.php">首页</a>
					</li>
					<?php
						if($_SESSION['home_username']){
					?>
					<li>
						<a href="#">欢迎 <?php echo $_SESSION['home_username']?> </a>
				    </li>
				    <li>
						<a href="sign_out.php">退出</a>
					</li>
					<?php
						}else{

					?>
					<li>
						<a href="./sign_in.php">登陆</a>
					</li>
					<li>
						<a href="./sign_up.php">注册</a>
					</li>
					<?php
						}
					?>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	