<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
    </head>
    <style>
        body
        {
            background:linear-gradient(white,pink);
        }
    </style>
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
    <div class="container w-50 bg-dark text-white mt-4">
    <form method="POST">
        <div class="row p-1">
            <div><h1>sum of two digits</h1></div>
            <div class="col-3 p-1">
                enter number:
            </div>
            <div class="col-9 p-1">
                <input type="number" name="num" class="form-control" requiered/>
            </div>
        </div>
        <div class="row p-1">
            <div class="col-12 p-1">
                <button type="submit" name="submit" class="btn bg-danger text-dark">submit</button>
            </div>
        </div>
</form>
    </div>
    </body>
    </html>
<?php
if(isset($_POST['submit']))
{
    $a=($_POST['num']);
    $num=$_POST['num'];
    $sum=0;
	while($a!=0)
    {
        $rem=$a%10;
        $a=$a/10;
        $sum=$sum+$rem;
    }
    echo "sum of ".$num." is ".$sum;
}
?>