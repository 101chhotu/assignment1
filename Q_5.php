<html>
<head>
    <title>reverse string</title>
</head>
<body>
<div class="container">
    <form method="POST">
        <div>
            <lable>enter string:</lable>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="text" name="str" placeholder="enter string:" autocomplete="off">
            </div>
                <div class="col-6">
                        <input type="submit" name="btn" value="reverse">
                </div>
        </div>
    </form>
</div>
<?php
if(isset($_POST['str']))
{
    if(!EMPTY($_POST['str']))
    {
        $str=$_POST['str'];
        echo "reverse string of $str:::".strrev($str);
    }
}
?>
</body>
</html>