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
  <title>项目信息</title>
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
  <div class="pro-main clearfix" style="min-height: 55vh">
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
      <p class="main_top_detail_target_time"><span>时间：</span><span class="main_top_detail_target_time_value"> <?php echo date('Y-m-d',$row['start_time']);?> 至 <?php echo date('Y-m-d',$row['end_time']);?></span></p>
      <div class="pro-info-button">
        <a href="javascript:void(0)" class="donate">我要捐款</a>
      </div>
      <span class="donate-count">捐款人数：<b><?php echo $row['user_num'];?> </b></span>人
    </div>
  </div>
  
  <div class="pro-body">
    <!-- <h3>项目基本信息</h3> -->
    <ul class="header  .clearfix">
      <li class="active">项目基本信息</li>
      <li>项目反馈信息</li>
      <li>来自捐助人的祝福</li>
    </ul>
    <ul class="content">
      <li class="active">
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
          if($k==($line_len-1))
          echo "{$line[$j]}";
          else
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
      </li>
      <li>
        <div class="feedback">
          <h4 class="pro-title">项目反馈</h4>
          <div class="content-row">
            <p>反馈时间：<span>2017/12/17</span></p>
            <img src="../home/img/1.jpg" alt="">
            <div class="feedback-content">这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容</div>
          </div>
        </div>
        <div class="feedback">
          <h4 class="pro-title">项目反馈</h4>
          <div class="content-row">
            <p>反馈时间：<span>2017/12/17</span></p>
            <img src="../home/img/1.jpg" alt="">
            <div class="feedback-content">这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容这是反馈内容</div>
          </div>
        </div>
        
      </li>
      <li>
        <div class="bless">
          <h4 class="pro-title">来自捐助人的祝福</h4>
          <div class="bless-row">
            <p class="user-name">
              xxx说：
            </p>
            <p class="bless-content">
              祝福你赶紧康复。
            </p>
          </div>
          <div class="bless-row">
            <p class="user-name">
              xxx说：
            </p>
            <p class="bless-content">
              祝福你赶紧康复。
            </p>
          </div>
          <div class="bless-row">
            <p class="user-name">
              xxx说：
            </p>
            <p class="bless-content">
              祝福你赶紧康复。
            </p>
          </div>
          <div class="bless-row">
            <p class="user-name">
              xxx说：
            </p>
            <p class="bless-content">
              祝福你赶紧康复。
            </p>
          </div>
        </div>
      </li>
    </ul>
   
   
  </div>
  <table>
    <tr>
      <td>123165</td>
      <td>123165</td>
      <td>123165</td>
      <td>123165</td>
    </tr>
  </table>

  <div class="place-order-wrapper">
    <div class="place-order">
      <div class="order-header">
        <h1>捐款提交</h1>
        <a href="#" class="close">X</a>
      </div>
      <div class="order-body">
        <p>项目名称：</p><span><?php echo $row['name'];?></span>
        <form action="check_pro_info.php?class_id=<?php echo $class_id;?>" method="post">
          <label for="moneyNum">捐款金额：</label>
          <input type="number" min="0" max="1000000"  id="moneyNum" name="moneyNum">元  
          <br>
          <textarea name="bless-content" id="" cols="30" rows="3" placeholder="请输入你的祝福"></textarea>
          <br>
          <button type="submit" class="sub-btn">捐助</button>
        </form>  
      </div>
    </div>
  </div>
  <?php
      include "footer.php";
  ?>

  <script>
    var btn = document.querySelector('.donate');
    var placeOrder = document.querySelector('.place-order-wrapper');
    var close = document.querySelector('.close');

    btn.addEventListener('click', function(e){
      e.preventDefault(); 
      placeOrder.classList.add('open');
    }) 

    close.addEventListener('click',function(e) {
      e.preventDefault(); 
      placeOrder.classList.remove('open');
    })


    var tabs = document.querySelectorAll('.pro-body .header>li');
    var panels =document.querySelectorAll('.pro-body .content>li');
      tabs.forEach(function(tab) {
        tab.addEventListener('click',function() {
          tabs.forEach(function(node) {
              node.classList.remove('active');
          })
          this.classList.add('active');
          var index = [].indexOf.call(tabs,this);
          
          panels.forEach(function(node) {
              node.classList.remove('active');
          })
          panels[index].classList.add('active');
      })
    })
  </script>
</body>
</html>