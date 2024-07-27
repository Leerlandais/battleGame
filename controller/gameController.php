<?php


use model\Manager\UserManager;
use model\Mapping\UserMapping;

$userManager = new UserManager($db);

// LOGOUT
if (isset($_GET["logout"])) {
    $userManager->logout();
}

$title = "Welcome to the Game";
include PROJECT_DIRECTORY."/view/public/public.game.view.php";