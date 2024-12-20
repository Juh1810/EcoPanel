<html>

<head>
    <title>EcoPanel | Detele Account</title>
    <link rel="shortcut icon" type="x-icon" href="logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleSheet.css">
    <style type="text/css">
        

        .form {
             width: 300px; 
             margin: 20px auto; 
            }
        .h3m { font-size: 18px; 
            margin-bottom: 5px; 
            display: block; 
        }
        .butn { 
            background-color: #f44336; 
            color: white; 
            padding: 8px 12px; 
            border: none; 
            cursor: pointer; }
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
    <div class="highlighted-section">
        <div class="pageName">
            <p>Delete Account</p><br />
        </div>
    </div>

    <br />



    <div class="form">
        <form method="post" action="">
            <label class="h3m" for="email">Email:</label>
            <input type="text" name="customer_email" required><br><br>
            <input class="butn" type="submit" name="submit" value="Delete">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['customer_email'])) {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecopanel";

        // Retrieve form data
        $email = htmlspecialchars($_POST['customer_email']);

        // Enable error reporting
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("<p style='color:red;'>Connection failed: " . htmlspecialchars($conn->connect_error) . "</p>");
        }

        try {
            // Check if the record exists
            $stmt = $conn->prepare("SELECT * FROM customers_contact WHERE customer_email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Delete the record
                $stmt = $conn->prepare("DELETE FROM customers_contact WHERE customer_email = ?");
                $stmt->bind_param("s", $email);
                if ($stmt->execute()) {
                    echo "<p style='color:green; text-align: center'>Account Deleted successfully!</p>";
                } else {
                    echo "<p style='color:red; text-align: center'>Error deleting record: " . htmlspecialchars($stmt->error) . "</p>";
                }
            } else {
                echo "<p style='color:red; text-align: center'>No record found with this email '$email'.</p>";
            }

            $stmt->close();
        } catch (Exception $e) {
            echo "<p style='color:red; text-align: center'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
        }

        $conn->close();
    }
    ?>


    <br/><br/><br/>
    <!--Footer Section-->
    <div class="footer"></div>
    <footer class=" text-center">
        <p>
            <a href="https://github.com/Juh1810/EcoPanel.git"><img src="gitIcon.png" alt="github icon"
                style="height: 40px; width: 40px;"></a>
            <a href="mailto:ecopanel.web@gmail.com"><img src="emailIcon.png" alt="email icon"
                    style="height: 40px; width: 40px;"></a>
        </p>
    </footer>
    </div>

</html>