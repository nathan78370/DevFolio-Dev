<?php 
    require_once 'assets/includes/functions.php';

    if(!empty($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['password_retype']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        $check = $bdd->prepare('SELECT pseudo, password  FROM utilisateurs WHERE pseudo = ?');
        $check->execute(array($pseudo));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){ 
            if(strlen($pseudo) <= 100){
                        if($password == $password_retype){

                            $password = hash('sha256', $password);

                            $insert = $bdd->prepare('INSERT INTO user(pseudo, password ) VALUES(:pseudo, :password)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'password' => $password,
                            ));

                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=password');
            }else{ header('Location: inscription.php?reg_err=pseudo_length');
        }else{ header('Location: inscription.php?reg_err=already');
    }
