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
</head>
<body>
<?php echo $header ?>
<h1><img src="timesavers.svg" alt="the timesavers logo" width="600" height="150"></h1>
<h1><strong>Welcome to our site!</h1>
<h2>How can we help you today?</h2>
<div class="options">
<ul>
    <li><a href='buy.php'>Buy some time</a></li>
    <li><a href='aboutus.php'>Learn more about us</a></li>
    <li><a href='checkdatabase.php'>Check Stock and Pending Orders</a></li>
    <li><a href='reset.php'>Reset database values and populate</a></li>
</ul
</div>

</body>
</html>
