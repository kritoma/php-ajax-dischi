<?php 
    include __DIR__ . "/../serve/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img src="../img/spotify-logo.png" alt="spotify logo">
    </header>
    <main>
        <div class="container">
            <?php foreach($database as $music) { ?>
                <div class="card">
                    <img src="<?= $music['poster']; ?>" alt="img">
                    <h3><?= $music['title']; ?></h3>
                    <p><?= $music['author']; ?></p>
                    <p><?= $music['year']; ?></p>
                </div>
            <?php }; ?>   
        </div>
    </main>
</body>
</html>