<!doctype html>
<html>
<head>
<title>bukka upload</title>
</head>
<body>

<div class="row" style="text-align:center;">
                	
                               <form action="upload.php" method="POST"><br><br>
       
                                  restaurant<br><input  type="text" name="buk"><br>
                                   Meals<br><input  type="text" name="mea"><br>
                                   Address<br><input  type="text" name="add"><br>
								   Website<br><input  type="text" name="web"><br>
                                   Keyword<br><input  type="text" name="kwrd"><br>
                                   
                                  <p> <input type="submit" name="send" value="add">
         
                             </form>
	
	  
               
</div>



<?php
if (isset($_POST['send']))
{
$buk=$_POST['buk'];
$mea=$_POST['mea'];
$add=$_POST['add'];
$web=$_POST['web'];
$kwrd=$_POST['kwrd'];

if($buk=='')
	
{
echo"<script>alert('PLS enter your productname')</script>";
exit();	
}

else
{
include("include/dbconnect.php");
$ff="insert into 9jabukatbl(Restaurant,Meals,Address,Website,Keyword)values('$buk','$mea','$add','$web','$kwrd')";
if($result=$conn->query($ff))
{
echo"<script>alert('category added successfully')</script>";	
}	

else
{echo"<script>alert('not successfull')</script>";}
	
}
	
}

?> 


















</body>
</html>