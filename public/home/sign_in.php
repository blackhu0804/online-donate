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
        <h1>登录</h1>
        <div class="link">
          <a href="./sign_up.php">注册</a>
          <a href="./forgot_pwd.php">忘记密码</a>
        </div>
      </div>
      <div class="login-card-body">
        <form class="signin-form" action="check.php" method="post">
          <div class="item">
            <label for="username">邮箱</label>
            <input type="text" id="username" name="username">
          </div>
          <div class="item">
            <label for="password">密码</label>
            <input type="password" id="password" name="password">
          </div>
          <div class="item">
            <div class="button">
              <button type="submit" class="fo-btn btn-primary" onsubmit="return validateForm()">登录</button>
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