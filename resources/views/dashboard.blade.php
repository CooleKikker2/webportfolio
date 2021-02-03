<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coen Vink - Admin</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <style>
        h3, p{
            text-align: center;
        }

        .actions{
            width: 100%;
            display: block;
            height: 50px;
        }

        .actions button{
            float: right;
            margin-right: 25px;
            height: 50px;
            width: 20%;
            background-color: green;
            color: white
        }

        .actions button:hover{
            background-color: lime;
            color: black;
        }
    </style>
</head>
<body>
    <h3>Welkom bij de admin-panel!</h1>
    <p>Al het geplaatste werk</p>
    <div class="actions">
        <a href="/logout"><button>Log uit</button></a><a href="/newwork"><button>Maak nieuw werk aan</button></a>
    </div>
    <div class="werk">
    <?php
        use Illuminate\Support\Facades\DB;

        $works = DB::table('work')->get();

        foreach($works as $work){
            $shortdesc = substr($work->description, 0, 170) . "...";
            $imageref = $work->image;
            if($work->school){
                echo '<article><img alt="'. $work->title .'" src="img/'. $imageref .'"><div class="tagdiv"><div class="tag"><p>Schoolopdracht</p></div></div><h4>'.$work->title.'</h4><hr><p>'.$shortdesc.'</p><a href="portfolio-detail/'. $work->id.'"></a></article>';
            }else{
                echo '<article><img alt="'. $work->title .'" src="img/'. $imageref .'"><div class="tagdiv"></div><h4>'.$work->title.'</h4><hr><p>'.$shortdesc.'</p><a href="portfolio-detail/'. $work->id.'"></a></article>';
            }
        }

    ?>
    </div>
</body>
</html>