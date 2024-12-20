<html>

<head>
    <title>EcoPanel | Suggest</title>
    <link rel="shortcut icon" type="x-icon" href="logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleSheet.css">

    <style type="text/css">

    
        .form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 40px auto;
            max-width: 500px;
            padding: 20px;
        }

        .form-label {
            font-size: 16px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-primary {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            border: none;
            transition: all 0.3s ease;
            text-align: center;
        }

        .btn-primary:hover {
            background-color: green;
            color: white;
        }

        h2 {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }


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
            <p>Suggest</p><br />
        </div>
    </div>

    <br />
    <h2 style = "text-align: center;">Suggest eco-friendly solar panels to add to our shop!</h2>

    <div class="form">
        <form method="post" action="">
            <label for="brand" class="form-label">Brand:</label>
            <input type="text" name="brand" required><br><br>
            <label for="type">Type: </label>
            <input type="text" name="type" required placeholder = "Monocrystalline/ Polycrystalline/ Thin-film"><br><br>
            <label for="wattage">Wattage:</label>
            <input type="text" name="wattage" required><br><br>
            <input class="btn-primary" type="submit" value="Insert">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['brand'], $_POST['type'], $_POST['wattage'])) {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecopanel";

        // Retrieve form data
        $brand = htmlspecialchars($_POST['brand']);
        $type = htmlspecialchars($_POST['type']);
        $wattage = htmlspecialchars($_POST['wattage']);

        // Enable error reporting
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("<p style='color:red;'>Connection failed: " . htmlspecialchars($conn->connect_error) . "</p>");
        }

        try {
            // Check if record already exists
            $stmt = $conn->prepare("SELECT * FROM solar_panels WHERE brand = ?");
            $stmt->bind_param("s", $brand);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<p style='color:red;'>The course with this brand already exists!</p>";
            } else {
                // Insert new record
                $stmt = $conn->prepare("INSERT INTO solar_panels (brand, type, wattage) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $brand, $type, $wattage);
                if ($stmt->execute()) {
                    echo "<p style='color:green; text-align: center'>Record inserted successfully!</p>";
                } else {
                    echo "<p style='color:red; text-align: center'>Error: " . htmlspecialchars($stmt->error) . "</p>";
                }
            }
            $stmt->close();
        } catch (Exception $e) {
            echo "<p style='color:red; text-align: center'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
        }

        $conn->close();
    }
    ?>

<br><br>
<br/><br/><br/>
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
</body>

</html>