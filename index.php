<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>健康度计算器</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<!--<script> 
function checkform()  
{ 
var name=document.a.name.value;
var height=document.a.height.value;
var weight=document.a.weight.value;
if(name.length>10) 
  { 
  alert("姓名不能超过10个字符！"); 
  document.a.name.focus(); 
  ele.select();
  return false; 
  }
  

if(isNaN(Number(height)) || isNaN(Number(weight)))
      {
        alert("身高，体重必须输入数字!");
        ele.select();
        return false;
      }
if(name.length==0 || weight.length==0 || height.length==0)
      {
        alert("请填写完整的姓名，身高，体重信息!");
        ele.select();
        return false;
      }
else
	{
		if(height>300 || height<110 || weight>500 || weight<0)
      		{
       		 alert("身高请您输入110-300之间的数值! 体重请您输入0-500之间的数值！");
       		 ele.select();
       		 return false;
    		  }
		
		}

} 
</script> -->
</head>

<body>
<div class="content">
	
    <div class="top">
    <h1>健康度计算器</h1>
		<form name="a" action="index.php" method="get" onsubmit="return checkform()" />
			<p><label>姓名:</label> <input type="text" name="name" /></p>
			<p><label>身高(厘米): </label> <input type="text" name="height"/></p>
			<p><label>体重(公斤):</label> <input type="text" name="weight" /></p>
            <p><label>邮箱：</label></p><input type="text" name="email" /></p>
			<p><input type="submit" name="submit" /></p>
		</form>
     </div>
	<div class="footer">
<?php



if (isset($_GET['submit'])){
	
	$name = isset($_GET['name'])?$_GET['name']:null;
	$height = isset($_GET['height'])?$_GET['height']:null;
	$weight = isset($_GET['weight'])?$_GET['weight']:null;
	$index=$height-$weight;
	$standard=$height-100;
	
	if ((""==$_GET['name']) || (""==$_GET['height']) || (""==$_GET['height']) ||(""==$_GET['email'])){
		echo "姓名、身高、体重、邮箱均不能为空！";
		}
		
	elseif ((!filter_input(INPUT_GET, 'height', FILTER_VALIDATE_INT)) || (!filter_input(INPUT_GET, 'height', FILTER_VALIDATE_INT))){
		echo "身高、体重必须为数字";
	}
	elseif(!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)){
		echo "请输入正确的邮箱地址！";
	}
	elseif (($height > 300 ) || ($height<110) || ($weight>1000) || ($weight<10)){
		echo "请输入正确的身高，体重！";
		}
	else{
		
switch($index)
{
	case $index<=80;
		echo $name . "，您体型严重偏胖哦！您的标准体重应该为" . $standard;
		break;
	case $index>80 && $index<=90;
		echo $name . "，您体型有点偏胖哦！您的标准体重应该为" . $standard;
		break;
	case $index>90 && $index<=110;
		echo $name . "，您体型不错哦！您的标准体重应该为" . $standard;
		break;
	case $index>110 && $index<=120;
		echo $name . "，您体型偏瘦哦！您的标准体重应该为" . $standard;
		break;
	case $index>120;
		echo $name . "，您体型严重偏瘦哦！您的标准体重应该为" . $standard;
		break;		
	
}
	}
}
?>

	</div>
</div>




</body>
</html>