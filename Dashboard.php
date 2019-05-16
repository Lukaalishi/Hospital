<html lang="en">
<head>
    <title>HMS | Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="node_modules/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/jquery/src/ajax.js"></script>
    <script type="text/javascript" src="node_modules/jquery/src/jquery.js"></script>
    <style>
        body {
            width: 80%;
            margin: 0 auto;
        }

        #content {
            overflow: auto;
            height: 100%;
        }

        #nav, #feature, #footer {
            background-color: #efefef;
            padding: 10px;
            margin: 10px;
        }

        .column1, .column2, .column3 {
            background-color: #efefef;
            width: 31%;
            float: left;
            margin: 10px;
        }

        li {
            display: inline;
            padding: 5px;
        }

        a:link {
            text-decoration: none;
        }
        a:hover{
            color: red;
        }
    </style>
</head>
<body>
<div id="header">
    <h1>Logo</h1>
    <div id="nav">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href=""><?php
                    session_start();
                    echo $_SESSION['userid'];
                    ?> <i class="fas fa-user-circle"></i> </a></li>
        </ul>
    </div>
</div>
<div id="content">
    <div id="feature">
        <p>Feature</p>
    </div>
    <div class="article column1">
        <p>Column One</p>
    </div>
    <div class="article column2">
        <p>Column Two</p>
    </div>
    <div class="article column3">
        <p>Column Three</p>
    </div>
</div>
<div id="footer">
    <p>&copy; Copyright 2011</p>
</div>
</body>

</html>

