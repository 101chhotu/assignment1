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
              <div class="bg-white text-dark p-4 fixed-bottom text-center"><strong>PHP ASSIGNMENT-1 BY RAVALIYA__</strong></div>
    <form method="POST">
    <div class="container bg-info text-dark w-50 mt-4">
        <div><h1>prime number</h1></div>
        <div class="row p-1">
            <div class="col-12 p-1">
                <input type="number" name="num" class="form-control" placeholder="enter number" required/>
            </div>
        </div>
        <div class="row p-1">
            <div class="col-12 p-1">
                <button type="submit" name="btn" class="btn bg-danger text-white"  >submit</button>
                <a href="main.php">back</a>
            </div>
        </div>
    </div>
</form>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
$num=$_POST['num'];
$count=0;
for($i=1; $i<=$num; $i++)
{
if(($num % $i)==0)
{
$count++;
}
}
if($count<3)
{
echo "<div class='bg-dark text-white text-center'>$num is a prime number</div>";
}
else{
echo "<div class='bg-dark text-white text-center'>$num is not a prime number</div>";

}
}
?>