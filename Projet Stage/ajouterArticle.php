<?php
require 'functions.php';
if(isset($_POST['article'])){ //implémenter la création d'un article et faire la redirection //
    
}

require 'inc/header.php';
if(is_logged_in()){
    require 'pages/articleForm.php';
} else {
    redirect ('connexion.php', 'disconnect_ok');
}
require 'inc/footer.php';