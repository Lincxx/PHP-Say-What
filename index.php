<?php 

// echo 'Hello World';
// print 'Hello World' ;
// echo('Hello World');
// print('Hello World');

// $name = 'John';
// echo "Hello $name"; 
// echo "Hello $name";  -->
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php echo 'Hello World'; ?>
    <?= 'Hello World'?>
    </h1>

    <?php $x = 10; $y = 20;  ?>
    <p><?php echo $x + $y; ?></p>
</body>
</html>