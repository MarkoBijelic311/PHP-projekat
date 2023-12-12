<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="header container">
        <img src="images.png">
        <div>
            <a href="index.php">Pocetna</a>
            <a href="artikli.php">Artikli</a>
            <a href="korpa.php">Korpa</a>
            <a href="nova.php">Ispis kupovine</a>
        </div>
    </div>
    <section class="hero-sekcija">
        <img src="pozadina2.jpg">
        <div class = "crnina"></div>
        <div class = "container">
        <section class="sekcijaa">
            <form class="forma container" action="korp.php" method="post">
                <p class="naslov">Ispunite formu u slucaju odluke kupovine:</p>
               <label>Ime</label>
               <br><input type="text" placeholder="Unesite ime" name="ime">
                <br>
                <label>Prezime</label>
                <br><input type="text" placeholder="Unesite prezime" name="prezime">
                <br>
                <label>Email</label>
                <br><input type="email" placeholder="Email" name="email">
                <br>
                <h3>Izbor preostalih komponenti</h3>
                <label>GeForce GTX1080 Ti</label>
                <br>
                <input type="radio" name="izbor">
                <br>
                <label>GeForce RTX3060</label>
                <br>
                <input type="radio" name="izbor1">
                <br>
                <label>intel i7</label>
                <br>
                <input type="radio" name="izbor2">
                <br>
                <br>
                <input type="submit" value="Prosledi">
                <br>
                <br>
            </form>
         </section>
    </div>
    </section>
    <div class="celina1">
        <footer class="container">
            <P>Kontakt telefona:+381 0691789014</P>
            <div>
                <img src="facebook (1).png">
                <img src="youtube (1).png">
                <img src="instagram (1).png">
            </div>
        </footer>
    </div>
</body>
</html>