<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" method="post">
        <label for="rows">Rows:</label>
        <input type="text" id="rows" name="rows"><br><br>
        <label for="columns">Columns:</label>
        <input type="text" id="columns" name="columns"><br><br>
        <input type="submit" value="Submit">
    </form>

    <br>

    <?php
    
    if (isset($_POST["rows"])){
        $rows = $_POST["rows"];
    } else {
        $rows = null;
        echo "Enter rows.";
    }?>

    <br>

    <?php
    
    if (isset($_POST["columns"])){
        $columns = $_POST["columns"];
    } else {
        $columns = null;
        echo "Enter columns.";
    }
    
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
        
        <?php } ?>
        
    </table>    

</body>
</html>