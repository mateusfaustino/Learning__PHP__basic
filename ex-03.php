<!-- Create a simple HTML form and accept the user name 
and display the name through PHP echo statement. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST" action="">
        Name: <input type="text" name='name'>
        <input type="submit">
    </form>
    <?php
        $name = $_POST['name'];
        echo "<h3>Hello, $name</h3> ";
    ?>
    

</body>
</html>