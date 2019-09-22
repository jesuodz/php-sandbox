<h1>
<?php

  // Single
  # Line comment
  /*
    Say
    Hello
  */

  echo 'Hello world';
  $output = 'Hello World';
  $num1 = 4;
  $float1 = 4.4;
  $bool1 = true;
?>
</h1>

<?php

  $string1 = 'Say';
  $string2 = 'my name';
  $question = $string1 . ' ' . $string2; // Use . to concatenate
  $question2 = "$string1 $string2";
  // Single quotes will parse a string
  // Double quotes will parse variables

  echo 'They\'re here';
  echo $question2;
?>

<?php
  $_constant2 = 1;
  echo $_constant2;
?>