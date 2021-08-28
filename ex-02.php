<!-- $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.
-->

<?php
    $var = 'PHP Tutorial';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $var;?>
    </title>
</head>
<body>
    <h3><?php echo $var; ?></h3>
</body>
</html>