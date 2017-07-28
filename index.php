<?php
    $ip = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>IP-Adresse</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
</head>
<body>

    <div id="heading">
        IP-Adresse
    </div>

    <div id="ip">
        <?php echo $ip; ?>
    </div>

</body>
</html>
