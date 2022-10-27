


<?php
// Souvent on identifie cet objet par la variable $conn ou $db

$dsn='mysql:host=localhost;dbname=blog;charset=utf8';// DSN — Connexion aux bases de données MySQL//Le Data Source Name//
$user= 'root'; // user qui se connecte a la BDD//

try {
$pdo= new PDO($dsn,$user// PHP DATA OBJECTS interface de connexion pour acceder a une base de données//
    //connexion a la BDD nommer "Blog"//
   // nom de user qui va gerer la base de donnés//
);

}catch(Exception $erreur){ //catch qui intercepte les erreurs//
    echo "connexion BDD non établit ";//ce message apparaitra en cas d'erreur pour eviter de devoilé des information sensible de securité //
}
?>
