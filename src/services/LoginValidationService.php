<?php
declare(strict_types=1);

class LoginValidationService
{
    static public function validateLogin(UsersModel $usersModel, string $username, string $password) : bool
    {
        if (gettype($usersModel->loginValidation($username, $password)) != "boolean") {
            // creates user variable, so I can get the data to store in session
            $user = $usersModel->searchByUsername($username);
            // storing session variables
            self::setSessionVariables($user);
            //return to homepage
            return true;
        } else {
            return false;
        }
    }
    static public function errorMessage() : string
    {
        return "<p class='text-red-500 text-center'>Username or Password is incorrect</p>";
    }
    static private function setSessionVariables(UserEntity $user) : void
    {
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['loggedIn'] = true;
    }
}