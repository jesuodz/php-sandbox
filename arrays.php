<?php
  #Array - Variable that holds multiple values
  
  $people = array('Kevin', 'Stweard', 'John Wayne');
  $cars = ['Honda', 'Toyota', 'Ford'];
  $cars[3] = 'Chevy';
  $cars[] = 'BMW'; // If you don't know index, no problem

  // print $cars[4];
  // print_r($cars); // Print array showind indexes
  // echo count($cars);

  // Associative arrays
  $people = array('Brad' => 35, 'William' => 1);
  // echo $people['Brad'];

  // Multidimensional arrays
  $cats = array(
      array('Misu', 20),
      array('Tom', 28),
      array('Mochi', 8)
  );
  echo $cats[1][0];
?>