<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EcoPanel | Shop</title>
        <link rel="shortcut icon" type="x-icon" href="logo.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleSheet.css">
        

        <style>
            #layout {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                gap: 20px;
                padding: 20px;
                list-style-type: none;
            }
            .layout-item {
                background-color: white;
                border-radius: 8px;
                width: 300px;
                padding: 15px;
                transition: transform 0.3s;
                text-align: center;
            }
            .layout-item:hover {
                transform: scale(1.05);
            }
            .layout-item img {
                width: 300px;
                height: 300px;
                border-radius: 8px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
                object-fit: cover;
            }
            .layout-item p {
                font-size: 20px;
                font-weight: 500;
                color: #333;
                margin-top: 10px;
                font-style: italic;
            }
            hr {
                border: none;
                height: 2px;
                background-color: #817f7f;
                width: 80%;
                margin: 10px auto;
            }
            button {
                display: block;
                width: 2cm;
                margin: 20px auto;
                padding: 10px;
                font-size: 15px;
                font-weight: bold;
                border-radius: 5px;
                background-color: #007bff;
                color: white;
                border: none;
                transition: background-color 0.3s ease;
                text-align: center;
            }

            table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        form {
            margin-bottom: 20px;
        }

        table tbody thead th {
            background-color: #45a049;
            color: white;
            font-size: 16px;
            padding: 12px;

        }

         #table1 thead th {
            background-color: #45a049;
            color: white;
            font-size: 16px;
            padding: 12px;

        }

            .search-section {
            margin-top: 20px;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tbody td {
            padding: 12px;
            text-align: center;
        }

            button:hover {
                background-color: #0056b3;
                transform: scale(1.05);
            }
            #search-bar-container {
                display: flex;
                justify-content: center;
                margin: 20px auto;
            }
            #search-bar {
                width: 500px;
                padding: 1px;
                font-size: 16px;
                border: 2px solid #007bff;
                border-radius: 8px;
            }

            #search-bar-container {
    display: flex;
    justify-content: center;
    margin: 10px 0;
}

#search-bar {
    width: 500px;
    padding: 5px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.search-section button {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

.search-button:hover {
    background-color: #45a049;
       
}

.search-section input[type="text"] {
            width: 70%;
            padding: 8px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
                        <li><a href="shop.html" style="color: rgb(255, 248, 248);">Shop</a></li>
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

<!-- ------------------------------------------------------------------------------------------------------------------------- -->
        <div class="highlighted-section">
            <div class="pageName">
                <p>Shop</p><br/>
            </div>
        </div>

        <!-- Panels Section -->
        <h1 style="text-align: center;">Panels</h1>
        <hr/>
        <ul id="layout">
            <li class="layout-item">
                <img src="panel1.jfif" alt="solar panel product 1">
                <p>Monocrystalline 330W</p>
                <p style="color: darkcyan;">$335</p>
            </li>
            <li class="layout-item">
                <img src="panel2.jfif" alt="solar panel product 2">
                <p>Polycrystalline 330W</p>
                <p style="color: darkcyan;">$363</p>
                
            </li>
            <li class="layout-item">
                <img src="panel4.jfif" alt="solar panel product 3">
                <p>Monocrystalline 400W</p>
                <p style="color: darkcyan;">$550</p>
                
            </li>
            <li class="layout-item">
                <img src="panel5.jfif" alt="solar panel product 4">
                <p>Polycrystalline 400W</p>
                <p style="color: darkcyan;">$380</p>
                
            </li>
        </ul><br/>

        <!-- Devices Section -->
        <h1 style="text-align: center;">Solar Energy Devices</h1>
        <hr/>
        <div id="layout">
            <table cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th><img src="device5.jfif" alt="device 1"></th>
                        <th><img src="device2.jfif" alt="device 2"></th>
                        <th><img src="device3.jfif" alt="device 3"></th>
                        <th><img src="device4.jfif" alt="device 4"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Solar Panel Holder
                            <p style="color: darkcyan;">$30</p>
            
                        </td>
                        <td>
                            Solar Charge 30000mAh
                            <p style="color: darkcyan;">$65</p>
                            
                        </td>
                        <td>
                            Solar Charging Surveillance Camera
                            <p style="color: darkcyan;">$95</p>
                            
                        </td>
                        <td>
                            Solar Powered Light Tout
                            <p style="color: darkcyan;">$40</p>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- ----------------------------------------------------------------------------------------------------------------------- -->
        <!-- Search Bar -->
        <div class="container-fluid">

            <div class="search-section">
                <h4>Search For a Product</h4>
                <form  action="shop.php" method="POST">
                    <label for="searchTerm">Enter a Product:</label>
                    <input type="text" id="searchTerm" name="searchTerm" />
                    <button type="submit">search</button>
                </form>
            </div>
            

           <!-- ---------------------------------------------------------------- -->
            <table id="table1" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;">Product</th>
                        <th style="text-align: center;">Price</th>
                    </tr>
                </thead>
                <!-- The filtered results will be displayed here from search_handler.php -->
                <tbody>
                <?php
                    include 'search_handel.php';
                    
                ?>
                </tbody>
            </table>
        </div>

        <!-- ------------------------------------------------------------------------- -->
        <br/>
        <br/>
        <br/>
        <br/>

        <footer class="container-fluid text-center">
            <p>
                <a href="https://github.com/Juh1810/EcoPanel.git"><img src="gitIcon.png" alt="GitHub" style="height: 40px; width: 40px;"></a>
                <a href="mailto:ecopanel.web@gmail.com"><img src="emailIcon.png" alt="Email" style="height: 40px; width: 40px;"></a>
            </p>
        </footer>
    </body>
</html>
