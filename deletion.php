<?php 
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++){
    
     
     $index="b".$j;
     if(isset($_POST[$index])){
      $b_id[$i]=$_POST[$index];
     }
     else{
         $i--;
     }
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'book');
for($k=1;$k<=$size;$k++){
$q="delete from book where book_id=".$b_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
?>

<html>
     <head>
         <title>DELETION</title>
</head>
<body>
<p><?php

    
          echo $size." deleted succesfully";
    
    
?></p>
<p>Want to delete more data <a href="delete.php">Click Here</a></p>
</body>
 </html>