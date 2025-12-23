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
    <script src="purchase_scripts.js"></script>
</head>
<body>
<?php echo $header ?>
<h1><strong>Checkout</h1>
<?php
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "select * from Stock where (ID = '$id')";
        echo "<h2 id='confirmtext'>Are you sure you want to purchase #$id?</h2>";
        $statement = $db->query($sql); // this fetches the object with the selected ID
        $object = $statement->fetch(); // this fetches the data and makes it an object
        echo "<div class=\"confirm\">
        Starts at: $object[Start] UTC</br>
        Lasts for: $object[Duration] Minutes</br>
        Adjustable by: $object[Flex] Minutes</br>
        Final Price: <strong>$object[Price] credits</strong></br>
        </div>";
    } else {
        echo "<h2>We aren't sure what you're looking for, please seek deeper";
    }

?>
    </br>
    <div class="buttonflex"> 
        <button type="button" id="rejectpurchase">No</button>
        <button type="button" id="confirmpurchase">I accept</button>
    </div>
</body>
</html>
