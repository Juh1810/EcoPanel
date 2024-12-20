<html>
<head>
    <title>EcoPanel | Detele Account</title>
    <link rel="shortcut icon" type="x-icon" href="logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleSheet.css">
 
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
<div style = "text-align:center;">
<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the data from the form
    $dailyEnergy = $_POST['DailyEnergy'] ?? '';
    $outputPerPanel = $_POST['DailypanelOutput'] ?? '';

    
    //displaying the data for debugging

    echo "<h3>Form Data Received:</h3>";
    echo "Daily Energy Needs: " . htmlspecialchars($dailyEnergy) . "<br>";
    echo "Daily Output Per Panel: " . htmlspecialchars($outputPerPanel) . "<br>";

    // perform calculations, such as calculating the number of panels needed
    if (is_numeric($dailyEnergy) && is_numeric($outputPerPanel) && $outputPerPanel > 0) {
        $numberOfPanels = ceil($dailyEnergy / $outputPerPanel);
        echo "Number of Panels Needed: " . $numberOfPanels;
    } else {
        echo "Please enter valid numeric values for Daily Energy and Output Per Panel.";
    }
}
?>
</div>
</html>