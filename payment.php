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
    <script src="payment_scripts.js"></script>

</head>
<body>
<?php echo $header ?>
<h1><strong>Payment</strong></h1>
<?php
    if (isset($_GET['id'])){
        $id = $_GET['id']; // This grabs the ID to be passed through in the POST as a hidden value, the rest of the code builds the entry form
        echo "<div class='customform'>
    <form action='receipt.php' method='POST'>
        <input type='hidden' id='id' name='id' value='$id'> 
        <p>
            <label for='cardname'>Name on Card:</label>
            <input type='text' name='cardname' id='cardname' maxlength'20' placeholder='Kim Kitsuragi' required>
        </p>
        <p>
            <label for='cardnum'>Card Number:</label>
            <input type='text' name='cardnum' id='cardnum' maxlength='20' placeholder='##################' required>
        </p>
        <p>
            <label for='security'>Security Code:</label>
            <input type='text' name='security' id='security' maxlength='4' placeholder='CVV'required>
        </p>
        <p>
            <label for='expiration'>Expiration:</label>
            <input type='text' name='expiration' id='expiration' maxlength'5' placeholder='##/##' required>
        </p>
        <input type='submit' class='submit' id='paymentconfirm' value='Purchase'>
    </form>
    </div>";
    } else {
        echo "<h2>Nothing to pay for</h2>";
    }
?>

</body>
</html>
