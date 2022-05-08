 <?php 
 include 'top.php';


?> 	

<div class="ny-main">
<div class="ny-left">

 <?php 
 include 'm_left.php';
 if(isset($_GET['id'])){
    $sql= "select * from users where id = ".$_GET['id'];
    $check=@mysqli_query($conn,$sql) or exit (mysqli_error());
    $_rows=mysqli_fetch_array($check);
    
    $title=$_rows['title'];
 }
 else{

 }



?> 	


</div>
<div class="ny-right">
<div class="ny-zjhz">

 <br> <br>

   

<h3>modify</h3>


<?php 
if ($_GET['action']=='edit'){

		


	$sql1="update users  set mm='{$_POST['password']}',tel='{$_POST['tel']}',email='{$_POST['email']}' where id = ".$_GET['id'];
	
    $result1=@mysqli_query($conn,$sql1) or die (mysqli_error($result1));
  if($result1){
    echo "<script>alert('sucess');history.go(-1);location.reload();</script>";
   }
}





 ?>

    <form action="?action=edit&id=<?php echo $_GET['id'];?>" method="post"  >
    <table border=1px cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td height="28">username：</td>
                    <td><?php echo $_rows['yhm'];?></td>
                </tr>
          
                    <tr>
                    <td height="28">password：</td>
                    <td><input type="text" name="password" value="<?php echo $_rows['mm'];?>" /></td>
                </tr>
                
                    <tr>
                    <td height="28">tel：</td>
                    <td><input type="text" name="tel" value="<?php echo $_rows['tel'];?>" /></td>
                </tr>
                
         <tr>
                    <td height="25">email：</td>
                    <td> <input type="text" name="email" value="<?php echo $_rows['email'];?>" /></td>
                </tr>
			
              

               
              
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="submit" value="modify" />
                    </td>
                </tr>
 
        </form>

</table>

</div>

</div>

<div class="clear"></div>
</div> <?php 
 include 'foot.php';
 
?> 	