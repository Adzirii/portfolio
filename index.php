<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My "Totally PHP" Portfolio</title>
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

<main>
    <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="resourses/vecteezy_binary-code-with-numbers-moving-downward-on-screen_2015336.mp4" type="video/mp4">
        </video>
    </div>

    <section id="intro">
        <h1>Welcome to My "PHP Masterpiece"</h1>
        <p>Hey there! I'm Nikita Liubov, a proud Java developer bravely venturing into the world of PHP — all for the sake of a university project. Java may be my first love, but for now, let's pretend this portfolio is all about PHP (even though we both know the truth).</p>
        <a href="projects.php" class="btn">Check out my "PHP" Projects</a>
    </section>

    <section id="bonus">
        <h2>Why PHP?</h2>
        <p>Honestly, I ask myself the same question every day. But here we are, with variables that don't even require a type declaration. Amazing, right?</p>
        <p>Anyway, have a look around. If something breaks, let's just say it’s part of the "learning process".</p>
    </section>

    <section id="testimonials">
        <h2>Testimonials</h2>
        <blockquote>
            <p>"I was amazed by how quickly Nikita learned PHP... for about five minutes." — Anonymous Java Fan</p>
        </blockquote>
        <blockquote>
            <p>"If Nikita writes PHP code half as well as his Java, we're in for a wild ride!" — Nikita's Professor</p>
        </blockquote>
        <blockquote>
            <p>"What is PHP? And why I am writing it?" — My Inner Voice</p>
        </blockquote>
    </section>

    <?php
    $php_start_date = new DateTime("2024-09-01");
    $today = new DateTime();
    $days_with_php = $php_start_date->diff($today)->days;
    ?>
    <section id="counter">
        <h2>Days since I started learning PHP:</h2>
        <p><?php echo $days_with_php; ?> days and still trying to make sense of it all...</p>
    </section>

  

    <?php
    $php_tips = [
        "Remember: In PHP, everything is an array. Well, almost.",
        "Pro Tip: When in doubt, blame the semicolon.",
        "If it works, don't question it. Just move on.",
        "PHP: A perfectly reasonable language... said no Java developer ever.",
        "Fun fact: PHP originally stood for 'Personal Home Page'. Now it's... something else."
    ];
    $random_tip = $php_tips[array_rand($php_tips)];
    ?>
    <section id="tip">
        <h2>PHP Wisdom of the Day:</h2>
        <p><?php echo $random_tip; ?></p>
    </section>

    <!-- Progress bar for PHP knowledge -->
    <section id="progress">
        <h2>How Well I Know PHP (Or So I Think):</h2>
        <div style="background-color: #f4f4f4; width: 100%; padding: 5px;">
            <div style="background-color: #4caf50; width: 30%; color: white; padding: 10px;">
                30% - Getting there... slowly.
            </div>
        </div>
    </section>
</main>

<footer>
    <p>© 2024 Nikita Liubov. Java forever... but PHP for now.</p>
    <div class="social-links">
        <a href="https://github.com/Adzirii" target="_blank">GitHub</a> |
        <a href="https://www.linkedin.com/in/liubovnikita" target="_blank">LinkedIn</a> |
        <a href="mailto:liubov.nikita@gmail.com">Email</a>
    </div>
</footer>

</body>
</html>
















