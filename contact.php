<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="resourses/vecteezy_binary-code-with-numbers-moving-downward-on-screen_2015336.mp4" type="video/mp4">
        </video>
    </div>

    <section id="contact">
        <h2>Contact Me</h2>
        <p>Have a question or want to get in touch? Feel free to send me a message using the form below, or contact me via email or social media.</p>
        
        <div class="contact-form">
            <form action="send_mail.php" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit">Send Message</button>
            </form>
        </div>

        <div class="social-links">
            <p>You can also find me on:</p>
            <a href="https://github.com/YourGitHubUsername" target="_blank">GitHub</a> |
            <a href="https://linkedin.com/in/YourLinkedInProfile" target="_blank">LinkedIn</a> |
            <a href="mailto:liubov.nikita@gmail.com">Email</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Nikita Liubov. All rights reserved.</p>
    </footer>
</body>
</html>
