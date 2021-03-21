<?php include('header.php');?>
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrap">
              <div class="stars hotel-info__stars">
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
              </div>
              <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <!-- /.hotel-wrap -->
            <p class="hotel-description">
              Half-Board/ All Inclusive + Complimentary Activities + Child Stays
              Free
            </p>
            <!-- /.stars -->
          </div>
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter"
              >4.5/<span class="rating__counter rating__counter--small">5</span>
            </span>
          </div>
        </div>
        <!-- /.hotel-info -->
        <div class="hotel-review">
          <div class="slider">
            <div class="hotel-slider swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <img src="img/slide-1.jpg" alt="slide" class="slide-img" />
                </div>
                <div class="swiper-slide">
                  <img src="img/slide-2.jpg" alt="slide" class="slide-img" />
                </div>
                <div class="swiper-slide">
                  <img src="img/slide-3.jpg" alt="slide" class="slide-img" />
                </div>
                <div class="swiper-slide">
                  <img src="img/slide-4.jpg" alt="slide" class="slide-img" />
                </div>
                <div class="swiper-slide">
                  <img src="img/slide-5.jpg" alt="slide" class="slide-img" />
                </div>
              </div>
              <!-- If we need navigation buttons -->
              <button class="slider-button slider-button--prev"></button>
              <button class="slider-button slider-button--next"></button>
            </div>
            <!-- /.slider -->
          </div>
          <div class="booking">
            <div class="booking-info">
              <div class="booking-details">
                <div class="booking-price">
                  <span class="booking-price__start">price starts as</span>
                  <span class="price">$ 8,500</span>
                  <span class="booking-price__per-room">per room / night</span>
                </div>
                <!-- /.booking-price -->
                <div class="person">
                  <div class="guests">
                    <img src="img/user.svg" alt="icon: user" />
                    <span class="guests__text">2 x Guests</span>
                  </div>
                  <div class="room">
                    <img src="img/home.svg" alt="icon: home" />
                    <span class="room__text">1 x Room</span>
                  </div>
                </div>
              </div>
              <!-- /.price -->
              <div class="call-center">
                <span class="call-center__text">Quick Booking</span>
                <div class="call-center__call">
                  <a class="call-center__number" href="tel:12100">
                    <img
                      src="img/phone-call.svg"
                      alt="icon: phone"
                      class="call-center__phone"
                    />
                    <span class="call-center__num">12100</span>
                  </a>
                </div>
              </div>
              <!-- /.call-center -->
              <button class="booking-btn">View Other Options</button>
            </div>
            <!-- /.booking-info -->
            <div id="map" class="map"></div>
          </div>
          <!-- /.booking -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <section
      class="newsletter parallax-window"
      data-parallax="scroll"
      data-image-src="img/newsletter.jpeg"
    >
      <div class="newsletter-container">
        <div class="newsletter-wrap">
          <h2 class="newsletter-text">
            subscribe to our
            <span class="newsletter-text newsletter-text--strong"
              >Newsletter</span
            >
          </h2>
          <!-- /.newsletter-text -->
          <div class="newsletter-input">
            <form action="#" class="newsletter-subscribe">
              <input
                type="text"
                class="newsletter-subscribe__input"
                placeholder="Your email address"
              />
              <button class="button newsletter-subscribe__button">Send</button>
            </form>
          </div>
          <!-- /.newsletter-input -->
        </div>
      </div>
    </section>
    <!-- /.newsletter -->
    <section class="review">
      <div class="container">
        <h2 class="review-title">What people think about us</h2>
        <div class="review-container swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper review-wrapper">
            <!-- Slides -->
            <div class="swiper-slide review-slide">
              <div class="review-slide__item">
                <div class="profile">
                  <img
                    src="img/profile-avatar-1.jpeg"
                    alt="name: Megan Fox"
                    class="profile__avatar"
                  />
                  <div class="profile__username">Megan Fox</div>
                  <div class="profile__data">Stayed 18 Nov, 2019</div>
                  <div class="profile__rating">
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                  </div>
                </div>
                <!-- /.profile -->
                <div class="review-text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </div>
              </div>
            </div>
            <div class="swiper-slide review-slide">
              <div class="review-slide__item">
                <div class="profile">
                  <img
                    src="img/profile-avatar-2.jpeg"
                    alt="name: Megan Fox"
                    class="profile__avatar"
                  />
                  <div class="profile__username">Никита</div>
                  <div class="profile__data">Stayed 18 Nov, 2019</div>
                  <div class="profile__rating">
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                  </div>
                </div>
                <!-- /.profile -->
                <div class="review-text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </div>
              </div>
            </div>
            <div class="swiper-slide review-slide">
              <div class="review-slide__item">
                <div class="profile">
                  <img
                    src="img/profile-avatar-3.jpeg"
                    alt="name: Megan Fox"
                    class="profile__avatar"
                  />
                  <div class="profile__username">Мишаня</div>
                  <div class="profile__data">Stayed 18 Nov, 2019</div>
                  <div class="profile__rating">
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                  </div>
                </div>
                <!-- /.profile -->
                <div class="review-text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </div>
              </div>
            </div>
          </div>
          <!-- If we need navigation buttons -->
          <div class="review__button review__button--prev"></div>
          <div class="review__button review__button--next"></div>
        </div>
      </div>
    </section>
    <section class="activities">
      <div class="container">
        <h2 class="activities-title">Other Activities</h2>
        <div class="activities-cards">
          <div class="activities-cards__item">
            <img
              src="img/chamarel.jpg"
              alt="The curious corner of chamarel"
              class="activities-card__img"
            />
            <h3 class="activities-card__title">
              The curious corner <br />
              of chamarel
            </h3>
            <button class="activities-card__button">Book Now</button>
          </div>
          <div class="activities-cards__item">
            <img
              src="img/golf.jpg"
              alt="Gymkhana club golf course"
              class="activities-card__img"
            />
            <h3 class="activities-card__title">
              Gymkhana club golf <br />
              course
            </h3>
            <button class="activities-card__button">Book Now</button>
          </div>
          <div class="activities-cards__item">
            <img
              src="img/falls.jpg"
              alt="Tamarind falls hiking trip - full day"
              class="activities-card__img"
            />
            <h3 class="activities-card__title">
              Tamarind falls hiking <br />
              trip - full day
            </h3>
            <button class="activities-card__button">Book Now</button>
          </div>
          <div class="activities-cards__item">
            <img
              src="img/discovery.jpg"
              alt="The blue marine discovery quest"
              class="activities-card__img"
            />
            <h3 class="activities-card__title">
              The blue marine discovery <br />
              quest
            </h3>
            <button class="activities-card__button">Book Now</button>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <?php include('footer.php');?>
