<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Biding</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
 
<body >
<div class="top"> 

	<div class="head">
	<form id="searchform"  name="search" method="post" action="search.php">

     
     
<input type="text" class="ss"  size="30" name="ss" />

 <input type="submit" value="search" class="an">
</form>
	</div>

<div class="nav">
 <ul>
	
				<ul>
			   <li><a href="index.php">Home</a></li>

				   <li><a href="news.php">News</a></li>
				           <li><a href="find.php">Bid Products</a></li>
				  
				
			
			
			    <?php 
 
include 'connect.php';
 
?>
				   
				   <?php
				                   $yhm=$_SESSION["uname"];
										if(isset($_SESSION["uname"]))
										{
											
											
											        
																			
										echo ' <li class=last><a href="login_out.php">'.$_SESSION["uname"].'  Exit</a><li class=last><a href=member.php>member</a></li>';
												
														
										
											

											}
											
									
										
											
										else{

																				echo "
										<li class=last><a href=user_login.php>login</a></li>" ;
										
                                             

			
										}
										
						?>    
			
 </ul>
</div>
</div>

                        
             
		
 