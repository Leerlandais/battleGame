<?php

?>
<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<div class="container-fluid w-screen h-screen bg-blue-400 flex flex-col place-items-center">
    <div class="py-12">
        <?php if(isset($errorMessage)) {
            ?>
            <h2 class="text-4xl text-red-600 text-center"><?=$errorMessage?></h2>
            <?php
        }
        ?>
    </div>
<div>
<a href="?logout"><button class="bg-[#4F46E5] w-auto p-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]">Logout</button></a>
</div>
</div>
</body>
</html>

