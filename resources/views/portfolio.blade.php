<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coen Vink | Portfolio</title>
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
                <div class="intro">
                    <h2>Mijn Portfolio</h2>
                    <p>Welkom bij mijn portfolio! Hier is al mijn werk van de afgelopen tijd te bekijken. Als een werk gemaakt is voor school, staat er een "School-tag" bij. Vragen? Schroom niet. Neem contact op via de <a href='/contact'>Contactpagina</a></p>
                </div>
                <div class="werk">
                <?php
                    use Illuminate\Support\Facades\DB;

                    $works = DB::table('work')->get();

                    foreach($works as $work){
                        $shortdesc = substr($work->description, 0, 170) . "...";
                        $imageref = $work->image;
                        if($work->school){
                            echo '<article><img alt="'. $work->title .'" src="img/'. $imageref .'"><div class="tagdiv"><div class="tag"><p>Schoolopdracht</p></div></div><h4>'.$work->title.'</h4><hr><p>'.$shortdesc.'</p><a href="portfolio-detail/'. $work->id.'"><button>Lees meer</button></a></article>';
                        }else{
                            echo '<article><img alt="'. $work->title .'" src="img/'. $imageref .'"><div class="tagdiv"></div><h4>'.$work->title.'</h4><hr><p>'.$shortdesc.'</p><a href="portfolio-detail/'. $work->id.'"><button>Lees meer</button></a></article>';
                        }
                    }

                ?>
                </div>
            </div>
    </div>
</body>
</html>