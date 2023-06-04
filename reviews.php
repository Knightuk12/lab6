<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Lab6</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<header>
Ігри українською, <?php
echo "дата : " . date('d.m.y') . "";
?>
</header>
<main>
<div class="sidebar">
<nav>
<h2> Навігація </h2>
<ul class="navigation">
<li>
<a href="index.php">
Головна
</a>
</li>
<li>
<a href="reviews.php">
Відгуки
</a>
</li>
</ul>
</nav>
</div>
<div class="main-content">
<h1>Відгуки</h1>
<?php
require_once 'scripts/get.php';
?>
</div>
</main>
</body>
</html>