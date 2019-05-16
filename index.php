<html lang="en">
<head>
    <title>HMS | Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="node_modules/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/jquery/src/ajax.js"></script>
    <script type="text/javascript" src="node_modules/jquery/src/jquery.js"></script>
    <style>
        legend {
            color: #1e41ff;
            font-family: aguafina-script;
            font-size: 14px
        }

        legend {
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            padding: 4px 8px;
            text-align: left;
            text-transform: uppercase;
        }

        fieldset {
            border-color: #52B2EF;
            border-radius: 15px;;
            box-shadow: #2C6994
        }
    </style>
</head>
<body>
<div class="container" style="margin-top: 5%;">
    <form action="Sign_In_Connection.php" method="post" accept-charset="UTF-8"
          style="margin-left: 25%;margin-right: 25%;background-color: #999999;padding: 1%">
        <fieldset>
            <legend>Login Panel</legend>
            <div class="form-group" style="align-content:center">
                <label><strong>Username</strong></label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group" style="align-content:center">
                <label><strong>Pasword</strong></label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group" style="float: right">
                <button  type="submit" class="btn btn-sm btn-primary">Login</button>
            </div>
        </fieldset>
    </form>
</div>


</body>
</html>