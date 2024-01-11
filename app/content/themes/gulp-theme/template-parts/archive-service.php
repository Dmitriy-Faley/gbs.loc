<?php
/**
*Template name: Архив Услуг
*/
get_header();
?>

<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

<section class="services">
  <div class="container">
    <div class="services__title">
      <h3 class="title">Наши услуги</h3>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
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
            'posts_per_page'  => -1,
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


<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>

