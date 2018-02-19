<!DOCTYPE html>

<html lang="en">

<head>
        <?php include 'nav/meta.php'; ?>
        <?php include 'nav/css.php'; ?>
        <link href="css/signin.css" rel="stylesheet">
</head>

<body>
        <?php
require('config/config.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form text-center'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
                <div class="container">
                        <form class="form-signin" name="registration" action="" method="post">
                                <h2 class="form-signin-heading">Registration</h2>
                                <input class="form-control" type="text" name="username" placeholder="Username" required />
                                <input class="form-control" type="email" name="email" placeholder="Email" required />
                                <input class="form-control" type="password" name="password" placeholder="Password" required />
                                <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Register" />
                        </form>
                        <p class="text-center">Already Registered
                                <a href='login.php'>Back to Login Pages</a>
                        </p>
                </div>
                <?php } ?>
</body>

</html>