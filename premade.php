<?php
require_once 'db_connect.php';
// $db is available as a PDO instance connected to MySQL
require_once 'globals.php';
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<?php echo $header ?>
<h1><strong>Available Stock</strong></h1>
<div class="options">
<?php
            // this code displays all of the available time stock
            $sql = "select * from Stock";
            $statement = $db->query($sql);
            echo "<table>";
            echo "<tr><td>ID</td><td>Time</td><td>Duration</td><td>Region</td><td>Flexibility</td><td>Price</td></tr>";
            // this fetches everything in Stock and builds an HTML table out of it
            while ($row = $statement->fetch()) {
                echo "<tr>
                <td><a href='purchase.php?id=$row[ID]'>$row[ID]</a></td>
                <td>$row[Start]</td>
                <td>$row[Duration] min</td>
                <td>$row[Region]</td>
                <td>$row[Flex] min</td>
                <td>$row[Price]</td>
                </tr>
                ";
            }
            echo "</table>";
?>
</div>
</body>
</html>
