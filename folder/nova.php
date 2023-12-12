<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
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
        <img src="logi1075.jpg" style="height:1000px;display:flex;">
        <div class = "crnina" style="height:1000px;"></div>
        <div class = "container">
        <form class="forma container" action="novaa.php" method="post">
           <label>Da li ovako izgleda vasa odluka?</label><br>
           <br><input type="text" placeholder="Unesite ime" name="ime" readonly value="<?php echo $user; ?>">
            <br>
            <label></label>
            <br><input type="text" placeholder="Unesite prezime" name="prezime" readonly value="<?php echo $last; ?>">
            <br>
            <label></label>
            <br><input type="email" placeholder="Email" name="email" value="<?php echo $emaill; ?>">
            <br>
            <label>GeForce GTX1080 Ti</label>
            <br>
            <input type="radio" name="izbor" disabled>
            <br>
            <label>GeForce RTX3060</label>
            <br>
            <input type="radio" name="izbor1" disabled>
            <br>
            <label>intel i7</label>
            <br>
            <input type="radio" name="izbor2" disabled>
            <br>
            <br>
            <input type="submit" value="Prosledi">
            <br>
            <br>
        </form>
        <form class="forma" action="akcija.php" method="post" style="top: 578px; padding:10px;">
            <label>Da li zelite da promenite email adresu?</label>
            <br>
            <input type = "submit" value = "Update">
            <br><br>
            <label>Ili zelite da obrisete porudzbinu?</label>
            <br>
            <input type= "submit" value = "Delete">
        </form>     
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