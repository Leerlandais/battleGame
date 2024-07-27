<?php


echo "and we're in";

use model\Manager\UserManager;
use model\Mapping\UserMapping;

$userManager = new UserManager($db);

// LOGOUT
if (isset($_GET["logout"])) {
    $userManager->logout();
}


include PROJECT_DIRECTORY."/view/public/public.game.view.php";