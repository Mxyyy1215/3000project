 <?php 
 include 'top.php';
 if (empty($_SESSION["uname"])){
	echo "<script type='text/javascript'>alert('您未登录，请先登录');window.location.href='user_login.php';</script>";
	exit;
}
?> 	

<div class="ny-main">
<div class="ny-left">

 <?php 
 include 'm_left.php';
 
?> 	


</div>
<div class="ny-right">
<div class="ny-zjhz">
<h3>MY BIDDING</h3>

  <table border=1px cellpadding="0" cellspacing="0" width="670" style="margin:0 auto;">

<tr><td>NAME</td><td>PICTURE</td><td>PRICE</td>  <td>TITME</td>  </tr>


 <?php



	 $sql="select * from  dingdan where uname like '$yhm'  order by id desc";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){

	?>
	<tr><td><?php echo $row['title'];?></td><td><img src="upload/<?php echo $row['pic'];?>" width="100px"></td><td><?php echo $row['price'];?></td><td><?php echo $row['time'];?></td></tr>
	<?php
}
?>



</table>

</div>

</div>

<div class="clear"></div>
</div> <?php 
 include 'foot.php';
 
?> 	