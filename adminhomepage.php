<?php
$authorid=array();
$authorname=array();
$genreid=array();
$genrename=array();
$publisherid=array();
$publishername=array();

$db = mysqli_connect("localhost", "nik", "zap", "dbms");

$authorresult = mysqli_query($db, "SELECT * FROM author");
while ($row = mysqli_fetch_array($authorresult)) {

  array_push($authorid,$row['author_id']);
  array_push($authorname,$row['name']);
  echo "</div>";
}
/*
print_r($authorid);
echo("<br>");
print_r($authorname);
echo("<br>");
echo("<br>");*/


$genreresult = mysqli_query($db, "SELECT * FROM genre");
while ($row = mysqli_fetch_array($genreresult)) {

  array_push($genreid,$row['genre_id']);
  array_push($genrename,$row['genrename']);
  echo "</div>";
}
/*
print_r($genreid);
echo("<br>");
print_r($genrename);
echo("<br>");
echo("<br>");*/


$pubresult = mysqli_query($db, "SELECT * FROM publisher");
while ($row = mysqli_fetch_array($pubresult)) {

  array_push($publisherid,$row['publisher_id']);
  array_push($publishername,$row['name']);
  echo "</div>";
}
/*
print_r($publisherid);
echo("<br>");
print_r($publishername);
echo("<br>");
echo("<br>");*/

?>



<!DOCTYPE html>
<html>
<head>
<title>ADMIN HOMEPAGE</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>




<div id="content">

  <form method="POST" action="" enctype="multipart/form-data">
      <h1 class="display-2"><u>Book Entry</u></h5>
      <p class="font-weight-bold">Title</p>
      <input type="text" name="titlename" value=""/>
      <p class="font-weight-bold">Date</p>
      <input type="date" name="datebook" value=""/>
      <p class="font-weight-bold">Size</p>
      <input type="size" name="size" value=""/>
      <p class="font-weight-bold">Quote</p>
      <input type="text" name="quote" value="">
      <p class="font-weight-bold">Price</p>
      <input type="number" name="price" value="">

      <input type="file" name="uploadfile" value=""/>

      <p class="font-weight-bold"></p>
      <?php
          echo("  <div class=\"form-group col-md-4\">
                <label for=\"inputState\">Author</label>
                <select id=\"inputState\" name=\"authorlist\" class=\"form-control\">");

            for($i=0;$i<=count($authorname)-1;$i++){
                  echo("<option>$authorname[$i]</option>");
            }
            echo("</select>
              </div>");
        ?>

        <p class="font-weight-bold"></p>
        <?php
            echo("  <div class=\"form-group col-md-4\">
                  <label for=\"inputState\">Genre</label>
                  <select id=\"inputState\" name=\"genrelist\" class=\"form-control\">");

              for($i=0;$i<=count($genrename)-1;$i++){
                    echo("<option>$genrename[$i]</option>");
              }
              echo("</select>
                </div>");
          ?>

          <p class="font-weight-bold"></p>
          <?php
              echo("  <div class=\"form-group col-md-4\">
                    <label for=\"inputState\">Publisher</label>
                    <select id=\"inputState\" name=\"publist\" class=\"form-control\">");

                for($i=0;$i<=count($publishername)-1;$i++){
                      echo("<option>$publishername[$i]</option>");
                }
                echo("</select>
                  </div>");
            ?>

        <p class="font-weight-bold"></p>
      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>



        <?php
         $msg = "";
         // If upload button is clicked ...
         if (isset($_POST['upload'])) {

           $filename = $_FILES["uploadfile"]["name"];
           $tempname = $_FILES["uploadfile"]["tmp_name"];
               $folder = "image/".basename($filename);

           $authorkey = array_search($_POST['authorlist'], $authorname);
           $genrekey = array_search($_POST['genrelist'], $genrename);
           $pubkey = array_search($_POST['publist'], $publishername);

           $authorkey = (int)$authorkey;
           $genrekey = (int)$genrekey;
           $pubkey = (int)$pubkey;

           $authorkey = (int)$authorid[$authorkey];
           $genrekey = (int)$genreid[$genrekey];
           $pubkey = (int)$publisherid[$pubkey];

           /*
           echo ($authorkey." ");
           echo $_POST['authorlist'];
           echo("<br>");
           echo ($genrekey." ");
           echo $_POST['genrelist'];
           echo("<br>");
           echo ($pubkey." ");
           echo $_POST['publist'];
           echo("<br>");*/
           
          if($_POST['titlename'] == NULL){
            echo("<h1 class=\"display-2\">Please enter titlename</h5>");

          }

          elseif($_POST['size'] == NULL){
            echo("<h1 class=\"display-2\">Please enter size</h5>");
          }

          elseif($_POST['quote'] == NULL){
            echo("<h1 class=\"display-2\">Please enter quote</h5>");
          }

          elseif($_POST['price'] == NULL){
            echo("<h1 class=\"display-2\">Please enter price</h5>");
          }

          else{

           $title = $_POST['titlename'];
           $Date = $_POST['datebook'];
           $size = $_POST['size'];
           $quote = $_POST['quote'];
           $price = $_POST['price'];

           /*
           echo(gettype($authorkey));
           echo("<br>");
           echo(gettype($genrekey));
           echo("<br>");
           echo(gettype($pubkey));
           echo("<br>");*/
           
          
           $quote = str_replace( array( '\'', '"', 
            ';', '<', '>' ), '', $quote); 

           $db = mysqli_connect("localhost", "nik", "zap", "dbms");

               $sql22 = "INSERT INTO books (author_id,publisher_id, genre_id, title,pubdate,size,quote,price,image) VALUES ('$authorkey','$pubkey','$genrekey','$title','$Date','$size','$quote','$price','$filename')";

               mysqli_query($db, $sql22);

               if (move_uploaded_file($tempname, $folder))  {
                   $msg = "Image uploaded successfully";
               }else{
                   $msg = "Failed to upload image";
             }
             header("Location: adminhomepage.php");
         }
        }
         $result = mysqli_query($db, "SELECT * FROM books");
        
       ?>
  </form>
  <hr class="my-4">
  <hr class="my-4">
  <hr class="my-4">

</div>

<div id="contentauthor">
  <form method="POST" action="" enctype="multipart/form-data">
      <h1 class="display-2"><u>Author Entry</u></h5>
      <p class="font-weight-bold">Author Name</p>
      <input type="text" name="authornameentry" value=""/>
      <p class="font-weight-bold">Date Of Birth</p>
      <input type="date" name="authordobentry" value=""/>
      <p class="font-weight-bold">Quote</p>
      <input type="text" name="authorquoteentry" value=""/>
      <br>
      <br>
      <div>
          <button type="submit" name="uploadauthordetails">UPLOAD</button>
        </div>
  </form>
  <hr class="my-4">
  <hr class="my-4">
  <hr class="my-4">

    <?php

    if (isset($_POST['uploadauthordetails'])){

      $authornameentry = $_POST['authornameentry'];
      $authordobentry = $_POST['authordobentry'];
      $authorquoteentry = $_POST['authorquoteentry'];

      $db = mysqli_connect("localhost", "nik", "zap", "dbms");

      $sql222 = "INSERT INTO author (name,dob,quote) VALUES ('$authornameentry','$authordobentry','$authorquoteentry')";
      mysqli_query($db, $sql222);

      if (move_uploaded_file($tempname, $folder))  {
          $msg = "Image uploaded successfully";
      }else{
          $msg = "Failed to upload image";
    }
    header("Location: adminhomepage.php");
    }
  ?>
</div>

<div id="contentpub">
  <form method="POST" action="" enctype="multipart/form-data">
      <h1 class="display-2"><u>Publisher Entry</u></h5>
      <p class="font-weight-bold">Publisher Name</p>
      <input type="text" name="pubnameentry" value=""/>
      <p class="font-weight-bold">Publisher Address</p>
      <input type="text" name="pubaddressentry" value=""/>
      <br>
      <br>
      <div>
          <button type="submit" name="uploadpubdetails">UPLOAD</button>
        </div>
  </form>
  <hr class="my-4">
  <hr class="my-4">
  <hr class="my-4">
</div>
<?php

if (isset($_POST['uploadpubdetails'])){

  $pubnameentry = $_POST['pubnameentry'];
  $pubaddressentry = $_POST['pubaddressentry'];

  $db = mysqli_connect("localhost", "nik", "zap", "dbms");

  $sql2222 = "INSERT INTO publisher (name,address) VALUES ('$pubnameentry','$pubaddressentry')";
  mysqli_query($db, $sql2222);

  if (move_uploaded_file($tempname, $folder))  {
      $msg = "Image uploaded successfully";
  }else{
      $msg = "Failed to upload image";
    }
    header("Location: adminhomepage.php");
}
?>

<div id="contentgenre">
  <form method="POST" action="" enctype="multipart/form-data">
      <h1 class="display-2"><u>Genre Entry</u></h5>
      <p class="font-weight-bold">Genre Name</p>
      <input type="text" name="genrenameentry" value=""/>
      <br>
      <br>
      <div>
          <button type="submit" name="uploadgenredetails">UPLOAD</button>
        </div>
  </form>
  <hr class="my-4">
  <hr class="my-4">
  <hr class="my-4">
</div>
<?php

if (isset($_POST['uploadgenredetails'])){

  $genrenameentry = $_POST['genrenameentry'];

  $db = mysqli_connect("localhost", "nik", "zap", "dbms");

  $sql22222 = "INSERT INTO genre (genrename) VALUES ('$genrenameentry')";
  mysqli_query($db, $sql22222);

  if (move_uploaded_file($tempname, $folder))  {
      $msg = "Image uploaded successfully";
  }else{
      $msg = "Failed to upload image";
    }
    header("Location: adminhomepage.php");
}
?>
</body>
</html>
