<html>
<head>
    <title>EcoPanel | Detele Account</title>
    <link rel="shortcut icon" type="x-icon" href="logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleSheet.css">
 
    <style>
       
    </style>
</head>

<body>
    <!--Navigation bar Section-->
    <nav class="navbar" id="navv">
        <nav class="navbar navbar-default navbar-fixed-top" id="navv">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="logo-container">
                        <img src="logo.png" alt="Logo" class="logo">
                        <span class="brand-name" id="title">EcoPanel</span>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav" id="navUl">
                        <li><a href="index.html" style="color: rgb(255, 248, 248);">Home</a></li>
                        <li><a href="shop.php" style="color: rgb(255, 248, 248);">Shop</a></li>
                        <li><a href="billGeneration.html" style="color: rgb(255, 248, 248);">bill</a></li>
                        <li><a href="contactUs.html" style="color: rgb(255, 248, 248);">Contact Us</a></li>
                        <li><a href="aboutUs.html" style="color: rgb(255, 248, 248);">About Us</a></li>
                        <li><a href="count.html" style="color: rgb(255, 248, 248);">Count</a></li>
                        <li><a href="guide.html" style="color: rgb(255, 248, 248);">Guide</a></li>
                        <li><a href="review.html" style="color: rgb(255, 248, 248);">Review</a></li>
                        <li><a href="Questionnaire.html" style="color: rgb(255, 248, 248);">Questionnaire</a></li>
                        <li><a href="funpage.html" style="color: rgb(255, 248, 248);">fun</a></li>
                        <li><a href="search.php" style="color: rgb(255, 248, 248);">Search</a></li>
                        <li><a href="delete.php" style="color: rgb(255, 248, 248);">Delete</a></li>
                        <li><a href="insert.php" style="color: rgb(255, 248, 248);">Insert</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['Message']);
    $access_key = htmlspecialchars($_POST['access_key']);

   

    // Render a table to display the submitted data
    echo "<h3>Submitted Information:</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Message</th></tr>";
    echo "<tr><td>" . htmlspecialchars($name) . "</td><td>" . htmlspecialchars($email) . "</td><td>" . htmlspecialchars($message) . "</td></tr>";
    echo "</table>";

    echo "<p>Thank you for your message, " . htmlspecialchars($name) . "!</p>";
} else {
    // If not a POST request, show a message or redirect
    echo "<p>Invalid request method.</p>";
}
?>

</html>