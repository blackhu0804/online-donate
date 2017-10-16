<?php
	function ImageUpdateSize($picname,$maxx=100,$maxy=100,$pre="s_"){
	    $info=getimagesize($picname);

	    $w=$info[0];//获取宽度
	    $h=$info[1];//获取高度

	    //获取图片的类型并为此创建对应的图片资源
	    switch ($info[2]) {
	        case 1://gif
	            $im=imagecreatefromgif($picname);
	            break;
	        case 2://jpg
	            $im=imagecreatefromjpeg($picname);
	            break;
	        case 3://png
	            $im=imagecreatefrompng($picname);
	            break;
	        default:
	            die("图片信息错误");
	            break;
	    }

	    //计算缩放比例

	    if (($maxx/$w)>($maxy/$h)) {
	        $b=$maxy/$h;
	    }else{
	        $b=$maxx/$w;
	    }

	    //计算缩放后的尺寸
	    $nw=floor($w*$b);
	    $nh=floor($h*$b);

	    //创建一个新的图像源
	    $nim=imagecreatetruecolor($nw, $nh);

	    //执行等比缩放
	    imagecopyresampled($nim, $im, 0, 0, 0, 0, $nw, $nh, $w, $h);
	    $picinfo=pathinfo($picname);
	    $newpicname=$picinfo["dirname"]."/".$pre.$picinfo["basename"];
	    //输出图像
	    switch ($info[2]) {
	        case 1://gif
	            imagegif($nim,$newpicname);
	            break;
	        case 2://jpg
	            imagejpeg($nim,$newpicname);
	            break;
	        case 3://png
	            imagepng($nim,$newpicname);
	            break;
	    }

	    //释放图片资源
	    imagedestroy($im);
	    imagedestroy($nim);

	    //放回结果
	    return $newpicname;
	}




    /**
     *为一张图片加上一个logo图片水印（以保存的方式实现）
     *@param string $picname 被处理图片源
     *@param string $logo 水印图片
     *@param string $pre 处理后图片的前缀名
     *@return string 返回后的图片名称（带路径），如a.jpg=>n_jpg
     */ 
	function ImageUpdateLogo($picname,$logo,$pre="n_"){
    $picnameinfo=getimagesize($picname);//获取图像源的基本信息
    $logoinfo=getimagesize($logo);//获取logo图片的基本信息

    //根据图片类型建成对应的图片源
    switch ($picnameinfo[2]) {
        case 1://gif
            $im=imagecreatefromgif($picname);
            break;
        case 2://jpg
            $im=imagecreatefromjpeg($picname);
            break;
        case 3://png
            $im=imagecreatefrompng($picname);
            break;
        default:
            die("图片信息错误");
            break;
    }
    //根据logo图片类型建成对应的图片源
    switch ($logoinfo[2]) {
        case 1://gif
            $logoim=imagecreatefromgif($logo);
            break;
        case 2://jpg
            $logoim=imagecreatefromjpeg($logo);
            break;
        case 3://png
            $logoim=imagecreatefrompng($logo);
            break;
        default:
            die("logo图片信息错误");
            break;
    }

    //执行图片水印处理
     imagecopyresampled($im, $logoim,$picnameinfo[0]-$logoinfo[0],$picnameinfo[1]-$logoinfo[1], 0, 0, $logoinfo[0], $logoinfo[1], $logoinfo[0], $logoinfo[1]);

    $picinfo=pathinfo($picname);
    $newpicname=$picinfo["dirname"]."/".$pre.$picinfo["basename"];
    //输出图像
    switch ($picnameinfo[2]) {
        case 1://gif
            imagegif($im,$newpicname);
            break;
        case 2://jpg
            imagejpeg($im,$newpicname);
            break;
        case 3://png
            imagepng($im,$newpicname);
            break;
    }

    //释放图片资源
    imagedestroy($im);
    imagedestroy($logoim);

    //放回结果
    return $newpicname;

}





?>