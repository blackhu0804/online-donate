<?php
  include 'lock.php';
  include '../public/commen/config.php';
  $id=$_POST['class_id'];
  $sql="select * from giftclass where id={$id}";
  $rst=mysql_query($sql);
  $row=mysql_fetch_assoc($rst);
  
  $sqlUser="select * from user where id={$row['user_id']}";
  $rstUser=mysql_query($sqlUser);
  $rowUser=mysql_fetch_assoc($rstUser);

  $sqlCert="select * from certification where user_id={$row['user_id']}";
  $rstCert=mysql_query($sqlCert);
  $rowCert=mysql_fetch_assoc($rstCert);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/pro_info.css">
  <title>项目审核</title>
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <h1><span>待审核项目基本信息</span><a href="index.php" class="back">返回</a></h1>
    </div>
    <div class="body">
      <div class="pro-body">
        <h2>项目名称</h2>
        <p><?php echo $row['name'];?></p>
        <h2>项目预计时间</h2>
        <p><?php echo $row['time_num'];?>天</p>
        <h2>项目目标金额</h2>
        <p><?php echo $row['use_money'];?>元</p>
        <h2>项目简介</h2>
        <p> <?php echo $row['summary'];?> </p>
        <h2>项目概况</h2>
        <?php 
      $line=explode('。',$row['expl']);
      $img=explode(',', $row['img']);
      $line_len=count($line);
      $img_len=count($img);
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
      <div class="person-body">
        <h2>发起项目人信息</h2>
        <h4>用户名：</h4>
        <p><?php echo $rowUser['username'];?></p>
        <h4>姓名：</h4>
        <p><?php echo $rowCert['name'];?></p>
        <h4>手机号：</h4>
        <p><?php echo $rowCert['myPhone'];?></p>
        <h4>邮箱：</h4>
        <p><?php echo $rowUser['email'];?></p>
        <h4>身份证：</h4>
        <p><?php echo $rowCert['ID_card'];?></p>
        <h4>银行卡：</h4>
        <p><?php echo $rowCert['bank_ID'];?></p>
        <h4>家庭住址：</h4>
        <p><?php echo $rowCert['location'];?></p>
      </div>
    </div>
    <div class="footer">
      <a href="agree.php?class_id=<?php echo $row['id'];?>&&time_num=<?php echo $row['time_num'];?>">通过审核</a>
      <a href="disagree.php?class_id=<?php echo $row['id'];?>">拒绝审核</a>
    </div>
  </div>
</body>
</html>