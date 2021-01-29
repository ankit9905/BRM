<?php

$size=sizeof($_POST);
$record=$size/4;

for($i=1;$i<=$record;$i++)
{
    $index4="book_id".$i;
    $bookid[$i]=$_POST[$index4];

   $index1="title".$i;
   $title[$i]=$_POST[$index1];

   $index2="price".$i;
   $price[$i]=$_POST[$index2];

   $index3="author".$i;
   $author[$i]=$_POST[$index3];
}

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'book');

for($i=1;$i<=$record;$i++){
    $q="update book set title='$title[$i]',price='$price[$i]',author='$author[$i]' where book_id='$bookid[$i]'";
    mysqli_query($con,$q);
}
mysqli_close($con);
?>
<html>
<head>
    <title>Update form</title>
</head>
<body>
    <h3> Data updated Succesfully!</h3>
    <p>for more updation <a href="updateform.php">Click Here</a></p>

</body>
</html>
