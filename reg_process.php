<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">

    <script src="home_files/main.js"></script>

    <title>Sinovac Vaccine | COVID-19 Info Center</title>
    <meta name="description" content="add vaccine registration form">
    <meta name="keywords" content="register for covid-19 vaccine">

    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }
        th, td{
            font-size: 30px;
            padding-bottom: 10px;
        }
        .button_center{
            text-align: center;
            
        }
        button{
            border: none;
            color: white;
            padding: 10px 20px;
            background-color: #4CAF50; /* Green */
            text-decoration: none;
            display: inline-block;
            font-size: 30px;
        }
       

    </style>
</head>

<body>

<div class="container-fluid site-title">
    <!-- <div class=""> -->
    <div class="container">
        <div class="row">
            <h3>COVID-19 Info Center</h3>
        </div>
    </div>
</div>

<div id="cdc-meganav-wrapper">

    <div class="container" id="cdc-meganav-bar">

        <nav class="navbar navbar-expand-xl yamm">

            <ul class="nav navbar-nav nav-justified w-100">

                <li class="nav-item" id="menu-home">
                    <a class="nav-link " href="home.html">
                        Home </a>
                </li>

                <li class="nav-item" id="menu1">
                    <a class="nav-link" href="page1.html">
                        Sinovac Vaccine </a>
                </li>

                <li class="nav-item" id="menu2">
                    <a class="nav-link" href="page2.html">
                        Covaxin Vaccine </a>
                </li>

                <li class="nav-item" id="menu3">
                    <a class="nav-link" href="page3.html">
                        Pfizer-BioNTech Vaccine </a>
                </li>

                <li class="nav-item" id="menu4">
                    <a class="nav-link" href="register.html">
                        Vaccine Registration </a>
                </li>

            </ul>
        </nav>
    </div>
</div>

    <?php
        // echo $_POST['input_name'];
        // echo '<br>';
        // echo $_POST['input_nric'];
        if (file_exists($_POST['input_nric'] . '.txt')) {     //Check for filename with given nric
            echo '<h3>You are already registered!</h3>';
        }
        else {   //filename not found, write to file
           $content_to_write = "Name: " . $_POST['input_name'] . "\n";
           $content_to_write .= "NRIC: " . $_POST['input_nric'] . "\n";
           file_put_contents($_POST['input_nric'] . '.txt', $content_to_write);
           echo '<h3 style="text-align:center">Registration is successful!</h3>';
        }
    ?>
</body>
</html>