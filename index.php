<?php
    $arrPeople=[
        "Orange","Apple","Abc"
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($arrPeople as $value) {?>
           <p><?php echo $value ?><span> </span></p>
        <?php } ?>
    </ul>
</body>
</html>