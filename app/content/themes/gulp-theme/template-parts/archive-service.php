<?php
/**
*Template name: Архив Услуг
*/
get_header();
?>

<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

<section class="all-services">
  <div class="container">
    <div class="all-services__content">
      <ul class="accordion">

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
            'parent'       => 172,
            'post_type'    => 'page',
            'posts_per_page'  => -1,
            'post_status'  => 'publish',
          ] ); ?>

      <?php foreach( $wpb_all_query as $post ){ ?>

        <li>
          <a class="toggle" href="javascript:void(0);">
            <?php the_title(); ?>
            <div class="text">
              <?php 
                  if (get_field('opisanie_na_glavnoj')) {
                      the_field('opisanie_na_glavnoj'); ?>
              <?php } ?>
            </div>
          </a>
          <div class="inner">
            <?php the_content(); ?>

            <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                }
            ?>
          </div>
        </li>

        <?php } ?>
      <?php wp_reset_postdata(); ?>

      </ul>
    </div>
  </div>
</section>




<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>