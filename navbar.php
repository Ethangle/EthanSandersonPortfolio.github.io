<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
?>

<header id="header">
    <div class="logo">Ethan Sanderson</div>
    <p>Game developer skilled in C#, Unity, and Blender.</p>
</header>

<nav id="nav">
    <ul class="links">
        <li class="<?= $page == "projects.php" ? 'active' : ''; ?>"><a href="projects.php">Projects</a></li>
        <li class="<?= $page == "art.php" ? 'active' : ''; ?>"><a href="art.php">Art</a></li>
        <li class="<?= $page == "other.php" ? 'active' : ''; ?>"><a href="other.php">Other Work</a></li>
        <li class="<?= $page == "contact.php" ? 'active' : ''; ?>"><a href="contact.php">Contact Me</a></li>
    </ul>
    <ul class="icons">
        <li><a href="https://www.linkedin.com/in/ethanjsanderson/" target="_blank" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
        <li><a href="https://github.com/Ethangle" target="_blank" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
        <li><a href="https://www.youtube.com/channel/UCgEqv6bSd-9lus4eBq7pBug" target="_blank" class="icon brands fa-youtube"><span class="label">YouTube</span></a></li>
    </ul>
</nav>