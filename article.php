<?php
include("./include/head.php");
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
                        <div class="block">
                            <a>13</a>
                            <h3>Розробка на Node.JS</h3>
                            <div class="block__content">
                                <img src="./img/www.jpeg" class="photo__content">
                                <div class="full-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde minima totam
                                    distinctio porro saepe optio animi consequuntur laudantium quis? Accusamus
                                    eligendi
                                    minus eaque corporis quas ratione inventore ab ut, amet soluta optio ipsam harum
                                    officia cumque? Temporibus error ducimus amet perspiciatis ex nisi harum quia
                                    esse
                                    dolores vero porro commodi soluta, dolorem itaque autem, quos in dolore id atque
                                    omnis adipisci necessitatibus nesciunt. Aliquam labore libero, amet, deserunt,
                                    unde
                                    praesentium atque nam exercitationem eveniet illum similique tempore optio
                                    facere
                                    magni. Unde, enim porro tempora odio, amet explicabo sed, esse deleniti
                                    excepturi
                                    voluptatibus veniam. Quae, perspiciatis sequi quis doloribus voluptate,
                                    laboriosam
                                    odit voluptatum ratione rem amet provident? Magnam unde exercitationem deleniti
                                    doloremque. Iure exercitationem odio ratione odit, quae quo neque vero officia
                                    velit. Officia facere ipsa possimus dolores vero iste earum, exercitationem
                                    doloribus tenetur similique molestias at accusantium aspernatur error. Ratione
                                    excepturi officiis at provident laudantium doloribus ex libero. Ducimus quidem,
                                    adipisci exercitationem sit alias iste eveniet obcaecati nesciunt animi dolorem,
                                    voluptas possimus quod tempora voluptatem consequuntur ipsam excepturi minima
                                    atque
                                    repellat quisquam commodi. Perferendis eum voluptate doloremque nihil eius
                                    incidunt
                                    cupiditate porro dolor, iure quisquam illum asperiores mollitia. Cumque fuga
                                    recusandae qui ratione quia expedita? Aliquid assumenda reiciendis beatae?
                                    Numquam.
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <h3>Коментарі</h3>
                            <a href="#comment-add-form">Добавити свій</a>
                            <div class="block__content">
                                <div class="articles articles__vertical">
                                    <article class="article">
                                        <div class="article__image"
                                            style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="#">Johnny Flame</a>
                                            <div class="article__info__meta"><small>2021-09-03 16:25:34</small></div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet consectetur.
                                            </div>
                                        </div>
                                    </article>
                                    <article class="article">
                                        <div class="article__image"
                                            style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <a href="#">Johnny Flame</a>
                                            <div class="article__info__meta"><small>2021-09-03 16:25:34</small></div>
                                            <div class="article__info__preview">Lorem ipsum dolor sit amet consectetur.
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="block" id="comment-add-form">
                            <h3>Добавити коментар</h3>
                            <div class="block__content">
                                <form id_page="0" id="form_comments" class="form" method="post"
                                    action="article.php?id=5#comment-add-form">
                                    <div class="form__group">
                                        <div class="row">
                                            <div class="col-md-6"><input type="text"
                                                    class="form__control name_my_impute" required name="name"
                                                    placeholder="Ім'я">
                                            </div>
                                            <div class="col-md-6"><input type="text"
                                                    class="form__control nickname_my_impute" required name="nickname"
                                                    placeholder="Нікнейм">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__group"><textarea name="text" required
                                            class="form__control text_my_input"
                                            placeholder="Опис ..."></textarea>
                                    </div>
                                    <div class="form__group"><input type="submit" class="form__control" name="do_post"
                                            value="Добавити коментар">
                                    </div>
                                </form>
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