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
          <a href="./sign_in.html">登录</a>
          <a href="#">忘记密码</a>
        </div>
      </div>
      <div class="login-card-body">
        <form class="signin-form" action="reginsert.php">
          <div class="item">
            <label for="username">邮箱</label>
            <input type="text" id="username">
          </div>
          <div class="item">
            <label for="password">密码</label>
            <input type="password" id="password">
          </div>
          <div class="item">
            <label for="passwordSure">确认密码</label>
            <input type="password" id="passwordSure">
          </div>
          <div class="item">
            <div class="button">
              <input type="submit" class="fo-btn btn-primary">注册</input>
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