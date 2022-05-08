
<?php 
include 'top.php';
 	?>
<div class="ny-right">



     <div id="twjs">


<style type="text/css">
td {padding:10px;}
</style>

<style type="text/css">
td {font-size:14px;padding:10px;}
h3{ font-size:16px;}
</style>

  <h3>BID Statistics</h3>



<table border=1px cellpadding="0" cellspacing="0" width="96%" style="margin:10px 0 0 10px;" >   

<tr><td>NAME</td><td>PICTURE</td><td>Max price</td><td>Username</td><td>TIME</td><td>LOCATION</td>    </tr>



 <?php




	 $sql="select * from  product where state like 'begin'  order by id desc";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){
	
	$title=$row['title'];
	
	$sql1= "select * from dingdan where title like '$title' order by id desc limit 0,1";
	$check1=@mysqli_query($conn,$sql1) or exit (mysqli_error());
	$_rows1=mysqli_fetch_array($check1);
	$price=$_rows1['price'];
	$uname=$_rows1['uname'];
		$time=$_rows1['time'];


	?>
	<tr><td><?php echo $row['title'];?></td><td><img src="../upload/<?php echo $row['pic'];?>" width="100"></td><td><?php echo $price;?></td><td><?php echo $uname;?></td><td><?php echo $time;?></td><td><?php echo $row['location'];?></td></tr>
	<?php
}
?>
</table>
 
  
  <br>  <br>

  
    </div>

   </div>
     
 
    <hr/>
   
        
<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12">
  <p>版权所有 翻版必究</p>      
</div>
</div>

<!--end-Footer-part-->

</body>
</html>
