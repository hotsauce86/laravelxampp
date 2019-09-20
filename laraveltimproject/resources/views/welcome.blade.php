<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }


            @keyframes fontbulger{
                0%{
                    font-size: 384px
                    color: white;
                }

                1%{
                    font-size: 192px;
                    color: white;
                }
                10%{
                    font-size: 128px;
                    color: black;
                }
                30%{
                    font-size: 96px;
                }
                100%{
                    font-size: 96px;
                }
            }

            @keyframes backgroundshifter{
                0%{
                    background-color: white;
                }
                1%{
                    background-color: black;
                }
                2%{
                    background-color: red;
                }
                 3%{
                    background-color: white;
                }
                4%{
                    background-color: teal;
                }
                 5%{
                    background-color: black;
                }
                6%{
                    background-color: yellow;
                }
                7%{
                    background-color: white;
                }
                8%{
                    background-color: pink;
                }
                9%{
                    background-color: black;
                }
                10%{
                    background-color: lightgrey;
                }
                100%{
                    background-color: white;
                }
                
            }

            .title{
                animation: fontbulger 4s;
            }

            body{
                animation: backgroundshifter 4s;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">


                <?php
                foreach($tasks as $task) :
                ?>

                <li><?= $task; ?></li>
            <?php endforeach; ?>
                
                <!--div class="title">Laravel 5</div-->
                <div class="title">TIM'S LARAVEL PROJECT (V 0.5.0)</div>
                <!--p>(this is the welcome blade)</p>

                <p>
                    <a href="/contact">Contact</a> us to learn more
                </p>

                <p>
                    <a href="/post/12/23/34">Posts</a>
                </p>

                <p>
                    <a href="/testlayout">testlayout</a>    
                </p-->
            </div>
        </div>
    </body>
</html>
