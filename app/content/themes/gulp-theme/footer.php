</main>

<footer class="footer">
  <div class="container">
    <div class="footer__top">
        <a href="/" class="footer__logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo site" />
				</a>
    </div>
    <div class="footer__bottom">
      
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
          spaceBetween: 10
        },
        // when window width is >= 640px
        769: {
          slidesPerView: 3,
          spaceBetween: 40
        }
      }
    });

  var swiper = new Swiper(".services__content", {
    slidesPerView: 5,
    spaceBetween: 10,
    freeMode: {
      enabled: true,
      sticky: false,
      minimumVelocity: 5.50
    },
    mousewheel: true,

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
        slidesPerView: 5,
        spaceBetween: 40
      }
    }
  });
</script>



<?php wp_footer(); ?>

</body>

</html>