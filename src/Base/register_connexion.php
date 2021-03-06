<?php
namespace Base;

use PDO;

class register_connexion extends DataBase
{
    public function register()
    {
        if ($_POST['type'] == "inscription") {
            $nom = htmlentities($_POST['nom']);
            $prenom = htmlentities($_POST['prenom']);
            $email = htmlentities($_POST['email']);
            $phone = htmlentities($_POST['telephone']);
            $password = $_POST['password'];
            $error = [];
            $user = $this->query('SELECT * FROM utilisateurs WHERE email = ?', [
                $email
            ])->fetch();
            
            if (!empty($user)) {
                $error[] = "L'adresse email existe déjà !";
            } else {
                $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 15]);
                $this->query('INSERT INTO utilisateurs (nom, prenom, email, telephone, password) VALUE(?, ?, ?, ?, ?)', [
                    $nom,
                    $prenom,
                    $email,
                    $phone,
                    $password,
                ]);
            }
            return $error;
        }

    }

    public function connexion()
    {
        if ($_POST['type'] == "connexion") {
            $email = htmlentities($_POST['email']);
            $password = $_POST['password'];
            $errors = [];
            if (empty($email)) {
                $errors[] = 'Il faut mettre une adresse email';
            }
            if (empty($password)) {
                $errors[] = 'il faut mettre un password';
            }
            $user = $this->query('SELECT * FROM utilisateurs WHERE email = ? ', [
                $email
            ])->fetch(PDO::FETCH_ASSOC);
            if (empty($user)) {
                $errors[] = 'L\'utilisateur de cette adresse email n\'existe pas';
            }
            if (!empty($user) && !password_verify($password, $user['password'])) {
                $errors[] = 'Le mot de passe n\'est pas bon';
            }
            if (empty($errors)) {
                $_SESSION['id'] = $user['id'];
            }
        }
        return $errors;

    }
}