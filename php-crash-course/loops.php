<?php
    // For loop
    for($i = 1; $i < 11; $i++) {
        echo 'Number '.$i;
        echo '<br>'; // New Line
    }

    // While loop
    $i = 0;
    while($i < 10) {
        echo 'Number '.$i;
        echo '<br>'; // New Line
        $i++;
    }

    // Do...while
    $y = 0;
    do {
        echo $y;
        echo '<br>';
        $y++;
    } while ($y < 10);

    // Foreach Loop - For arrays
    $people = array('Brad' => 'agas@gmail.com',
                        'Jose' => 'agas2@gmail.com',
                        'William' => 'aga3s@gmail.com');

    foreach($people as $person => $email){
        echo $person.': '.$email;
        echo '<br>';
    }
?>