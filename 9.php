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
        <body>
         <div class="bg-dark text-white p-4 fixed-bottom text-center"><strong>PHP ASSIGNMENT-1 BY RAVALIYA__</strong></div>
        
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
            <div class="container text-white bg-dark w-50 mt-4">
            <div><h1 class="border-bottom">pattern</h1></div>
                <form method="POST">
                    <div>
                        <lable>enter number:</lable>
                    </div>
                        <div class="row p-1">
                            <div class="col-12 p-1">
                                <input type="text" name="num" placeholder="enter number here" class="form-control" autocomplete="off">
                            </div>
                        <div class="col-12 p-1">
                            <input type="submit" name="btn" class="btn bg-danger text-dark" value="submit">
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
        echo "<h2>pattern of:$num</h2>";
        for($i=0;$i<=$num;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo "*";
            }
            echo "</br>";
        }
    }
}
else{
    echo "no number has been enter!!!";
}
?>