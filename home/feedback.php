<?php
  include 'lock.php';
  include '../public/commen/config.php';
  $class_id=$_GET["class_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>增加反馈</title>
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
        <h2>公益项目反馈</h2>
        <span>(以下所有信息都为必填项)</span>
      </div>
      <div class="launch-body">
        <h3 class="content-header">反馈信息基本信息</h3>
        <form action="check_feedback.php?class_id=<?php echo $class_id;?>" method="post" enctype="multipart/form-data">
          
          
          <div class="item">
            <label for="content">反馈详情</label>
            <textarea name="content" id="proReason" cols="30" rows="5" placeholder="请尽量详细，让捐款人了解你的情况"></textarea>
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