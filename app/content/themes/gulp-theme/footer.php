</main>

<footer class="footer">
  <div class="container">
    <div class="footer__top">
        <a href="/" class="footer__logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo site" />
				</a>
        <div class="footer__menu">
          <div class="footer__menu--list">
            <p>Наши контакты</p>
            <ul>
              <li>
                <a href="mailto:hello@gbs.com">hello@gbs.com</a>
              </li>
              <li>
                <a href="tel:+375 44 774 00 49">+375 44 774 00 49</a>
              </li>
            </ul>
          </div>
          <div class="footer__menu--list">
            <p>О нас</p>
            <ul>
              <li>
                <a href="#">Главная</a>
              </li>
              <li>
                <a href="#">Главная</a>
              </li>
              <li>
                <a href="#">Главная</a>
              </li>
              <li>
                <a href="#">Главная</a>
              </li>
            </ul>
          </div>
          <div class="footer__menu--list">
            <p>Соцсети</p>
            <ul>
              <li>
                <a href="#">Instagram</a>
              </li>
              <li>
                <a href="#">Youtube</a>
              </li>
              <li>
                <a href="#">Главная</a>
              </li>
              <li>
                <a href="#">Главная</a>
              </li>
            </ul>
          </div>
        </div>
    </div>
    <div class="footer__bottom">
      <div>© 2014 - 2023 GBS</div>
      <div>ул. Красная 13, офис 24, 220005, Минск, Беларусь</div>
    </div>
  </div>
</footer>





<!-- Modal HTML embedded directly into document -->
<div div id="ex1" class="modal">
  <div class="modal-content">
    <div class="modal-form">
      <!-- <form method="post" class="form">
        <p class="title">Связаться с нами</p>
        <input type="text" name="name" placeholder="Имя" required minlength="2">
        <input type="tel" name="phone" placeholder="Телефон" required>
        <div class="form__button">
          <button class="button">Отправить</button>
          <p>Нажимая на кнопку "Отправить", вы соглашаетесь с <a href="#">условиями политики конфиденциальности</a>
          </p>
        </div>
      </form> -->
      <?php echo do_shortcode('[contact-form-7 id="5" title="Модальное окно"]'); ?>
    </div>
    <div class="modal__icons">
      <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/ee.svg" alt="icon">
      <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about2.svg" alt="icon">
      <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about4.svg" alt="icon">
    </div>
  </div><!-- content -->
  <a href="#" rel="modal:close" style="display:none;">Close</a>
</div>





<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" referrerpolicy="no-referrer"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<script>
    var swiper = new Swiper(".projects__slider", {
      slidesPerView: 3,
      spaceBetween: 40,
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },

      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 15
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 12
        },
        // when window width is >= 640px
        769: {
          slidesPerView: 3,
          spaceBetween: 40
        }
      }
    });

    var swiper = new Swiper(".gallery__slider", {
      slidesPerView: 2,
      spaceBetween: 40,
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },

      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 15
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        // when window width is >= 640px
        769: {
          slidesPerView: 2,
          spaceBetween: 40
        }
      }
    });

    var swiper = new Swiper(".services__slider", {
      slidesPerView: 3,
      spaceBetween: 40,

      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 15
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        // when window width is >= 640px
        769: {
          slidesPerView: 3,
          spaceBetween: 40
        }
      },

      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },
      
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

    });

    var swiper = new Swiper(".reviews__content", {
      slidesPerView: 3,
      spaceBetween: 40,

      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 15
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        // when window width is >= 640px
        769: {
          slidesPerView: 3,
          spaceBetween: 40
        }
      },

      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },
      
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      
    });
</script>



<?php wp_footer(); ?>

</body>

</html>