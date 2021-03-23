  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour Plan - Hotel Booking</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&family=Nunito:wght@400;600;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="navbar navbar-mobile--fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="index.html" class="logo">
            <img
              src="img/horizontal-logo.svg"
              alt="logo: Best Tour Plan"
              class="logo__img"
            />
          </a>

          <form
            action="#"
            class="search navbar__search navbar__search--mobile--hidden"
          >
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="button search__button">
              <img src="img/search.svg" alt="icon: search" />
            </button>
          </form>

          <a href="#" class="user navbar__user navbar__user--mobile--hidden">
            <img
              src="img/user-avatar.jpeg"
              alt="avatar: nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->
      <div class="navbar-bottom">
        <div class="container">
          <nav>
            <ul class="navbar-menu">
              <li class="navbar-menu__item navbar-menu__item--mobile--visible">
                <a
                  href="#"
                  class="user navbar__user navbar__user--mobile--visible"
                >
                  <img
                    src="img/user-avatar.jpeg"
                    alt="avatar: nathan"
                    class="user__avatar"
                  />
                  <span class="user__name">Nathan</span>
                </a>
              </li>
              <li class="navbar-menu__item navbar-menu__item--mobile--visible">
                <form
                  action="#"
                  class="search navbar__search navbar__search--mobile--visible"
                >
                  <input
                    type="text"
                    class="search__input"
                    placeholder="Search Location"
                  />
                  <button class="button search__button">
                    <img src="img/search.svg" alt="icon: search" />
                  </button>
                </form>
              </li>
              <li class="navbar-menu__item">
                <a href="#" class="navbar-menu__link">All Deals</a>
              </li>
              <li class="navbar-menu__item">
                <a href="#" class="navbar-menu__link">Hotels</a>
              </li>
              <li class="navbar-menu__item">
                <a href="#" class="navbar-menu__link">Activities</a>
              </li>
              <li class="navbar-menu__item">
                <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
              </li>
              <li class="navbar-menu__item">
                <a href="#" class="navbar-menu__link">Restaurants</a>
              </li>
              <li class="navbar-menu__item">
                <a href="#" class="navbar-menu__link">Events</a>
              </li>
              <li class="navbar-menu__item">
                <a href="#" class="navbar-menu__link">Rodrigues</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!-- /.header -->