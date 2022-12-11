<html>
<body>
    <div class="container">
<form method="POST">
    <lable>palindrome</lable>
    <div class="row">
        <div class="col-6">
    <input type="number" name="num" placeholder="enter number"required/>
</div>
<div class="col-6">
<input type="submit" name="btn" value="check">
</div>
</div>
</form>
</div>
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
</body>
</html> 