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
              <a href="mailto:<?php the_field('pochta', 'option') ?>"><?php the_field('pochta', 'option') ?></a>
            </li>
            <li>
              <a href="tel:<?php the_field('telefon', 'option') ?>"><?php the_field('telefon', 'option') ?></a>
            </li>
          </ul>
        </div>
        <div class="footer__menu--list">
          <p>О нас</p>
          <?php
              wp_nav_menu( [
              'menu'            => '', 
              'container'       => false, 
              'container_class' => '', 
              'container_id'    => '',
              'menu_class'      => '', 
              'menu_id'         => '',
              'echo'            => true,
              'theme_location'  => 'footer_menu',
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
              ] );
            ?>
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
              <a href="#">Facebook</a>
            </li>
            <li>
              <a href="#">LinkedIn</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div><?php the_field('copyright', 'option') ?></div>
      <div><?php the_field('adres', 'option') ?></div>
    </div>
  </div>
</footer>

<a href="#ex1" rel="modal:open" style="display: none;" id="buttonModal">Modallll</a>





<!-- Modal HTML embedded directly into document -->
<div div id="ex1" class="modal">
  <div class="modal-content">
    <div class="modal-form">
      <p class="title">Ваш запрос был отправлен.
        Мы свяжемся с вами
        в ближайшее время.</p>
      <a href="/" class="button">Вернуться на главную</a>
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
        spaceBetween: 10
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
    slidesPerView: "auto",
    spaceBetween: 40,
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: true,
    },

    breakpoints: {
      // when window width is >= 320px
      320: {
        //slidesPerView: 1,
        spaceBetween: 12
      },
      // when window width is >= 480px
      480: {
        //slidesPerView: 1,
        spaceBetween: 12
      },
      // when window width is >= 640px
      769: {
        slidesPerView: "auto",
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
      nextEl: ".services-next",
      prevEl: ".services-prev",
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
      nextEl: ".reviews-next",
      prevEl: ".reviews-prev",
    },

  });
</script>



<?php wp_footer(); ?>

</body>

</html>