<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dbms', 'nik', 'zap');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$email = $_POST ["email007"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";

if(isset($_POST['password007'])){
  if(isset($_POST['firstname007'])&&$_POST['firstname007']!=NULL){
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid";  
            echo $ErrMsg;  
}
 else{



if ( isset($_POST['password007']) && isset($_POST['confirmpassword007']) ) {
    if($_POST['password007'] !== $_POST['confirmpassword007'])
    {
      echo("Passwords dont match");
    }
    else{





if ( isset($_POST['firstname007']) && isset($_POST['lastname007']) && isset($_POST['email007']) && isset($_POST['password007'])) {
$stmt = $pdo->prepare('INSERT INTO customer (firstname, lastname, email, passwords) VALUES ( :fname, :lname, :email, :password)');
$stmt->execute(array(
        ':fname' => $_POST['firstname007'],
        ':lname' => $_POST['lastname007'],
        ':email' => $_POST['email007'],
        ':password' => $_POST['password007'])
);
}
}
}



}
  }
  
  else{
    echo "Enter First Name";
  }

}
?>



<!doctype html>
<html lang="en">
  <head>
    <!--
    } -->
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
    <title>SignUP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
        font-family: 'Roboto Mono', monospace;
        font-weight: 700;
        text-align: center
      }

      h6 {
        font-family: 'Roboto Mono', monospace;
        font-weight: 200;

        text-align: right
      }

      ul {
        font-family: 'Roboto Mono', monospace;
        font-weight: 150;

      }

      a {
        font-family: 'Roboto Mono', monospace;
        font-weight: 200;
      }

      p {
        font-family: 'Roboto Mono', monospace;
        font-weight: 1000;
        text-align: left;
      }
      label {
        font-family: 'Roboto Mono', monospace;
        font-weight: 200;

        text-align: left
      }

      :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}


h3 {
  font-family: 'Graduate';
  text-align: center;
  color: #343a40;
}
body {
  background: #e9ecef;

}

h5 {
  font-family: 'Roboto Mono', monospace;
  font-weight: 500;
  text-align: center
  color: #343a40;
}

h6 {
  font-family: 'Roboto Mono', monospace;
  font-weight: 200;
  color: #343a40;
  text-align: right
}

ul {
  font-family: 'Roboto Mono', monospace;
  font-weight: 300;
  color: #343a40;

}

a {
  font-family: 'Roboto Mono', monospace;
  font-weight: 300;
  color: #343a40;
}

p {
  font-family: 'Roboto Mono', monospace;
  font-weight: 300;
  text-align: center;
  color: #343a40;
}

#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 350px;
  height: 535px;
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
      <li class="nav-item">
        <a class="nav-link" href="login.php">LogIN</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="signup.php">SignUP</a>
      </li>
    </ul>
  </div>
   </nav>


   <body>






    <div id="login">

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div id="login-box" class="col-md-6">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-dark ">SignUP</h3>
                            <hr class="my-4">
                            <div class="form-group">
                                <label for="username" class="text-secondary">First Name:</label><br>
                                <input type="text" name="firstname007" id="firstname007" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-secondary">Last Name:</label><br>
                                <input type="text" name="lastname007" id="lastname007" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-secondary">Email :</label><br>
                                <input type="text" name="email007" id="email007" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-secondary">Password:</label><br>
                                <input type="password" name="password007" id="password007" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-secondary">Confirm Password:</label><br>
                                <input type="password" name="confirmpassword007" id="confirmpassword007" class="form-control">
                            </div>
                            <div class="form-group">
                                <hr class="my-3">
                                <div class="text-center">
                              <input type="submit" name="submit" class="btn text-white bg-dark btn-md" value="submit">
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
