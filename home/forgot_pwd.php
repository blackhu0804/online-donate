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
        <h1>申请重置密码</h1>
        <div class="link">
          <a href="./sign_in.html">登录</a>
          <a href="./sign_up.html">注册</a>
        </div>
      </div>
      <div class="login-card-body">
        <form class="signin-form" action="">
          <div class="item">
            <label for="username">邮箱</label>
            <input type="text" id="username">
          </div>
          <div class="item">
            <div class="button">
              <button type="submit" class="fo-btn btn-primary">发送重置邮件</button>
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