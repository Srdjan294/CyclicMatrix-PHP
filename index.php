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
        
        <select name="rows" id="rows">
            <?php
                for($i = 0; $i <= 30; $i++){ ?>
                
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

            <?php        
                }
            ?>
        </select>

        <br><br>

        <label for="columns">Columns:</label>
        <select name="columns" id="columns">
            <?php
                for($i = 0; $i <= 30; $i++){ ?>
                
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

            <?php        
                }
            ?>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <br>

   <?php include 'spiralfill.php'; ?>

</body>
</html>