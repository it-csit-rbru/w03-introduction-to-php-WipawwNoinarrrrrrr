<?PHP
    $email = "6015261002@rbru.ac.th";
    $name = "wipawee boomdamnanpanich";
    $url = "stu2.rbru.ac.th/~s6015261013";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "$name";?></title>
</head>
<body>
    <?php
        echo "<h1>$email</h1>";
        echo "<h2>$name</h2>";
        echo "<a href=\"$url\">$name</a>";
    ?>
</body>
</html>
