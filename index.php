<?php
    $arrPeople=[
        "Orange","Apple","Abc",
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
    <form action="s.php" method="get">
        <div>
            <input type="text" name="numberFirst" id="">
            <select name="phepTinh" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="numberSecond" id="">
            <input type="submit" value="Calculator" name="submit">
        </div>
    </form>
        
</body>
</html>