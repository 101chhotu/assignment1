<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
    </head>
    <style>
        body
        {
            background:linear-gradient(white,pink)
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
  
   <div class="bg-dark text-white p-4 fixed-bottom text-center"><strong>PHP ASSIGNMENT-1 BY RAVALIYA__</strong></div>
        <form method="POST">
        <div class="container w-50 mt-4 text-white bg-dark">
            <div class="border-bottom"><h1 class="text-center">Armstrong_Number</h1></div>
            <div class="row p-1">
                <div class="col-12 p-1">
    <input type="number" class="form-control" name="num" placeholder="enter number" reqired/>
</div>
</div>
<div class="row p-1">
    <div class="col-12 p-1">
    <button type="submit" class="btn bg-danger text-center" name="btn">submit</button>
</div>
</div>
</form>
</body>
</html>
<?php  
    if(isset($_POST['btn']))
    {
        $num=$_POST['num'];
        $sum=0;
        $a=$num;
        while($a!=0)
        {
            $rem=$a%10;
            $sum=$sum+$rem*$rem*$rem;
            $a=$a/10;
        }
        if($num==$sum)
        {
            echo "<div class='bg-white text-white'>armstrong number!!</div>";
        }
        else{
            echo "<div class='bg-white text-white'>not an armstrong number!!!</div>";
        }
    
    }
?>