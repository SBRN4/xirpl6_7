<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
<?php  
    echo ("Perulangan");
    echo "</br>";
    echo "</br>"; 
    date_default_timezone_set("Asia/Jakarta"); 
    echo date("d-m-Y H:i");
    echo "</br>";
    echo "</br>";
    for($i=0;$i<=5;$i++){  
    for($j=5-$i;$j>=1;$j--){  
    echo "* ";  
    }  
    echo "</br>";  
    }  
    ?>  
</body>
</html>