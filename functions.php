<?php
    


    // Create function
    function simpleFunction() {
        echo 'Hello World';
        echo '<br>';
    }

    // Run function
    simpleFunction();
?>

<?php
    // Function with Param and default param

    function sayHello($name = '') {
        echo "Hello $name<br>";
    }
    sayHello('Joe');
    sayHello('JEsus');
    sayHello();
?>

<?php

    // Return value
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }
    echo addNumbers(2, 3).'<br>';
?>
<?php
    // By reference
    $myNum = 10;

    function addFive($num) {
        // Without reference!
        $num += 5;
    }
    function addTen(&$num) {
        // By reference
        $num += 10;
    }
    addFive($myNum);
    echo "Value (Without reference): $myNum<br>";
    addTen($myNum);
    echo "Value (After passing var by reference): $myNum<br>";
?>