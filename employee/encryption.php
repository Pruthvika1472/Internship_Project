<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encryption</title>
</head>
<body>
    <?php
        $name = "luffy";
        $hashpass = password_hash($name, PASSWORD_ARGON2I);
        echo $hashpass;

        $passname = password_verify("luffy",$hashpass);
        echo "<br>".$passname;
    ?>
</body>
</html>