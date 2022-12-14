<?php

use PhpMyAdmin\Sql;

include("./include/head.php");
$sql = "SELECT * FROM `articles`";
$result = mysqli_query($connection, "SELECT * FROM `articles`");
var_dump($result);
?>

<body>
    <div class="wrapper">
        <?php
        include("./include/header.php");
        ?>

        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-xl-8">
                        <div class="block new_text">
                            <a href="#">Всі пости</a>
                            <h3>Нові пости в блозі</h3>
                            <div class="block__content">
                                <div class="articles articles__horizontal  new_post">
                                    <?php
                                    $articles_select = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 6");
                                    while ($articles = mysqli_fetch_assoc($articles_select)) {

                                    ?>
                                        <article class="article">
                                            <div class="article__image" style="background-image: url('./img/<?php echo $articles["img"] ?>');">
                                            </div>
                                            <div class="article__info">
                                                <a href="./article.php"><?php echo substr($articles["title"], 0, 20)."...";?></a>
                                                <div class="article__info__meta">
                                                    <small>Категорія: <a href="#">Програмування</a></small>

                                                </div>
                                                <div class="article__info__preview"><?php echo substr($articles["text"], 0, 100);?>...
                                                </div>
                                            </div>
                                        </article>
                                    <?php   }?>

                                </div>
                            </div>
                        </div>

                        <div class="block">
                            <a href="#">Всі пости</a>
                            <h3>Безпека</h3>
                            <div class="block__content">
                                <div class="articles articles__horizontal  new_post">


                                    <article class="article">
                                        <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="./article.php">Розробка на Node.JS</a>
                                            <div class="article__info__meta">
                                                <small>Категорія: <a href="#">Програмування</a></small>

                                            </div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna ...
                                            </div>
                                        </div>
                                    </article>

                                    <article class="article">
                                        <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="./article.php">Розробка на Node.JS</a>
                                            <div class="article__info__meta">
                                                <small>Категорія: <a href="#">Програмування</a></small>

                                            </div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna ...
                                            </div>
                                        </div>
                                    </article>

                                    <article class="article">
                                        <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="./article.php">Розробка на Node.JS</a>
                                            <div class="article__info__meta">
                                                <small>Категорія: <a href="#">Програмування</a></small>

                                            </div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna ...
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>

                        <div class="block">
                            <a href="#">Всі пости</a>
                            <h3>Програмування</h3>
                            <div class="block__content">
                                <div class="articles articles__horizontal  new_post">


                                    <article class="article">
                                        <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="./article.php">Розробка на Node.JS</a>
                                            <div class="article__info__meta">
                                                <small>Категорія: <a href="#">Програмування</a></small>

                                            </div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna ...
                                            </div>
                                        </div>
                                    </article>

                                    <article class="article">
                                        <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="./article.php">Розробка на Node.JS</a>
                                            <div class="article__info__meta">
                                                <small>Категорія: <a href="#">Програмування</a></small>

                                            </div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna ...
                                            </div>
                                        </div>
                                    </article>

                                    <article class="article">
                                        <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="./article.php">Розробка на Node.JS</a>
                                            <div class="article__info__meta">
                                                <small>Категорія: <a href="#">Програмування</a></small>

                                            </div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna ...
                                            </div>
                                        </div>
                                    </article>

                                    <article class="article">
                                        <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="./article.php">Розробка на Node.JS</a>
                                            <div class="article__info__meta">
                                                <small>Категорія: <a href="#">Програмування</a></small>

                                            </div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna ...
                                            </div>
                                        </div>
                                    </article>

                                    <article class="article">
                                        <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="./article.php">Розробка на Node.JS</a>
                                            <div class="article__info__meta">
                                                <small>Категорія: <a href="#">Програмування</a></small>

                                            </div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna ...
                                            </div>
                                        </div>
                                    </article>

                                    <article class="article">
                                        <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="./article.php">Розробка на Node.JS</a>
                                            <div class="article__info__meta">
                                                <small>Категорія: <a href="#">Програмування</a></small>

                                            </div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna ...
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>



                    </section>
                    <?php
                    include("./include/sidebar.php");
                    ?>

                </div>
            </div>
        </div>

        <?php
        include("./include/footer.php");
        ?>

    </div>

</body>

</html>