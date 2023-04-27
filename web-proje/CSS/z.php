<?php

$myemail = "CC@hotmail.com";
$mysifre = "123";
$username = $_POST['username'];
$password = $_POST['password'];
$namen = explode("@", $username);
$signal = false;
if ($username == $myemail && $password == $sifre) {
    $signal = true;

} else {
    $signal = false;
    header("refresh:5;url=login.html");
}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    if ($signal == true) {
        echo $namen[0] . "  Hoşgeldin";
    } else {
        echo "Kullanıcı epostası yada şifre hatalı ";
        echo "5 saniye içinde geri yönlendiriliyorsunuz";
    }
    ?>

</body>

</html>