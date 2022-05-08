 <?php 
 include 'top.php';
 
?>
	
	<div class="main">
	<?php 
 include 'left.php';
 
?> 
	

	<div class="hzms">
	<h3>信息交流</h3>
	

<br>
<style type="text/css">
td {font-size:14px;padding:10px;}
h3{ font-size:16px;}
</style>

<table border=1px cellpadding="0" cellspacing="0" width="670" style="margin:0 auto;">   

<tr><td>标题</td>   <td>留言者</td>  <td>留言内容</td><td>回复内容</td>  </tr>



 <?php
 if ($_GET['action']=='del'){

  $sql="delete from message where id = ".$_GET['id'];
  $res=mysqli_query($conn,$sql);
if($res){
  echo "<script type='text/javascript'>alert('删除成功');window.location.href='admin_message.php';</script>";
}
}

	 $sql="select * from message limit 0,5 ";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){

	?>
	<tr><td><?php echo $row['title'];?></td><td><?php echo $row['uname'];?></td><td><?php echo $row['content'];?></td><td><?php echo $row['replay'];?></td></tr>
	<?php
}
?>
</table>
 
<br>

<?php 
if ($_GET['action']=='add'){



	$sql="insert into message (title,uname,content) values ('{$_POST['title']}','{$_POST['uname']}','{$_POST['content']}')";
	
  $result=@mysqli_query($conn,$sql) or die (mysqli_error());
  if($result){
    echo "<script>alert('添加成功');window.location.href='message.php';</script>";
   }
}





 ?>
    <table border=1px cellpadding="0" cellspacing="0" width="100%">
    <form action="?action=add" method="post"  >

                <tr>
                    <td height="28">标题：</td>
                    <td><input type="text" name="title" /></td>
                </tr>
         <tr>
                    <td height="25">作者：</td>
                    <td> <input type="text" name="uname" value="<?Php echo $_SESSION["uname"];?>" /></td>
                </tr>
	
     

				<tr>
				 <td height="25">内容：</td>
				<td>
<textarea name="content" style="width:400px;height:200px;"></textarea>
  </td>
			<tr>
               
              
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="submit" value="提交" />
                    </td>
                </tr>
 
        </form>

</table>

	</div>
	


<div class="clear"></div>
</div>
<?php 
 include 'foot.php';
 
?>
