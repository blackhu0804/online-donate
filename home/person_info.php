<?php
	include 'lock.php';
	include '../public/commen/config.php';
	$sql="select * from giftInfo where user_id={$_SESSION['home_userid']}";
	$rst=mysql_query($sql);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>个人信息</title>
  <link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/sign.css">
	<link rel="stylesheet" href="./css/bootstrap.css">
  <style>
    .footer {
			background: #eee;
    }
  </style>
</head>
<body>
  <?php
      include "header.php";
  ?> 
  
  <div class="tab-ct">
    <ul class="header clearfix">
        <li class="active">我的捐赠</li>
        <li>我的项目</li>
    </ul>
    <ul class="content">
        <li class="active">
					<table class="table table-hover">
					<tr> 
						<td>捐款时间</td> 
						<td>捐款金额(元)</td> 
						<td>项目</td> 
					</tr> 
					<?php
						while($row=mysql_fetch_assoc($rst)){

						
					?>
					<tr> 
						<td><?php echo date('Y-m-d',$row['time']);?></td> 
						<td><?php echo $row['money'];?></td> 
						<td><?php
							$sqlClass="select name from giftClass where id='{$row['giftClass_id']}'";
							$rstClass=mysql_query($sqlClass);
							$rowClass=mysql_fetch_assoc($rstClass);
							echo $rowClass['name'];
						?></td> 
					</tr> 
					<?php
						}
					?>
					
					</table>
				</li>
        <li>
				<table class="table table-hover">
					<tr> 
						<td>项目名称</td> 
						<td>募捐天数</td>
						<td>已捐金额(元)</td>
						<td>目标金额(元)</td> 
						<td>状态</td> 
					</tr> 
					<?php
						$sqlclass="select * from giftClass where user_id={$_SESSION['home_userid']}";
						$rstclass=mysql_query($sqlclass);
						while($rowclass=mysql_fetch_assoc($rstclass)){
					?>
					<tr>
						<td><?php echo $rowclass['name'];?></td>
						<td><?php 
						$time=time();
						$days=ceil(($time-$rowclass['start_time'])/24/3600);
						echo $days?></td>
						<td><?php echo $rowclass['sum_money'];?></td>
						<td><?php echo $rowclass['use_money'];?></td>
						<?php
							if($rowclass['is_end']){
								echo "<td>已结束</td>";
							}else{
								echo "<td>募款中</td>";
							}
						?>
						
					</tr>
					<?php
						}
					?>
					
					</table>
				</li>
    </ul>
  </div>

  <script>
    var tabs = document.querySelectorAll('.tab-ct .header>li');
    var panels =document.querySelectorAll('.tab-ct .content>li');
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
  
  <?php
      include "footer.php";
  ?>
</body>
</html>