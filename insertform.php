
<html>
    <head>
        <title>
            Insert 
        </title>
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
            form{
                margin: 20px;
                font-size:25px;
                text-align:center;
                color: #2196f3;
            }
            label{
                margin: 20px;
            }
            #title{
            margin-left: 21px;
            }
            #price{
                margin-left: 18px;
            }
        input{
        margin-top: 20px;
        }
        input[type="submit"]{
            background:#00ef65;
            padding:5px 12px;
        }
        </style>
    </head>
    <body>
        <h1> BOOK RECORD MANAGEMENT</h1>
        <form action="insertion.php" method="POST">
            <label for="title"> Title: </label>
            <input type="text" name="title" placeholder="book title" required id="title"><br>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" required><br>
            <label for="author">Author:</label>
            <input type="text" name="author" id="author"><br>
            
            <input type="submit" >

        </form>
    </body>
</html>