$(document).ready(function() {
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
    document.querySelector('body').classList.toggle("fixed")
  });


  var modalButton = $('[data-toggle=modal]');
  var closeButton = $('.modal__close');
  modalButton.on('click', openModal);

  closeButton.on('click', closeModal);


  function openModal() {
    var modalOverlay = $('.modal__overlay');
    var modalDialog = $('.modal__dialog');
    modalOverlay.addClass('modal__overlay--visible');
    modalDialog.addClass('modal__dialog--visible');
    $('body').addClass("fixed");
  };

  function closeModal(event) {
    event.preventDefault();
    var modalOverlay = $('.modal__overlay');
    var modalDialog = $('.modal__dialog');
    modalOverlay.removeClass('modal__overlay--visible');
    modalDialog.removeClass('modal__dialog--visible');
    $('body').removeClass("fixed");
  };
  $(document).keyup(function(e) {
    if (e.key === "Escape") {
      var modalOverlay = $('.modal__overlay');
      var modalDialog = $('.modal__dialog');
      modalOverlay.removeClass('modal__overlay--visible');
      modalDialog.removeClass('modal__dialog--visible');
      $('body').removeClass("fixed");
    };
  });

  $(".form").each(function() {
    $(this).validate({
      messages: {
      name: "Please specify your name",
      email: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@domain.com"
        },
      phone: {
        required: "We need your phone to contact you",
        phone: "Your phone must be in the format of +7 (999) 999-9999"
        }
      }
    });
  });

  $('.input-phone').mask('+7(000) 000-0000')

  AOS.init();

});