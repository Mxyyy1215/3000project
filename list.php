<?php
include("conn.php");
 
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GU2</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
 <div class="yonghudenlgu">
   <div class="headmain">
   
      <?php
 if(isset($_SESSION['yonghu'])){ echo  "<p>Welcome user:".$_SESSION['yonghu']."Log in,  <a href='mydingdan.php'>My order</a>  <a href='tuichu.php'>Exit system</a></p>"; }
 
	?>
  
    <a href='seller/index.php'>Merchants landing</a>
   <a href='seller/res.php'>Business registration</a>
    </div>    </div>
<div class="header">
  <div class="headmain">
   
    <dl>
      <dt><img src="images/logo.png"></dt>
      <dd> <a  class="cur" href="index.php">Home page</a> <a href="list.php">Commodity information</a> <a href="note.php">News</a>  <a href="login.php">User login</a> <a href="res.php">User registration</a><a href="help.php">Help</a> </dd>
    </dl>
  </div>
</div>
<div class="main">
<div class="kecheng">
	<div class="kctitle">Auction Classification</div>
    <div class="kclist">
    <ul>
    	 <?php
	
	  $sql="select * from tb_type order by typeid asc   "; //查询数据库内容
	$rs=mysqli_query($link,$sql); //执行sql
	while($row=mysqli_fetch_array($rs)){ //遍历结果
		?>
      <li>
 <a href="list.php?typeid=<?php echo $row['typeid'];?>"> <?php echo $row['typename'];?></a> 
        </li>
      <?php    
	}	
	?>
    </ul>
   
 

    </div>
    
 </div>
<div class="listright">
   <div class="titlehote">
    <h3>Recommend commodities<span>|HOT</span></h3>
  </div>
   <div class="hotkecheng">
    <ul>
      <?php
	$typeid=empty($_GET['typeid'])?'':$_GET['typeid']; //通过url判断是否获取分类
	  $sql="select * from tb_study   where typeid like '%$typeid%' and zt=1  order by eaid desc  "; //查询10条数据库内容
	$rs=mysqli_query($link,$sql); // 执行sql
	
	$num=mysqli_num_rows($rs); //统计查询多少数据
	while($row=mysqli_fetch_array($rs)){
		?>
      <li>
      <img src="seller/<?php echo $row['photo'];?>" /> <h3><a href="news.php?eaid=<?php echo $row['eaid'];?>"> <?php echo $row['EAname'];?></a></h3>
        <p><span>   <?php echo $row['jianjie'];?></span></p>
        </li>
      <?php    
	}	
	?>
    </ul>
    <h5 style="line-height:100px; text-align:center"><?php if($num==0){ echo "No auction items of this type are currently available";} ?></h5>
  </div></div>
  <div class="clearfloat"></div>
   
 
  <div class="clearfloat"></div>
  <div class="footer">
    <p>MaXinyu </p>
  </div>
</div>
</body>
</html>
