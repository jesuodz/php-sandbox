<?php
    /*
    == compare by value
    === compare by datatype and value
    >< <= => != !==
    */

    $num = '6';

    if ($num === 5) {
        echo "$num passed";
    } elseif($num == 6) {
        echo '6 passed';
    } else {
        echo 'did not pass';
    }

    echo "<br>";

    // Logical operators
    if ($num > 4 && $num < 10) {
        echo "AND: $num passed<br>";
    }

    // "One of them should pass but not both"
    if ($num > 4 XOR $num > 10) {
        echo "XOR: $num passed<br>";
    }
    echo "<br>";

    $favColor = 'red';

    switch($favColor) {
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        default:
            echo 'Your favorite color is something else';
    }
?>