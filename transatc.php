<?php
try{

    $bdd = new PDO('mysql:host=localhost;dbname=crud;charset=utf8', 'root', '');
    echo "connect OK";
}

catch (Exception $e){

        die('Erreur : ' . $e->getMessage());

}

$user_nom='teste2';
$user_prenom='prenom';
$user_mail='mmaill@lel.com';
$user_pass='pasespsaez';
//$req="INSERT INTO user (user_id, user_nom, user_prenom, user_mail, user_pass) VALUES (NULL, 'rakotos', 'prsen', 'totso@mail.com', 'pasapssa')";
$req="INSERT INTO user (user_nom, user_prenom, user_mail, user_pass) VALUES (:user_nom, :user_prenom, :user_mail, :user_pass)";

$q=$bdd->prepare($req);
$q->execute(array(
    'user_nom'=>$user_nom,
    'user_prenom'=>$user_prenom,
    'user_mail'=>$user_mail,
    'user_pass'=>$user_pass
    ));
//$reponse = $bdd->query($req);
//$reponse->closeCursor();