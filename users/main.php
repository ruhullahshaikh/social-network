<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/facebook.webp" type="image/x-icon">
    <title>facebook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>

    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <center>
                    <h1 style="color:aliceblue">Facebook</h1>
                </center>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-sm-6" style="left: 0.5%;">
            <img src="../images/social1.jfif" class="img-rounded first" title="icon" width="600px" height="565px" alt="refresh" style="color: white;">

                <div id="centered1" class="center">
                    <h3 style="color: white;"><span class="glyphicon glyphicon-search">&nbsp;<strong>Follow</strong></span></h3>
                </div>

                <div id="centered2" class="center">
                    <h3 style="color: white;"><span class="glyphicon glyphicon-search">&nbsp;<strong>Comment and Interact</strong></span></h3>
                </div>

                <div id="centered3" class="center">
                    <h3 style="color: white;"><span class="glyphicon glyphicon-search">&nbsp;<strong>Conversation</strong></span></h3>
                </div>
            </img>
        </div>

        <div class="col-sm-6" style="left: 8%;">
            <img src="../images/social1.jpg" class="img-rounded" title="icon" width="60px" height="55px" alt="refresh">
            <h2><strong>Signup to see the Networking World!!!</strong></h2>
            <form action="" method="post">

                <?php
                if (isset($_POST['signup'])) {
                    echo "<script>window.open('signup.php','_self')</script>";
                }
                ?>
                <button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button>
                <br>
                <br>

                <?php
                if (isset($_POST['login'])) {
                    echo "<script>window.open('login.php','_self')</script>";
                }
                ?>

                <button id="login" class="btn btn-info btn-lg" name="login">Login</button>
            </form>
        </div>

    </div>

</body>

</html>