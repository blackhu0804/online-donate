<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
					<tr> 
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr> 
					<tr> 
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr> 
					<tr> 
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr>
					<tr> 
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr> 
					<tr> 
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr>
					<tr> 
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr> 
					<tr> 
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr>
					<tr>  
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr> 
					<tr> 
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr> 
					<tr> 
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr> 
					<tr> 
						<td>2017/10/23</td> 
						<td>10</td> 
						<td>抗战老兵的生活晚年</td> 
					</tr> 
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
					<tr>
						<td>抗战老兵的生活晚年</td>
						<td>30</td>
						<td>10000</td>
						<td>15000</td>
						<td>募款中</td>
					</tr>
					<tr>
						<td>抗战老兵的生活晚年</td>
						<td>30</td>
						<td>10000</td>
						<td>15000</td>
						<td>募款中</td>
					</tr>
					<tr>
						<td>抗战老兵的生活晚年</td>
						<td>30</td>
						<td>10000</td>
						<td>15000</td>
						<td>募款中</td>
					</tr>
					<tr>
						<td>抗战老兵的生活晚年</td>
						<td>30</td>
						<td>10000</td>
						<td>15000</td>
						<td>募款中</td>
					</tr>
					<tr>
						<td>抗战老兵的生活晚年</td>
						<td>30</td>
						<td>10000</td>
						<td>15000</td>
						<td>募款中</td>
					</tr>
					<tr>
						<td>抗战老兵的生活晚年</td>
						<td>30</td>
						<td>10000</td>
						<td>15000</td>
						<td>募款中</td>
					</tr>
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