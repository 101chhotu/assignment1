<html>
<head>
<body>
<div class="container">
<form method="POST">
<div>
<lable>enter number:</lable>
</div>
<div class="row">
<div class="col-6">
<input type="text" name="num" placeholder="enter number here" autocomplete="off">
</div>
<div class="col-6">
    <input type="submit" name="btn" value="submit">
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
		if($num%2==0)
		{
			echo "$num is even number!! ";
		}
        else
        {
            echo "$num is odd number!!";
        }
	}
}
else{
	echo "no number has been entered !!!";
}	
?>
</body>
</head>
</html>