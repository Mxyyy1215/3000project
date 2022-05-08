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
 if(isset($_SESSION['yonghu'])){ echo  "<p>Welcome user:".$_SESSION['yonghu']."Log in,  <a href='mydingdan.php'>My Order</a>  <a href='tuichu.php'>Exit system</a></p>"; }
 
	?>
  
    <a href='seller/index.php'>Merchants landing</a>
   <a href='seller/res.php'>Business registration</a>
    </div>    </div>
<div class="header">
  <div class="headmain">
   
    <dl>
      <dt><img src="images/logo.png"  /></dt>
      <dd> <a  class="cur" href="index.php">homepage</a> <a href="list.php">Commodity information</a> <a href="note.php">News</a>  <a href="login.php">User login</a> <a href="res.php">User registration</a> <a href="help.php">Help</a></dd>
    </dl>
  </div>
</div>
<div class="main">
  <div class="titlehote">
    <h3>My order</h3>
    <p>Record of bidding</p>
  </div>
   <div id="content" class="myorder">
    <form action="delalldingdan.php" method="post"  onsubmit="test()">
    <span style="text-align:right; padding-right:10px;"> </span>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td ><table width="100%" cellspacing="1" border="0px">
            <tr>
              <td width="121" height="20" bgcolor="#FFFFFF"><div align="center">Name of commodity</div></td>
              <td width="59" bgcolor="#FFFFFF"><div align="center">Deadline</div></td>
               <td width="87" bgcolor="#FFFFFF"><div align="center">Bid</div></td>
              <td width="141" bgcolor="#FFFFFF"><div align="center">Commodity status</div></td>
             </tr>
            <?php
if(!isset($_SESSION['yonghu'])){
	echo '<script type="text/javascript">alert("please log in first!")</script>';
	echo '<script type="text/javascript">location.href="index.php";</script>';
	exit;
	}
	$rs=mysqli_query($link,"select * from tb_study,tb_saleuser where tb_study.eaid=tb_saleuser.goodid");
	$total=mysqli_num_rows($rs);
	$pagesize=6;
	$numofpage=ceil($total/$pagesize);//获取最大值
	if(isset($_GET['page'])){
		$currentpage=$_GET['page'];
		}else{
			$currentpage=1;
			}
	$start=($currentpage-1)*$pagesize;
	$rs2=mysqli_query($link,"select * from tb_study,tb_saleuser where tb_study.eaid=tb_saleuser.goodid limit $start,$pagesize");
	while($row=mysqli_fetch_array($rs2)){
?>
            <tr>
              <td  bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['EAname'];?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['overtime'];?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['price'];?>元</td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php  if($row['zt']==1){ echo "On the shelf";}else{ echo 'Has been removed';};?></td>
             </tr>
            <?php
	}
	?>
          </table></td>
      </tr>
      
    </table>
    <p style=" text-align:right; margin-right:5px;"> </p>
  </form>
  </div>
  <div class="clearfloat"></div>
  <div class="footer">
    <p>MaXinyu </p>
  </div>
</div>
</body>
</html>
