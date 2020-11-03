<?php
        $firstNumber=(int)$_GET['numberFirst'];
        $secondNumber=(int)$_GET['numberSecond'];
        $phepTinh=$_GET['phepTinh'];
        
        switch ($phepTinh) {
            case '+':
                $ketQua=$firstNumber+$secondNumber;
                break;
            case '-':
                $ketQua=$firstNumber-$secondNumber;
                break;
            case '*':
                $ketQua=$firstNumber*$secondNumber;
                break;
            case '/':
                $ketQua=$firstNumber/$secondNumber;
                break;        
            default:
                break;
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
    <span>Ket qua cua <?php echo $firstNumber ?> <?php echo $phepTinh ?> <?php echo $secondNumber ?> = <?php echo isset($ketQua) ? $ketQua : ''; ?></span>
</body>
</html>