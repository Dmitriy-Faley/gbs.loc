<?php
/**
*Template name: Главная страница
*/
get_header();
?>

<section class="home__content">
  <div class="home__bg"
    style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg_home.png');"
    data-bg="<?php echo get_template_directory_uri() ?>/assets/img/bg_home.png"
    data-bg-webp="<?php echo get_template_directory_uri() ?>/assets/img/bg_home.png"></div>
  <div class="home__content--text">
    <div class="container">
      <h1 class="title">Мы понимаем ваш бизнес</h1>
      <div class="subtitle">
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur.</p>
        <p>
          Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>
</section>


<section class="projects">
  <div class="projects__title container">
    <h3 class="title">Наши последние проекты</h3>
    <a href="#" class="button">Все наши кейсы <img
        src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-btn.svg" alt="btn"></a>
  </div>
  <div class="projects__content swiper projects__slider">
    <div class="swiper-wrapper container">
      <div class="swiper-slide">
        <div class="projects__content__item">
          Slide 1
        </div>
      </div>
      <div class="swiper-slide">
        <div class="projects__content__item">
          Slide 1
        </div>
      </div>
      <div class="swiper-slide">
        <div class="projects__content__item">
          Slide 1
        </div>
      </div>
      <div class="swiper-slide">
        <div class="projects__content__item">
          Slide 1
        </div>
      </div>
      <div class="swiper-slide">
        <div class="projects__content__item">
          Slide 1
        </div>
      </div>
      <div class="swiper-slide">
        <div class="projects__content__item">
          Slide 1
        </div>
      </div>
    </div>
    <div class="swiper-scrollbar"></div>
  </div>
</section>

<section class="aboutus">
  <div class="aboutus__bg"
    style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/about-bg.png');"
    data-bg="<?php echo get_template_directory_uri() ?>/assets/img/about-bg.png"
    data-bg-webp="<?php echo get_template_directory_uri() ?>/assets/img/about-bg.png"></div>
  <div class="container">
    <div class="aboutus__desk">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo">
      <h3 class="title">Aliquet nibh praesent tristique magna sit amet purus. Ultricies mi quis hendrerit</h3>
      <p class="subtitle">Eu ultrices vitae auctor eu augue ut lectus arcu. Bibendum ut tristique et egestas quis. Urna
        duis convallis convallis tellus id. Elit pellentesque habitant morbi tristique senectus.</p>
    </div>
  </div>
</section>


<section class="clients">
  <div class="container">
    <h3 class="title">Наши клиенты</h3>
    <div class="clients__logo">
      <div class="logo__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/unicef.svg" alt="client-logo">
      </div>
      <div class="logo__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/paritbank.svg" alt="client-logo">
      </div>
      <div class="logo__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/a1.svg" alt="client-logo">
      </div>
      <div class="logo__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/minsk.svg" alt="client-logo">
      </div>
      <div class="logo__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/fix.svg" alt="client-logo">
      </div>
      <div class="logo__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/alfa.svg" alt="client-logo">
      </div>
      <div class="logo__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/iom.svg" alt="client-logo">
      </div>
      <div class="logo__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/coca-cola.svg" alt="client-logo">
      </div>
      <div class="logo__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/huawei.svg" alt="client-logo">
      </div>
      <div class="logo__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/hoster.svg" alt="client-logo">
      </div>
    </div>
  </div>
</section>


<?php if( have_rows('sotrudniki', 60) ): ?>
<section class="team">
  <div class="container">
    <h3 class="title">Наша команда сотрудников</h3>
    <p class="subtitle">Наш коллектив – пчелиный улей, в котором постоянно что-то происходит. Некоторые сотрудники
      помнят, как выглядели первые сайты Рунета. За плечами – обширная практика, что позволило сформировать собственный
      подход к воплощению проектов в жизнь.</p>
    <div class="team__content">

      <?php while( have_rows('sotrudniki', 60) ): the_row(); 
        // переменные
        $imageSotrudnika = get_sub_field('kartinka_sotrudnika');
        $fioSotrudnika = get_sub_field('fio_sotrudnika');
        $dolznostSotrudnika = get_sub_field('dolzhnost_sotrudnika');
    ?>
      <div class="team__item">
        <img src="<?php echo $imageSotrudnika['url']; ?>" alt="<?php echo $imageSotrudnika['alt'] ?>" />
        <p class="name"><?php echo $fioSotrudnika; ?></p>
        <p class="job"><?php echo $dolznostSotrudnika; ?></p>
      </div>

      <?php endwhile; ?>

    </div>
    <a href="#ex1" rel="modal:open" class="button">Узнать больше</a>
  </div>
</section>
<?php endif; ?>


<section class="strip">
  <div>
    <p class="text">Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/like.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/surprice.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/vau.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/like.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/clapping.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/smile.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/surprice.svg" alt="smile">
      Web focus
    </p>
  </div>
</section>

<?php if( get_field('zagolovok_interesy_klienta') ): ?>
<section class="interests">
  <div class="container">
    <p class="title"><?php the_field('zagolovok_interesy_klienta'); ?></p>
    <div class="interests__content">
      <div>
        <p><?php the_field('pervyj_abzacz_interesy'); ?></p>
        <p><?php the_field('vtoroj_abzacz_interesy'); ?></p>

        <?php if( have_rows('spisok_interesov') ): ?>
        <ul>
          <?php while( have_rows('spisok_interesov') ): the_row(); 
          // переменные
          $textSpiska = get_sub_field('tekst_spiska');
        ?>
          <li><?php echo $textSpiska; ?></li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>

      </div>
      <div>
        <p><?php the_field('tretij_abzacz_interesy'); ?></p>
        <a href="#ex1" rel="modal:open" class="button">Связаться с нами</a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<div class="services">
  <div class="swiper-container">
    <div class="services__slider">

      <div class="services__content">
        <div class="container">
          <p class="title">Полный набор услуг по продвижению в Интернете</p>
          <p class="subtitle">Заказчик должен все получить в одном месте! Исповедуем только такой подход.
            Рекламно-маркетинговое агентство «Веб Фокус» охватывает все диджитал-направления:</p>
        </div>
        <div class="swiper-wrapper container">
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
        </div>

        <div class="container">
          <p class="subtitle">
            Как видите, предлагаемый вариант взаимодействия позволит воплотить любой проект. Внимательные менеджеры
            легко
            прояснят непонятные моменты, дадут дельные советы по составлению ТЗ – сделают все, чтобы добиться гармонии с
            клиентом. Заслуживаем доверия!
          </p>
          <a href="#" class="button">Все услуги</a>
        </div>

      </div>

    </div>
  </div>
</div>


<?php theme_sidebar( 'form' ); ?>


<section class="reviews">
  <div class="container">
    <p class="title">Отзывы о нашей компании</p>
    <div class="desk">
      <p>Маркетинговое агентство полного цикла «Веб Фокус» оптимально подходит для организации присутствия Вашей
        компании в Мировой паутине. Работали с представителями различных сфер – от аренды спецтехники до поставщиков
        тюльпанов. Располагаем достаточной материально-технической базой.
      </p>
      <p>Имеем серьезные рейтинги в Сети, что подтверждается внушительным количеством отзывов. За каждым из них стоит
        усердная работа нашего коллектива. Гордимся каждым успешным проектом, ведь является убедительным
        доказательством, что для нас маркетинг – не пустое слово.
      </p>
    </div>
    <div class="reviews__content">
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review1.png" alt="review">
          <div>
            <p class="name">Полина Ходасевич</p>
            <p class="job">Директор магазина</p>
          </div>
        </div>
        <div class="item__text">
          Если с настройкой Яндекс Директ я как-то совладала самостоятельно (хотя там все понятно и логично), то с
          контектсной рекламой в Гугле были колоссальные затруднения. По совету коллеги я обратилась в эту компанию,
          осталась абсолютно удовлетворена! А именно - в течение трех дней копировали все рекламные материалы с текстами
          и фото из Я-Директ и отдали мне под ключ. А там такое количество одних только рекламируемых товаров, что у
          меня руки опускались делать даже это самостоятельно. Очень быстро работают и команда профессиональная.
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review2.png" alt="review">
          <div>
            <p class="name">Наталья Лученок</p>
            <p class="job">Директор магазина</p>
          </div>
        </div>
        <div class="item__text">
          Заказывали разработку мобильной версии лендинга - очень довольны! Подход к работе профессиональный, сроки
          соблюдают. Нам не пришлось вносить никаких корректировок - все настолько понравилось!
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review3.png" alt="review">
          <div>
            <p class="name">Андерс Войковичев</p>
            <p class="job">Директор магазина</p>
          </div>
        </div>
        <div class="item__text">
          Обращался для продвижения своего сайта ремонтной компании, результат приятно удивил, через месяц заметил
          прирост потенциальных клиентов, посещения начали расти, в поисковой выдаче сайт добавил позиции. На
          достигнутом не останавливаюсь и продолжаю плодотворно сотрудничать. Хороший результат за приемлемую цену
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review4.png" alt="review">
          <div>
            <p class="name">Владимир Волошинович</p>
            <p class="job">Директор магазина</p>
          </div>
        </div>
        <div class="item__text">
          Хорошее агентство интернет-маркетинга, помогли нам выйти на хорошую посещаемость сайта магазина, раскрутили за
          несколько месяцев до хорошего прироста продаж в соотношении с предыдущими периодами. Рекомендую.
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review5.png" alt="review">
          <div>
            <p class="name">Костя Сомов</p>
            <p class="job">Директор магазина</p>
          </div>
        </div>
        <div class="item__text">
          В короткие сроки смогли продвинуть мой сайт зоотоваров. Очень доволен что воспользовался именно их услугами.
          Цены у них вполне адекватные на услуги. Могу смело всем рекомендовать.
        </div>
      </div>
    </div>
  </div>
</section>

<section class="format">
  <div class="container">
    <p class="title">Привлекательный формат для бизнеса</p>
    <div class="format__content">
      <div>
        <p>Строим сотрудничество так, чтобы заказчик чувствовал уверенно и комфортно. В web-студии трудятся не только
          классные специалисты, но и просто хорошие люди. Ламповую атмосферу гарантируем!</p>
        <p>Сведена к минимуму бюрократическая составляющая. Отчетность предоставляется, но ровно в том объеме, который
          требуется для контроля проекта. Маркетинговое агентство работает исключительно на договорной основе, поэтому
          клиентские права защищены не обещаниями, а реальными документами.</p>
      </div>
      <div>
        <p>К каждому подходим персонифицированно, не навязываем лишние услуги, делаем на совесть, ведь рассчитываем на
          постоянное сотрудничество. Урвать деньги любой ценой – ни за что! Элементарно не видим в этом смысла, ведь не
          являемся «однодневкой», каких много в Рунете.</p>
        <p>Адрес, по которому расположена наша веб-студия – это все, что нужно знать о рекламной деятельности в
          Интернете. За месяц сделаем то, на что у других уходит год! Убедитесь на личном опыте, что не бросаем слов не
          ветер!</p>
      </div>
    </div>
  </div>
</section>

<section class="contacts">
  <div class="container">
    <div class="contacts__info">
      <div class="address">
        <?php the_field('adres', 'option') ?>
      </div>
      <div class="data">
        <a href="mailto:<?php the_field('pochta', 'option') ?>"><?php the_field('pochta', 'option') ?></a>
        <a href="tel:<?php the_field('telefon', 'option') ?>"><?php the_field('telefon', 'option') ?></a>
      </div>
    </div>
    <div class="contacts__map">
      <iframe src="<?php the_field('ssylka_na_yandeks_kartu', 'option') ?>" width="100%" height="485"
        frameborder="0"></iframe>
    </div>
  </div>
</section>


<section class="projects articles">
  <div class="container">
    <h3 class="title">Актуальные статьи и новости<img
        src="<?php echo get_template_directory_uri() ?>/assets/img/icons/fire-title.svg" alt="fire"></h3>
    <div class="projects__content">
      <div class="projects__content__item">
        <div>
          <a href="#" class="item__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/articles/article1.png" alt="projects">
          </a>
        </div>
        <div class="item__data">
          <div class="data__teg">
            <span>Статьи</span>
            <span>Разработка</span>
          </div>
          <div class="data__info">
            <a href="#" class="title">Преимущества Shopify — 10 причин полюбить его</a>
            <p class="desk">1 день назад</p>
          </div>
        </div>
      </div>
      <div class="projects__content__item">
        <div>
          <a href="#" class="item__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/articles/article2.png" alt="projects">
          </a>
        </div>
        <div class="item__data">
          <div class="data__teg">
            <span>Статьи</span>
            <span>SMM</span>
          </div>
          <div class="data__info">
            <a href="#" class="title">Одноклассники: как оформить группы?</a>
            <p class="desk">2 дня назад</p>
          </div>
        </div>
      </div>
      <div class="projects__content__item">
        <div>
          <a href="#" class="item__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/articles/article3.png" alt="projects">
          </a>
        </div>
        <div class="item__data">
          <div class="data__teg">
            <span>Статьи</span>
            <span>дизайн</span>
          </div>
          <div class="data__info">
            <a href="#" class="title">Что такое дизайн-системы и для чего они нужны?</a>
            <p class="desk">3 октября 2022</p>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="button">Все статьи</a>
  </div>
</section>



<?php get_footer(); ?>