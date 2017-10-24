<?php
  include 'lock.php';
  include '../public/commen/config.php';
  $sqlExa="select * from certification where user_id={$_SESSION['home_userid']}";
  $rstExa=mysql_query($sqlExa);
  $rowExa=mysql_fetch_assoc($rstExa);
 
  if(!$rowExa){
    echo "<script>alert('请先完成个人信息认证！')</script>";
    echo '<script>location="examine.php"</script>';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/launch.css">
</head>
<body>
  <?php
      include "header.php";
  ?>

  <div class="launch">
    <div class="launch-main">
      <div class="launch-header">
        <h2>公益项目申请</h2>
        <span>(以下所有信息都为必填项)</span>
      </div>
      <div class="launch-body">
        <h3 class="content-header">项目基本信息</h3>
        <form action="check_launch_pro.php" method="post" enctype="multipart/form-data">
          <div class="item">
            <label for="proName">项目名称</label>
            <input type="text" id="proName" name="proName">
            <span class="form_msg">( 不超过9个字，例如“为植物人撑起希望” )</span>
          </div>
          <div class="item">
            <label for="proMoney">筹款目标</label>
            <input type="number" id="proMoney" name="proMoney">元
          </div>
          <div class="item">
            <label for="proReason">筹款原因</label>
            <textarea name="proReason" id="proReason" cols="30" rows="5" placeholder="请尽量详细，让捐款人了解你的情况"></textarea>
          </div>
          <div class="item">
            <label for="proDays">计划天数</label>
            <input type="number" id="proDays" name="proDays">天
            <span class="form_msg">( 不超过100天 )</span>
          </div>
          <div class="file">
            <p>上传图片</p>
            <input type="file" name='myfile[0]' value="选择图片">
            <input type="file" name='myfile[1]' value="选择图片">
            <input type="file" name='myfile[2]' value="选择图片">
            <input type="file" name='myfile[3]' value="选择图片">
            <input type="file" name='myfile[4]' value="选择图片">
            <div class="button">
              <button type="submit" class="fo-btn btn-primary">提交</button>
            </div>
          </div>
        </form>
      </div>
      <div class="launch-body">

      </div>
    </div>
  </div>
 
  <?php
      include "footer.php";
  ?>
</body>
</html>