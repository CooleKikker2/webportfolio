<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coen Vink | Contact</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/mdn4bzp.css">
    <script src="https://kit.fontawesome.com/c20ff3da34.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="homecontainer2">
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
                            <a href="/"><li>Home</li></a>
                            <a href="/over"><li>Over Mij</li></a>
                            <a href="/portfolio"><li>Portfolio</li></a>
                            <a href="/contact" class="active"><li>Contact</li></a>
                        </ul>
                    </nav>
                </div>
            </header>
            <hr>
            <div class="content">
                <div class="left">
                    <div class="text">
                        <h2>Contact</h2>
                        <p>Coen Vink</p>
                        <p>Aagje Dekenstraat 10</p>
                        <p>2162KH Lisse</p>
                        <p>0123-4567890</p>
                    </div>
                </div>
                <div class="right">
                    <h2>Nog vragen?</h2>
                    <p>Neem hier gemakkelijk contact met mij op!</p>
                    <form method="POST">
                        <input class="half" name="voornaam" type="text" placeholder="Voornaam" required="required">
                        <input class="half" name="achternaam" type="text" placeholder="Achternaam" required="required">
                        <input name="email" type="email" placeholder="E-mailadres" required="required">
                        <input type="tel" placeholder="Telefoonnummer">
                        <input name="onderwerp" type="text" placeholder="Onderwerp" required="required">
                        <textarea placeholder="Bericht"></textarea>
                        <input type="submit" name="submit" value="Verstuur formulier!">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>