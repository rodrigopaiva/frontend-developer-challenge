<?php
    /*
    Template Name: 404
    */
     ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="content-language" content="pt-br" />
        <meta http-equiv="cache-control" content="no-cache" />

        <title>Título</title>

        <!-- Styles -->
        <style>
            html, body, div, span, applet, object, iframe,
            h1, h2, h3, h4, h5, h6, p, blockquote, pre,
            a, abbr, acronym, address, big, cite, code,
            del, dfn, em, img, ins, kbd, q, s, samp,
            small, strike, strong, sub, sup, tt, var,
            b, u, i, center,
            dl, dt, dd, ol, ul, li,
            fieldset, form, label, legend,
            table, caption, tbody, tfoot, thead, tr, th, td,
            div, aside, canvas, details, embed,
            figure, figcaption, footer, header, hgroup,
            menu, nav, output, ruby, div, summary,
            time, mark, audio, video {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }
            div, aside, details, figcaption, figure,
            footer, header, hgroup, menu, nav, div { display: block; }
            body { line-height: 1; }
            ol, ul { list-style: none; }
            blockquote, q { quotes: none; }
            blockquote:before, blockquote:after,
            q:before, q:after { content: ''; content: none; }
            table { border-collapse: collapse; border-spacing: 0; }
            a { outline:none; }
            p { line-height: 1.5em; }
            .clear { clear: both; height: 0px; }

            * {
                margin: 0;
                padding: 0;
                text-decoration: none;
                list-style: none;
                font-weight: normal;
            }

            section:after,
            div:after {
                content: "";
                height: 0;
                display: block;
                clear: both;
                overflow: hidden;
            }

            html, body {
                width: 100%;
                height: 100%;
            }

            body {
                min-height: 100%;
                font-family: 'Open Sans',Arial,Tahoma,sans-serif;
                font-size: 62.5%;
                position: relative;
            }

            .all {
                text-align: center;
            }

            .all > img {
                margin-top: 40px;
            }

            .content {
                width: 740px;
                height: 345px;
                display: block;
                margin: 0 auto;
                margin-top: 100px;
                display: -webkit-box;
                display: -moz-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: box;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                -o-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
                -webkit-box-pack: center;
                -moz-box-pack: center;
                -o-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
            }

            .content p {
                text-align: center;
                font-weight: 400;
                font-size: 3em;
                font-style: italic;
                color: #563289;
            }

            a {
                text-align: center;
                font-size: 1.4em;
                color: #563289;
                text-transform: uppercase;
                border: 1px solid #563289;
                padding: 8px;
                border-radius: 7px;
            }

            a:hover {
                background-color: #563289;
                color: #fff;
            }
        </style>
    </head>


    <body class="404-error">
        <!--[if lt IE 10]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="all">
            <div class="content">
                <p>Ops! Não achamos o que você procura.</p>
            </div>

            <a href="#">voltar ao site</a>
        </div><!-- end all -->
    </body>
</html>