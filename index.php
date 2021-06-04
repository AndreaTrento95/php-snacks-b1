<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>

<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<h1>Snack 2</h1>

<?php 

// tutti get che arrivano vengono salvati sentro data
$data = $_GET;

// se non ci sono name, mail o age stampo errore
if(empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {

    echo "Errore inserire i dati";

}
elseif (strlen($data['name']) <= 3) {

    echo "Errore nome troppo corto";

}
elseif (strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false ) {

    echo "Errore la mail non è valida";

}
elseif (!is_numeric($data['age'])) {

    echo "Errore età non corretta";

}else {

    echo "Accesso riuscito";

}
?>
</body>
</html>