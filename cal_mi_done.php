
<!DOCTYPE html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP Calculator</h1>
    <form method="post">
    <label for="">First Number</label>
    <input type="number" name="fname"> <br><br>
    <label for="">Second Number</label>
    <input type="number" name="sname"><br>
    <br>
    <input type="submit" name="add" value="+">
    <input type="submit" name="substract" value="-">
    <input type="submit" name="multiple" value="X">
    <input type="submit" name="divide" value="/">
    <input type="submit" name="clear" value="C">
    </form>

    <h1>Result</h1>
        <?php 
        error_reporting(0);
        
        $a=$_POST['fname'];
        $b=$_POST['sname'];

        if(isset($_POST['add'])){
            echo $a+$b;
        }
        elseif(isset($_POST['substract'])){
            echo $a-$b;
        }
        elseif(isset($_POST['multiple'])){
            echo $a*$b;
        }
        elseif(isset($_POST['divide']))
        {
            echo $a/$b;
        }elseif(isset($_POST['clear'])){
            echo 0;
        }
        
        ?>
</body>

