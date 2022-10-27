<?php
$sql="SELECT auteur_id,image,titre,description,nom_auteur,date FROM article LEFT JOIN utilisateur ON auteur_id=utilisateur.id";
//on selectionne les elements de la bse de données de la table article et utiilisateur la jonction est faite par un element de liaison instruit par LEFT JOIN des deux table ici pour exemple il 'sagit de la table article qui contient une propriété "auteur_id" et de la table utilisateur qui contient un ID les deux propriété sont des clé primaire . 

$resultat=$pdo->query($sql);//executé une requete SQL qui seras stocké dans la variable "$résultat"//
$articleListe=$resultat->fetchAll(PDO::FETCH_CLASS);//Recupére les données de la classe désirée. Les colonnes sélectionnées //

// var_dump($articleListe);


?>

<main class="mt-2 pt-2 border-top border-secondary">
        <div class="d-flex flex-wrap col-10">
            <div class="card col-3" >
                <?php foreach($articleListe as $article): ?>
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="card-title"><?=$article->titre?></h1>
                    <p class="card-text"><?=$article->description?></p>
                    <h5 class="card-title"><?=$article->nom_auteur?></h5>
                    <h5 class="card-title"><?=date('d/m/Y',strtotime($article->date))?></h5>
                </div>
               
                <?php endforeach;?>
            </div>  
            
        </div>
    </main>
    
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</html>
