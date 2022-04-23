<!DOCTYPE html>
<?php
session_start();
include "../includes/header.php";

if (!isset($_SESSION['user_email'])) {
    header("location:../users/index.php");
}
?>
<html lang="en">
<head>
    <?php
        $user = $_SESSION['user_email'];
        $get_user = "select * from users where user_email = '$user'";
        $run_user = mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);
					
		$user_id = $row['user_id']; 
		$user_name = $row['user_name'];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo"$user_name"; ?></title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="styles/home_style2.css" media="all"/>
</head>
<body>

<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
        <?php
            echo "
            <div>
                <div>
                    <img src='default_cover.jpg' class='img-rounded'  src='../cover/$user_cover'  alt='cover'>
                </div>
                <form action='profile.php?u_id=$user_id' method='post' enctype='multipart/form-data'>

                <ul class='nav pull-left' style='position: absolute;top: 10px;left: 40px;'>
                <li class='dropdown'>
                    <button class='dropdown-toggle btn btn-default' data-toggle='dropdown'>Change Cover</button>

                    <div class='dropdown-menu'>
				        		<center>
				        		<p> Click <strong>Select Cover</strong> and then click the <br> <strong>Update Cover</strong></p>
				            	<label class='btn btn-info'> Select Cover
						        <input type='file' name='u_cover' size='60' />
						        </label><br><br>
				                <button name='submit' class='btn btn-info'>Update cover</button>
				            	</center>
				            </div>
                </li>
                </ul>
                </form>

            </div>
            "
        ?>
    </div>
</div>
</body>
</html>