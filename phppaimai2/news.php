<?php

include("conn.php");
 
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Auction</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
 <div class="yonghudenlgu">
   <div class="headmain">
   
      <?php
 if(isset($_SESSION['yonghu'])){ echo  "<p>Welcome user：".$_SESSION['yonghu']."Log in,  <a href='mydingdan.php'>My Order</a>  <a href='tuichu.php'>Exit system</a></p>"; }
 
	?>
  
    <a href='seller/index.php'>Merchants landing</a>
   <a href='seller/res.php'>Business registration</a>
    </div>    </div>
<div class="header">
  <div class="headmain">
   
    <dl>
      <dt><img src="images/logo.png"  /></dt>
      <dd> <a  class="cur" href="index.php">Homepage</a> <a href="list.php">Commodity information</a> <a href="note.php">News</a>  <a href="login.php">User login</a> <a href="res.php">User registration</a> <a href="help.php">Help</a></dd>
    </dl>
  </div>
</div>
<div class="main">
  <div class="titlehote">
    <h3>Product information details</h3>
    <p>HOTEL DETAIL</p>
  </div>
  <div class="newsbox">
    <?php
		$eaid=$_GET['eaid'];
	  $sql="select * from tb_study where eaid='$eaid' "; //查询数据
	$rs=mysqli_query($link,$sql);//执行sql语句
	while($row=mysqli_fetch_array($rs)){//遍历输出
		?>
 
    <div class="jdbxo">
      <div class="jdrgtitle">
        <img src="seller<?php echo $row['photo'];?>" />
      <h3>  <?php echo $row['EAname'];?></h3> 
      <p>Auction deadline: <strong><?php echo $row['overtime'];?></strong> </p>
      <p>Commodity base price:<strong> <?php echo $row['price'];?></strong> $</p>
        <p>Current bid:<strong> <?php 
						  $sql2="select * from tb_sale where goodid='$eaid' "; //查询数据
	$rs2=mysqli_query($link,$sql2);//执行sql语句
 	 $num2=mysqli_num_rows($rs2); //统计查询多少数据
	$row2=mysqli_fetch_array($rs2);
	if($num2==0){echo "No bids";}else{echo $row2['goodprice'].'$'; }
		?></strong> </p>
      <p>Minimum markup:<strong> <?php echo $row['lowprice'];?></strong>$ </p>
      
       <form id="form1" name="form1" method="post" action="addcar.php">
          <input type="hidden" name="id" value="<?php echo $row['eaid'];?>">
          <input type="hidden" name="lowprice" value="<?php echo $row['lowprice'];?>">
          <input type="hidden" name="oneprice" value="<?php echo $row['oneprice'];?>">
          <input type="hidden" name="price" value="<?php echo $row['price'];?>">
			<p>Bid price:
            <input name="buynum" class="buynum" type="text" width="50" value="<?php echo $row['lowprice'];?>">
            $</p>
            <input type="submit" style=" background:#f60; margin-top:20px; color:#fff; width:180px; height:40px; border:0px;  " value="Bid">
          </form>
     
      </div>
    
     
        
      <div class="jdrgtcon">
      <div class="selected"><h3>Product details</h3></div>
       <div class="jctips">
       <?php echo $row['jianjie'];?>
      </div>
      <Br />
        <?php echo $row['introduction'];?> </div>
 
    </div>
    <?php    
	}	
	?>
    </ul>
  </div>
  <div class="clearfloat"></div>
  <div class="footer">
    <p>MaXinyu </p>
  </div>
</div>
</body>
</html>
