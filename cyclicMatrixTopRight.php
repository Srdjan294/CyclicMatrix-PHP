<?php
 
// PHP program to fill a matrix with values
// from 1 to n*n in spiral fashion.
 
// Fills a[m][n] with values from 1 to
// m*n in spiral fashion.
function spiralFillTR($m, $n, &$a)
{
    // Initialize value to be filled
    // in matrix
    $val = 1;
 
    /* k - starting row index
       m - ending row index
       l - starting column index
       n - ending column index */
    $k = 0;
    $l = 0;
    while ($k < $m && $l < $n)
    {
        /* Print the last column from
        the remaining columns */
        for ($i = $k; $i < $m; ++$i)
            $a[$i][$n-1] = $val++;
 
        $n--;
 
        /* Print the last row from
        the remaining rows */
        for ($i = $n - 1; $i >= $l; --$i)
            $a[$m-1][$i] = $val++;
        $m--;
 
        /* Print the first column from
        the remaining columns */
        if ($l < $n)
        {
            for ($i = $m-1; $i >= $k; --$i)
                $a[$i][$l] = $val++;
            $l++;
        }
 
        /* Print the first row from
           the remaining rows */
        if ($k < $m)
        {
            for ($i = $l; $i <= $n-1; ++$i)
                $a[$k][$i] = $val++;
            $k++;
        }
    }
}
 
// Driver Code

$p = spiralFillTR($m, $n, $a);

?>

<table>

    <?php for ($i = 0; $i < $m; $i++) { ?>

        <tr>

            <?php for ($j = 0; $j < $n; $j++) { ?>
                
                <td>
                    <?php echo ($a[$i][$j]); ?>
                </td>
        
            <?php } ?>    
    
        </tr>        

    <?php } ?>            

</table>