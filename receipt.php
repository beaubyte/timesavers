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
    if (isset($_POST['id'])){
        echo "<h1><strong>Your order is on the way!</h1>";
        $id = $_POST['id'];
        $sql = "delete from Stock where (ID = '$id')"; // deletes the purchased item from the Stock table
        $db->query($sql);
        $name = $_POST['cardname'];
        $cardnum = $_POST['cardnum'];
        $time = date("Y-m-d H:i:s");
        $sql = "insert into Payments(CardName,CardNum,TimeOfPurchase) values ('$name','$cardnum','$time');"; // Makes a record of payment for the purchased item
        $db->query($sql);
    } else {
        echo "<h1><strong>Your order is on the...</strong> wait</h1>"; // if there is no ID in POST, it will display this message
        echo "</br>";
        echo "<h2>You haven't bought anything, silly!";
    }

?>
    </br>
    <div class="buttonflex"> 
        <button type="button" id="okaybutton">Thank you</button>
    </div>
</html>
