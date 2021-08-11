<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">



        <title>App Raccolta differenziata</title>

    </head>
  

    <body >
    <div class="container py-5">
        
        <div class="box">
            <h1 class="title has-text-centered">Benvenuti</h1>
            
            <div class="field has-text-centered">

                <div class="field py-1">
                    <p>Benvenuto in questa applicazione!</p>
                    <p>Il suo scopo è aiutarti ad annotare e ricordare i ritiri per la raccolta differenziata</p>

                </div>
                
                <a href="/schedule" class="button has-text-centered">Entra nell'app</a>
                
            </div>
            
        </div>
    </div>
    </body>
</html>
