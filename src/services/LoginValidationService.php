<?php
declare(strict_types=1);

class LoginValidationService
{
    static public function validateLogin(PDO $db, UsersModel $usersModel) : bool
    {
        if (gettype($usersModel->loginValidation($_POST['username'], $_POST['password'])) !== "boolean") {
            // creates user variable, so I can get the data to store in session
            $user = $usersModel->searchByUsername($_POST['username']);
            // storing session variables
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['username'] = $user->getUsername();
            $_SESSION['loggedIn'] = true;
            //return to homepage
            header('location: index.php');
            return true;
        } else {
            return false;
        }
    }

    static public function errorMessage() : string
    {
        return "<p class='text-red-500 text-center'>Username or Password is incorrect</p>";
    }
}