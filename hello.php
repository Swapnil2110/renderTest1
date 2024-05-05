<?php
// echo print_r($_REQUEST,1);
$name = $_REQUEST['name'];
$submit = $_REQUEST['submit'];
// Encode the response array to JSON and print it
// echo json_encode($response);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <!-- <input type="text" name="" id=""> -->
        Enter Your Name : 
        <input type="text" name="name">
        <input type="submit" id="submit" name="submit" value="Submit">
    </form>
    <div>
        <p <?= (empty($submit)) ? "hidden" : ""; ?>>Fuck You <?= $name; ?></p>
    </div>
</body>

</html>