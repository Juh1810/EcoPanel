<!DOCTYPE html>
<html lang="en">
<!--head section-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcoPanel | Search</title>
    <link rel="shortcut icon" type="x-icon" href="logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleSheet.css">

</head>
<style>
    #pageContent{
        padding: 5px;
    }
    .h3m {
    font-family: 'Times New Roman', Times, serif;
    font-size: 24px; /* Adjusted font size for better readability */
    color: rgb(56, 5, 5);
    }
</style>
<body>
    <!-- Navigation bar-->
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
    <!--end of navigation bar code--> 
  
  
      <div class="highlighted-section">
        <div class="pageName">
          <p>Bill Search</p><br />
        </div>
      </div>
  
      <!-- page content -->
           <div id="pageContent">
           <h2>Search for your bills</h2>
           <form id="billForm" method="POST" action="">
                <div class="input-group">
                    <label for="custName">Enter your Name:</label>
                    <input type="text" id="custName" name="custName" class="form-control" value="" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Display Bills</button> <br>
            </form>
       
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['custName'])) {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecopanel"; //database name

        // Retrieve form data
        $name = htmlspecialchars($_POST['custName']);

        //Enable error reporting
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            //if connection fails generate error message
            die("<p style='color:red;'>Connection failed: " . htmlspecialchars($conn->connect_error) . "</p>");
        }

        try {
            // Check if the name exists in the bill database table
            $stmt = $conn->prepare("SELECT * FROM bills WHERE custName = ?");
            $stmt->bind_param("s", $name);
            $stmt->execute();
            $result = $stmt->get_result();

            
            if ($result->num_rows > 0) {
                //if the name exits
                if ($stmt->execute()) {
                //display table heading
                echo "<br/><p class='h3m' style='text-align: left'> Your bills are: </p>";
                echo "<div class='table-responsive' style='max-width: 80%; margin: 0 auto;'>";
                echo "<table class='table table-bordered table-striped' style='text-align: center;'>";
                echo "<thead style='background-color: #f2f2f2;'>";
                echo "<tr>";
                echo "<th style='text-align: center;'>Order ID</th>";
                echo "<th style='text-align: center;'>Name</th>";
                echo "<th style='text-align: center;'>Item</th>";
                echo "<th style='text-align: center;'>Quantity</th>";
                echo "<th style='text-align: center;'>Subtotal</th>";
                echo "</tr></thead>";
                echo "<tbody>";
                //display all occurences with the intered user name
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>" .
                        "<td style='text-align: center;'>" . htmlspecialchars($row['order_id']) . "</td>" .
                        "<td style='text-align: center;'>" . htmlspecialchars($row['custName']) . "</td>" .
                        "<td style='text-align: center;'>" . htmlspecialchars($row['Item']) . "</td>" .
                        "<td style='text-align: center;'>" . htmlspecialchars($row['Quantity']) . "</td>" .
                        "<td style='text-align: center;'>" . htmlspecialchars($row['subtotal']) . "</td>" .
                        "</tr>";
                }
                echo "</tbody></table>";
                echo "</div>";

                //else if an error occered when trying to find the data with the specified name
                } else {
                    echo "<p style='color:red; text-align: left'>Error searching for data: " . htmlspecialchars($stmt->error) . "</p>";
                }
            //this section is if no bills are found with the name the user entered
            } else {
                echo "<p style='color:red; text-align: left'>No bills found with this name.</p>";
            }

            $stmt->close();
        //in case an error occures
        } catch (Exception $e) {
            echo "<p style='color:red; text-align: center'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
        }

        //close connection
        $conn->close();
    }
    ?>

        </div>         
  
   <!--Footer-->
   <br/><br/><br/><br/>
        <div class="footer">
            <footer class="text-center">
                <p>
                    <a href="https://github.com/Juh1810/EcoPanel.git"><img src="gitIcon.png" alt="github icon"
                            style="height: 40px; width: 40px;"></a>
                    <a href="mailto:ecopanel.web@gmail.com"><img src="emailIcon.png" alt="email icon"
                            style="height: 40px; width: 40px;"></a>
                </p>
            </footer>
        </div>
    <!--end of footer code-->
</body>
</html>
l
