<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
    </head>

    <body>
        <?php 
            echo "<pre>";
            print_r($_POST);
            
            $result = 0;
            if(!empty($_POST['number1']) && !empty($_POST['number2']) && !empty($_POST['operator']) ) {

                $num1= $_POST['number1'];
                $num2 = $_POST['number2'];
                $operator = $_POST['operator'];

                if ($operator == '+') {
                    $result = $num1 + $num2;
                }
                elseif ($operator == '-') {
                    $result = $num1 - $num2;
                }
                else {
                    $result = 0;
                }

            }
            
            echo "</pre>";
        ?>
        <div class="container">
            <form action="" method="POST">
                <h2> Result: <?php echo $result ?> </h2>
                <div>
                    <label>Number One:</label>
                    <input type="number" name="number1" />
                </div>
                <div>
                    <label>Number Two:</label>
                    <input type="number" name="number2" />
                </div>
                <div>
                    <select name="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </body>
</html>