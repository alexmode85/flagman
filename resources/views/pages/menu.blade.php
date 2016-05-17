<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Меню</title>
    <meta name="description" content="Русская традиционная и европейская кухни в меню ресторана Флагман" />
    <meta name="keywords" content="Меню ресторана Флагман" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
    <link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="libs/fancybox/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
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
                        <h1 id="menu">Меню</h1>
                        <div class="tab">
                            <a href="menu" style="text-decoration: none; border-bottom: 3px solid #8c5a2b;">Основное</a><i class="fa fa-circle"></i>
                            <a href="banket.html">Банкетное</a><i class="fa fa-circle"></i>
                            <a href="#">Винная карта</a>
                        </div>
                    </div>
                </div>
<!--      Новое МЕНЮ     -->
<!--
                <div class="row">
                    @foreach($records as $item)
                        <div class="col-md-3 col-sm-3">
                            <div class="card-menu">
                                <a class="fancybox-button" rel="fancybox-button" href="/uploads/menu/original/{{ $item->image }}" title="{{ $item->title }}"><img src="/uploads/menu/medium/{{ $item->image }}" alt="{{ $item->title }}" class="img" /></a>
                                <div class="card-title">
                                    <span class="food-name">{{ $item->title }}</span>
                                    <br>
                                    <span class="price">{!! strip_tags($item->price) !!}р.</span>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                </div>
-->
<!--                -->
                <div class="row first">
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/1.jpg" title="Солянка мясная"><img src="./img/restoclub/1.jpg" alt="Солянка мясная" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Солянка мясная</span>
                                <br>
                                <span class="price">320р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/2.jpg" title="Суп харчо"><img src="./img/restoclub/2.jpg" alt="Суп харчо" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Суп харчо</span>
                                <br>
                                <span class="price">300р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/3.jpg" title="Уха с красной рыбой"><img src="./img/restoclub/3.jpg" alt="Уха с красной рыбой" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Уха с красной рыбой</span>
                                <br>
                                <span class="price">320р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/4.jpg" title="Куриный бульон с крутонами"><img src="./img/restoclub/4.jpg" alt="Куриный бульон с крутонами" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Куриный бульон с крутонами</span>
                                <br>
                                <span class="price">270р.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row first">
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/5.jpg" title="Крем-суп из тыквы с сыром маскарпоне"><img src="./img/restoclub/5.jpg" alt="Крем-суп из тыквы с сыром маскарпоне" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Крем-суп из тыквы с сыром маскарпоне</span>
                                <br>
                                <span class="price">290р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/6.jpg" title="Борщ с филе говядины"><img src="./img/restoclub/6.jpg" alt="Борщ с филе говядины" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Борщ с филе говядины</span>
                                <br>
                                <span class="price">300р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/7.jpg" title="Селедочка прянная"><img src="./img/restoclub/7.jpg" alt="Селедочка прянная" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Селедочка прянная</span>
                                <br>
                                <span class="price">240р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/8.jpg" title="Винегрет"><img src="./img/restoclub/8.jpg" alt="Винегрет" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Винегрет</span>
                                <br>
                                <span class="price">255р.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row first">
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/9.jpg" title="Сельдь под Шубой"><img src="./img/restoclub/9.jpg" alt="Сельдь под Шубой" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Сельдь "под Шубой"</span>
                                <br>
                                <span class="price">290р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/10.jpg" title="Лосось Шеф-посола"><img src="./img/restoclub/10.jpg" alt="Лосось Шеф-посола" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Лосось Шеф-посола</span>
                                <br>
                                <span class="price">425р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/11.jpg" title="Теплый салат с лососем, шампиньоны и овощами"><img src="./img/restoclub/11.jpg" alt="Теплый салат с лососем, шампиньоны и овощами" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Теплый салат с лососем, шампиньоны и овощами</span>
                                <br>
                                <span class="price">410р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/12.jpg" title="Оладьи из кабачков"><img src="./img/restoclub/12.jpg" alt="Оладьи из кабачков" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Оладьи из кабачков</span>
                                <br>
                                <span class="price">310р.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row first">
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/13.jpg" title="Салат Русский"><img src="./img/restoclub/13.jpg" alt="Салат Русский" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Салат "Русский"</span>
                                <br>
                                <span class="price">290р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/14.jpg" title="Дранники картофельные с грибами и сметаной"><img src="./img/restoclub/14.jpg" alt="Дранники картофельные с грибами и сметаной" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Дранники картофельные с грибами и сметаной</span>
                                <br>
                                <span class="price">310р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/15.jpg" title="Салат Цезарь с тигровыми креветками"><img src="./img/restoclub/15.jpg" alt="Салат Цезарь с тигровыми креветками" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Салат "Цезарь" с тигровыми креветками</span>
                                <br>
                                <span class="price">490р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/16.jpg" title="Салат Цезарь с куриной грудкой"><img src="./img/restoclub/16.jpg" alt="Салат Цезарь с куриной грудкой" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Салат "Цезарь" с куриной грудкой</span>
                                <br>
                                <span class="price">390р.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row first">
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/17.jpg" title="Закуска Русский разгон"><img src="./img/restoclub/17.jpg" alt="Закуска Русский разгон" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Закуска "Русский разгон"</span>
                                <br>
                                <span class="price">350р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/18.jpg" title="Теплый салат с печенью кролика"><img src="./img/restoclub/18.jpg" alt="Теплый салат с печенью кролика" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Теплый салат с печенью кролика</span>
                                <br>
                                <span class="price">390р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/19.jpg" title="Котлеты домашние с картофельным пюре"><img src="./img/restoclub/19.jpg" alt="Котлеты домашние с картофельным пюре" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Котлеты домашние с картофельным пюре</span>
                                <br>
                                <span class="price">400р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/20.jpg" title="Эскалоп Романов"><img src="./img/restoclub/20.jpg" alt="Эскалоп Романов" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Эскалоп "Романов"</span>
                                <br>
                                <span class="price">550р.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row first">
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/21.jpg" title="Котлета По-Киевски с картофелем Пай"><img src="./img/restoclub/21.jpg" alt="Котлета По-Киевски с картофелем Пай" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Котлета "По-Киевски" с картофелем Пай</span>
                                <br>
                                <span class="price">380р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/22.jpg" title="Щучьи котлеты со смальцэм и луковыми чипсами"><img src="./img/restoclub/22.jpg" alt="Щучьи котлеты со смальцэм и луковыми чипсами" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Щучьи котлеты со смальцэм и луковыми чипсами</span>
                                <br>
                                <span class="price">400р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/23.jpg" title="Карпаччо из лосося с микс салатом и сыром Пармезан"><img src="./img/restoclub/23.jpg" alt="Карпаччо из лосося с микс салатом и сыром Пармезан" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Карпаччо из лосося с микс салатом и сыром "Пармезан"</span>
                                <br>
                                <span class="price">410р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/24.jpg" title="Салат и запеченной тыквы"><img src="./img/restoclub/24.jpg" alt="Салат и запеченной тыквы" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Салат и запеченной тыквы</span>
                                <br>
                                <span class="price">300р.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row first">
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/25.jpg" title="Бараньи котлетки гриль на косточке"><img src="./img/restoclub/25.jpg" alt="Бараньи котлетки гриль на косточке" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Бараньи котлетки гриль на косточке</span>
                                <br>
                                <span class="price">760р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/26.jpg" title="Цыпленок гриль с пряными травами и картофелем"><img src="./img/restoclub/26.jpg" alt="Цыпленок гриль с пряными травами и картофелем" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Цыпленок гриль с пряными травами и картофелем</span>
                                <br>
                                <span class="price">460р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/27.jpg" title="Стэйк из говядины с перечным соусом"><img src="./img/restoclub/27.jpg" alt="Стэйк из говядины с перечным соусом" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Стэйк из говядины с перечным соусом</span>
                                <br>
                                <span class="price">750р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/28.jpg" title="Греческий салат"><img src="./img/restoclub/28.jpg" alt="Греческий салат" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Греческий салат</span>
                                <br>
                                <span class="price">360р.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row first">
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/29.jpg" title="Лосось гриль на подушечке из шпината"><img src="./img/restoclub/29.jpg" alt="Лосось гриль на подушечке из шпината" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Лосось гриль на подушечке из шпината</span>
                                <br>
                                <span class="price">640р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/30.jpg" title="Блинчики с красной икрой, сметаной, луком и яйцом"><img src="./img/restoclub/30.jpg" alt="Блинчики с красной икрой, сметаной, луком и яйцом" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Блинчики с красной икрой, сметаной, луком и яйцом</span>
                                <br>
                                <span class="price">350р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/31.jpg" title="Паста Карбонара"><img src="./img/restoclub/31.jpg" alt="Паста Карбонара" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Паста "Карбонара"</span>
                                <br>
                                <span class="price">420р.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/32.jpg" title="Паста Болоньезе"><img src="./img/restoclub/32.jpg" alt="Паста Болоньезе" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Паста "Болоньезе"</span>
                                <br>
                                <span class="price">390р.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row second">
                    <div class="col-md-3 col-sm-3">
                        <div class="card-menu">
                            <a class="fancybox-button" rel="fancybox-button" href="./img/restoclub/33.jpg" title="Бефстроганов с вешанками и печеным картофелем"><img src="./img/restoclub/33.jpg" alt="Бефстроганов с вешанками и печеным картофелем" class="img" /></a>
                            <div class="card-title">
                                <span class="food-name">Бефстроганов с вешанками и печеным картофелем</span>
                                <br>
                                <span class="price">610р.</span>
                            </div>
                        </div>
                    </div>
                    <!--
        <div class="col-md-3 col-sm-3">
          <div class="card-menu">
            <div class="img img-34"></div>
            <div class="card-title">
              <span class="food-name">Наполеон</span><br>
              <span>---р.</span>
            </div>
          </div>
        </div>
-->
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
    </div>





    <!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
    <script src="libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="libs/fancybox/jquery.fancybox.pack.js"></script>
    <script src="libs/fancybox/helpers/jquery.fancybox-buttons.js"></script>
    <script src="libs/fancybox/helpers/jquery.fancybox-media.js"></script>
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