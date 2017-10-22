<?php
  include 'lock.php';
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

<div class="examineMain">
  <div class="login-card">
    <div class="login-card-header">
      <h1>信息认证</h1>
      <span class="examine-notice">请填写自己的准确信息，以便通过审核</span>
    </div>
    <div class="login-card-body">
      <form class="signin-form" action="check_examine.php" method="post">
        <div class="item">
          <label for="name">姓名</label>
          <input type="text" id="name" name="name" placeholder="请填写您的真实姓名">
        </div>
        <div class="item">
          <label for="idNumber">身份证号</label>
          <input type="text" id="idNumber" name="idNumber" placeholder="请填写18位身份证号码">
        </div>
        <div class="item">
          <label for="cardNumber">银行卡号</label>
          <input type="text" id="cardNumber" name="cardNumber" placeholder="请填写您的银行卡号">
        </div>
        <div class="item">
          <label for="phoneNumber">手机号</label>
          <input type="text" id="phoneNumber" name="phoneNumber" placeholder="请填写您的常用手机号码">
        </div>
        <div class="item">
          <label for="location">所在地</label>
          <input type="text" id="location" name="location" placeholder="请填写您的详细地址">
        </div>
        <div class="item">
          <div class="button">
            <button type="submit" class="fo-btn btn-primary">提交</button>
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