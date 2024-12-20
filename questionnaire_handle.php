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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // retreve form inputs
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $feedback = htmlspecialchars($_POST['Feedback']);
    
    // Handle "What You Liked" ratings
    $ratingsText = "None"; // Default value
    if (isset($_POST['rating[]']) && !empty($_POST['rating[]']) && is_array($_POST['rating[]'])) {
        $ratings = array_map('htmlspecialchars', $_POST['rating[]']);
        $ratingsText = implode(", ", $ratings);
    }

    // Display the submitted form data
    echo "<h2>Form Submission Summary</h2>";
    echo "<p><strong>Full Name:</strong> $fullName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>What You Liked:</strong> $ratingsText</p>";
    echo "<p><strong>Feedback:</strong> $feedback</p>";
} else {
    echo "<p>Invalid request method. Please submit the form.</p>";
}
?>

</div>
</html>