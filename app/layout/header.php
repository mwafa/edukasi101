<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    foreach($this->default["css"] as $k)
    {
        ?>
    <link rel="stylesheet" href="/tema/css/<?=$k?>.css">
        <?php
    }
        
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Home</title>
</head>
<body>