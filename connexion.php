<?php 
    session_start();
    require_once 'assets/includes/functions.php';

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT pseudo, password  FROM utilisateurs WHERE pseudo = ?');
        $check->execute(array($pseudo));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($username,))
            {
                $password = hash('sha256',$password);

                if($data['password'] === $password);
                {

                    $_SESSION['user'] = $data['username'];
                    header('Location: admin.php');
                }else header('Location: login.php?login_err=password');
            }else header('Location: login.php?login_err=username');
        }else header('Location: login.php?login_err=already'); 
    }else header('Location: login.php');
