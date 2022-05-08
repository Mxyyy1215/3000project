
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

  <h3>BID PRODUCT</h3>



<table border=1px cellpadding="0" cellspacing="0" width="96%" style="margin:10px 0 0 10px;" >   

<tr><td>NAME</td><td>PICTURE</td><td>PRICE</td><td>Start TIME</td><td>End TIME</td><td>LOCATION</td> <td>BREIF</td><td>state</td>     <td colspan="3">Oprate</td></tr>



 <?php
 if ($_GET['action']=='del'){

  $sql="delete from product where id = ".$_GET['id'];
  $res=mysqli_query($conn,$sql);
if($res){
  echo "<script type='text/javascript'>alert('sucess');window.location.href='admin_product.php';</script>";
}
}

 if ($_GET['action']=='beg'){

  $sql="update product set state ='begin' where id = ".$_GET['id'];
  $res=mysqli_query($conn,$sql);
if($res){
  echo "<script type='text/javascript'>alert('sucess');window.location.href='admin_product.php';</script>";
}
}




	 $sql="select * from  product  order by id desc";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){

	?>
	<tr><td><?php echo $row['title'];?></td><td><img src="../upload/<?php echo $row['pic'];?>" width="100"></td><td><?php echo $row['price'];?></td><td><?php echo $row['btime'];?></td><td><?php echo $row['etime'];?></td><td><?php echo $row['location'];?></td>
    
    <td><?php echo $row['content'];?></td><td><?php echo $row['state'];?></td><td><a href="product_modify.php?id=<?php echo $row['id'];?>">modify</a></td><td><a href="?action=beg&id=<?php echo $row['id'];?>">BEGIN</a></td><td><a href="?action=del&id=<?php echo $row['id'];?>">delete</a></td></tr>
	<?php
}
?>
</table>
 
  
  <br>  <br>

     <?php 

 

 
 if ($_GET['action']=='add'){
			
move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);
  $sql="insert into product(title,price,location,btime,etime,content,pic) values ('{$_POST['title']}','{$_POST['price']}','{$_POST['location']}','{$_POST['btime']}','{$_POST['etime']}','{$_POST['content']}','{$_FILES['file']['name']}')";
  $result=@mysqli_query($conn,$sql) or die (mysqli_error($conn));
  if($result){
    echo "<script>alert('sucess');window.location.href='admin_product.php';</script>";
   }
}



 
?> 	
 

 <table border=1px cellpadding="0" cellspacing="0" width="90%" style="margin:0 0 0 10px;">

 <form action="?action=add" method="post" enctype="multipart/form-data" >
   
                <tr>
                    <td height="28">NAME：</td>
                    <td><input type="text" name="title" size="30" /></td>
                </tr>
                
          
                
     
       
               <tr>
                    <td height="25">start time：</td>
                    <td> <input type="time" name="btime"  /></td>
                </tr>
                
                
               <tr>
                    <td height="25">end time：</td>
                    <td> <input type="time" name="etime"  /></td>
                </tr>
                <tr>
                    <td height="25">Price：</td>
                    <td> <input type="text" name="price"  /></td>
                </tr>
                     <tr>
                    <td height="25">location：</td>
                    <td> <input type="text" name="location"  /></td>
                </tr>
				<tr>
                    <td height="25">PICTURE：</td>
                    <td><input type="file" name="file" id="file" /> </td>
                </tr>	
              
                </tr>	

				<tr>
				 <td height="25">BRIEF：</td>
				<td>
<textarea name="content" rows="5" cols="30"></textarea>
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
