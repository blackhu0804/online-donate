<?php
	 include 'lock.php';
	include '../public/commen/config.php';
	 error_reporting(E_ALL||~E_NOTICE);
	if($_POST['serche_user']){
		$flag1=1;
		$serche_user=$_POST['serche_user'];
	}else{
		$flag1=0;
	}

	if($_POST['serche_project']){
		$flag2=2;
		$serche_project=$_POST['serche_project'];
	}else{
		$flag2=0;
	}
	
	$perNumber=2; //每页显示的记录数
	$page1=$_GET['page1']; //获得当前的页面值
	$count1=mysql_query("select count(*) from giftClass"); //获得记录总数
	$rs1=mysql_fetch_array($count1); 
	$totalNumber1=$rs1[0];
	$totalPage1=ceil($totalNumber1/$perNumber); //计算出总页数
	if (!isset($page1)) {
 	$page1=1;
	} //如果没有值,则赋值1
	$startCount1=($page1-1)*$perNumber; //分页开始,根据此方法计算出开始的记录

	$page2=$_GET['page2']; //获得当前的页面值
	$count2=mysql_query("select count(*) from user"); //获得记录总数
	$rs2=mysql_fetch_array($count2); 
	$totalNumber2=$rs2[0];
	$totalPage2=ceil($totalNumber2/$perNumber); //计算出总页数
	if (!isset($page2)) {
 	$page2=2;
	} //如果没有值,则赋值1
	$startCount2=($page2-1)*$perNumber; //分页开始,根据此方法计算出开始的记录

	$sql="select * from advert";
	$rst=mysql_query($sql);
?>
<!doctype html>
<html lang="ch">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title>后台管理</title>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(function () {
			$(".meun-item").click(function () {
				$(".meun-item").removeClass("meun-item-active");
				$(this).addClass("meun-item-active");
				var itmeObj = $(".meun-item").find("img");
				itmeObj.each(function () {
					var items = $(this).attr("src");
					items = items.replace("_grey.png", ".png");
					items = items.replace(".png", "_grey.png")
					$(this).attr("src", items);
				});
				var attrObj = $(this).find("img").attr("src");;
				attrObj = attrObj.replace("_grey.png", ".png");
				$(this).find("img").attr("src", attrObj);
			});

			$(".btn").click(function () {
				$('.uid').attr("value",$(this).attr("uid"));
				$('.drop_id').attr("value",$(this).attr("drop_id"));
				$('.drop_project_id').attr("value",$(this).attr("drop_project_id"));
				$('.look_user_id').attr("value",$(this).attr("look_user_id"));
				$('.delete_user_id').attr("value",$(this).attr("delete_user_id"));
			})
		})
	</script>
	<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>

<body>
<div id="wrap">
		<!-- 左侧菜单栏目块 -->
		<div class="leftMeun" id="leftMeun">
			<div id="personInfor">
				<p>
          <a class="login-out" href="./logout.php">退出登录</a>
				</p>
			</div>
			<div class="meun-title">账号管理</div>
			<?php
				if($flag1==1){
			?>
					<div class="meun-item" href="#sour" aria-controls="sour" role="tab" data-toggle="tab">
						<img src="images/icon_source.png">项目管理</div>
					<div class="meun-item meun-item-active" href="#user" aria-controls="user" role="tab" data-toggle="tab">
						<img src="images/icon_chara_grey.png">用户管理</div>
					<div class="meun-item" href="#img" aria-controls="img" role="tab" data-toggle="tab">
						<img src="images/icon_img_grey.png">图片管理</div>
			<?php
				}else{
			?>
			<div class="meun-item meun-item-active" href="#sour" aria-controls="sour" role="tab" data-toggle="tab">
				<img src="images/icon_source.png">项目管理</div>
			<div class="meun-item" href="#user" aria-controls="user" role="tab" data-toggle="tab">
				<img src="images/icon_chara_grey.png">用户管理</div>
			<div class="meun-item" href="#img" aria-controls="img" role="tab" data-toggle="tab">
				<img src="images/icon_img_grey.png">图片管理</div>
			<?php
				}
			?>
		</div>
		<!-- 右侧具体内容栏目 -->
		<div id="rightContent">
			<a class="toggle-btn" id="nimei">
				<i class="glyphicon glyphicon-align-justify"></i>
			</a>
			
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- 项目管理模块 -->
				<div role="tabpanel" class="tab-pane <?php 
						if($flag1!=1){
							echo "active";
						}
					?>" id="sour">

				<div class="check-div form-inline">
					<div class="col-xs-3">
							<?php 
								if($flag2==2){
							?>
								
										<form action="index.php" method="post">
										<input type="hidden" name="serche_project" value="<?php echo $serche_user;?>">
										<button class="btn btn-white btn-xs " type="submit">返回查询 </button>
									</form>
							<?php
								}
							?>								
					</div>
					<div class="col-xs-4">
						<form action="index.php" method="post">
							<form action="index.php" method="post">
							<input type="hidden" name="serche_project" value="<?php echo $serche_user;?>">
							<input type="text" class="form-control input-sm" name="serche_project" placeholder="输入文字搜索">
							<button class="btn btn-white btn-xs " type="submit">查 询 </button>
						</form>
					</div>
				</div>
				<div class="data-div">
					<table class="table table-hover">
						<tr>
							<td>序号</td>
							<td>项目名称</td>
							<td>筹款目标（元）</td>
							<td>筹款时间（天）</td>
							<td>项目状态</td>
							<td>操作</td>
						</tr>
						<tbody>
							<?php
								if($flag2==2){
								
									$sqlClass="select id,name,use_money,time_num,isend from giftclass where name LIKE '%$serche_project%' limit $startCount1,$perNumber";
									
									$rstClass=mysql_query($sqlClass);
									$i=1;
									while($rowClass=mysql_fetch_assoc($rstClass))
									{
							?>
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $rowClass['name'];?></td>
								<td><?php echo $rowClass['use_money'];?>元</td>
								<td><?php echo $rowClass['time_num'];?>天</td>
								<?php 
									if($rowClass['isend']==0){
										echo "<td>待审核</td>";
									}else if($rowClass['isend']==2){

										echo "<td>未通过</td>";
									}else{
										echo "<td>已通过</td>";
									}
								?>
								<td>

									<form class="modify" action="Audit_project.php" method="post">
										<input style="display:none;" name="class_id" value="<?php echo $rowClass['id'];?>"></input>
										<button type="submit" class="btn btn-success btn-xs">修改</button>	
									</form>
										<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteSource" drop_project_id="<?php echo $rowClass['id'];?>">删除</button>
								
								</td>
							</tr>
							<?php
									}
									
			
								}else{
									$sqlClass="select id,name,use_money,time_num,isend from giftclass limit $startCount1,$perNumber";
									$rstClass=mysql_query($sqlClass);
									$i=1;
									while($rowClass=mysql_fetch_assoc($rstClass))
									{
							?>
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $rowClass['name'];?></td>
								<td><?php echo $rowClass['use_money'];?>元</td>
								<td><?php echo $rowClass['time_num'];?>天</td>
								<?php 
									if($rowClass['isend']==0){
										echo "<td>待审核</td>";
									}else if($rowClass['isend']==2){

										echo "<td>未通过</td>";
									}else{
										echo "<td>已通过</td>";
									}
								?>
								<td>

									<form class="modify" action="Audit_project.php" method="post">
										<input style="display:none;" name="class_id" value="<?php echo $rowClass['id'];?>"></input>
										<button type="submit" class="btn btn-success btn-xs">修改</button>	
									</form>
									
										<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteSource" drop_project_id="<?php echo $rowClass['id'];?>">删除</button>
								
 
								</td>
							</tr>
							<?php
									}
									
								}
							?>
							
						</tbody>
					</table>
					<?php
					if ($page1 != 1) { //页数不等于1
							?>
									<a href="index.php?page1=<?php echo $page1 - 1;?>">上一页</a> <!--显示上一页-->
							<?php
									}
									for ($i=1;$i<=$totalPage1;$i++) {  //循环显示出页面
							?>
									<a href="index.php?page1=<?php echo $i;?>"><?php echo $i ;?></a>
							<?php
									}
									if ($page1<$totalPage1) { //如果page小于总页数,显示下一页链接
							?>
									<a href="index.php?page1=<?php echo $page1 + 1;?>">下一页</a>
							<?php
									} 
					?>
				</div>				
				
				
				<!--弹出删除项目警告窗口-->
				<div class="modal fade" id="deleteSource" role="dialog" aria-labelledby="gridSystemModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									确定要删除该项目？删除后不可恢复！
								</div>
							</div>
							<form action="delete_project.php" method="post">
								<div class="modal-footer">
									<input style="display:none;" name="data-drop_project_id" value="drop_project_id" class="drop_project_id"></input>
									<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
									<button type="submit" class="btn btn-xs btn-danger">保 存</button>
								</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
			</div>
			<!-- 项目管理结束 -->

			<!-- 图片管理模块 -->
			<div role="tabpanel" class="tab-pane" id="img">
				<div class="check-div">
					<button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addChar">添加图片</button>
				</div>
				<div class="data-div">
					<div class="row tableHeader">
						<div class="col-xs-3 ">
							图片
						</div>
						<div class="col-xs-3 ">
							链接
						</div>
						<div class="col-xs-3 ">
							名称
						</div>
						<div class="col-xs-3">
							操作
						</div>
					</div>
					<div class="tablebody">
						<?php
							while($row=mysql_fetch_assoc($rst)){
						?>
						<div class="row">
							<div class="col-xs-3">
								<img width="100" src="../public/uploads/<?php echo $row['img'];?>" alt="">
							</div>
							<div class="col-xs-3 ">
								<p class="ImgUrl"><?php echo $row['url'];?></p>
							</div>
							<div class="col-xs-3 ">
								<?php echo $row['name'];?>
							</div>
							<div class="col-xs-3">

								<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeChar" uid="<?php echo $row['id'];?>">修改</button>
								<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteChar" drop_id="<?php echo $row['id'];?>">删除</button>
							</div>
						</div>
						<?php
							}
						?>
						
					</div>
				</div>
				<!--增加权限弹出窗口-->
				<div class="modal fade" id="addChar" role="dialog" aria-labelledby="gridSystemModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="gridSystemModalLabel">添加图片</h4>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
										<form action="insert_img.php" method="post" enctype="multipart/form-data">
											<div class="form-group ">
												<label class="uploadImg" for="sName" class="col-xs-4 control-label">上传图片：</label>
												<input id="sName" type="file" name="img">
												<div>
													<input type="text" name="url" placeholder="URL">
													<input class="imgTitle" type="text" name="name" placeholder="标题">
												</div>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
								<button type="submit" class="btn btn-xs btn-green">保 存</button>
							</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!--修改图片弹出窗口-->
				<div class="modal fade" id="changeChar" role="dialog" aria-labelledby="gridSystemModalLabel">
					<div class="modal-dialog" role="document">
					
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="gridSystemModalLabel">修改图片</h4>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									<form class="form-horizontal" action="check_change_img.php" method="post" enctype="multipart/form-data">
										<input style="display:none;" name="data-uid" value="uid" class="uid"></input>
										<div class="form-group ">
										<label for="sName" class="col-xs-3 control-label">上传图片：</label>
											<div class="col-xs-6 ">
												<input type="file" name="img">
												
											</div>

										</div>
											<div class="col-xs-6 ">
											<input type="text" name="url" placeholder="URL">
											</div>
											<div class="col-xs-6 ">
											<input type="text" name="name" placeholder="标题">
											</div>
									
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
								<button type="submit" class="btn btn-xs btn-green">保 存</button>
							</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!--弹出删除图片警告窗口-->
				<div class="modal fade" id="deleteChar" role="dialog" aria-labelledby="gridSystemModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
							</div>
						
							
								
							<div class="modal-body">
								<div class="container-fluid">
									确定要删除该图片及所包含信息？删除后不可恢复！
								</div>
							</div>
							<div class="modal-footer">
					
								<form action="delete_img.php" method="post">
									<input style="display:none;" name="data-drop_id" value="drop_id" class="drop_id"></input>
								<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
								<button type="submit" class="btn btn-xs btn-danger">删除</button>
								</form>
							</div>
						
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

			</div>
			<!-- 图片管理结束 -->

			<!--用户管理模块-->
			<div role="tabpanel" class="tab-pane <?php 
						if($flag1==1){
							echo "active";
						}
					?>" id="user">
				<div class="check-div form-inline">
					<div class="col-xs-3">
						<?php 
								if($flag1==1){
							?>
									<form action="index.php" method="post">
										<input type="hidden" name="serche_project" value="<?php echo $serche_project;?>">
										<button class="btn btn-white btn-xs " type="submit">返回查询 </button>
									</form>
							<?php
								}
							?>	
					</div>
					<div class="col-xs-4">
						<form action="index.php" method="post">
							<input type="hidden" name="serche_project" value="<?php echo $serche_project;?>">
							<input type="text" class="form-control input-sm" name="serche_user" placeholder="输入文字搜索">
							<button id="searchUser" class="btn btn-white btn-xs " type="submit">查 询 </button>
						</form>
					</div>
				</div>
				<div class="data-div">
					<table class="table table-striped">
						<tr>
								<td>用户名</td>
								<td>邮箱</td>
								<td>电话</td>
								<td>积分</td>
								<td>操作</td>
						</tr>
						<tbody>
							<?php
								if($flag1==1){
									$sqlUser="select * from user where username LIKE '%$serche_user%'";
									$rstUser=mysql_query($sqlUser);
									while($rowUser=mysql_fetch_assoc($rstUser))
									{
										$sqlCert="select myPhone from certification where user_id={$rowUser['id']}";
										$rstCert=mysql_query($sqlCert);
										$rowCert=mysql_fetch_assoc($rstCert);
							?>
							<tr>
									<td><?php echo $rowUser['username'];?></td>
									<td><?php echo $rowUser['email'];?></td>
									<td><?php echo $rowCert['myPhone'];?></td>
									<td><?php echo $rowUser['integration'];?></td>
									<td>
											
											<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteUser" delete_user_id=<?php echo $rowUser['id'];?>>删除</button>
									</td>
							</tr>
							<?php
									}

								}else{
									$sqlUser="select * from user";
									$rstUser=mysql_query($sqlUser);
									while($rowUser=mysql_fetch_assoc($rstUser))
									{
										$sqlCert="select myPhone from certification where user_id={$rowUser['id']}";
										$rstCert=mysql_query($sqlCert);
										$rowCert=mysql_fetch_assoc($rstCert);
							?>
							<tr>
									<td><?php echo $rowUser['username'];?></td>
									<td><?php echo $rowUser['email'];?></td>
									<td><?php echo $rowCert['myPhone'];?></td>
									<td><?php echo $rowUser['integration'];?></td>
									<td>
											
											<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteUser" delete_user_id=<?php echo $rowUser['id'];?>>删除</button>
									</td>
							</tr>
							<?php
									}
								}
							?>
							
						</tbody>
					</table>
						</div>
					</div>
				</div>
				<!--页码块-->
				<footer class="footer">
					<ul class="pagination">
						<li>
							<select onchange="func()">
								<?php
								
									for($j=1;$j<=$totalPage1;$j++){
								?>
								<option value="<?php echo $j?>"><?php echo $j?></option>
	
								<?php
									}
								?>
							</select>
							页
						</li>
						<li class="gray">
							共<?php echo $totalPage1;?>页
						</li>
						<li>
							<a href="index.php?page1=<?php echo $page1-1;?>">
							<i class="glyphicon glyphicon-menu-left">
							</i>
						</a>
						</li>
						<li>
							<a href="index.php?page1=<?php echo $page1+1;?>">
							<i class="glyphicon glyphicon-menu-right">
							</i>
						</a>
						</li>
					</ul>
				</footer>

				<!--弹出添加用户窗口-->
				<div class="modal fade" id="addUser" role="dialog" aria-labelledby="gridSystemModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="gridSystemModalLabel">添加用户</h4>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									<form class="form-horizontal">
										<div class="form-group ">
											<label for="sName" class="col-xs-3 control-label">用户名：</label>
											<div class="col-xs-8 ">
												<input type="text" class="form-control input-sm duiqi" id="sName" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<label for="sEmail" class="col-xs-3 control-label">邮箱：</label>
											<div class="col-xs-8 ">
												<input type="email" class="form-control input-sm duiqi" id="sEmail" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<label for="sPassword" class="col-xs-3 control-label">密码：</label>
											<div class="col-xs-8">
												<input type="password" class="form-control input-sm duiqi" id="sPassword" placeholder="">
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
								<button type="button" class="btn btn-xs btn-green">保 存</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!--弹出修改用户窗口-->
				<div class="modal fade" id="reviseUser" role="dialog" aria-labelledby="gridSystemModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="gridSystemModalLabel">修改用户</h4>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									<form class="form-horizontal">
										<div class="form-group ">
											<label for="sName" class="col-xs-3 control-label">用户名：</label>
											<div class="col-xs-8 ">
												<input type="text" class="form-control input-sm duiqi" id="sName" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<label for="sEmail" class="col-xs-3 control-label">邮箱：</label>
											<div class="col-xs-8 ">
												<input type="email" class="form-control input-sm duiqi" id="sEmail" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<label for="sPassword" class="col-xs-3 control-label">密码：</label>
											<div class="col-xs-8">
												<input type="password" class="form-control input-sm duiqi" id="sPassword" placeholder="">
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
								<button type="button" class="btn btn-xs btn-green">保 存</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!--弹出删除用户警告窗口-->
				<div class="modal fade" id="deleteUser" role="dialog" aria-labelledby="gridSystemModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									确定要删除该用户？删除后不可恢复！
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
								<form action="delete_user.php" method="post">
									<input style="display:none;" name="user_id" value="delete_user_id" class="delete_user_id"></input>
									<button type="submit" class="btn  btn-xs btn-danger">删除</button>
								</form>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

			</div>
			<!--用户管理结束-->
		</div>
</div>
</body>
</html>