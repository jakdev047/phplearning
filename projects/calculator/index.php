<?php 
    include('../../modules/class.php');
    echo "<pre>";
    
    //  initialize data
    $calObj = new Calculator();
    $result = 0;
    $num1=0;
    $num2=0;
    $operator = "+";

    // intialize data check
    if(isset($_POST['number1'])) {
        $num1 = $_POST['number1'];
    }

    if(isset($_POST['number2'])) {
        $num2 = $_POST['number2'];
    }

    if(isset($_POST['operator'])) {
        $operator = $_POST['operator'];
    }
    
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
                    <input type="number" name="number1" value="<?php $num1 ?>" />
                </div>
                <div>
                    <label>Number Two:</label>
                    <input type="number" name="number2" value="<?php $num2 ?>" />
                </div>
                <div>
                    <select name="operator">
                        <option <?php $operator  == '+' ? 'selected' : '' ?> value="+">+</option>
                        <option <?php $operator  == '-' ? 'selected' : '' ?> value="-">-</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </body>
</html>