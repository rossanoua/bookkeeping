<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bookkeeping' . '/defines.php'; ?>


<!doctype html>
<html lang="ru">
<head>

    <link rel="apple-touch-icon" sizes="57x57" href="./favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <link rel="manifest" href="./favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <meta charset="UTF-8">
    <title>Балуемся со счетчиками</title>
    <link href='//fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet'>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
    <link rel="stylesheet" href="css/form_css.css">
    <link rel="stylesheet" href="css/table_css.css">
</head>
<body>

<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Подать</a></li>
        <li class="tab"><a href="#login">Посмотреть</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Внести показатели счетчиков</h1>

            <!--action="/test2.php" method="post"-->
            
            <form>

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            Газ<span class="req">*</span>
                        </label>
                        <input type="text" name="gas" id="post-gas-data" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Вода<span class="req">*</span>
                        </label>
                        <input type="text" name="water" id="post-water-data" required autocomplete="off"/>
                    </div>


                    <div class="field-wrap">
                        <label>
                            Свет<span class="req">*</span>
                        </label>
                        <input type="text" name="ellectro" id="post-ellectro-data" required autocomplete="off"/>
                    </div>
                </div>
                <p>Форма принимает только цифры</p>
                <!--<div class="field-wrap">
                  <label>
                    еще чего то там<span class="req">*</span>
                  </label>
                  <input type="text" autocomplete="off"/>
                </div>-->

                <!--<button type="submit" id="data-post-btn" class="button button-block"/>Отправить данные</button>-->
                <div id="data-post-btn" class="wraper button button-block">
                    <p class="send-data">Отправить данные</p>
                </div>

            </form>

        </div>

        <div id="login">
            <h1>Внесенные данные</h1>

            <form action="/" method="post">

                <div class="field-wrap">
                    <label>
                        Критерий поиска<span class="req"></span>
                    </label>
                    <input type="text" autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Диапазон дат<span class="req"></span>
                    </label>
                    <input type="text" autocomplete="off"/>
                </div>

                <!--<p class="forgot"><a href="#">Forgot Password?</a></p>-->

                <button class="button button-block"/>Поиск</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->


<div class="table">
    <table id="data_counters">
        <tr>
            <th>№П.П.</th>
            <th>Дата записи</th>
            <th>Газ</th>
            <th>Вода</th>
            <th>Эллектоэнергия</th>
        </tr>
        <?php $rows = array("a" , "b" , "c" , "d" , "e" , "f" , "g" , "h" , "i" , "g");?>
        <?php require_once INCLUDES . 'table_row.php'; ?>
    </table>
</div>
<!--/table of database-->


<script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/form_js.js"></script>
<script type="text/javascript" src="js/data_insert.js"></script>
</body>
</html>