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

   <?php include 'cyclicmatrix.php'; ?>

</body>
</html>