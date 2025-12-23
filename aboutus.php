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
<?php echo $header?>
<h1><strong>Who are we?</strong></h1>
<div class="explaination">
<p>	This website is designed to prototype a mysterious business in the future that finds rifts in time, and sells them as packages to allow someone to experience the past. My idea started out with wanting to create an online booking site, but then I thought of this interesting twist. While the site could work as an online booking site with a few adaptations, with the way I made it, you are not buying a service over a time period, but that specific time period itself!
</p>
<img src="design.jpg" alt="the design of the website" height="720" width="960">
<p>
<strong>The website works like this:</strong>
</br></p>
<p>
Flow 1: When purchasing an already allotted time, it begins with clicking the "Buy some time" link, which directs you to the buy.php page. From there, the user selects "1. Browse available times" which directs the browser to premade.php. Premade.php queries the database for available times in the Stock table, and builds an HTML table of the options available. From this the user selects one of the options (or can always return to the main menu with the link on the header.) This makes a GET request to purchase.php with the ID number selected. The page will then ask the user if everything looks alright. If the user says no, clicking the button will initiate a Javascript function to bring them back to the available times. Clicking yes will make another GET request though a Javascript function that uses REGEX to read what ID in selected from the H2 HTML element. This GET request is directed towards payment.php, which is where you enter card details for payment. Once that is entered, it sends a POST to receipt.php, which will then remove the item from the Stock table, and record the transaction in the Payments table.
</p>
<p>
Flow 2: When requesting a new time to be custom-made, it begins with clicking the “Request a Custom Time” link, which brings the user to an HTML form to fill out their desired time. After filling out the link, it will ask the user if they are sure they want to submit the form, and if they say yes, it will POST to customconfirm.php, which will record the request in the database in the Requests table.
</p>
<p>Other options:
<ul>
    <li>Check Database: This is to see the current state of the database, to see past orders, requests, and current stock all in one place. Obviously, this wouldn’t be shown to the users, but it is a nice way to see the current state of the database and to see what the website is doing.</li>
    <li>Reset Database: This deletes all items from all tables, and then fills up the Stock table with demo values. This is purely for demonstration, and obviously wouldn’t be in an actual production website.</li>
</ul>
</p>
<p>
    The timeframe to build this website was short, so there are naturally things that I would include with more time, and ways in which if I did this project again I would improve upon. I think there is value in talking about some of them.</br>
    <ul>
        <li>Better organization: I started off with folders with all of the files organized based on flow, but had a lot of issues with communicating with the Initialize.sql file, as it's functions use local paths to the file calling them. In the future, I would make an Initialize.sql file myself, or design the program around not using one, which wouldn't be an issue in a production setting.</li>
        <li>More input validation: As it stands there is little input validation on the forms beyond what is accomplished with HTML. If I had more time, I would use more JavaScript to implement better feedback to the user as they're typing.</li>
        <li>Better SQLi protection: Although I did the basics like wrapping queries in quotes, if I had more time I would further test my website to make sure it isn't vunerable to SQL injection at any point in the site.</li>
        <li>Mobile Support: The UI is very basic, and would be suited to mobile devices well. However, it is not built to be dynamic to multiple DPI levels, and it would take me more time to debug different devices and form factors.</li>
</p>
<p>Fun Bonus: This was the flow chart before a single line of code was written, it ended up looking pretty similar </br>
<img src="early_design.PNG" alt="a handwritten early design of the website" width="400" height="500">
</p>
</div>
</body>
</html>
