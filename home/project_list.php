<?php
  session_start();
  include '../public/commen/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>项目列表</title>
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
    </p>
    <div class="pro-search">

    </div>
  </div>

  <div class="pro-main">
    <ul class="pro-ul">
      <?php
            $sqlClass="select * from giftClass where is_end=0";
            $rstClass=mysql_query($sqlClass);
            while($rowClass=mysql_fetch_assoc($rstClass)){

          ?>
      <li class="pro-li">
        <div class="pro-li-img">
          <a href="./pro_info.php?class_id=<?php echo $rowClass['id'];?>"><img src="../public/uploads/s_<?php $img=explode(',',$rowClass['img']);echo $img[0]?>" alt="<?php echo $rowClass['name'];?>"></a>
        </div>
        <div class="pro-li-info">
          <a href="./pro_info.php?class_id=<?php echo $rowClass['id'];?>"><h3><?php echo $rowClass['name'];?></h3></a>
          <span>项目简介：</span>
          <b><?php echo $rowClass['summary'];?></b>
          <br>
          <span>筹款目标：</span>
          <b><?php echo $rowClass['use_money'];?></b>元
          <br>
          <span>筹款时间：</span>
          <b><?php echo date('Y-m-d',$rowClass['start_time']);?> 至 <?php echo date('Y-m-d',$rowClass['end_time']);?></b>
        </div>
        <div class="pro-li-donate">
          
      

                <p class="pro-state">项目状态：募款中</p>
                <p class="pro-donate-state">已筹：<span><?php echo $rowClass['use_money'];?></span>元&nbsp;&nbsp;<span><?php echo $rowClass['user_num'];?></span>人捐款</p>
              
                 <a href="./pro_info.php?class_id=<?php echo $rowClass['id'];?>" class="donate-btn">我要捐款</a>
  
         
        </div>
      </li>
      <?php
          }
      ?>
    </ul>
  </div>
  
  <?php
      include "footer.php";
  ?>
</body>
</html>