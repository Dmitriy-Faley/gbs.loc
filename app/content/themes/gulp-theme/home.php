<?php
/**
*Template name: Главная страница
*/
get_header();
?>

<section class="home__content">
  <div class="home__bg"></div>
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
      <button type="button" class="btn-down">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn-down.svg" alt="btn-down">
      </button>
    </div>
  </div>
</section>


<section class="projects" id="projects">
  <div class="projects__title container">
    <h3 class="title">Наши последние проекты</h3>
    <a href="<?php echo get_page_link( 47 ); ?>" class="button">Все наши кейсы <img
        src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-btn.svg" alt="btn"></a>
  </div>
  <div class="projects__content swiper projects__slider">
    <div class="swiper-wrapper container">
        <?php
          // запрос
          $wpb_all_query = new WP_Query(array(
              'tax_query' => array(
                  array(
                      'taxonomy' => 'keyscat',
                      'field'    => 'id',
                      'terms'    => '6'
                  )
              ),
              'post_type'=>'keys', 
              'post_status'=>'publish', 
              'posts_per_page'=>10
      )); ?>

      <?php if ( $wpb_all_query->have_posts() ) : ?>
      <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

      <div class="swiper-slide">
        <a href="<?php the_permalink(); ?>" class="projects__content__item">

        <?php 
          $image = get_field('img_home');

          if( !empty($image) ){ ?>

            <img class="project__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          
          <?php } else{ ?>
            <img class="project__image" src="<?php echo get_template_directory_uri() ?>/assets/img/project_card.png"
            alt="portfolio">
          <?php } ?>

          <div class="item__content">
            <div>
              <p class="project__title"><?php the_title(); ?></p>
              <p class="project__desk">
                <?php $post_categories = get_the_terms(get_the_ID(), "keyscat");
                    foreach ($post_categories as $post_category) {
                      echo ' '. $post_category->name.' ';
                    }; ?>
              </p>
            </div>
            <img class="arrow-more" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-project.svg" alt="arrow-project">
          </div>
        </a>
      </div>

      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      
    </div>
    
      <div class="container">
        <div class="scrollbar">
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
  
  </div>
</section>

<section class="aboutus">
  <div class="aboutus__bg"></div>
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
      <div class="swiper-button-next services-next"></div>
      <div class="swiper-button-prev services-prev"></div>
    </div>
    <div class="swiper services__content services__slider">
        <?php
          // запрос
          $wpb_all_query = get_pages( [
            'sort_order'   => 'ASC',
            'sort_column'  => 'post_title',
            'hierarchical' => 0,
            'exclude'      => '',
            'include'      => '',
            'meta_value'   => 1,
            'authors'      => '',
            'exclude_tree' => '',
            'number'       => '',
            'offset'       => 0,
            'post_type'    => 'page',
            'posts_per_page'  => 10,
            'post_status'  => 'publish',
          ] ); ?>
      <div class="swiper-wrapper">
        <?php foreach( $wpb_all_query as $post ){ ?>
          <div class="swiper-slide">
            <div class="services__item">
              <p class="title"><?php the_title(); ?></p>
              <div class="text">
                <?php 
                  if (get_field('opisanie_na_glavnoj')) {
                    the_field('opisanie_na_glavnoj'); ?>...
                  <?php }
                ?>
              </div>
              <a href="<?php echo the_permalink() ; ?>" class="button-more">Узнать больше
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/btn-more.svg" alt="btn-more">
              </a>
            </div>
          </div>
          <?php } ?>
          <?php wp_reset_postdata(); ?>
      </div>
      <div class="scrollbar">
        <div class="swiper-scrollbar"></div>
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



<?php if( have_rows('fotogalereya') ): ?>
<section class="gallery">
  <div class="container">
    <h3 class="title">GBS коммуникационная компания</h3>
    <p class="desk">Знаем и чувствуем, что именно ваш проект будет особенно интересным.
      Давайте знакомиться!</p>
  </div>
  <div class="gallery__content swiper gallery__slider">
    <div class="swiper-wrapper container">
      <?php while( have_rows('fotogalereya') ): the_row(); 
          // переменные
          $image = get_sub_field('izobrazhenie');
      ?>
      <div class="swiper-slide">
        <div class="gallery__content__item">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="scrollbar container">
      <div class="swiper-scrollbar"></div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if( have_rows('otzyvy') ): ?>
<section class="reviews">
  <div class="container">
    <div class="reviews__title">
      <h3 class="title">Отзывы о нас</h3>
      <div class="swiper-button-next reviews-next"></div>
      <div class="swiper-button-prev reviews-prev"></div>
    </div>
    <div class="swiper reviews__content">
      <div class="swiper-wrapper">

      <?php while( have_rows('otzyvy') ): the_row(); 
          // переменные
          $iconRev = get_sub_field('ikonka_klienta');
          $titleRev = get_sub_field('zagolovok_otzyva');
          $textRev = get_sub_field('tekst_otzyva');
          $imgRev = get_sub_field('izobrazhenie_klienta');
          $nameRev = get_sub_field('imya_klienta');
          $jobRev = get_sub_field('dolzhnost_klienta');
      ?>

        <div class="swiper-slide">
          <div class="reviews__item">
            <img class="reviews__logo" src="<?php echo $iconRev['url']; ?>" alt="<?php echo $iconRev['alt']; ?>">
            <p class="title"><?php echo $titleRev; ?></p>
            <div class="text">
              <?php echo $textRev; ?>
            </div>
            <div class="founder">
              <img src="<?php echo $imgRev['url']; ?>" alt="<?php echo $imgRev['url']; ?>">
              <div class="founder__info">
                <p class="founder__info--name"><?php echo $nameRev; ?></p>
                <p class="founder__info--job"><?php echo $jobRev; ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="scrollbar container">
        <div class="swiper-scrollbar"></div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


<?php theme_sidebar( 'form' ); ?>


<script>
  var hiddenElement = document.getElementById("projects");
  var btn = document.querySelector(".btn-down");

  function handleButtonClick() {
    hiddenElement.scrollIntoView({ block: "center", behavior: "smooth" });
  }

  btn.addEventListener("click", handleButtonClick);
</script>


<?php get_footer(); ?>