<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coen Vink | Portfolio-detail</title>
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
                        <a href="/portfolio" class="active"><li>Portfolio</li></a>
                        <a href="/contact"><li>Contact</li></a>
                        </ul>
                    </nav>
                </div>
            </header>
            <hr>
            <div class="content">

            <?php
                $work = DB::table('work')->find($id);
                echo '<div class="itemleft"><img src="../img/'.$work->image.'" alt="'.$work->title.'"><a target="_blank" href="'.$work->url.'">Bezoek de website!</a></div><div class="itemright"><h2>'.$work->title.'</h2><p>'.$work->description.'</p></div>';
            ?>
            </div>
        </div>
</body>
</html>