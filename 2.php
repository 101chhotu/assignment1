<html>
<head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
         <style>
         body
        {
            background:linear-gradient(white,pink);
        }
        </style>
    </head>
         
<ul class="nav bg-dark text-white">
                <li><a href="1.php" class="btn p-3 text-white font-weight-italic">Q1</a></li>
                <li><a href="2.php" class="btn p-3 text-white font-weight-italic">Q2</a></li>
                <li><a href="3.php" class="btn p-3 text-white font-weight-italic">Q3</a></li>
                <li><a href="4.php" class="btn p-3 text-white font-weight-italic">Q4</a></li>
                <li><a href="5.php" class="btn p-3 text-white font-weight-italic">Q5</a></li>
                <li><a href="6.php" class="btn p-3 text-white font-weight-italic">Q6</a></li>
                <li><a href="7.php" class="btn p-3 text-white font-weight-italic">Q7</a></li>
                <li><a href="8.php" class="btn p-3 text-white font-weight-italic">Q8</a></li>
                <li><a href="9.php" class="btn p-3 text-white font-weight-italic">Q9</a></li>
                <li><a href="10.php" class="btn p-3 text-white font-weight-italic">Q10</a></li>
                <li><a href="11.php" class="btn p-3 text-white font-weight-italic">Q11</a></li>
                <li><a href="12.php" class="btn p-3 text-white font-weight-italic">Q12</a></li>
            </ul>
             <div class="bg-dark text-white p-4 fixed-bottom text-center"><strong>PHP ASSIGNMENT-1 BY RAVALIYA__</strong></div>
    <body>
            <div class="container bg-dark text-white w-50 mt-4">
              <div><h1 class="border-bottom">palindrome</h1></div>
                <form method="POST">
                        <div class="row">
                             <div class="col-12 p-1">
                                    <input type="number" name="num" placeholder="enter number" class="form-control" required/>
                               </div>
                                <div class="col-12 p-1">
                                    <input type="submit" name="btn" value="check" class="btn bg-danger text-dark">
                                 </div>
                            </div>
                </form>
            </div>
    </body>
</html>
<?php

if(isset($_POST['num']))
{
    if(!EMPTY($_POST['num']))
    {
        $num=$_POST['num'];
        $reverse=strrev($num);
        if($num==$reverse)
        {
            echo "the number $num is palindrome!!";
        }
        else
        {
            echo "the number $num is not palindrome!!!";
        }
    }
}
?> 