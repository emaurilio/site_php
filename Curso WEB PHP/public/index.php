<?php require "../bootstrap.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <link rel = "stylesheet" href ="//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">


</head>
<body>
    <div class="container">
        <?php 
        try{
            require load(); 
        }catch(Exception $e){
            echo "Opa, alguma coisa errada aconteceu";
        }
        ?>
    </div>
</body>
</html>