<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'book');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);

?>
<html>
<head>
    <title>
        UPDATE FORM</title>
        <style>
             body{
                background: #031321;
            }
            h1{ 
                
                color: #2196f3;
                font-size:40px;
                text-align:center;
                margin-bottom:60px;
            }
            table{
                position:relative;
                top:38%;
                left:28%;
                text-align:center;
                margin: 10px;
                border:solid purple;
                color:#2196f3;
            }
           #x td{
                margin: 10px;
                padding:20px;
                background:linear-gradient(0deg,pink,transparent);
            }
            a{
                text-decoration: none;
            }
            
                input[type="submit"]{
                 width:90px;
                 height:30px;
                 background:linear-gradient(12deg,black,white);
                 box-shadow: -2px 6px 13px 2px #457856;
                }
                input:focus{
                    box-shadow:0 0 15px 3px #5468ff;
                }
            
            </style>
</head>
<body>
    <h1>Book Record Management</h1>
    <form action="updation.php" method="POST">
    <table id="x">
        <th>Book Id</th>
        <th>Title</th>
        <th>Price</th>
        <th>Author</th>
        
        <?php for($i=0;$i<$num;$i++){
             $row=mysqli_fetch_array($result);
        ?>
        <tr>
        <td> <?php echo $row['book_id'];?> 
             <input  type="hidden" value="<?php echo $row['book_id'];?> " name="book_id<?php echo $i+1;?>" >              </td>
         <td> <input type="text" value="<?php echo $row['title'];?>" name="title<?php echo $i+1;?>" >        </td>
         <td> <input type="text" value="<?php echo $row['price'];?>" name="price<?php echo $i+1;?>" >        </td>
         <td> <input type="text" value="<?php echo $row['author'];?>" name="author<?php echo $i+1;?>" >        </td>
        
        </tr>
        <?php } ?>
        <tr >
            <td colspan="5">
        <input type="submit" value="Update" ></td></tr>

    </table>
        </form>
</body>

</html>
