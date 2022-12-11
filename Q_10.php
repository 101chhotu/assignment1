<html>
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
    </body>
</html>
<?php
if(isset($_POST['num']))
{
    if(!EMPTY($_POST['num']))
    {
        $num=$_POST['num'];
        echo "<h2>pattern of:$num</h2>";
        for($i=1;$i<=$num;$i++)
        {
            for($j=$i;$j>=1;$j--)
            {
                echo $j%2;
            }
            echo "</br>";
        }
    }
}
else{
    echo "no number has been enter!!!";
}
?>
