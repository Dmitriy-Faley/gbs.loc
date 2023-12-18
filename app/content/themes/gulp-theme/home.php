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
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/project1.png" alt="project">
          <div class="item__content">
            <p class="project__title">Paritetbank</p>
            <p class="project__desk">PR-мероприятия</p>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="projects__content__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/project2.png" alt="project">
          <div class="item__content">
            <p class="project__title">Paritetbank</p>
            <p class="project__desk">PR-мероприятия</p>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="projects__content__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/project3.png" alt="project">
          <div class="item__content">
            <p class="project__title">Paritetbank</p>
            <p class="project__desk">PR-мероприятия</p>
          </div>
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
    <div class="container">
      <div class="swiper-scrollbar"></div>
    </div>
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


<section class="services">
  <div class="container">
    <div class="services__title">
      <h3 class="title">Наши услуги</h3>
      <a href="#" class="button">Все наши кейсы <img
          src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-btn.svg" alt="btn"></a>
    </div>
    <div class="swiper services__content">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="services__item">
            <p class="title">Public Relations</p>
            <div class="text">
              <p>Turpis massa sed elementum tempus egestas. Sed blandit libero volutpat sed cras ornare arcu dui. Pharetra
                pharetra massa massa ultricies mi quis hendrerit dolor magna. Vitae aliquet nec ullamcorper sit amet.</p>
              <p>Turpis massa sed elementum tempus egestas. Sed blandit libero volutpat sed cras ornare arcu dui. Pharetra
                pharetra massa massa ultricies mi quis hendrerit dolor magna. Vitae aliquet nec ullamcorper sit amet.</p>
            </div>
            <div class="button-more">Узнать больше
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/btn-more.svg" alt="btn-more">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="services__item">
            <p class="title">Public Relations</p>
            <div class="text">
              <p>Turpis massa sed elementum tempus egestas. Sed blandit libero volutpat sed cras ornare arcu dui. Pharetra
                pharetra massa massa ultricies mi quis hendrerit dolor magna. Vitae aliquet nec ullamcorper sit amet.</p>
              <p>Turpis massa sed elementum tempus egestas. Sed blandit libero volutpat sed cras ornare arcu dui. Pharetra
                pharetra massa massa ultricies mi quis hendrerit dolor magna. Vitae aliquet nec ullamcorper sit amet.</p>
            </div>
            <div class="button-more">Узнать больше
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/btn-more.svg" alt="btn-more">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="services__item">
            <p class="title">Public Relations</p>
            <div class="text">
              <p>Turpis massa sed elementum tempus egestas. Sed blandit libero volutpat sed cras ornare arcu dui. Pharetra
                pharetra massa massa ultricies mi quis hendrerit dolor magna. Vitae aliquet nec ullamcorper sit amet.</p>
              <p>Turpis massa sed elementum tempus egestas. Sed blandit libero volutpat sed cras ornare arcu dui. Pharetra
                pharetra massa massa ultricies mi quis hendrerit dolor magna. Vitae aliquet nec ullamcorper sit amet.</p>
            </div>
            <div class="button-more">Узнать больше
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/btn-more.svg" alt="btn-more">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="services__item">
            <p class="title">Public Relations</p>
            <div class="text">
              <p>Turpis massa sed elementum tempus egestas. Sed blandit libero volutpat sed cras ornare arcu dui. Pharetra
                pharetra massa massa ultricies mi quis hendrerit dolor magna. Vitae aliquet nec ullamcorper sit amet.</p>
              <p>Turpis massa sed elementum tempus egestas. Sed blandit libero volutpat sed cras ornare arcu dui. Pharetra
                pharetra massa massa ultricies mi quis hendrerit dolor magna. Vitae aliquet nec ullamcorper sit amet.</p>
            </div>
            <div class="button-more">Узнать больше
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/btn-more.svg" alt="btn-more">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="services__item">
            <p class="title">Public Relations</p>
            <div class="text">
              <p>Turpis massa sed elementum tempus egestas. Sed blandit libero volutpat sed cras ornare arcu dui. Pharetra
                pharetra massa massa ultricies mi quis hendrerit dolor magna. Vitae aliquet nec ullamcorper sit amet.</p>
              <p>Turpis massa sed elementum tempus egestas. Sed blandit libero volutpat sed cras ornare arcu dui. Pharetra
                pharetra massa massa ultricies mi quis hendrerit dolor magna. Vitae aliquet nec ullamcorper sit amet.</p>
            </div>
            <div class="button-more">Узнать больше
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/btn-more.svg" alt="btn-more">
            </div>
          </div>
        </div>
      </div>
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
<!-- <section class="team">
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
</section> -->
<?php endif; ?>





<?php theme_sidebar( 'form' ); ?>





<?php get_footer(); ?>