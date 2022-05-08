<?php 



if ($_GET['action']=='login'){
	 $sql = "select * from users where yhm='{$_POST['username']}' && mm='{$_POST['password']}'";
	 $check=@mysqli_query($conn,$sql) or exit (mysqli_error());
	if ($rows=!mysqli_fetch_array($check)){
 		echo "<script type='text/javascript'>alert('account error');history.back();</script>";
 	}
  	else{
		
	
$_SESSION["role"]=$_POST['role'];
    $_SESSION["uname"]=$_POST['username'];

    echo "<script type='text/javascript'>alert('sucess');window.location.href='index.php';</script>"; 
    


       
  	}
}
?>

<h3 style=" text-align:center; color:#000; margin-bottom:20px;">Login</h3>
 
  
 <form id="form2" name="form1" method="post" action="?action=login">
   <table width="300" border="0">
   
     <tr>
       <td height="29">Username </td>
       <td><input name="username" type="text" /></td>
     </tr>
      
    
     <tr>
       <td height="30">password</td>
       <td><input name="password" type="password" /></td>
     </tr>
     <tr>
       <td height="35">&nbsp;</td>
       <td><input type="submit" value="login"/>
       <a href="reg.php"><input type="button" value="register"/></a></td>
     </tr>
   </table>
 </form>