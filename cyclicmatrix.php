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

    $i = 1;
    $matrix = array(array());
    $minRow = 0;
	$minColumn = 0;
	$maxRow = $columns-1;
    $maxColumn = $rows-1;
    
    while($i <= $rows*$columns) {
				
				// one cycle
				for($j = $minColumn; $j <= $maxColumn; $j++) {  //left to right
					$matrix[$minRow][$j] = $i++;
				}
				
				for($j = $minRow+1; $j <= $maxRow; $j++) {      // top to bottom
					$matrix[$j][$maxColumn] = $i++;
				}
				
				for($j = $maxColumn-1; $j >= $minColumn; $j--) {  //right to left
					$matrix[$maxRow][$j] = $i++;
				}
				
				for($j = $maxRow-1; $j >= $minRow+1; $j--) {      // bottom to top
					$matrix[$j][$minColumn] = $i++;
				}
				
				//update pointers
				$minColumn++;
				$minRow++;
				$maxColumn--;
				$maxRow--;
            }
    
?>

<table>
            
    <?php for($i = 0; $i < $rows; $i++) { ?>

        <tr>
			
            <?php	for($j = 0; $j < $columns; $j++) { ?>
            
                <td>
					<?php echo $matrix[$i][$j]; ?>
                </td>

			<?php } ?>
				
        </tr>

		<?php } ?>

</table>

