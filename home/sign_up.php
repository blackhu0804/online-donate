<?php 
  error_reporting(E_ALL||~E_NOTICE);
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/sign.css">
</head>
<body>
  <?php
      include "header.php";
  ?>

  <div class="main">
    <div class="login-card">
      <div class="login-card-header">
        <h1>注册</h1>
        <div class="link">
          <a href="./sign_in.php">登录</a>
<<<<<<< HEAD
          <a href="forgot_pwd">忘记密码</a>
=======
          <a href="./forgot_pwd.php">忘记密码</a>
>>>>>>> bc35fa62e07a91c3d0a18c8d8e6fec136b8ce4aa
        </div>
      </div>
      <div class="login-card-body">
        <form class="signin-form" action="reginsert.php" method="post">
          <div class="item">
            <label for="username">邮箱</label>
            <input type="text" id="username" name="username">
          </div>
          <div class="item">
            <label for="password">密码</label>
            <input type="password" id="password" name="password">
          </div>
          <div class="item">
            <label for="passwordSure">确认密码</label>
            <input type="password" id="passwordSure" name="passwordSure">
          </div>
          <div class="item">
            <label>验证码</label>
            <input type="text" name="authcode" value="">
            <img id="captcha_img" border="1" src="./captcha.php?r=<?php echo rand();?>" width="150px" hight="40px" style="border-radius: 4px;border:none;margin-left:6em">
              <a href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='./captcha.php?r='+Math.random()">换一个？</a>
          
            
            
          </div>
          <div class="item">
            <div class="button">
              <button type="submit" class="fo-btn btn-primary">注册</button>
              <button type="button" class="fo-btn btn-default">取消</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php
      include "footer.php";
  ?>
</body>
</html>