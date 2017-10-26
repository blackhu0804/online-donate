<?php
	// include 'lock.php';
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
				$('.uid').append($(this).attr("uid"));
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
          <a class="login-out" href="./login.html">退出登录</a>
				</p>
			</div>
			<div class="meun-title">账号管理</div>
			<div class="meun-item meun-item-active" href="#sour" aria-controls="sour" role="tab" data-toggle="tab">
				<img src="images/icon_source.png">项目管理</div>
			<div class="meun-item" href="#user" aria-controls="user" role="tab" data-toggle="tab">
				<img src="images/icon_chara_grey.png">用户管理</div>
			<div class="meun-item" href="#img" aria-controls="img" role="tab" data-toggle="tab">
				<img src="images/icon_img_grey.png">图片管理</div>
		</div>
		<!-- 右侧具体内容栏目 -->
		<div id="rightContent">
			<a class="toggle-btn" id="nimei">
				<i class="glyphicon glyphicon-align-justify"></i>
			</a>
			
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- 项目管理模块 -->
				<div role="tabpanel" class="tab-pane active" id="sour">

				<div class="check-div form-inline">
					<div class="col-xs-3">
							<button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addSource">添加项目</button>								
					</div>
					<div class="col-xs-4">
						<input type="text" class="form-control input-sm" placeholder="输入文字搜索">
						<button class="btn btn-white btn-xs ">查 询 </button>
					</div>
				</div>
				<div class="data-div">
					<table class="table table-hover">
						<tr>
							<td>序号</td>
							<td>项目名称</td>
							<td>筹款目标（元）</td>
							<td>筹款时间（天）</td>
							<td>操作</td>
						</tr>
						<tbody>
							<tr>
								<td>1</td>
								<td>测试题目1</td>
								<td>10000</td>
								<td>30</td>
								<td>
									<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeSource">修改</button>
									<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteSource">删除</button>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>测试题目1</td>
								<td>10000</td>
								<td>30</td>
								<td>
									<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeSource">修改</button>
									<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteSource">删除</button>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>测试题目1</td>
								<td>10000</td>
								<td>30</td>
								<td>
									<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeSource">修改</button>
									<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteSource">删除</button>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>测试题目1</td>
								<td>10000</td>
								<td>30</td>
								<td>
									<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeSource">修改</button>
									<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteSource">删除</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>				
				<!--弹出窗口 添加资源-->
				<div class="modal fade" id="addSource" role="dialog" aria-labelledby="gridSystemModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="gridSystemModalLabel">添加项目</h4>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									<form class="form-horizontal">
										<div class="form-group ">
											<label for="sName" class="col-xs-3 control-label">项目名称：</label>
											<div class="col-xs-8 ">
												<input type="email" class="form-control input-sm duiqi" id="sName" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<label for="sGold" class="col-xs-3 control-label">筹款目标：</label>
											<div class="col-xs-8 ">
												<input type="" class="form-control input-sm duiqi" id="sGold" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<label for="sTime" class="col-xs-3 control-label">计划天数：</label>
											<div class="col-xs-8 ">
												<input type="" class="form-control input-sm duiqi" id="sTime" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<label for="sReason" class="col-xs-3 control-label">筹款原因：</label>
											<div class="col-xs-8">
												<textarea type="" class="form-control input-sm duiqi" id="sReason" placeholder=""></textarea>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-xs btn-xs btn-white" data-dismiss="modal">取 消</button>
								<button type="button" class="btn btn-xs btn-xs btn-green">保 存</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!--修改项目弹出窗口-->
				<div class="modal fade" id="changeSource" role="dialog" aria-labelledby="gridSystemModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="gridSystemModalLabel">修改项目</h4>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									<form class="form-horizontal">
											<div class="form-group ">
													<label for="sName" class="col-xs-3 control-label">项目名称：</label>
													<div class="col-xs-8 ">
														<input type="email" class="form-control input-sm duiqi" id="sName" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label for="sGold" class="col-xs-3 control-label">筹款目标：</label>
													<div class="col-xs-8 ">
														<input type="" class="form-control input-sm duiqi" id="sGold" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label for="sTime" class="col-xs-3 control-label">计划天数：</label>
													<div class="col-xs-8 ">
														<input type="" class="form-control input-sm duiqi" id="sTime" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label for="sReason" class="col-xs-3 control-label">筹款原因：</label>
													<div class="col-xs-8">
														<textarea type="" class="form-control input-sm duiqi" id="sReason" placeholder=""></textarea>
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
							<div class="modal-footer">
								<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
								<button type="button" class="btn btn-xs btn-danger">保 存</button>
							</div>
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
						<div class="col-xs-6 ">
							图片
						</div>
						<div class="col-xs-6">
							操作
						</div>
					</div>
					<div class="tablebody">
						<div class="row">
							<div class="col-xs-6">
								<img width="100" src="../home/img/img1.jpg" alt="">
							</div>
							<div class="col-xs-6">
								<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeChar" uid="111">修改</button>
								<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteChar">删除</button>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<img width="100" src="../home/img/img2.jpg" alt="">
							</div>
							<div class="col-xs-6">
								<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeChar" uid="222">修改</button>
								<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteChar">删除</button>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<img width="100" src="../home/img/img3.jpg" alt="">
							</div>
							<div class="col-xs-6">
								<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeChar" uid="333">修改</button>
								<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteChar">删除</button>
							</div>
						</div>
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
									<form class="form-horizontal">
										<div class="form-group ">
											<label for="sName" class="col-xs-3 control-label">上传图片：</label>
											<div class="col-xs-6 ">
												<input type="file" id="sImg" placeholder="">
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
									<form class="form-horizontal">
										<input style="display:none;" class="uid"></input>
										<div class="form-group ">
										<label for="sName" class="col-xs-3 control-label">上传图片：</label>
											<div class="col-xs-6 ">
												<input type="file" id="sImg" placeholder="">
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
									确定要删除该图片？删除后不可恢复！
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
								<button type="button" class="btn btn-xs btn-danger">保 存</button>
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
			<div role="tabpanel" class="tab-pane" id="user">
				<div class="check-div form-inline">
					<div class="col-xs-3">
						<button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addUser">添加用户 </button>
					</div>
					<div class="col-xs-4">
						<input type="text" class="form-control input-sm" placeholder="输入文字搜索">
						<button class="btn btn-white btn-xs ">查 询 </button>
					</div>
				</div>
				<div class="data-div">
					<table class="table table-striped">
						<tr>
								<td>用户名</td>
								<td>邮箱</td>
								<td>捐助过的项目</td>
								<td>发起的项目</td>
								<td>操作</td>
						</tr>
						<tbody>
							<tr>
									<td>古月</td>
									<td>81241003@qq.com</td>
									<td>测试标题</td>
									<td>测试标题</td>
									<td>
											<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#reviseUser">修改</button>
											<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteUser">删除</button>
									</td>
							</tr>
							<tr>
									<td>古月</td>
									<td>81241003@qq.com</td>
									<td>测试标题</td>
									<td>测试标题</td>
									<td>
											<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#reviseUser">修改</button>
											<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteUser">删除</button>
									</td>
							</tr>
							<tr>
									<td>古月</td>
									<td>81241003@qq.com</td>
									<td>测试标题</td>
									<td>测试标题</td>
									<td>
											<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#reviseUser">修改</button>
											<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteUser">删除</button>
									</td>
							</tr>
							<tr>
									<td>古月</td>
									<td>81241003@qq.com</td>
									<td>测试标题</td>
									<td>测试标题</td>
									<td>
											<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#reviseUser">修改</button>
											<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteUser">删除</button>
									</td>
							</tr>
							<tr>
									<td>古月</td>
									<td>81241003@qq.com</td>
									<td>测试标题</td>
									<td>测试标题</td>
									<td>
											<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#reviseUser">修改</button>
											<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteUser">删除</button>
									</td>
							</tr>
						</tbody>
					</table>
						</div>
					</div>
				</div>
				<!--页码块-->
				<footer class="footer">
					<ul class="pagination">
						<li>
							<select>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
							页
						</li>
						<li class="gray">
							共20页
						</li>
						<li>
							<i class="glyphicon glyphicon-menu-left">
							</i>
						</li>
						<li>
							<i class="glyphicon glyphicon-menu-right">
							</i>
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
								<button type="button" class="btn  btn-xs btn-danger">保 存</button>
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