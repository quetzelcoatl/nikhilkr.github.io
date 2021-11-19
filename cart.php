<?php
/*
if ( !isset($_GET['name']) || strlen($_GET['name']) < 1 ) {
    die('Name parameter missing');
}
*/
if ( !isset($_GET['name']) || strlen($_GET['name']) < 1 ) {
    die('Nice Try!');
}
session_start();
if(isset($_SESSION)){
  //print_r($_SESSION);
}
/*
$name99 = ($_GET['name']);
echo $name99;
*/
$name99 = ($_GET['name']);

$cookie_value = array();

$bookid=array();
$bookname=array();
$bookprice=array();
$bookauthor=array();
$bookgenre=array();
$bookpub=array();

$authorid=array();
$authorname=array();

$genreid=array();
$genrename=array();

$pubid=array();
$pubname=array();

$db = mysqli_connect("localhost", "nik", "zap", "dbms");

$bookresult = mysqli_query($db, "SELECT * FROM books");
$authorresult = mysqli_query($db, "SELECT * FROM author");
$genreresult = mysqli_query($db, "SELECT * FROM genre");
$pubresult = mysqli_query($db, "SELECT * FROM publisher");

while ($row = mysqli_fetch_array($bookresult)) {

  array_push($bookid,$row['book_id']);
  array_push($bookname,$row['title']);
  array_push($bookprice,$row['price']);
  array_push($bookauthor,$row['author_id']);
  array_push($bookgenre,$row['genre_id']);
  array_push($bookpub,$row['publisher_id']);
}


while ($row2 = mysqli_fetch_array($authorresult)) {

  array_push($authorid,$row2['author_id']);
  array_push($authorname,$row2['name']);
}

while ($row3 = mysqli_fetch_array($genreresult)) {

  array_push($genreid,$row3['genre_id']);
  array_push($genrename,$row3['genrename']);
}

while ($row4 = mysqli_fetch_array($pubresult)) {

  array_push($pubid,$row4['publisher_id']);
  array_push($pubname,$row4['name']);
}
//print_r($_POST);


 ?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Cart</title>

    <style>
    th {
       font-family: 'Roboto Mono', monospace;
        font-weight: 500;
        font-size:24px; 
        text-align: center

    }
    tr {
       font-family: 'Roboto Mono', monospace;
       font-size:16px; 
        font-weight: 400;
        text-align: left

    }
    td {
       font-family: 'Roboto Mono', monospace;
       font-size:16px; 
        font-weight: 400;
        text-align: left

    }



    img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

      h5 {
        font-family: 'Roboto Mono', monospace;
        font-weight: 500;
        text-align: center
      }

      h6 {
        font-family: 'Roboto Mono', monospace;
        font-weight: 300;

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
        <a class="nav-link" href="">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Index.php">LogOUT</a>
      </li>
    </ul>
  </div>
   </nav>



  </head>

  <body>
  <br><br><br>
    
    <?php
    if(isset($_POST['deletecart'])){

      echo "THE CART HAS BEEN DESTROYED";
      session_destroy();
  }
  echo "<div class=\"container\">";
  echo "<table>";
  echo "<table border=\"1px\" cellpadding=\"4\" cellspacing=\"50\">";
  echo "<th>Book ID</th><th>Title</th><th>Author</th><th>Genre</th><th>Publisher</th><th>Price</th><th>Remove</th>";
  for ($i=0;$i<count($_SESSION);$i++) {
    $tmparr = array();
    $tmparr = (array_keys($_SESSION));
    $tmpname = $tmparr[$i];
    $tmpid = $_SESSION[$tmpname];

      $bookidfinal = array_search($tmpid, $bookid);
      $finalbooklolfml = $bookname[$bookidfinal];
      $finalpricelolfml = $bookprice[$bookidfinal];

      

      $finalauthoridlolfml = $bookauthor[$bookidfinal];
      $finalgenreidlolfml = $bookgenre[$bookidfinal];
      $finalpublisheridlolfml = $bookpub[$bookidfinal];

      $author007 = array_search($finalauthoridlolfml, $authorid);
      $finalauthorlolfmlpt2 = $authorname[$author007];

      $genre007 = array_search($finalgenreidlolfml, $genreid);
      $finalgenrelolfmlpt2 = $genrename[$genre007];

      $pub007 = array_search($finalpublisheridlolfml, $pubid);
      $finalpublolfmlpt2 = $pubname[$pub007];

      if ( isset($_POST[$bookidfinal]) ) {
        $_SESSION[$tmpname] = 9999;
      }

      if($_SESSION[$tmpname]!=9999){
      echo "<tr>";
      echo "<td>$tmpid</td>";
      echo "<td>$tmpname</td>";
      echo "<td>$finalauthorlolfmlpt2</td>";
      echo "<td>$finalgenrelolfmlpt2</td>";
      echo "<td>$finalpublolfmlpt2</td>";
      echo "<td>$finalpricelolfml</td>";
      echo "<form method=\"POST\" ><div>";
      echo "<td><input type=\"submit\" value=\"X\" name=\"$bookidfinal\"</td></div></form>";
      echo "</tr>";
      array_push($cookie_value,$tmpid);
      $sum = $sum+$finalpricelolfml;
      }

      
        
        
  }
  if($sum!=0){
  echo "<tr>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td>$sum</td>";
  echo "<td><form method=\"post\">
  <input type=\"submit\" name=\"deletecart\" class=\"btn btn-outline-dark\"
  class=\"button\" value=\"Delete ALL\" />
</form></td>";

  }
  echo "</tr>";
 
  echo "</table>";
    ?>

<?php
//print($_COOKIE['lampreysrevenge']);
if(isset($_POST['purchase'])){
  session_destroy();
$cookie_name = "lampreysrevenge";


$temparr = array();
$temparr = $_COOKIE['lampreysrevenge'];

for($i = 0;$i<count($temparr);$i=$i+1){

  if(array_search($cookie_value, $temparr[$i])==FALSE){
    array_push($cookie_value,$temparr[$i]);
  }
  
}

$json = json_encode($cookie_value);
//array_push($cookie_value,$json);


setcookie($cookie_name, $json);
}
?>
<br><br><br>
<form method="post">
  <input type="submit" name="purchase" class="btn btn-outline-dark"
  class="button" value="Purchase" />
</form>
  </body>

</html>
