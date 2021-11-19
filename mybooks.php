<?php

if ( !isset($_GET['name']) || strlen($_GET['name']) < 1 ) {
    die('Nice Try!');
}
$arr=array("");
session_start();

$name99 = ($_GET['name']);
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <link href="styles2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>My Books</title>

    <style>

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.scroll-box {
            overflow-y: scroll;
            height: 200px;
            padding: 0rem
            
        }

   .card-img-top {
    margin-left: 0px;
    width : 240px;
    height : 375px;
   }
      h3{
        font-family: 'Roboto Mono', monospace;
        font-weight: 500;
        text-align: left;
        font-size: 12px;

      }
      h5 {
        font-family: 'Roboto Mono', monospace;
        font-weight: 500;
        text-align: center
      }

      h6 {
        font-family: 'Roboto Mono', monospace;
        font-weight: 300;
        font-size:14px;
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
        font-weight: 1000;
        font-size:16px;
        text-align: center;
      }
      .carousel-inner > .item {
    position: relative;
    display: none;
    -webkit-transition: 0.6s ease-in-out left;
    -moz-transition: 0.6s ease-in-out left;
    -o-transition: 0.6s ease-in-out left;
    transition: 0.6s ease-in-out left;
}
    </style>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_8gs6or44.json"  background="rgba(0, 0, 0, 0)"  speed="1"  style="width: 60px; height: 60px;"  loop  autoplay></lottie-player> &ensp; <a class="navbar-brand" href="#">NotFreeEbooks</a>

  <a class="navbar-brand" href=""><b><?php echo($name99)?></b></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="homepage.php?name=<?php echo($name99)?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="" >MyBooks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php?name=<?php echo($name99)?>" onclick="">Cart</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Index.php">LogOut</a>

      </li>
    </ul>
  </div>
   </nav>


  </div>
</div>
  </head>

  <body>
  <div class="content">
  <h1 class="heading">Your Books</h1>
  <p class="description"></p><a class="card">





    <div class="front">
      <img src="image\The Brothers Karamazov.jpg" class="card-img-top">
    </div>
    <div class="back">
      <div>
        <p>The Brothers Karamazov</p>
        <h6>- Fyodor Dostoeyevsky</h6>
        <div class="scroll-box">
        <h3>If you were to destroy in mankind the belief in immortality, not only love but every living force maintaining the life of the world would at once be dried up. Moreover, nothing then would be immoral; everything would be lawful, even cannibalism.</h3>
        </div>
        <button class="button">Download</button>
      </div>
    </div></a>


    <a class="card" >
    <div class="front">
      <img src="image\Maps of Meaning.jpg" class="card-img-top">
    </div>
    <div class="back">
      <div>
      <p>Maps of Meaning (The Architecture of Belief)</p>
        <h6>- Jordan Peterson</h6>
        <div class="scroll-box">
        <h3>The purpose of life, as far as I can tell… is to find a mode of being that’s so meaningful that the fact that life is suffering is no longer relevant.</h3>
        </div>
        <button class="button">Download</button>
      </div>
    </div></a>

    <a class="card" >
    <div class="front">
      <img src="image\Demons.jpg" class="card-img-top">
    </div>
    <div class="back">
      <div>
      <p>Demons</p>
        <h6>- Fyodor Dostoeyevsky</h6>
        <div class="scroll-box">
        <h3>The object of every national movement, in every people and at every period of its existence is only the seeking for its god, who must be its own god, and the faith in Him as the only true one. God is the synthetic personality of the whole people, taken from its beginning to its end. It has never happened that all, or even many, peoples have had one common god, but each has always had its own. Its a sign of the decay of nations when they begin to have gods in common. When gods begin to be common to several nations the gods are dying and the faith in them, together with the nations themselves. The stronger a people the more individual their God. There never has been a nation without a religion, that is, without an idea of good and evil.</h3>
        </div>
        <button class="button">Download</button>
      </div>
    </div></a>

  </body>

</html>
