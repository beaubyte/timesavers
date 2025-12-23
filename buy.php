<?php
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
    <h1><strong>Purchase your time</strong></h1>
    <h2>How would you like your time?</h2>
    <div class="options">
    <ol>
        <li><a href='premade.php'>Browse available times</a></li>
        <li><a href='customorder.php'>Request a custom time</a></li>
    </ol>
    </div>
</body>
</html>
