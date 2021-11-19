<li class="nav-item">
        <a class="nav-link" href="mybooks.php?name=<?php echo($name99)?>">MyBooks</a>
      </li>



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





for($j=0;$j<$k;$j++){
      echo("<div class=\"container\">
        <div class=\"row\">");
    for($i=0;$i<count($bookid);$i++) {
      $tempimage = $bookimage[$i];
      $temptitle = $bookname[$i];
      $tempquote = $bookquote[$i];
      $tempprice = $$bookprice[$i];

      echo("<div class = \"col-md-6 col-lg-3\">
              <div class=\"card\" style=\"width: 16rem;\">
              <img src=\"image\\$tempimage\" class=\"card-img-top\">
              <p class=\"card-text\">$temptitle</p>
              <h6 class=\"display-5\"><i> - Fyodor Dostoeyevsky</i></h6>
              <p class=\"card-text\">$tempquote</p>
              <form method=\"post\">
                <input type=\"submit\" name=\"thebrotherskaramazov\" class=\"btn btn-outline-dark\"
                class=\"button\" name = \"\"value=\"AddToCart\" />
              </form>
              <div class=\"card-body\">
              </div>
              </div>
              </div>");
    }
    echo("</div></div>");
  }


*******************************************************************
<?php
  $result = mysqli_query($db, "SELECT * FROM books");
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      /*echo($row['image']);*/
      	echo "<img src='image/".$row['image']."'>";
      	/*echo "<p>".$row['image_text']."</p>";*/
      echo "</div>";
    }
  ?>


  <?php
  if (isset($_POST['upload'])){

    $authorkey = array_search($_POST['authorlist'], $authorname);
    $genrekey = array_search($_POST['genrelist'], $genrename);
    $pubkey = array_search($_POST['publist'], $publishername);
    echo ($authorkey." ");

    echo $_POST['authorlist'];
    echo("<br>");
    echo ($genrekey." ");
    echo $_POST['genrelist'];
    echo("<br>");
    echo ($pubkey." ");
    echo $_POST['publist'];
  }

  ?>
  echo("<div class=\"container\">
    <div class=\"row\">
        <div class = \"col-md-6 col-lg-3\">
          <div class=\"card\" style=\"width: 16rem;\">
          <img src=\"imgs\thebrotherskaramazov.jpg\" class=\"card-img-top\">
          <p class="card-text\">The Brothers Karamazov</p>
          <h6 class="display-5\"><i> - Fyodor Dostoeyevsky</i></h6>
          <form method=\"post\">
            <input type=\"submit\" name=\"thebrotherskaramazov\" class=\"btn btn-outline-dark\"
            class=\"button\" name = \"\"value=\"AddToCart\" />
          </form>");

******************************************************************************************************************





          <div class="container">
      <div class="row">
          <div class = "col-md-6 col-lg-3">
            <div class="card" style="width: 16rem;">
            <img src="imgs\thebrotherskaramazov.jpg" class="card-img-top">
            <p class="card-text">The Brothers Karamazov</p>
            <h6 class="display-5"><i> - Fyodor Dostoeyevsky</i></h6>
            <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
            <div class="card-body">

            </div>
            </div>
          </div>
          <div class = "col-md-6 col-lg-3">
            <div class="card" style="width: 16rem;">
            <img src="imgs\gulagarchipelago.jpg" class="card-img-top">
            <p class="card-text">The Gulag Archipelago</p>
            <h6 class="display-5"><i> - Aleksandr Solzhenitsyn</i></h6>
            <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
            <div class="card-body">

            </div>
            </div>
          </div>
          <div class = "col-md-6 col-lg-3">
            <div class="card" style="width: 16rem;">
            <img src="imgs\warandpeace.jpg" class="card-img-top">
            <p class="card-text">War And Peace</p>
            <h6 class="display-5"><i> - Leo Tolstoy</i></h6>
            <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
            <div class="card-body">

            </div>
            </div>
          </div>
          <div class = "col-md-6 col-lg-3">
            <div class="card" style="width: 16rem;">
            <img src="imgs\beyondgoodandevil.jpg" class="card-img-top">
            <p class="card-text">Beyond Good And Evil</p>
            <h6 class="display-5"><i> - Friedrich Nietzsche</i></h6>
            <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
            <div class="card-body">

            </div>
            </div>
          </div>
          <div class = "col-md-6 col-lg-3">
            <div class="card" style="width: 16rem;">
            <img src="imgs\Fathers And Sons.jpg" class="card-img-top">
            <p class="card-text">Fathers And Sons</p>
            <h6 class="display-5"><i> - Ivan Turgenev</i></h6>
            <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
            <div class="card-body">

            </div>
            </div>
          </div>
          <div class = "col-md-6 col-lg-3">
            <div class="card" style="width: 16rem;">
            <img src="imgs\lolita.jpg" class="card-img-top">
            <p class="card-text">Lolita</p>
            <h6 class="display-5"><i> - Vladimir Nabokov</i></h6>
            <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
            <div class="card-body">

            </div>
            </div>
          </div>
          <div class = "col-md-6 col-lg-3">
            <div class="card" style="width: 16rem;">
            <img src="imgs\Thus Spoke Zarathusra.jpg" class="card-img-top">
            <p class="card-text">Thus Spoke Zarathusra</p>
            <h6 class="display-5"><i> - Friedrich Nietzsche</i></h6>
            <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
            <div class="card-body">

            </div>
            </div>
          </div>
          <div class = "col-md-6 col-lg-3">
            <div class="card" style="width: 16rem;">
            <img src="imgs\Maps of Meaning.jpg" class="card-img-top">
            <p class="card-text">Maps of Meaning</p>
            <h6 class="display-5"><i> - Jordan Peterson</i></h6>
            <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
            <div class="card-body">

            </div>
            </div>
          </div>

        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class = "col-md-6 col-lg-3">
              <div class="card" style="width: 16rem;">
              <img src="imgs\Aion Researches into the Phenomenology of the Self.jpg" class="card-img-top">
              <p class="card-text">Aion: Researches into the Phenomenology of the Self</p>
              <h6 class="display-5"><i> - Carl Jung</i></h6>
              <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
              <div class="card-body">

              </div>
              </div>
            </div>
            <div class = "col-md-6 col-lg-3">
              <div class="card" style="width: 16rem;">
              <img src="imgs\One Day in the Life of Ivan Denisovich.jpg" class="card-img-top">
              <p class="card-text">One Day in the Life of Ivan Denisovich</p>
              <h6 class="display-5"><i> - Aleksandr Solzhenitsyn</i></h6>
              <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
              <div class="card-body">

              </div>
              </div>
            </div>
            <div class = "col-md-6 col-lg-3">
              <div class="card" style="width: 16rem;">
              <img src="imgs\Anna Karenina.jpg" class="card-img-top">
              <p class="card-text">Anna Karenina</p>
              <h6 class="display-5"><i> - Leo Tolstoy</i></h6>
              <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
              <div class="card-body">

              </div>
              </div>
            </div>
            <div class = "col-md-6 col-lg-3">
              <div class="card" style="width: 16rem;">
              <img src="imgs\The Idiot.jpg" class="card-img-top">
              <p class="card-text">The Idiot</p>
              <h6 class="display-5"><i> - Fyodor Dostoeyevsky</i></h6>
              <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
              <div class="card-body">

              </div>
              </div>
            </div>
            <div class = "col-md-6 col-lg-3">
              <div class="card" style="width: 16rem;">
              <img src="imgs\Animal Farm.jpg" class="card-img-top">
              <p class="card-text">Animal Farm</p>
              <h6 class="display-5"><i> - George Orwell</i></h6>
              <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
              <div class="card-body">

              </div>
              </div>
            </div>
            <div class = "col-md-6 col-lg-3">
              <div class="card" style="width: 16rem;">
              <img src="imgs\The Interpretation of Dreams.jpg" class="card-img-top">
              <p class="card-text">The Interpretation of Dreams</p>
              <h6 class="display-5"><i> - Sigmund Freud</i></h6>
              <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
              <div class="card-body">

              </div>
              </div>
            </div>
            <div class = "col-md-6 col-lg-3">
              <div class="card" style="width: 16rem;">
              <img src="imgs\The Catcher in the Rye.jpg" class="card-img-top">
              <p class="card-text">The Catcher in the Rye</p>
              <h6 class="display-5"><i> - J. D. Salinger</i></h6>
              <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
              <div class="card-body">

              </div>
              </div>
            </div>
            <div class = "col-md-6 col-lg-3">
              <div class="card" style="width: 16rem;">
              <img src="imgs\The Metamorphosis.jpg" class="card-img-top">
              <p class="card-text">The Metamorphosis</p>
              <h6 class="display-5"><i> - Franz Kafka</i></h6>
              <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
              <div class="card-body">

              </div>
              </div>
            </div>

          </div>
        </div>
        <div class="container">
          <div class="row">
              <div class = "col-md-6 col-lg-3">
                <div class="card" style="width: 16rem;">
                <img src="imgs\Pride and Prejudice.jpg" class="card-img-top">
                <p class="card-text">Pride and Prejudice</p>
                <h6 class="display-5"><i> - Jane Austen</i></h6>
                <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
                <div class="card-body">

                </div>
                </div>
              </div>
              <div class = "col-md-6 col-lg-3">
                <div class="card" style="width: 16rem;">
                <img src="imgs\The Great Gatsby.jpg" class="card-img-top">
                <p class="card-text">The Great Gatsby</p>
                <h6 class="display-5"><i> - F. Scott Fitzgerald</i></h6>
                <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
                <div class="card-body">

                </div>
                </div>
              </div>
              <div class = "col-md-6 col-lg-3">
                <div class="card" style="width: 16rem;">
                <img src="imgs\One Hundred Years of Solitude.jpg" class="card-img-top">
                <p class="card-text">One Hundred Years of Solitude</p>
                <h6 class="display-5"><i> -  Gabriel García Márquez</i></h6>
                <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
                <div class="card-body">

                </div>
                </div>
              </div>
              <div class = "col-md-6 col-lg-3">
                <div class="card" style="width: 16rem;">
                <img src="imgs\Eugene Onegin.jpg" class="card-img-top">
                <p class="card-text">Eugene Onegin</p>
                <h6 class="display-5"><i> - Alexander Pushkin</i></h6>
                <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
                <div class="card-body">

                </div>
                </div>
              </div>
              <div class = "col-md-6 col-lg-3">
                <div class="card" style="width: 16rem;">
                <img src="imgs\Evenings on a Farm Near Dikanka.jpg" class="card-img-top">
                <p class="card-text">Evenings on a Farm Near Dikanka</p>
                <h6 class="display-5"><i> - Nikolai Gogol</i></h6>
                <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
                <div class="card-body">

                </div>
                </div>
              </div>
              <div class = "col-md-6 col-lg-3">
                <div class="card" style="width: 16rem;">
                <img src="imgs\Borodino.jpg" class="card-img-top">
                <p class="card-text">Borodino</p>
                <h6 class="display-5"><i> - Mikhail Lermontov</i></h6>
                <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
                <div class="card-body">

                </div>
                </div>
              </div>
              <div class = "col-md-6 col-lg-3">
                <div class="card" style="width: 16rem;">
                <img src="imgs\The Master and Margarita.jpg" class="card-img-top">
                <p class="card-text">The Master and Margarita</p>
                <h6 class="display-5"><i> - Mikhail Bulgakov</i></h6>
                <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
                <div class="card-body">

                </div>
                </div>
              </div>
              <div class = "col-md-6 col-lg-3">
                <div class="card" style="width: 16rem;">
                <img src="imgs\Old Izergil.jpg" class="card-img-top">
                <p class="card-text">Old Izergil</p>
                <h6 class="display-5"><i> - Maxim Gorky</i></h6>
                <button type="button" class="btn btn-outline-dark">ADD to Cart</button>
                <div class="card-body">

                </div>
                </div>
              </div>

            </div>
          </div>
          </body>

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
