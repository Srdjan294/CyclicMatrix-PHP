<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    $rows = 4; 
    $columns = 4; 
    $k = 1;
    $matrix = array(array());

    for($i = 0; $i < $rows; $i++){
        for($j = 0; $j < $columns; $j++){
            echo $matrix[$i][$j] = $k++;
        }
        echo "<br>";
    }

    ?>

    <table><tr>
    <td>s</td>
    <td>d</td>
    <td>g</td></tr>
    <tr><td>h</td>
    <td>g</td>
    <td>h</td></tr>
    <tr><td>h</td>
    <td>j</td>
    <td>k</td>
    </tr>
    </table>
</body>
</html>