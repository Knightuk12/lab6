<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab6</title>
 <link rel="stylesheet" type="text/css" href="style/style.css">
<body>
  <header>
        Ігри українською, <?php
        echo "дата : " . date('d.m.y') . "";
        ?>
    </header>
    <main>
        <div class="sidebar">
            <nav>
                <p> Навігація </p>
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
    <center><h1>Список ігор з підтримкою української мови</h1></center>

    <ol><i>
        <li>Rimworld</li>
        <li>Stronghold crusader</li>
        <li>To the moon</li>
        <li>Factorio</li>
        <li>The Stanley Parable</li>
        <li>Baldur`s gate</li>
    </i></ol>
<br>
<h1>Додати відгук</h1>
        <form method="post" action="scripts/post.php">
        Нік: <input type="text" name="fname">
        Коментар: <input type="text" name="ftext">
        <input type="submit">
        </form>
<br>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/y_2H6xjnWLA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
<br>
    <center><table border="2">
        <tr>
            <th>Назва</th>
            <th>Опис</th>
            <th>Ціна</th>
        </tr>
        <tr>
            <td>The Stanley Parable</td>
            <td>Гра про офісного робітника Стенлі</td>
            <td>239 грн</td>
        </tr>
        <tr>
            <td>Rimworld</td>
            <td>Науково-фантастичний симулятор колонії</td>
            <td>429 грн</td>
        </tr>
        <tr>
            <td>Baldur`s gate</td>
            <td>Класична рольова гра з видом від 3 особи</td>
            <td>279 грн</td>
        </tr>
    </table></center>
   </main>
</head>
</body>
</html>


