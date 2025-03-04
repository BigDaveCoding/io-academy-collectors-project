<?php
declare(strict_types=1);
session_start();
require_once 'src/services/LoginFormService.php';
require_once 'src/services/DatabaseConnectionService.php';
require_once 'src/services/NavBarService.php';
require_once 'src/models/UsersModel.php';

$db = DatabaseConnectionService::connect();
$usersModel = new UsersModel($db);

echo "<pre>";

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = $usersModel->searchByUsername($username);
    var_dump($user);
}

echo "</pre>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
    <?php
        echo NavBarService::display($_SESSION['loggedIn']);
        echo LoginFormService::displayForm()
    ?>
</body>
</html>
