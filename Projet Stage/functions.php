<?php
session_start();

function get_user_by_id(){

}

function login($nom,$mot_de_passe){
    require 'data/bdd.php';
    $utilisateurQuery="SELECT  id,nom,mot_de_passe FROM utilisateur;";
    $resultat=$pdo->query($utilisateurQuery);
    $utilisateurs=$resultat->fetchAll(PDO::FETCH_CLASS);

    
    foreach($utilisateurs as $utilisateur){
        if($utilisateur->nom===$nom)
            if($utilisateur->$mot_de_passe===$mot_de_passe){
                $_SESSION['id']=$utilisateur->id;
                $_SESSION['nom']=$utilisateur->nom;
                return true;
            }
    }
}

return false;

function logout (){
    unset($_SESSION['id']);
    unset($_SESSION['nom']);
}

function redirect($filename, $response){
    if (file_exists($filename)){
        $url=$filename."?response=$response";
        header("location: $url");
        exit;
    } else {
        header('location: 404.php');
    }
}

function display_message($instruction){
    if($instruction=== 'connect_ok'){
        return'Bienvenue '.$_SESSION['nom'];
    } elseif ($instruction==='connect_error'){
        return 'login out mot de passe invalide';
    } elseif ($instruction==='disconnect_ok') {
        return 'vous etes déconnecté';
    } elseif ($instruction=== 'register_ok'){
        return 'votre compte a été créé';
    }else {
        return '';
    }
}

function is_logged_in(){
    if(empty($_SESSION['nom'])){
        return false;
        
    }else {
        return true;
    }
}

function test_login($str){// REGEX qui autorise un login entre 6 et 8 caractères : minuscules, majuscules et nombres.//
    if(preg_match('/\b^[a-fA-F0-9]{6,12}$\b/',$str)){
        return true;
} else {
    return false;
}
}

function add_user($nom,$mot_de_passe,$email){

}

function add_article($auteur_id,$image,$titre,$description,$date,$nom_auteur){

}