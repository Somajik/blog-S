<?php
require 'functions.php';

if(!empty($_POST)){ // si le formulaire est rempli//
    
    if(isset($_POST['nom']) && isset($_POST['mot_de_passe']) && login($_POST['nom'],
    $_POST['mot_de_passe'])) {
        redirect ('index.php','connect_ok');

    } else {
        redirect('connexion.php','connect_error');
        
    }
}
require 'inc/header.php';
if(!is_logged_in()){
    include 'pages/inscriptionForm.php';
} else {
    redirect('index.php','connect_ok');
}
require 'inc/footer.php';