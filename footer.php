<?php
session_start();

if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 0;
}
$_SESSION['page_views'] += 1;
?>

<footer>
    <p>Page views: <?php echo $_SESSION['page_views']; ?></p>
    <p>© 2024 Nikita Liubov. All rights reserved.</p>
    <p>
        <a href="https://github.com/Adzirii" target="_blank">GitHub</a> |
        <a href="https://linkedin.com/in/your-profile" target="_blank">LinkedIn</a> |
        <a href="mailto:youremail@example.com">Email</a>
    </p>
</footer>
