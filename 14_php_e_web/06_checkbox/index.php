<?php

    if(isset($_POST['ingredientes'])) {

        $ingredientes = $_POST['ingredientes'];

        print_r($ingredientes);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="Tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Leite"> Leite
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Trigo"> Trigo
        </div>
        <div>
            <input type="submit"value="Eniar">
        </div>
    </form>
</body>
</html>