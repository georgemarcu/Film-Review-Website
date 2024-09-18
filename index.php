<?php

session_start();
if (isset($_SESSION["user_id"])){

  $mysqli = require __DIR__ . "/login/database.php";

  $sql = "SELECT * FROM user
          WHERE id = {$_SESSION["user_id"]}";

  $result = $mysqli->query($sql);

  $user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--titlu tab-->
    <title>Proiect 3A</title>
    <!--imagine tab-->
    <link rel="icon" href="imagini/movie-solid-24.png" type="image/x-icon" />
    <!--link catre css-->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
  </head>

  <body>
    <!--bara de navigare / fixa-->
    <div class="navbar">
      <h2>Filme 3A</h2>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#movies">Movies</a></li>
        <li><a href="#soon">Comming soon...</a></li>
      </ul>
      
      <?php if(isset($user)): ?>
            <div class="logout_bttn">
            <h4>Hello <?= htmlspecialchars($user["username"])?></h4>
            <button class="bttn" onclick="location.href='logout.php'">
        Log Out
      </button>
            </div>

            <?php else: ?>
      <!--buton login/register-->
      <button class="bttn" onclick="location.href='login/login-reg.html'">
        Log in/Register
      </button>

      <?php endif; ?>
    </div>

    <!--Clasa home ce contine partea principala-->
    <div class="home">
      <h3 id="home">In colectia noastra :</h3>

      <!--javascript slideshow movies in facere-->
      <div class="container">
        <div class="mySlides">
          <div class="numbertext">1 / 5</div>
          <img class="slider" src="imagini/poster1.jpg" />
          <a href="#film1"><button class="bttn">Accesati filmul !</button></a>
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 5</div>
          <img class="slider" src="imagini/poster2.jpg" />
          <a href="#film2"><button class="bttn">Accesati filmul !</button></a>
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 5</div>
          <img class="slider" src="imagini/poster3.jpg" />
          <a href="#film3"><button class="bttn">Accesati filmul !</button></a>
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 5</div>
          <img class="slider" src="imagini/poster4.webp" />
          <a href="#film4"><button class="bttn">Accesati filmul !</button></a>
        </div>

        <div class="mySlides">
          <div class="numbertext">5 / 5</div>
          <img class="slider" src="imagini/poster5.jpg" />
          <a href="#film5"><button class="bttn">Accesati filmul !</button></a>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      </div>
      <script src="slider.js"></script>
    </div>
    <!--Clasa movies ce contine toate templateurile de filme-->
    <div class="movies">
      <h3 id="movies">Movies :</h3>
      <hr id="film1" class="linie_film" />
      <!--primul template film1+detalii-->
      <div class="film1">
        <img src="imagini/hp7.jpg" alt="harry-potter-7" />
        <div class="info1">
          <h2>Titlu: Harry Potter 7 - partea 1</h2>
          <p>
            Urcă în atașul motocicletei lui Hagrid și pornește alături de uriaș
            spre cer. Știe că Lord Voldemort și Mortivorii sunt pe urmele lor,
            nu prea departe. E ruptă vraja de protecție care l-a apărat până de
            curând, însă el nu se poate ascunde la nesfârșit.
          </p>
          <h4>Aventura , Fantasy</h4>
          <h4>Nota public : 8.7</h4>
          <div class="butoane">
          <?php if(isset($user)): ?>
            <button
              class="bttn"
              onclick="location.href='comments/comments.html'"
            >
              Lasa un comentariu!
            </button>
            <?php endif; ?>
            <button
              class="bttn"
              onclick="location.href='https://www.youtube.com/watch?v=MxqsmsA8y5k'"
            >
              Acceseaza trailer
            </button>
          </div>
        </div>
      </div>
      <hr class="linie_film" id="film2" />
      <div class="film2">
        <img src="imagini/thering.jpg" alt="the-ring" />
        <div class="info2">
          <h2>Titlu: The Ring</h2>
          <p>
            O casetă video cu imagini ciudate, apoi telefonul începe să sune
            pentru cel ce a văzut filmul şi acesta află în ce mod urmează să
            moară, după exact şapte zile. Cercul din titlu se referă la forma cu
            care începe caseta legendară. Fiind reporter la un ziar, Rachel
            Keller este destul de sceptică în legătură cu această poveste, până
            când patru adolescenţi mor în mod suspect exact la o săptămână după
            vizionarea unei astfel de casete. Fiind învinsă de curiozitate,
            Rachel găseşte caseta şi o vizionează. Acum are nevoie de ajutorul
            prietenului său, Noah, pentru a scăpa cu viaţă şi pentru a-şi salva
            şi fiul. Împreună au doar şapte zile la dispoziţie pentru a descifra
            misterul inelului. Perversitatea mesajului spune că dacă vreau să
            scape cu viaţă, să multiplice caseta şi să o dea mai departe.
          </p>
          <h4>Horror</h4>
          <h4>Nota public : 6.4</h4>
          <div class="butoane">
          <?php if(isset($user)): ?>
            <button
              class="bttn"
              onclick="location.href='comments/comments.html'"
            >
              Lasa un comentariu!
            </button>
            <?php endif; ?>
            <button
              class="bttn"
              onclick="location.href='https://www.youtube.com/watch?v=yzR2GY-ew8I'"
            >
              Acceseaza trailer
            </button>
          </div>
        </div>
      </div>
      <hr class="linie_film" id="film3" />
      <div class="film3">
        <img src="imagini/lord.jpg" alt="lord-of-the-rings" />
        <div class="info3">
          <h2>Titlu: Lord Of The Rings</h2>
          <p>
            Tânarul hobbit Frodo Baggins moștenește un inel, Inelul Unic, un
            instrument al puterii absolute care îi poate permite lui Sauron,
            Seniorul Tenebrelor din Mordor, să pună stăpânire pe Pământul de
            Mijloc. Frodo împreună cu frăția formată din hobbiți, oameni, un
            vrăjitor, un gnom și un elf, trebuie să ducă inelul la Muntele de
            Foc, unde a fost creat și să îl distrugă pentru totdeauna. Deoarece
            o asemenea călătorie presupune trecerea prin teritoriile lui Sauron,
            Frăția trebuie să lupte cu forțele exterioare ale răului dar și cu
            influențele Inelului.
          </p>
          <h4>Aventura , Fantasy</h4>
          <h4>Nota public : 9</h4>
          <div class="butoane">
          <?php if(isset($user)): ?>
            <button
              class="bttn"
              onclick="location.href='comments/comments.html'"
            >
              Lasa un comentariu!
            </button>
            <?php endif; ?>
            <button
              class="bttn"
              onclick="location.href='https://www.youtube.com/watch?v=V75dMMIW2B4'"
            >
              Acceseaza trailer
            </button>
          </div>
        </div>
      </div>
      <hr class="linie_film" id="film4" />
      <div class="film4">
        <img src="imagini/Barbie.jpg" alt="Barbie" />
        <div class="info4">
          <h2>Titlu: Barbie</h2>
          <p>
            Barbie este un film de comedie fantasy din 2023 regizat de Greta
            Gerwig, care l-a scris împreună cu Noah Baumbach. Bazat pe păpușile
            de modă Barbie de Mattel, este primul film cu acțiune în direct
            Barbie după multe filme animate pe computer direct-to-video și de
            televiziune în flux.
          </p>
          <h4>Aventura , Comedie</h4>
          <h4>Nota public : 8.4</h4>
          <div class="butoane">
          <?php if(isset($user)): ?>
            <button
              class="bttn"
              onclick="location.href='comments/comments.html'"
            >
              Lasa un comentariu!
            </button>
            <?php endif; ?>
            <button
              class="bttn"
              onclick="location.href='https://www.youtube.com/watch?v=pBk4NYhWNMM'"
            >
              Acceseaza trailer
            </button>
          </div>
        </div>
      </div>
      <hr class="linie_film" id="film5" />
      <div class="film5">
        <img src="imagini/rom.webp" alt="Romance" />
        <div class="info5">
          <h2>Titlu: Isn't it Romantic?</h2>
          <p>
            Natalie (Rebel Wilson), e arhitectă în New York. Deși își dă silința
            la locul de muncă pentru a se remarca, de obicei i se cere să aducă
            cafeaua și gustările, nu să proiecteze zgârie-nori. Colac peste
            pupăză, Natalie, cinică în privința dragostei, își pierde cunoștința
            în urma unei încăierări cu un hoț și se trezește protagonistă în cel
            mai negru coșmar al ei: o comedie romantică.
          </p>
          <h4>Romance, Comedie</h4>
          <h4>Nota public : 7.8</h4>
          <div class="butoane">
          <?php if(isset($user)): ?>
            <button
              class="bttn"
              onclick="location.href='comments/comments.html'"
            >
              Lasa un comentariu!
            </button>
            <?php endif; ?>
            <button
              class="bttn"
              onclick="location.href='https://www.youtube.com/watch?v=8ZwgoVmILQU'"
            >
              Acceseaza trailer
            </button>
          </div>
        </div>
      </div>
      <hr class="linie_film" />
    </div>

    <!--Sectiune Comentarii-->
    <!-- <div class="comments">
      <h3>Cateva comentarii:</h3>
    </div>-->

    <!--Postere filme coming soon..-->
    <div class="coming_soon">
      <h3 id="soon">Coming soon ...</h3>
      <div class="soon">
        <img src="imagini/f1.webp" alt="film1" />
        <img src="imagini/f2.webp" alt="film2" />
        <img src="imagini/f3.webp" alt="film3" />
        <img src="imagini/f4.webp" alt="film4" />
        <img src="imagini/f5.webp" alt="film5" />
        <img src="imagini/f6.webp" alt="film6" />
        <img src="imagini/f7.webp" alt="film7" />
        <img src="imagini/f8.webp" alt="film8" />
        <img src="imagini/f9.webp" alt="film9" />
        <img src="imagini/f10.webp" alt="film10" />
      </div>
    </div>

    <!--Partea de footer + copyright-->
    <footer>
      <p class="copyright">© Marcu George-Emanuel</p>
      
    </footer>
  </body>
</html>
