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

            form{
                text-align: center;
            }

            input, textarea{
                width: 80%;
                height: 30px;
            }

            textarea{
                height: 100px;
                resize: none;
            }

        </style>
    </head>
    <body>
        <h3>Welkom bij de admin-panel!</h1>
        <p>Nieuw werk aanmaken</p>
        <form action="{{url('newpost')}}" method="POST">
            {{ csrf_field() }}
            <input type="text" placeholder="Naam" name="name">
            <textarea name="description" placeholder="Beschrijving"></textarea>
            <input type="text" placeholder="Url" name="url">
            <input type="text" placeholder="Afbeeldingsnaam (Upload tijdelijk geblokkeerd)" name="image">
            <input type="number" min="0" max="1" step="1" placeholder="Opdracht voor school? (1 is ja, 0 is nee)" name="school">
            <input type="submit" name="submit" value="Maak werk aan!"> 
        </form>
    </body>
</html>
