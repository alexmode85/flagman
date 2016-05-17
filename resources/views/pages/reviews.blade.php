<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Отзывы</title>
    <meta name="description" content="Отзывы о ресторане Флагман" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
    <link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/media.css" />
</head>

<body>
    <div itemscope itemtype="http://schema.org/Restaurant">
        <header>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="left-col" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress">ул. Марата, 33</span>,
                            <br><span itemprop="addressLocality">Санкт-Петербург</span>, <span itemprop="postalCode">191002</span>
                            <a href="#callback" class="order-button fancybox">
                          Заказать столик
                      </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1 col-sm-6">
                        <a href="index.html" class="center-col"><img src="../img/logo.png" alt="Флагман" class="logo" itemprop="logo"></a>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-3">
                        <div class="right-col">
                            <div class="contacts">
                                <i class="fa fa-phone"></i>
                                <span itemprop="telephone"><span class="tel">(812)</span> 643-00-33</span>
                                <br>
                                <i class="fa fa-envelope"></i>
                                <span itemprop="email">bar905@mail.ru</span>
                            </div>
                            <div class="social-icons">
                                <a href="https://www.instagram.com/flagman_rest/" class="icon icon1"></a>
                                <a href="#" class="icon icon3"></a>
                                <a href="#" class="icon icon5"></a>
                                <a href="https://vk.com/flagman_rest" class="icon icon6"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ----  НАВИГАЦИЯ  -----   -->
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navigation cl-effect-17" id="cl-effect-17">
                            <ul>
                                <li><a href="#menu" class="nav cl-effect-17">Меню</a></li>
                                <li><a href="index.html#about" class="nav cl-effect-17">О нас</a></li>
                                <li><a href="index.html#news" class="nav cl-effect-17">Новости</a></li>
                                <li><a href="#map" class="nav cl-effect-17">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>




        <!--  ----------Меню--------------  -->
        <section class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hor-line"></div>
                        <div class="hor-line-overlap"></div>
                        <h1 id="reviews">Отзывы</h1>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block_main rounded">
                            <form method="post" action="shout.php">
                                <input type="text" id="name" name="name" placeholder="Ваше имя" />

                                <textarea type="text" id="message" name="message" class="message" placeholder="Ваш отзыв..."></textarea>

                                <input type="submit" id="submit" value="Отправить" />
                            </form>
                            <div id="shout">

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--  ---------- О нас ---------  -->


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="border"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="adress">
                            <h3>Адрес:</h3>ул. Марата, 33,
                            <br>Санкт-Петербург, 191002</div>
                    </div>
                    <div class="col-md-8">
                        <div id="map" style="width: 100%; height: 222px"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--  ------------------------  -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contacts">
                            <i class="fa fa-phone"></i>
                            <span class="tel">(812)</span> 643-00-33
                            <div class="social-icons">
                                <a href="https://www.instagram.com/flagman_rest/" class="icon icon1"></a>
                                <a href="#" class="icon icon3"></a>
                                <a href="#" class="icon icon5"></a>
                                <a href="https://vk.com/flagman_rest" class="icon icon6"></a>
                            </div>
                            <span class="footer-email"><i class="fa fa-envelope"></i>
                          bar905@mail.ru</span>

                            <br><span class="copyright">© 2016</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="hidden">
            <form id="callback" class="pop-form">
                <h3>Заказать столик</h3>
                <input type="text" name="name" placeholder="Ваше имя..." required>
                <input type="text" name="phone" placeholder="Ваш телефон..." required>
                <button class="button" type="submit">Заказать</button>
            </form>
        </div>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(function () {
                refresh_shoutbox();
                setInterval("refresh_shoutbox()", 15000);

                $("#submit").click(function () {
                    var name = $("#name").val();
                    var message = $("#message").val();
                    var data = 'name=' + name + '&message=' + message;

                    $.ajax({
                        type: "POST",
                        url: "shout.php",
                        data: data,
                        success: function (html) {
                            $("#shout").slideToggle(500, function () {
                                $(this).html(html).slideToggle(500);
                                $("#message").val("");
                            });
                        }
                    });
                    return false;
                });
            });

            function refresh_shoutbox() {
                var data = 'refresh=1';

                $.ajax({
                    type: "POST",
                    url: "shout.php",
                    data: data,
                    success: function (html) {
                        $("#shout").html(html);
                    }
                });
            }
        </script>



        <!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
        <script src="libs/jquery/jquery-1.11.1.min.js"></script>
        <script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
        <script src="libs/fancybox/jquery.fancybox.pack.js"></script>
        <script src="libs/waypoints/waypoints-1.6.2.min.js"></script>
        <script src="libs/countdown/jquery.plugin.js"></script>
        <script src="libs/countdown/jquery.countdown.min.js"></script>
        <script src="libs/countdown/jquery.countdown-ru.js"></script>
        <script src="libs/scrollto/jquery.scrollTo.min.js"></script>
        <script src="libs/landing-nav/navigation.js"></script>
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
        <script src="js/common.js"></script>

        <!-- Yandex.Metrika counter -->
        <!-- /Yandex.Metrika counter -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-75957105-1', 'auto');
            ga('send', 'pageview');
        </script>
</body>

</html>