
<?php 

/*

Esercizio di oggi:
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, Sass, JS, VueJS, PHP

Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi. => index-prima-milestone.php

Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.

Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<body>

<?php 

require_once __DIR__ . "/database/database.php";?>

<?php foreach($database as $key => $value) {?>

    <div class="card-container">
        <div class="container">
            <img  src="<?php echo "{$value['poster']}" ?>" alt="copertina">
            <div class="title"><h5><?php echo "{$value['title']}" ?></h5></div>
            <span class="author"><?php echo "{$value['author']}" ?></span>
            <span class="year"><?php echo "{$value['year']}" ?></span>
        </div>
    </div>   
   
<?php 
}


?>
     
</body>
</html>