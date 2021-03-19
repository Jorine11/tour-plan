const hotelSlider = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
    pageLeft: true,
    pageRight: true,
  },
  autoplay: {
  delay: 5000,
  },
});

const reviewSlider = new Swiper('.review-container', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.review__button--next',
    prevEl: '.review__button--prev',
  },
});

    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [55.774054, 37.651793],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 17
        });
        var myPlacemark = new ymaps.Placemark( [55.774054, 37.651793], {
          balloonContent: 'Россия, Москва, Каланчёвская улица, 21/40',
          hintContent:  'Hilton Moscow Leningradskaya'
        });
        myMap.geoObjects.add(myPlacemark);
      };

var menuButton = document.querySelector('.menu-button');
menuButton.addEventListener('click', function(){ 
  document.querySelector('.navbar-bottom').classList.toggle("navbar-bottom--visible")
});
