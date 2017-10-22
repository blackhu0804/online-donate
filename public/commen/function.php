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

function luhn($no) {
    $arr_no = str_split($no);
    $last_n = $arr_no[count($arr_no)-1];
    krsort($arr_no);
    $i = 1;
    $total = 0;
    foreach ($arr_no as $n){
        if($i%2==0){
            $ix = $n*2;
            if($ix>=10){
                $nx = 1 + ($ix % 10);
                $total += $nx;
            }else{
                $total += $ix;
            }
        }else{
            $total += $n;
        }
        $i++;
    }
    $total -= $last_n;
    $total *= 9;
    return $last_n == ($total%10);
}


function validation_filter_id_card($id_card){ 
 if(strlen($id_card)==18){ 
 return idcard_checksum18($id_card); 
 }elseif((strlen($id_card)==15)){ 
 $id_card=idcard_15to18($id_card); 
 return idcard_checksum18($id_card); 
 }else{ 
 return false; 
 } 
} 
// 计算身份证校验码，根据国家标准GB 11643-1999 
function is_idcard( $id ) 
{ 
  $id = strtoupper($id); 
  $regx = "/(^\d{15}$)|(^\d{17}([0-9]|X)$)/"; 
  $arr_split = array(); 
  if(!preg_match($regx, $id)) 
  { 
    return FALSE; 
  } 
  if(15==strlen($id)) //检查15位 
  { 
    $regx = "/^(\d{6})+(\d{2})+(\d{2})+(\d{2})+(\d{3})$/"; 
  
    @preg_match($regx, $id, $arr_split); 
    //检查生日日期是否正确 
    $dtm_birth = "19".$arr_split[2] . '/' . $arr_split[3]. '/' .$arr_split[4]; 
    if(!strtotime($dtm_birth)) 
    { 
      return FALSE; 
    } else { 
      return TRUE; 
    } 
  } 
  else      //检查18位 
  { 
    $regx = "/^(\d{6})+(\d{4})+(\d{2})+(\d{2})+(\d{3})([0-9]|X)$/"; 
    @preg_match($regx, $id, $arr_split); 
    $dtm_birth = $arr_split[2] . '/' . $arr_split[3]. '/' .$arr_split[4]; 
    if(!strtotime($dtm_birth)) //检查生日日期是否正确 
    { 
      return FALSE; 
    } 
    else
    { 
      //检验18位身份证的校验码是否正确。 
      //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。 
      $arr_int = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2); 
      $arr_ch = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'); 
      $sign = 0; 
      for ( $i = 0; $i < 17; $i++ ) 
      { 
        $b = (int) $id{$i}; 
        $w = $arr_int[$i]; 
        $sign += $b * $w; 
      } 
      $n = $sign % 11; 
      $val_num = $arr_ch[$n]; 
      if ($val_num != substr($id,17, 1)) 
      { 
        return FALSE; 
      } //phpfensi.com 
      else
      { 
        return TRUE; 
      } 
    } 
  } 
  
} 

function isChineseName($name){
    if (preg_match('/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/', $name)) {
        return true;
    } else {
        return false;
    }
}





?>