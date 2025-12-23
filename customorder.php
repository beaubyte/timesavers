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
    <script src="customorder_scripts.js"></script>

</head>
<body>
<?php echo $header ?>
<h1><strong>Custom Order</strong></h1>
<div class="customform">
    <form onsubmit="return confirm('Is your request definite?');" action="customconfirm.php" method="POST">
        <p>
            <label for="start">Starting Time:</label>
            <input type="datetime-local" name="start" id="start" required>
        </p>
        <p>
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" placeholder="New York City" required>
        </p>
        <p>
            <label for="duration">Duration in Minutes:</label>
            <input type="number" name="duration" id="duration" required>
        </p>
        <p>
            
            <select name="contact" id="contact">
                <option value="" disabled selected>Contact Method</option>
                <option value="emailopt">Email</option>
                <option value="phonenumopt">Phone Number</option>
            </select>
            <input type="text" name="contactval" id="contactval" required>
        </p>
        <input type="submit" class="submit" id="ordersubmit">
    </form>
    </div>
</body>
</html>
