<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forEach with sections</title>
    <style>
    *{
        margin: 0;
        box-sizing: border-box;
    }
    .container{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        background-color: #dbdbdb;
        
    }

    .item{
        flex-basis: 22%;
        height: 200px;
        background-color: greenyellow;
        color: red;
        border: 1px solid black;
        margin: 5px;
    }
    </style>
</head>
<body>
    <div class="container">
        <?php
        for($i=0; $i<25; $i++){
            echo "<div class='item'> THE ELEMENT NUMBER : " . ($i + 1) . "</div>";
        }
        ?>
    </div>
</body>
</html>