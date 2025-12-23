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
    <script src="custom_scripts.js"></script>
</head>
<body>
<?php echo $header ?>
<?php
    if (isset($_POST['start'])){
        echo "<h1><strong>Block has been requested</strong></h1>";
        echo "<h2>You will receive a quote when we have assessed your order</h2>";
        $start = $_POST['start']; // gets data from post and assigns to variables
        $location = $_POST['location'];
        $duration = $_POST['duration'];
        $contactval = $_POST['contactval']; // builds block of time to show to user
        echo "<div class=\"confirm\">
        Starts at: $start UTC</br>
        Lasts for: $duration Minutes</br>
        Your contact: $contactval</br>
        At: $location</br>
        </div>";
        $sql = "insert into Requests(Start,Duration,Location,Contact) values ('$start','$duration','$location','$contactval')";
        $db->query($sql); // inserts order into database
        echo "<div class='button'>";
        echo "<button type='button' id='iunderstand'>I understand</button>";
        echo "</div>";
    } else {
        echo "<h1><strong>Sorry, we couldn't find your order</strong></h1>";
    }
?>
</body>
</html>
