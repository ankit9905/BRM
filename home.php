<html>
     <head>
        <title>
            Home
        </title>
        <style>
            body{
                background: #031321;
            }
            h1{ 
                /* position:relative;
                left:32%; */
                color: #2196f3;
                font-size:40px;
                text-align:center;
            
                animation: myfirst 3s ease-in infinite alternate;
            }
             /* @keyframes myfirst {
             0%   {color:purple;font-size:45px;text-shadow: 8px 8px 12px #000000; }
             25%  {color:2196f3;font-size:50px;text-shadow: 10px 15px 8px #6585ff; }
             50%  {color:blue;font-size:55px; text-shadow: 15px 25px 7px #6585ff;}
             75%  {color:green; font-size:60px;text-shadow: 25px 30px 12px #6585ff;}
             100% {color:red;font-size:65px ;text-shadow: 35px 35px 13px #6585ff;} */
/* } */
            a{
              position: relative;
              margin-top:60px;
              left:38%;
              display: inline-block;
              padding: 15px 30px;
              color: #2196f3;
              text-transform: uppercase;
              letter-spacing: 4px;
              text-decoration: none;
              font-size: 24px;
              overflow: hidden;
              transition: 0.2s;
            }
         p{
             padding:5px;
         }
         a:hover{
          color: #255784;
          /* background: #2196f3; */
          border-radius:20px;
          box-shadow: 0 0 10px  #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
          /* hoffset voffset blur spread color */
           /* transition-delay: 1s; */
         }
        </style>
     </head>

 <body>
     <h1>BOOK RECORD MANAGEMENT</h1>
<p><a href="insertform.php" target="blank">Insert</a></p>
<p><a href="view.php" target="blank">Show book record</a></p>
<p><a href="updateform.php" target="blank">Update</a></p>
<p><a href="delete.php" target="blank" >Delete</a></p>
</body>


