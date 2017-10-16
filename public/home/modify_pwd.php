
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
        <h1>更改新密码</h1>
        <div class="link">
          <a href="./sign_in.php">登录</a>
          <a href="./sign_up.php">注册</a>
        </div>
      </div>
      <div class="login-card-body">
        <form class="signin-form" action="check_mdy_pwd.php" method="post">
					<div class="item">
						<label for="identifyCode">邮箱验证码</label>
						<input type="text" id="identifyCode" name="identifyCode">
					</div>
					<div class="item">
            <label for="newPassword">新密码</label>
            <input type="password" id="newPassword" name="newPassword">
					</div>
					<div class="item">
            <label for="confirmPwd">第二次确认</label>
            <input type="password" id="confirmPwd" name="confirmPwd">
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