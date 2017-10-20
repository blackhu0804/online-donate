<?php
	session_start();
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="./css/index.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>	
	<script src="./js/jquery-3.2.1.min.js"></script>
	<script src="./js/js.js"></script>
	<script src="//at.alicdn.com/t/font_443285_rdbiv6gatk68byb9.js"></script>
	<title>Document</title>
</head>

<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="index.php">
					<img src="./img/logo.png" alt="" /> </a>
			</div>
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

	<div class="banner">
			<div class="container">
				<div class="banner-main">
					<h1>WELCOME TO MY CHARITY</h1>
					<div class="bwn">
						<a href="#"> Donate now </a>
					</div>
				</div>
			</div>
		</div>

	<div class="main">
		<div class="container clearfix">
			<div class="carousel">
				<ul class="img-ct">
					<li><a href="javascript:void(0)"><img src="./img/img1.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="./img/img2.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="./img/img3.jpg" alt=""></a></li>
				</ul>
				<a class="pre arrow" href="#"><</a>
				<a class="next arrow" href="#">></a>
				<ul class="bullet">
					<li class="active"></li>
					<li></li>
					<li></li>
				</ul>
			</div>

			<div class="extra clearfix">
				<div class="moneyNum">
					<h2>历史善款总额：</h2>
					<span id="donateMoney">3,047,916,510</span>元
					<h2>历史爱心总人数</h2>
					<span id="loveNum">46,880,930</span>人次
					<p>微益捐与亿万网友在一起</p>
				</div>
			</div>
		</div>

		<div class="main-info clearfix">
			<div class="info-left">
				<div class="info-header">
						<h2>项目目录</h2>
						<a href="#" class="more">More</a>
				</div>

				<ul class="list-content">
					<li class="list-item">
						<a href="#">
								<img src="http://imgcdn.gongyi.qq.com/gongyi/3e28f14aa0516842aa27fbbfc45ca6c1af217d327d09747992271ed4b24722b3e98ad00be53a4971/200" title="寻四百万份光明之爱" alt="寻四百万份光明之爱" class="item-img">
						</a>
						<a class="item-header">寻四百万份光明之爱</a>
						<div class="donate-info">
							<p class="donate-content">
									已筹：<span class="m_num">6296951</span>元
									<br>
									捐款人数：<span>605453人</span>
							</p>
							<a href="#">我要捐款</a>
						</div>
					</li>
					<li class="list-item">
						<a href="#">
								<img src="http://imgcdn.gongyi.qq.com/gongyi/3e28f14aa0516842aa27fbbfc45ca6c1af217d327d09747992271ed4b24722b3e98ad00be53a4971/200" title="寻四百万份光明之爱" alt="寻四百万份光明之爱" class="item-img">
						</a>
						<a class="item-header">寻四百万份光明之爱</a>
						<div class="donate-info">
								<p class="donate-content">
										已筹：<span class="m_num">6296951</span>元
										<br>
										捐款人数：<span>605453人</span>
								</p>
								<a href="#">我要捐款</a>
							</div>
					</li>
				</ul>	
				<ul class="list-content">
						<li class="list-item">
							<a href="#">
									<img src="http://imgcdn.gongyi.qq.com/gongyi/3e28f14aa0516842aa27fbbfc45ca6c1af217d327d09747992271ed4b24722b3e98ad00be53a4971/200" title="寻四百万份光明之爱" alt="寻四百万份光明之爱" class="item-img">
							</a>
							<a class="item-header">寻四百万份光明之爱</a>
							<div class="donate-info">
								<p class="donate-content">
										已筹：<span class="m_num">6296951</span>元
										<br>
										捐款人数：<span>605453人</span>
								</p>
								<a href="#">我要捐款</a>
							</div>
						</li>
						<li class="list-item">
							<a href="#">
									<img src="http://imgcdn.gongyi.qq.com/gongyi/3e28f14aa0516842aa27fbbfc45ca6c1af217d327d09747992271ed4b24722b3e98ad00be53a4971/200" title="寻四百万份光明之爱" alt="寻四百万份光明之爱" class="item-img">
							</a>
							<a class="item-header">寻四百万份光明之爱</a>
							<div class="donate-info">
									<p class="donate-content">
											已筹：<span class="m_num">6296951</span>元
											<br>
											捐款人数：<span>605453人</span>
									</p>
									<a href="#">我要捐款</a>
								</div>
						</li>
					</ul>
			</div>
			<div class="info-right clearfix">
				<div class="launch">
					<a href="#" class="initiating-pro">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-faqi"></use>
						</svg>
						<p>发起项目</p>
					</a>
					<a href="#" class="donate-money">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-donate-copy"></use>
						</svg>
						<p>我要捐助</p>
					</a>
				</div>
				<div class="flow">
					<h2>
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-liucheng-copy"></use>
						</svg>
						<span>项目流程</span>
					</h2>

					<p class="flow-item">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-one"></use>
						</svg>
						<span>注册</span>
						<b>个人实名认证</b>
					</p>
					<p class="flow-item">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-shuzi2"></use>
						</svg>
						<span>发起</span>
						<b>实名用户发起项目</b>
					</p>
					<p class="flow-item">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-shuzi3"></use>
						</svg>
						<span>审核</span>
						<b>审核并确认项目</b>
					</p>
					<p class="flow-item">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-shuzi4"></use>
						</svg>
						<span>募款</span>
						<b>项目上线接受公众募款</b>
					</p>
					<p class="flow-item">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-shuzi5"></use>
						</svg>
						<span>公示</span>
						<b>项目完成进行公示</b>
					</p>
				</div>
			</div>
		</div>

		
	</div>

	<div class="footer"  style="background:#eee;">
		<p class="footer-desc">
      <a href="/">关于我们</a>
      |
      <a href="/">加入我们</a>
      |
      <a href="/">联系我们</a>
    </p>
    <p>&copy;<script>document.write('2016-' + new Date().getFullYear())</script> 微益捐版权所有</p>
	</div>
	
</body>

</html>