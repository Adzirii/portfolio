<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Nikita Liubov</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
<div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="resourses/vecteezy_binary-code-with-numbers-moving-downward-on-screen_2015336.mp4" type="video/mp4">
        </video>
</div>

<main>
    <section id="projects">
        <h1>My Projects</h1>
        <div class="project">
            <h2>Last Shot (Unity Game)</h2>
            <p>This is one of my first projects, a game about a bartender in a Wild West setting. I developed it using Unity.</p>
            <a href="https://arasti.itch.io/lastshot" target="_blank" class="button-link">Play the Game</a>
            <a href="https://github.com/NateArasti/LastShot" target="_blank" class="button-link">Source Code</a>
        </div>

        <div class="project">
            <h2>Party Purse (Mobile App)</h2>
            <p>This mobile app, built with Spring, helps organize the collection of money for shared events (e.g., a New Year’s party). The app allows users to create events, add participants, and manage a list of items for the event. It tracks who buys what and who owes whom.</p>
            <a href="https://github.com/Adzirii/PartyPurse" target="_blank" class="button-link">Source Code</a>
        </div>

        <div class="project">
            <h2>Card Collector (Collectible Cards Service)</h2>
            <p>This is an ongoing project developed for the course "Methodology of Programming." The service allows users to collect and manage digital collectible cards.</p>
            <a href="https://gitlab.com/methodology-of-programming/cardcollector" target="_blank" class="button-link">Source Code</a>
        </div>

    </section>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
