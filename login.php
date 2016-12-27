<br><br><br><center><h1>We Are The WareHouse Management System</h1></center>
<?php
   ob_start();
   session_start();
?>
<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
<html lang = "en"> 
   <head>
      <title>Warehouse</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link rel="stylesheet" href="css/style.css"> 
   </head>
   <body>
         <?php
            $msg = '';
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
               if ($_POST['username'] == 'root' && 
                  $_POST['password'] == '2230') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time(10000);
                  $_SESSION['username'] = 'root';
                  header( 'Location: home.php' ) ; 
                  //echo 'You have entered valid user name and password';
               }else {
                  $msg = "<font color='red'>Wrong username or password</font>";
               }
            }
         ?>
      </div> <!-- /container -->
      <div class = "container">
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h2 class="form-signin-heading">Please login</h2>
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
         Click here to logout <a href = "logout.php" tite = "Logout">Session.
      </div>  
   </body>
</html>