<!--  In this exercise we're working with an array of 10 integers, as follows: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100]. 0 is the first index and 9 is the last index of the array.

Write a function that receives two integers as parameters. The function returns the sum of the elements in the array found between those two integers.

For example, if we use 30 and 60 as parameters, the function should return 180.

A few additional requirements:

The two integers passed to the function should be positive; if not, the function should return -1. 
Validate that the first integer is lower than the second integer. If not, the function should return 0.
If the first integer is in the array, and the second is above 100, for example, 90 and 120, then the function should return the sum of those integers that are within the array and in between the range given. In this case, that would be 190.
If both integers are not found in the array, for example, 110 and 120, the function should return 0. -->

<html>

<body>
    <form method="POST">
        <div>
            <label>Number1:</label>
            <input type="number" name="number1" placeholder="Enter Number1"><br>
        </div>
        <div>
            <label>Number2:</label>
            <input type="number" name="number2" placeholder="Enter Number2"><br>
        </div>
        <div>
            <input type="submit" name="submit" value="Sum"><br>
        </div>
    </form>
    <?php

    const data = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
    function sum($data1, $data2)
    {
        $start = array_search($data1, data);
        $end = array_search($data2, data);

        $sum = 0;
        for ($i = $start; $i <= $end; $i++) {
            $sum += data[$i];
        }
        echo $sum;
    }
    if (isset($_POST['submit'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        switch ($number1 | $number2) {
            case $number1 < 0 and $number2 < 0:
                echo '-1';
                break;
            case $number1 > $number2:
                echo '0';
                break;
            case (!in_array($number1, data)) and (!in_array($number2, data)):
                echo '0';
                break;
            case (in_array($number1, data)) and ($number2 > 100):
                sum($number1, $number2 = 100);
                break;
            case (in_array($number1, data)) and (in_array($number2, data)):
                sum($number1, $number2);
                break;
            default:
                echo "Defaault Block Executed";
        }
    }
    ?>
</body>

</html>