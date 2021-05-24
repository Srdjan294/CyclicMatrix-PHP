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
    $matrix = array(array()); ?>
    
    <table>
    
        <?php for($i = 0; $i < $rows; $i++){ ?>
        
            <tr>
        
        <?php for($j = 0; $j < $columns; $j++){ ?>
        
            <td>
            <?php  echo $matrix[$i][$j] = $k++; ?>
            </td>
        
        <?php } ?> 
        
            </tr>
        
        <?php echo '<br>'; ?>
        
        <?php } ?>
        
    </table>    

</body>
</html>