<?php
require_once 'db_connect.php';
require_once 'globals.php';
// $db is available as a PDO instance connected to MySQL
?>

<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="styles.css">
    <script src="receipt_scripts.js"></script>
</head>
<body>
<?php echo $header ?>
<?php
// this code just does a simple reset of the database since you can't unpurchase time
$sql = "
delete from Stock;
delete from Requests;
delete from Payments;
insert into Stock
values
   ('1', '2000-01-01', '30', 'Italy', '10', '1200'),
   ('2', '2100-01-22', '20', 'Spain', '5', '800'),
   ('3', '2020-03-09', '5', 'Chile', '2', '5000'),
   ('4', '2050-07-03', '20', 'Japan', '15', '900')";
$db->query($sql);
echo "<h1><strong>Database has been reset back to placeholder values!</strong></h1>";
echo "<h2><a href='index.php'>Return to main menu</a></h2>";
?>
</body>
</html>
