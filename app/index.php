<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
    <head>
        <?php
            include "_inc/headlines.php";
            include "_inc/styles-scripts.php";
        ?>
    </head>

    <body>
        <!--[if lt IE 10]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <main>
            <?php include "header.php" ?>

            <section>
                <header>
                    <h2>Sua seleção especial</h2>
                </header>


                <article>
                    <ul class="list-products">
                        <?php
                            /*
                                <li>
                                    <figure>
                                        <img src="" alt="" />
                                    </figure>

                                    <h3>Nome do produto</h3>

                                    <p>Descrição do produto um pouco maior, com duas linhas ou três que explica melhor do que se trata.</p>

                                    <div class="old-price">
                                        De: <span>R$ 23,99</span>
                                    </div>

                                    <div class="price">
                                        Por: <span>R$ 19,00</span>
                                    </div>

                                    <div class="price-divided">
                                        ou 2x de R$ 9,99
                                    </div>

                                    <a href="" class="btn btn-empty">Comprar</a>
                                </li>
                            */
                        ?>
                    </ul>

                    <figure class="loading-aux none">
                        <img src="images/loading.gif" width="32" height="32" class="loading center" alt="" />
                    </figure>

                    <button class="btn btn-empty center more-products">Ainda mais produtos aqui!</button>

                    <?php include "_inc/form-newsletter.php"; ?>
                </article>
            </section>


            <?php include "footer.php" ?>
        </main>

    </body>
</html>