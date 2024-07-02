<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. -->

<?php
include_once __DIR__ . '/classes/Movie.php';

$matrix = new Movie('Matrix', 1999, 'Sci-Fi', 136, 'The Wachowskies', 'Keanu Reeves');

$dieHard = new Movie('Die Hard', 1988, 'Action', 132, 'John McTiernan', 'Bruce Willis');

$inception = new Movie('Inception', 2010, 'Sci-Fi', 148, 'Christopher Nolan', 'Leonardo DiCaprio');

echo $matrix->getData();
echo $dieHard->getData();
echo $inception->getData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <main>
        
    </main>
</body>

</html>