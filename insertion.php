<?php

 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'book');
 $title=$_POST['title'];
 $price=$_POST['price'];
 $author=$_POST['author'];
 $q="insert into book(title,price,author) values('$title','$price','$author')";
  $status=mysqli_query($con,$q);
  mysqli_close($con);



 ?>
 
 <html>
     <head>
         <title>INSERTION</title>
</head>
<body>
<p><?php

    if($status==1){
          echo "Entry inserted succesfully";
    }
    else{
         echo "Failed to insert data ";
    }
?></p>
<p>Want to insert more data <a href="insertform.php">Click Here</a></p>
</body>
 </html>