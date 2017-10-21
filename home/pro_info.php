<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/pro.css">
</head>
<body>
  <?php
      include "header.php";
  ?>
  <div class="pro-top">
    <p class="top-title">
      <a href="./index.php">首页</a>
      >
      <a href="./project_list.php">项目列表</a>
      >
      <span>抗战老兵的生活晚年</span>
    </p>
  </div>
  <div class="pro-main clearfix">
    <div class="pro-info-pic">
      <img src="./img/1.jpg" alt="">
    </div>
    <div class="pro-info-detail">
      <div class="detail-header">
        <p>状态：募款中</p>
      </div>
      <div class="detail-target">
        <p>目标：</p>
        <span>15000</span>元
        <p>已筹：</p>
        <span>3000</span>元
      </div>
      <p class="main_top_detail_target_time"><span>时间</span><span class="main_top_detail_target_time_value">2017-10-20 至 2018-01-20</span></p>
    </div>
    <div class="pro-info-button">
      <a href="javascript:void(0)">我要捐款</a>
    </div>
  </div>
  
  <?php
      include "footer.php";
  ?>
</body>
</html>