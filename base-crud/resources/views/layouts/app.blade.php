<?php
/*Crud 1 fase:
Create migration, model, controller, views e rotte per la gestione di un database (creato a vostro piacere, ad esempio può essere sui movies o sulle cars ...) che consenta di visualizzare tutti i prodotti e i dettagli del prodotto (metodo index e show).
Inserite i prodotti attraverso phpMyAdmin.Consigli del giorno:

    Fate i passaggi con calma e trascriveteli, perché saranno sempre quelli
    Attenzionate la lista delle rotte*/

/*Crud 2 fase:
Realizzate la Create come visto a lezione (metodo create e store) sul progetto che avere iniziato ieri.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')


    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>