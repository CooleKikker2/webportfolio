<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coen Vink | Over</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/mdn4bzp.css">
    <script src="https://kit.fontawesome.com/c20ff3da34.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="homecontainer">
            <div class="containeroverlay">
            <header>
                <div class="left">
                    <h1 class="black"><span>C</span>oen <span>V</span>ink</h1>
                </div>
                <div class="right">
                    <div class="navdiv">
                        <i class="fas fa-bars"></i>
                    </div>
                    <nav>
                        <ul>
                            <a class="black" href="index.html"><li>Home</li></a>
                            <a class="black active" href="over.html"><li>Over Mij</li></a>
                            <a class="black" href="portfolio.php"><li>Portfolio</li></a>
                            <a class="black" href="contact.php"><li>Contact</li></a>
                        </ul>
                    </nav>
                </div>
            </header>
            <hr>
            <div class="content">
                <div class="left">
                    <div class="text">
                        <h2>Over Mij</h2>
                        <p>Even Voorstellen! Ik ben Coen Vink, 17 jaar jong en sinds September 2019 student webdevelopment op het Grafisch Lyceum in Utrecht.<br><br>Ik ben in 2003 geboren in de stad Leiden en woon in Lisse, waar ik ook op de basisschool heb gezeten. Na de basisschool ben ik naar het VMBO in Leiden gegaan. In de tweede klas ontdekte ik de technische kant van de computer. Sinds dien ben ik wat gaan experimenteren met programmeren, het schrijven van servers, en uiteindelijk het bouwen van websites.<br><br>De keuze was snel gemaakt: Ik word developer! Eind 2018 heb ik besloten me aan te melden voor de opleiding webdevelopment op het Grafisch Lyceum Utrecht, waarvan ik nu in het tweede schooljaar zit.<br><br>Ik ga altijd voor de perfecte website! Ik hou ervan om mijzelf uit te dagen en alles zo goed mogelijk te regelen. Van Hosting tot een inlogsysteem. Het moét goed zijn!
                    </div>
                </div>
                <div class="right">
                    <img src="{{ URL::asset('img/foto.png') }}" alt="Coen Vink">
                </div>
            </div>
        </div>
</body>
</html>