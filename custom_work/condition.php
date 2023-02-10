<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $conn  = mysqli_connect("localhost", "root", "", "test1");

    $usercheck = $conn->query("SELECT meta_key,meta_value FROM `wp_usermeta` WHERE user_id=16 AND meta_key='Payment';");

    while ($row = $usercheck->fetch_array()) {
        $var = $row['meta_value'];
        if ($var == 'premium account') {
            echo 1;
        } else {
            echo 0;
        }
    }  ?>
</body>

</html>