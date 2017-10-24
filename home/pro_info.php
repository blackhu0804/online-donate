<?php
  session_start();
  include '../public/commen/config.php';
  $class_id=$_GET['class_id'];
  $sql="select * from giftClass where id='$class_id'";
  $rst=mysql_query($sql);
  $row=mysql_fetch_assoc($rst);
?>
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
  <div class="pro-top" style="width: 860px;">
    <p class="top-title">
      <a href="./index.php">首页</a>
      >
      <a href="./project_list.php">项目列表</a>
      >
      <span><?php echo $row['name'];?></span>
    </p>
  </div>
  <div class="pro-main clearfix">
    <div class="pro-info-pic">
      <img src="../public/uploads/n_<?php $img=explode(',',$row['img']);echo $img[0]?>" alt="<?php echo $row['name'];?>">
    </div>
    <div class="pro-info-detail">
      <div class="detail-header">
        <?php if($row['is_end'])
              {
                echo "<p>状态：募款已结束</p>";
              }else{
        ?>

                <p>状态：募款中</p>
                </div>
                <div class="detail-target">
                  <p>目标：</p>
                  <span><?php echo $row['use_money'];?></span>元
                  <br>
                  <p>已筹：</p>
                  <span><?php echo $row['sum_money'];?></span>元
                </div>
      <?php
             }
      ?>
      <p class="main_top_detail_target_time"><span>时间：</span><span class="main_top_detail_target_time_value"> <?php echo date('Y-m-d',$row['start_time']);?> 至 <?php echo date('Y-m-d',$row['time_num']);?></span></p>
      <div class="pro-info-button">
        <a href="javascript:void(0)">我要捐款</a>
      </div>
      <span class="donate-count">捐款人数：<b><?php echo $row['user_num'];?> </b></span>人
    </div>
  </div>
  
  <div class="pro-body">
    <h3>项目基本信息</h3>
    <h4 class="pro-title">项目名称</h4>
    <p class="pro-title-body"><?php echo $row['name'];?></p>
    <h4 class="pro-reason">项目概况</h4>
    
    <?php 
      $line=explode('。',$row['expl']);
      $img=explode(',', $row['img']);
      $line_len=count($line);
      $img_len=count($img)-1;
      $mod=$line_len/$img_len;
      $i=1;
      $j=0;
      foreach ($line as $k=>$lines){
        if($j%$mod==0){
          ?>
            <br>
            
            <img  src="../public/uploads/n_<?php $img=explode(',',$row['img']);echo $img[$i]?>" alt="<?php echo $row['name'];?>">
            <br>
           
          <?php
          $i++;
          if($j%5!=0)
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }

        if($j%5==0){
          ?>
          <p class="pro-reason-body">
            
          <?php
        }
        ?>
        
        <?php

        echo "{$line[$j]}。";
        $j++;
        ?>
        <?php
          if($j%5==0){
          ?>
          </p>
            
          <?php
        }
        ?>
        <?php
      }
    ?>
   
   
  </div>
  <?php
      include "footer.php";
  ?>
</body>
</html>