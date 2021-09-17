<?php
    session_start();
    
    include_once "config.php";
    $vin = mysqli_real_escape_string($conn, $_POST['vin']);
    $marque = mysqli_real_escape_string($conn, $_POST['marque']);
    $modele = mysqli_real_escape_string($conn, $_POST['modele']);
    $energie = mysqli_real_escape_string($conn, $_POST['energie']);
    $dateArrivee = mysqli_real_escape_string($conn, $_POST['dateArrivee']);
    $fournisseur = mysqli_real_escape_string($conn, $_POST['fournisseur']);
    if(!empty($vin) ){
        $sql = mysqli_query($conn, "SELECT VIN FROM arrivage WHERE VIN = '{$vin}'");
        if(mysqli_num_rows($sql) >0){
            echo "$VIN - Cette auto est deja enregistree!";
        }else{
            $insert_query = mysqli_query($conn, "INSERT INTO arrivage (VIN, Marque, Modele, Energie, DateArrivee, Fournisseur)
            VALUES ('{$vin}', '{$marque}','{$modele}', '{$energie}', '{$dateArrivee}', '{$fournisseur}')");
            if($insert_query){
                echo "success";
            }else{
                echo "Une erreur s'est produite, reesayez!";
            }
        }
    }else{
        echo "Le VIN et la date sont requis!";
    }
?>