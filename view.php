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
        Show database</title>
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
                top:5%;
                left:36%;
                text-align:center;
                margin: 10px;
                border:solid purple;
                color:#2196f3;
            }
           #x td{
                margin: 10px;
                padding:20px;
                background:linear-gradient(0deg,#2196f3,transparent,green);
                color:#dd65ff;
                font-size:20px;
            }
            a{
                text-decoration: none;
            }
            button{
            background-color:#a138cf;
            padding:6px 12px;
            outline:none;
            }
            </style>
</head>
<body>
    <h1>Book Record Management</h1>
    <table id="x">
        <th>Book Id</th>
        <th>Title</th>
        <th>Price</th>
        <th>Author</th>
        <?php for($i=0;$i<$num;$i++){
             $row=mysqli_fetch_array($result);
        ?>
        <tr>
         <td> <?php echo $row['book_id'];?>        </td>
         <td>  <?php echo $row['title'];?>          </td>
         <td> <?php echo $row['price'];?>           </td>
         <td>    <?php echo $row['author'];?>        </td>
        </tr>
        <?php } ?>
        <tr><td colspan="2">
        <button><a href="view.php" >REFRESH!</a></button></td>
        <<td colspan="2">
    <button><a href="insertform.php" target="blank">INSERT</a></button>
        </td></tr>
    </table>
    <!-- <button><a href="view.php" >REFRESH!</a></button>
    <button><a href="insertform.php" target="blank">INSERT</a></button> -->
    
</body>

</html>
