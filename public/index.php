<?php 
    require __DIR__ . '/../app/src/app.php';
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PHP forma">
    <title>Fluxus Labas!</title>
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500&display=swap" rel="stylesheet">


</head>

<body>
    <nav class="section-padding">
    <a href="#"><div class="logo"><img src="../app/images/kaunas2022.png" alt="Kaunas2022 logo"></div>
        <ul></a>
            <li><a href="#">Pagrindinis</a></li>
            <li><a href="https://www.visikaipvienas.eu/fluxus-labas/">Apie mus</a></li>
            <li><a href="#principai">Principai</a></li>
            <li><a href="https://www.visikaipvienas.eu/komanda/">Komanda</a></li>
            <li><a href="#contact">Kontaktai</a></li>
        </ul>
    </nav>

    <section id="welcome" class="section-padding">
        <div>
            <h1>Fluxus Labas!</h1>
            <p>Burianti kultūra - kurianti bendruomenė</p>
            <button><a href="https://www.visikaipvienas.eu/fluxus-labas/">Noriu sužinoti daugiau</a></button>
        </div>
    </section>


    <section id="principai" class="section-padding">
        <div class="icon">
            <img src="../app/images/icon-disciplinos.png" alt="Ikona - skirtingų disciplinų jungimas">
            <h4>Skirtingų disciplinų jungimas</h4>
            <p>Mūsų darbo metodikoje apjungiamos įvairios menų (ir ne tik!) rūšys</p>
        </div>
        <div class="icon">
            <img src="../app/images/icon-isjudejimas.png" alt="Ikona - Naikinama riba tarp meno ir gyvenimo">
            <h4>Naikinama riba tarp meno ir gyvenimo</h4>
            <p>Jungiame kultūrines veiklas su buitimi ir kasdienybe</p>
        </div>
        <div class="icon">
            <img src="../app/images/icon-pasidarykpats.png" alt="Ikona - pasidaryk pats">
            <h4>„Pasidaryk pats“ kultūra ir estetika</h4>
            <p>Kviečiame visus pasijausti menininkais!</p>
        </div>
    </section>

    <section id="prisistatymas" class="section-padding">
            <h3>Fluxus Labas! tikslas</h3>
            <p>Įgalinti skirtingas bendruomenes puoselėti savo kultūrą ir tapti svetingais savo vietos šeimininkais. Siekiame padėti jums atskleisti, kokia daugialypė kultūra slypi jūsų vietovėje – bendruomenės gyvina upių pakrantes, savo kiemus ir gyvenamąją aplinką, vysto vietos identitetą atspindinčias iniciatyvas, kuria saugią ir kūrybišką aplinką kaimynams. Tikime, kad mažos kūrybinės inciatyvos sukuria stiprius ilgalaikius pokyčius, kurie itin svarbūs augančiai ir kūrybos bei bendravimo svarbą suvokiančiai visuomenei.</p>
            <iframe width="320" height="240" src="https://www.youtube.com/embed/LzoPGKRiOOY"
                title="Fluxus Labas! Pristatomasis filmukas" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
    </section>


    <section id="projektai" class="section-padding">
        <h3>Mūsų projektai</h3>
        <div class=projektai>
            <div class="pvz">
                <img src="../app/images/dainava.jpeg" alt="Dainava">
                <a href="https://www.visikaipvienas.eu/projektai/dainava-vyksme-vasarvidzio-burtai/">
                   <span> Dainava vyksme → </span></a>
            </div>

            <div class="pvz">
                <img src="../app/images/sveskime-upe.jpg" alt="Švęskime upę">
                <a href="https://www.visikaipvienas.eu/projektai/sveskime-upe-2/">
                    Švęskime upę! → </a>
            </div>

            <div class="pvz">
                <img src="../app/images/mariu-svente.jpeg" alt="Marių šventė">
                <a href="https://www.visikaipvienas.eu/projektai/fluxus-labas-kiemas-i-pilenu-g-3/">
                    Marių šventė → </a>
            </div>

            <div class="pvz">
                <img src="../app/images/fluxus-kiemas.jpg" alt="Fluxus kiemas">
                <a href="https://www.visikaipvienas.eu/projektai/fluxus-labas-kiemas-i-pilenu-g-3/">
                    Fluxus kiemas → </a>
            </div>
        </div>
    </section>

    <?php
        include '../app/views/content.php';
        ?>

    <section id="socials" class="section-padding">
        <a href="https://www.facebook.com/FluxusLabas/"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/fluxuslabas/?hl=en"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/c/Kaunas2022"><i class="bi bi-youtube"></i></a>


    </section>


    <?php
     include '../app/views/footer.php';
     ?>

</body>

</html>