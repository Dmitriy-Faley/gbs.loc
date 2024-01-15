<?php
/**
*Template name: Услуга
*/
get_header();
?>

<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

<section class="service">
    <div class="container">
        <div class="service__content">
            <h1 class="title"><?php the_title(); ?></h1>
            <div class="subtext">
                <?php the_content(); ?>
                
                <?php 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } else { ?>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/no-image-keys.png" alt="logo">
                    <?php }
                ?>

            </div>
        </div>
    </div>
</section>


<section class="services services__inner">
    <div class="container">
        <div class="services__title">
            <h3 class="title">Услуги</h3>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="swiper services__content services__dop">
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
            'parent'       => 172,
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

<?php if( have_rows('obshhie_voprosy') ): ?>
<section class="distribution" id="distribution">
    <div class="container">
        <h3 class="title">Общие вопросы</h3>
        <div class="distribution__content--info">
            <ul class="accordion">

            <?php while( have_rows('obshhie_voprosy') ): the_row(); 
                // переменные
                $vopros = get_sub_field('vopros');
                $otvet = get_sub_field('otvet');
            ?>
                <li>
                    <a class="toggle" href="javascript:void(0);"><?php echo $vopros; ?></a>
                    <div class="inner">
                        <?php echo $otvet; ?>
                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
        </div>
    </div>
</section>
<?php endif; ?>


<section class="aboutus">
    <div class="aboutus__bg"></div>
    <div class="container">
        <div class="aboutus__desk">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo">
            <h3 class="title">Aliquet nibh praesent tristique magna sit amet purus. Ultricies mi quis hendrerit</h3>
            <p class="subtitle">Eu ultrices vitae auctor eu augue ut lectus arcu. Bibendum ut tristique et egestas quis.
                Urna
                duis convallis convallis tellus id. Elit pellentesque habitant morbi tristique senectus.</p>
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
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php } else{ ?>
            <img class="project__image" src="<?php echo get_template_directory_uri() ?>/assets/img/projects/no-image.png"
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
    <div class="scrollbar container">
      <div class="swiper-scrollbar"></div>
    </div>
  </div>
</section>


<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>


<script>
    var swiper = new Swiper(".services__dop", {
        slidesPerView: 2,
        spaceBetween: 40,

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 15
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window width is >= 640px
            769: {
                slidesPerView: 2,
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