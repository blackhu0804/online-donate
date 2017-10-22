<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
        <h2>公益项目申请</h2>
        <span>(以下所有信息都为必填项)</span>
      </div>
      <div class="launch-body">
        <h3 class="content-header">项目基本信息</h3>
        <form action="check_launch_pro.php" method="post">
          <div class="item">
            <label for="proName">项目名称</label>
            <input type="text" id="proName" name="proName">
            <span class="form_msg">( 不超过9个字，例如“为植物人撑起希望” )</span>
          </div>
          <div class="item">
            <label for="proMoney">筹款目标</label>
            <input type="number" id="proMoney" name="proMoney">元
          </div>
          <div class="item">
            <label for="proReason">筹款原因</label>
            <textarea name="proReason" id="proReason" cols="30" rows="5" placeholder="请尽量详细，让捐款人了解你的情况"></textarea>
          </div>
          <div class="item">
            <label for="proDays">计划天数</label>
            <input type="number" id="proDays" name="proDays">天
            <span class="form_msg">( 不超过100天 )</span>
          </div>
          <div class="file">
            <input type="file" value="选择图片" name="file" id="doc" multiple="multiple"   onchange="javascript:setImagePreviews();" accept="image/*" />
            <div id="dd"></div>
          </div>

          <div class="item">
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
  <script type="text/javascript">

    //下面用于多图片上传预览功能

    function setImagePreviews(avalue) {

        var docObj = document.getElementById("doc");

        var dd = document.getElementById("dd");

        dd.innerHTML = "";

        var fileList = docObj.files;

        for (var i = 0; i < fileList.length; i++) {            



            dd.innerHTML += "<div style='display:inline-block;border:1px solid #ccc;margin:2px;' > <img id='img" + i + "'  /> </div>";

            var imgObjPreview = document.getElementById("img"+i); 

            if (docObj.files && docObj.files[i]) {
                imgObjPreview.style.display = 'block';
                imgObjPreview.style.width = '150px';
                imgObjPreview.style.height = '180px';
                imgObjPreview.src = window.URL.createObjectURL(docObj.files[i]);
            }

            else {
                //IE下，使用滤镜
                docObj.select();
                var imgSrc = document.selection.createRange().text;
                alert(imgSrc)
                var localImagId = document.getElementById("img" + i);
                //必须设置初始大小
                localImagId.style.width = "150px";
                localImagId.style.height = "180px";
                //图片异常的捕捉，防止用户修改后缀来伪造图片
                try {

                    localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";

                    localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;

                }

                catch (e) {

                    alert("您上传的图片格式不正确，请重新选择!");

                    return false;

                }

                imgObjPreview.style.display = 'none';

                document.selection.empty();

            }

        }  



        return true;

    }



</script>
  <?php
      include "footer.php";
  ?>
</body>
</html>