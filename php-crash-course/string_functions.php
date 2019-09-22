<?php
    # substr()
    # Returns a portion of a string
    
    // $output = substr('Hello', 1, 3); # ell
    // $output = substr('Hello', -2); # lo
    // echo $output;

    # strlen()
    # Returns the length of a string
    // $output = strlen('Hello World');
    // echo $output; # 11

    # strpos()
    # Finds the position of the occurrence of a sub string
    // $output = strpos('Hello World', 'o');
    // echo $output; # 4

    # strpos()
    # Finds the position of the occurrence of a sub string
    // $output = strrpos('Hello World', 'o');
    // echo $output; # 6

    # trim()
    # strips whitespace
    // $text = 'Hello World                ';
    // // var_dump($text); # 27 characters

    // $trimmed = trim($text);
    // var_dump($trimmed); # 11 Characters

    # strtoupper
    # Makes everything uppercase
    // $output = strtoupper('Hello World');
    // echo $output;

    # strtolower
    # Makes everything lowercase
    // $output = strtolower('Hello WorlD');
    // echo $output;

    # ucwords()
    # Capitalize every word
    // $output = ucwords('hello world');
    // echo $output;
    
    # str_replace()
    # Replace all occurrences of a search string with a replacement
    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    # is_string()
    # Check if string
    // $val = '22';
    // $output = is_string($val);
    // echo $output;

    // $values = array(true, null, 'abc', 33, '33', 22, '22.4', 2.3, '', ' ');

    // foreach ($values as $value) {
    //     if (is_string($value)) {
    //         echo "{$value} is a string<br>";
    //     }
    // }

    # gzcompress()
    # Compress a string
    $string = 
    "

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam nulla, pretium in mollis eget, auctor sit amet massa. Duis ac scelerisque nibh, nec auctor justo. Mauris sit amet nisi nunc. Fusce ultricies auctor consequat. Sed non rhoncus justo. Pellentesque luctus diam et mi efficitur interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer et ex vitae augue posuere semper vitae id lorem. Nunc nec gravida ex. Nam quam purus, dictum ut interdum sit amet, euismod non sem. Etiam facilisis turpis diam, et commodo magna laoreet id. Integer laoreet, diam eu luctus rutrum, leo ipsum porta dui, eget varius neque nunc eget libero. Etiam mollis leo non eleifend consequat. Fusce vestibulum velit nec facilisis dignissim. Donec convallis lorem eget est feugiat, sed cursus arcu bibendum.

Suspendisse sagittis purus sed lacinia tempor. Quisque et sollicitudin turpis. Mauris tincidunt viverra nisl, eget ultrices mauris interdum non. Mauris eleifend sem in lorem tincidunt interdum sed ut nibh. Suspendisse hendrerit eu sem nec imperdiet. Mauris ultrices ex non ultricies aliquam. Morbi at mauris sed arcu semper feugiat. Sed lobortis pulvinar malesuada. Ut scelerisque varius tortor et ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

Praesent porta est urna, ac placerat diam porttitor sit amet. Cras ullamcorper turpis eu ex vulputate, in sodales nunc viverra. Nam ut dolor a tellus bibendum posuere. Nulla tempus libero eu dapibus ornare. Pellentesque faucibus ligula lorem, ut luctus quam pretium a. Maecenas id nisi vitae lectus interdum facilisis quis vel purus. Proin malesuada interdum orci, at semper ante vehicula et. Nullam facilisis vitae nibh eu luctus. Phasellus laoreet convallis varius.

Aliquam vestibulum justo id nisl tempus pharetra. Nunc vitae accumsan leo. Integer volutpat libero efficitur velit egestas lobortis. Nunc et lectus eget tellus varius vulputate ut eu dolor. Duis molestie vitae elit condimentum semper. Phasellus sit amet eleifend est. Curabitur blandit orci justo, quis ornare enim gravida id.

Mauris malesuada aliquam sapien ac semper. Aliquam facilisis vestibulum magna sit amet rutrum. Phasellus vel lorem augue. In hac habitasse platea dictumst. Cras id mattis eros. Praesent ultricies, metus eu accumsan vestibulum, magna elit laoreet quam, eu mollis leo massa at nibh. Mauris vitae efficitur magna. Quisque sit amet elementum elit, at gravida enim. Duis sed libero id velit pellentesque suscipit sit amet quis eros. Nulla justo ex, auctor sit amet massa a, auctor vulputate lectus. 
    ";
    // echo $string;

    $compressed = gzcompress($string);
    // echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;
    