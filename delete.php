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
        DELETE</title>
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
                left:34%;
                text-align:center;
                margin: 10px;
                border:solid purple;
                color:#2196f3;
            }
           #x td{
                margin: 10px;
                padding:20px;
                
                color:red;
                background:linear-gradient(0deg,pink,transparent);
            }
            a{
                text-decoration: none;
            }
            
                input[type="submit"]{
                 width:90px;
                 height:30px;
                 background:linear-gradient(12deg,green,yellow);
                 box-shadow: -2px 6px 13px 2px #457856;
                }
                .center
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);

}
input[type="checkbox"]
{
    position: relative;
    width: 70px;
    height: 20px;

    /* remopve this and see the difference */
    -webkit-appearance: none;

    background: linear-gradient(0deg,#333,#000);
    /* border: 20px solid; */
    
    outline: none;
    border-radius: 20px;
    box-shadow: 0 0 0 4px #353535,0 0 0 5px #3e3e3e,
    inset 0 0 10px rgba(0,0,0,1),0 5px 20px rgba(0,0,0,.5),
    inset 0 0 15px rgba(0,0,0,.2);
}

/* input[type='checkbox']:checked:before
{
    content:'';
    display:block;
    width:17px;
    height:16px;
    position:absolute;
    top:1px;
    left:1px;
    background:none #ACACB8;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    opacity:0.5;
} */

input:checked[type="checkbox"]
{
    background: linear-gradient(0deg,#6dd1ff,#20b7ff);
    box-shadow:0 0 0 2px #6dd1ff ,0 0 0 4px #353535,0 0 0 5px #3e3e3e,
    inset 0 0 10px rgba(0,0,0,1),0 5px 20px rgba(0,0,0,.5),
    inset 0 0 15px rgba(0,0,0,.2);
    
}
input[type="checkbox"]:before
{
   content: '';
   position: absolute;
   top: 0;
   left: 0;
   width: 50px;
   height: 20px;
   background: linear-gradient(0deg,#000,#6b6b6b);
   border-radius: 20px;
   /* transform: scale(.98,.96); */
   transition: .5s;
}
input:checked[type="checkbox"]::before
{
     left: 20px;
}

input[type="checkbox"]:after
{
    content: '';
    position: absolute;
    top: calc(50% - 2px);
    left:38px ;
    width: 4px;
    height: 4px; 
    border-radius: 50%;
    background: linear-gradient(0deg,#6b6b6b,#000);
    
    transition: .5s;
}

input:checked[type="checkbox"]::after
{    
    background: #63cdff;
    left: 58px;
    box-shadow: 100px 100px 150px #13b3ff;
} 
            
            </style>
</head>
<body>
    <h1>Book Record Management</h1>
    <form action="deletion.php" method="POST">
    <table id="x">
        <th>Book Id</th>
        <th>Title</th>
        <th>Price</th>
        <th>Author</th>
        <th>Select to Delete</th>
        <?php for($i=0;$i<$num;$i++){
             $row=mysqli_fetch_array($result);
        ?>
        <tr>
         <td> <?php echo $row['book_id'];?>        </td>
         <td>  <?php echo $row['title'];?>          </td>
         <td> <?php echo $row['price'];?>           </td>
         <td>    <?php echo $row['author'];?>        </td>
         <td class="check"> <input type="checkbox" value="<?php echo $row['book_id'] ?>" name="b<?php echo $i+1;?>" ></td>
        </tr>
        <?php } ?>
        <tr >
            <td colspan="5">
        <input type="submit" value="delete" ></td></tr>

    </table>
        </form>
</body>

</html>
