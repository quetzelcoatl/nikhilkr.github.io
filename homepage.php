<?php


if ( !isset($_GET['name']) || strlen($_GET['name']) < 1 ) {
    die('Nice Try! gg');
}
$arr=array("");
session_start();
if(isset($_SESSION)){
 // print_r($_SESSION);
}


$bookid=array();
$bookname=array();
$bookimage=array();
$bookquote=array();
$bookprice=array();
$bookauthor=array();
$bookgenre=array();

$authorid=array();
$authorname=array();

$genreid=array();
$genrename=array();

$db = mysqli_connect("localhost", "nik", "zap", "dbms");

$bookresult = mysqli_query($db, "SELECT * FROM books");
$authorresult = mysqli_query($db, "SELECT * FROM author");
$genreresult = mysqli_query($db, "SELECT * FROM genre");

while ($row = mysqli_fetch_array($bookresult)) {

  array_push($bookid,$row['book_id']);
  array_push($bookname,$row['title']);
  array_push($bookimage,$row['image']);
  array_push($bookquote,$row['quote']);
  array_push($bookprice,$row['price']);
  array_push($bookauthor,$row['author_id']);
  array_push($bookgenre,$row['genre_id']);
}

while ($row2 = mysqli_fetch_array($authorresult)) {

  array_push($authorid,$row2['author_id']);
  array_push($authorname,$row2['name']);
}

while ($row3 = mysqli_fetch_array($genreresult)) {

  array_push($genreid,$row3['genre_id']);
  array_push($genrename,$row3['genrename']);
}

for($i=0;$i<count($bookid);$i++){
  $tempid77 = $bookid[$i];
  $tempname77 = $bookname[$i];
  if (isset($_POST[$tempid77])){
    $_SESSION[$tempname77] = $tempid77;
  }
  }


/*
echo("\n\n");
print_r($authorid);
print_r($authorname);
print_r($bookauthor);
/*
print_r($bookid);
echo("<br>");
print_r($bookname);
echo("<br>");
print_r($bookimage);
echo("<br>");
print_r($bookquote);
echo("<br>");
print_r($bookprice);
echo("<br>");
*/
$name99 = ($_GET['name']);
 ?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="baboonstyle.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Homepage</title>

    <style>

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.scroll-box {
            overflow-y: scroll;
            height: 150px;
            padding-left:3px;
            padding-left:3px;
            
        }

   .card-img-top {
    margin-left: auto;
  margin-right: auto;
    width : 175px;
    height : 300px;
   }
   b{
     color: #000000;
     font-size:10px;
     text-align: right
   }
   i{
    font-size:8px; 
    color:#000000;
     text-align: right

   }
   small{
    font-size:8px; 
    color:#000000;
     text-align: left
   }
   pre { 
    white-space: pre-wrap; 
    word-break: break-word;
}
  .img-responsive{
    height:400px;
    width:600px;
  }

      h5 {
        font-family: 'Roboto Mono', monospace;
        font-weight: 500;
        text-align: center
      }

      h6 {
        font-family: 'Roboto Mono', monospace;
        font-weight: 300;
        color: #000000;
        font-size:12px;
        text-align: right
        
      }
      h3 {
        font-family: 'Roboto Mono', monospace;
        font-weight: 300;
        color: #000000;
        font-size:12px;
        text-align: left
        
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
  <a class="navbar-brand" href=""><?php echo($name99)?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
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



    <div class="jumbotron jumbotron-fluid" style="background:;">
    <div class="container">
    <h5 class="display-4">Welcome to NotFreeEBooks.com</h5>
    <hr class="my-4">
    <p class="lead">"If people never did silly things, nothing intelligent would ever get done."</p>
    <h6 class="display-5"><i> - Ludwig Wittgenstein</i></h6>
    <hr class="my-4">
  </div>
</div>
  </head>
  <body>

  <form method = "post">
  <label>Search</label>
  <input type = "text" name="booksearch">
  <input type = "submit" class = "btn btn-outline-dark" name = "submitsearch">
  </form>
    <?php
  
  
    if(isset($_POST["submitsearch"])){

      $str = $_POST["booksearch"];
      $searchresult007 = mysqli_query($db, "SELECT * FROM books WHERE title = '$str'");
      
      while ($row007 = mysqli_fetch_array($searchresult007)){
        if($str == $row007['title']){
            $lolquote = $row007['quote'];
            $lolauthor = $row007['author'];
            $lolgenre = $row007['genre'];
            $lolid = $row007['book_id'];
            $lolimage = $row007['image'];



      $author007 = array_search($lolauthor, $authorid);
      $finalauthorlolfml = $authorname[$author007];

      $genre007 = array_search($lolgenre, $genreid);
      $finalgenrelolfml = $genrename[$genre007];

            echo("BOOK FOUND $str");
            echo("<div class = \"col-md-2\">
      <section class=\"card\">
      <div class=\"card__side card__side--front\">
      <img src=\"image\\$lolimage\" class=\"card-img-top\"></div>
       
      <div class=\"card__side card__side--back\">
      <div class=\"container\">
      <pre>      
       <b>$str</b>
       <i>-$finalauthorlolfml</i>
       <i>$finalgenrelolfml</i>
       <div class=\"scroll-box\">
        <small>$lolquote</small>
        </div>
        </pre>
        <form method=\"POST\" >
     <div>
         <button type=\"submit\" class=\"btn btn-dark\" name=\"$lolid\">Add To Cart</button>
       </div>
 </form>
      
      </div>
        </div>
       </section>
     </div>");
     echo("");
        echo("<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>");
        }
        echo("</div></div");

      }

    }

    else{

    


    $k = 0;
    
      echo("<div class=\"container\">
        <div class=\"row\">");
    for($i=0;$i<count($bookid);$i++) {
      $tempimage = $bookimage[$i];
      $temptitle = $bookname[$i];
      $tempquote = $bookquote[$i];
      $tempprice = $bookprice[$i];
      $tempauthor99 = $bookauthor[$i];
      $tempgenre99 = $bookgenre[$i];
      $tempid = $bookid[$i];

      $author007 = array_search($tempauthor99, $authorid);
      $finalauthorlolfml = $authorname[$author007];

      $genre007 = array_search($tempgenre99, $genreid);
      $finalgenrelolfml = $genrename[$genre007];

      $k=$k+1;
      echo("<div class = \"col-md-2\">
      <section class=\"card\">
      <div class=\"card__side card__side--front\">
      <img src=\"image\\$tempimage\" class=\"card-img-top\"></div>
       
      <div class=\"card__side card__side--back\">
      <div class=\"container\">
      <pre>      


       <b>$temptitle</b>
       <i>-$finalauthorlolfml</i>
       <i>$finalgenrelolfml</i>
       <div class=\"scroll-box\">
        <small>$tempquote</small>
        </div>
        </pre>
        <form method=\"POST\" >
     <div>
         <button type=\"submit\" class=\"btn btn-dark\" name=\"$tempid\">Add To Cart</button>
       </div>
 </form>
      
      </div>
        </div>
       </section>
     </div>");
  echo("");
        echo("<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>");
  }
  echo("</div></div");

}

//}
    ?>


            </div>
          </div>
          </div>
          </div>
      <div class="container-fluid pt-7 bg-dark text-white">
        <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="img-responsive" src="imgs\Dostoeyevsky.jpg" alt="First slide"  >
                  <div class="carousel-caption d-none d-md-block">
                      <p class="text-white  bg-dark">Fyodor Dostoeyevsky</p>

                  </div>
            </div>
              <div class="carousel-item">
                  <img class="img-responsive" src="imgs\Tolstoy.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                      <p class="text-white  bg-dark">Leo Tolstoy</p>
                  </div>
              </div>
              <div class="carousel-item">

                  <img class="img-responsive" src="imgs\jung.jpeg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                      <p class="text-white  bg-dark">Carl Jung</p>
                  </div>
              </div>
              <div class="carousel-item">

                  <img class="img-responsive" src="imgs\solzhenitsyn2.jpg" alt="Fourth slide">
                  <div class="carousel-caption d-none d-md-block">
                      <p class="text-white  bg-dark">Aleksandr Solzhenitsyn</p>
                  </div>
              </div>
              <div class="carousel-item">

                  <img class="img-responsive" src="imgs\nietzsche.jpg" alt="Fifth slide">
                  <div class="carousel-caption d-none d-md-block">
                      <p class="text-white  bg-dark">Friedrich Nietzsche</p>
                  </div>
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
    </div>



  </body>

</html>
