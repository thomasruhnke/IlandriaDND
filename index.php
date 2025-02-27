<?php 
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$action = isset($_GET['action'])? $_GET['action'] : 'Home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/styles/styles.css">
</head>
<body>
    <?php if($action === "Home"):?>
    <header>
        <h1><a href="?action=Home">Welcome to Ilandria</a></h1>
        <nav>
            <ul>
                <li><a href="?action=Home">Home</a></li>
                <li><a href="?action=Continents">Continents</a></li>
                <li><a href="?action=Characters">Characters</a></li>
                <li><a href="?action=Campaigns">Campaigns</a></li>
                <li><a href="?action=Kingdoms">Kingdoms</a></li>
                <li><a href="?action=Religions">Religions</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Ilandria</h2>
        <img src="" alt="This will be the map of the world">
        <div>

        </div>
    </main>
    <footer>

    </footer>
    <?php elseif($action === "Continents"):?>
    <header>
        <h1><a href="?action=Home">Welcome to Ilandria</a></h1>
        <nav>
            <ul>
                <li><a href="?action=Home">Home</a></li>
                <li><a href="?action=Continents">Continents</a></li>
                <li><a href="?action=Characters">Characters</a></li>
                <li><a href="?action=Campaigns">Campaigns</a></li>
                <li><a href="?action=Kingdoms">Kingdoms</a></li>
                <li><a href="?action=Religions">Religions</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Ilandria</h2>
        <div>

        </div>
    </main>
    <footer>

    </footer>
    <?php endif;?>
</body>
</html>