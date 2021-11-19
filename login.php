<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dbms', 'nik', 'zap');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if ( isset($_POST['username007']) && isset($_POST['password007'])  ) {

      if($_POST['username007']=='admin@gmail.com' && $_POST['password007']=='admin'){
        header("Location: adminhomepage.php");
      }


      $sql = "SELECT firstname FROM customer
          WHERE email = :em AND passwords = :pw";

          $stmt = $pdo->prepare($sql);

          $stmt->execute(array(
              ':em' => $_POST['username007'],
              ':pw' => $_POST['password007']));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          
          $logininfo = $row[firstname];
          print_r($row[firstname]);
         if ( $row === FALSE ) {
            echo "<p>Sorry, your password was incorrect.</p>\n";
         } else {
            echo "<p>Login success.</p>\n";
            header("Location: homepage.php?name=".urlencode($logininfo));
          /*  header("Location: homepage.php?name=".urlencode($_POST['username007']));
          /*  header("Location: index.php?name=".urlencode($_POST['email'])); */
         }

    }






?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>login</title>

    <style>

    img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

      .hint-text{
        font-family: 'Roboto Mono', monospace;
        font-weight: 400;
        text-align: left
      }
      h3 {
        font-family: 'Graduate';
        text-align: center
      }

      h6 {
        font-family: 'Roboto Mono', monospace;
        font-weight: 200;

        text-align: right
      }

      ul {
        font-family: 'Roboto Mono', monospace;
        font-weight: 300;

      }

      a {
        font-family: 'Roboto Mono', monospace;
        font-weight: 300;
      }

      p {
        font-family: 'Roboto Mono', monospace;
        font-weight: 500;
        text-align: left;
      }
      label {
        font-family: 'Roboto Mono', monospace;
        font-weight: 300;

        text-align: left
      }

      :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #e9ecef;

}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 350px;
  height: 275px;
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  background-color: #ffffff;
  margin-left: auto;
 margin-right: auto


}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}

    </style>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_8gs6or44.json"  background="rgba(0, 0, 0, 0)"  speed="1"  style="width: 60px; height: 60px;"  loop  autoplay></lottie-player> &ensp; <a class="navbar-brand" href="#">NotFreeEbooks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">LogIN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">SignUP</a>
      </li>
    </ul>
  </div>
   </nav>

   <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

   <div id="login">

       <div class="container">
           <div id="login-row" class="row justify-content-center align-items-center">
               <div id="login-column" class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                   <div id="login-box" class="col-md-6">
                       <form id="login-form" class="form" action="" method="post">
                           <h3 class="text-center text-dark ">LogIN</h3>
                           <hr class="my-4">

                           <div class="form-group">
                               <label for="username" class="text-secondary">Email :</label><br>
                               <input type="email" name="username007" id="email007" class="form-control">
                           </div>
                           <div class="form-group">
                               <label for="password" class="text-secondary">Password:</label><br>
                               <input type="password" name="password007" id="password007" class="form-control">
                           </div>

                           <div class="form-group">
                               <hr class="my-3">
                               <div class="text-center">
                             <input type="submit" name="submit" class="btn text-white bg-dark btn-md" value="LogIN">
                           </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</body>
