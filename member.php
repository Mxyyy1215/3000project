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
<h3>my ACOUNT</h3>

  <table border=1px cellpadding="0" cellspacing="0" width="670" style="margin:0 auto;">

<tr><td>USERNAME</td> <td>PASSWORD</td>  <td>TEL</td>  <td>EMAIL</td><td>MODIFY</td>  </tr>


 <?php
 if ($_GET['action']=='del'){

  $sql="delete from users where id = ".$_GET['id'];
  $res=mysqli_query($conn,$sql);
if($res){
  echo "<script type='text/javascript'>alert('SUCESS');window.location.href='admin.php';</script>";
}
}

	 $sql="select * from users where yhm like '$yhm' order by id desc";
$result=@mysqli_query($conn,$sql) or exit ("浏览留言失败");
while($row=mysqli_fetch_array($result)){

	?>
	<tr><td><?php echo $row['yhm'];?></td><td><?php echo $row['mm'];?></td><td><?php echo $row['tel'];?></td><td><?php echo $row['email'];?></td><td><a href="member_modify.php?id=<?php echo $row[id];?>">modify</a></td></tr>
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