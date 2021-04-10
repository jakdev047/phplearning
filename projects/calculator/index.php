<?php 
    include('../../modules/class.php');
    echo "<pre>";
    
    $calObj = new Calculator();
    $result = 0;
    
    if(isset($_POST['operator'])) {
        $calObj->setData($_POST);
        $result = $calObj->calculate();

    }
    
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
    </head>

    <body>
        <div class="container">
            <form action="" method="POST">
                <h2> Result: <?php echo $result ?> </h2>
                <div>
                    <label>Number One:</label>
                    <input type="number" name="number1" value="<?php $_POST['number1'] ?>" />
                </div>
                <div>
                    <label>Number Two:</label>
                    <input type="number" name="number2" value="<?php $_POST['number2']?>" />
                </div>
                <div>
                    <select name="operator">
                        <option <?php $_POST['operator'] == '+' ? 'selected' : '' ?> value="+">+</option>
                        <option <?php $_POST['operator'] == '-' ? 'selected' : '' ?> value="-">-</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </body>
</html>