
<?php 

include 'top.php';
	?>


<div class="ny-right">



     <div id="twjs">


<style type="text/css">
td { padding:10px;}
</style>

  <h3>News Manage</h3>
  <br>
  
  <?php 

 
 if ($_GET['action']=='add'){

		


  $sql="insert into reports (title,uname,content) values ('{$_POST['title']}','{$_POST['uname']}','{$_POST['content']}')";
  $result=@mysqli_query($conn,$sql) or die (mysqli_error($conn));
  if($result){
    echo "<script>alert('sucess');window.location.href='admin_news.php';</script>";
   }
}



 
?> 	
 
  <table border=1px cellpadding="0" cellspacing="0" width="870" style="margin:0 auto;">

<tr><td>title</td>   <td>writer</td><td>content</td><td>time</td> <td>modify</td> <td>delete</td></tr>


 <?php
 if ($_GET['action']=='del'){

  $sql="delete from reports where id = ".$_GET['id'];
  $res=mysqli_query($conn,$sql);
if($res){
  echo "<script type='text/javascript'>alert('sucess');window.location.href='admin_news.php';</script>";
}
}


	 $sql="select * from reports ";
$result=@mysqli_query($conn,$sql) or exit ("浏览留言失败");
while($row=mysqli_fetch_array($result)){

	?>
	<tr><td><?php echo $row['title'];?></td><td><?php echo $row['uname'];?></td><td><?php echo $row['content'];?></td><td><?php echo $row['time'];?></td><td><a href="news_modify.php?id=<?php echo $row['id'];?>">modify</a></td><td><a href="?action=del&id=<?php echo $row[id];?>">delete</a></td></tr>
	<?php
}
?>


</table>

 <form action="?action=add" method="post" enctype="multipart/form-data" style="padding:40px 0 0 100px;">
    <table border=1px cellpadding="0" cellspacing="0" width="90%">
                <tr>
                    <td height="28">title：</td>
                    <td><input type="text" name="title" size="60" /></td>
                </tr>
         <tr>
                    <td height="25">username：</td>
                    <td> <input type="text" name="uname"  /></td>
                </tr>
              
			
              
                </tr>	

				<tr>
				 <td height="25">content：</td>
				<td>
<textarea name="content" style="width:400px;height:200px;"></textarea>
  </td>
			<tr>
               
              
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="submit" value="submit" />
                    </td>
                </tr>
 
        </form>

</table>

    
  </div>
</div>

<div class="clear"></div>
</div>


<?php 
include 'foot.php';

?>
