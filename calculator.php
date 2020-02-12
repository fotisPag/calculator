<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>PhP content</title>
    </head>
    <body>
                    /* CALCULATOR */
        <form>
            <input type="text" name="num1" placeholder="Number1">
            <input type="text" name="num2" placeholder="Number2">
            <select name="operator">
                <option>None</option>
                <option>Add</option>
                <option>Substact</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <br>
            <button name="submit" value="submit" type="submit">Calculate</button>

        </form>
        <p>the answer is : </p>
        <?php 
            if (isset($_GET['submit'])) {
                $result1 = $_GET['num1'];
                $result2 = $_GET['num2'];
                $operator = $_GET['operator'];
                switch ($operator) {
                    case "None": 
                        echo "You need to select a method";
                    break;
                    case "Add": 
                        echo $result1 + $result2;
                    break;
                    case "Substract": 
                        echo $result1 - $result2;
                    break;
                    case "Mutliply": 
                        echo $result1 * $result2;
                    break;
                    case "Divide": 
                        echo $result1 / $result2;
                    break;
                }
            }
        ?>
    </body>
</html>








