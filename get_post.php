<?php
    // if (isset($_GET['name'])) {
    //     // print_r($_GET['name']);
    //     $name = htmlentities($_GET['name']);
    //     // echo $name;
    // }
    $name = isset($_GET['name']) ? htmlentities($_GET['name']) : '';
    /* 
    if (isset($_POST['name'])) {
        // print_r($_POST['name']);
        $name = htmlentities($_POST['name']);
        echo $name;
    }
    echo $_SERVER['QUERY_STRING'];
    */
?>
<!DOCTYPE html>
<html>
<head>
    <title>My website</title>
</head>
<body>
    <form method="POST" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="submit">
    </form>
    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
        </li>
        <li>
            <a href="get_post.php?name=Steve">Steve</a>
        </li>
        <h1>
            <?php
                echo "{$name}";
            ?>
        </h1>
    </ul>
</body>
</html>