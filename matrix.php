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