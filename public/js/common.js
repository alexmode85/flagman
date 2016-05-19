$(document).ready(function () {

    //Таймер обратного отсчета
    //Документация: http://keith-wood.name/countdown.html
    //<div class="countdown" date-time="2015-01-07"></div>
    var austDay = new Date($(".countdown").attr("date-time"));
    $(".countdown").countdown({
        until: austDay,
        format: 'yowdHMS'
    });

    //Попап менеджер FancyBox
    //Документация: http://fancybox.net/howto
    //<a class="fancybox"><img src="image.jpg" /></a>
    //<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
    $(".fancybox").fancybox();
    $(".fancybox-button").fancybox({
        prevEffect: 'none',
        nextEffect: 'none',
        closeBtn: false,
        helpers: {
            title: {
                type: 'inside'
            },
            buttons: {}
        }
    });

    //Навигация по Landing Page
    //$(".top_mnu") - это верхняя панель со ссылками.
    //Ссылки вида <a href="#contacts">Контакты</a>
    $(".top_mnu").navigation();

    //Добавляет классы дочерним блокам .block для анимации
    //Документация: http://imakewebthings.com/jquery-waypoints/
    $(".block").waypoint(function (direction) {
        if (direction === "down") {
            $(".class").addClass("active");
        } else if (direction === "up") {
            $(".class").removeClass("deactive");
        };
    }, {
        offset: 100
    });

    //Кнопка "Наверх"
    //Документация:
    //http://api.jquery.com/scrolltop/
    //http://api.jquery.com/animate/
    $("#top").click(function () {
        $("body, html").animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    //Аякс отправка форм
    //Документация: http://api.jquery.com/jquery.ajax/
    $("#callback").submit(function () {
        $.ajax({
            type: "GET",
            url: "mail.php",
            data: $("#callback").serialize()
        }).done(function () {
            alert("Спасибо за заявку!");
            setTimeout(function () {
                $.fancybox.close();
            }, 1000);
        });
        return false;
    });

    //Скролл по якорям
    $('a[href^="#"]').click(function (e) {
        // Prevent the jump and the #hash from appearing on the address bar
        e.preventDefault();
        // Scroll the window, stop any previous animation, stop on user manual scroll
        // Check https://github.com/flesler/jquery.scrollTo for more customizability
        $(window).stop(true).scrollTo(this.hash, {
            duration: 1000,
            interrupt: true
        });
    });

    //Каруселька
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        items: 1,
        margin: 10,
        autoHeight: true,
        loop: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });

    $(".next_button").click(function () {
        owl.trigger("next.owl.carousel");
    });
    $(".prev_button").click(function () {
        owl.trigger("prev.owl.carousel");
    });




});

ymaps.ready(init);
var myMap;

function init() {
    myMap = new ymaps.Map("map", {
        center: [59.926172, 30.35167],
        zoom: 15,
        controls: ['smallMapDefaultSet']
    });
    myGeoObject = new ymaps.GeoObject({
        geometry: {
            type: "Point", // тип геометрии - точка
            coordinates: [59.926172, 30.35167] // координаты точки
        }
    });
    myMap.geoObjects.add(myGeoObject);
}