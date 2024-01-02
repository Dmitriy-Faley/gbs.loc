<?php
/**
*Template name: Шаблон кейса
*Template Post Type: keys
*/
get_header();
?>

<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

<section class="keys">
    <div class="container">
        <div class="keys__header">
            <div class="keys__info">
                <h1 class="title"><?php the_title(); ?></h1>
                <p class="date"><?php the_field('data'); ?></p>
            </div>
            <div class="keys__tags">
                <?php $post_categories = get_the_terms(get_the_ID(), "keyscat");
                    foreach ($post_categories as $post_category) {
                        echo '<span data-id="' . intval($post_category->term_id) . '">' . '#' . $post_category->name . '</span>';
                    };
                ?>
            </div>
        </div>
        <div class="keys__content">
        <?php 
            if (has_post_thumbnail()) { ?>
            <div class="keys__foto">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php } else {  ?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/no-image-keys.png"
                    alt="portfolio">
            <?php  }
            ?>

            <?php if( get_field('klient') ) { ?>
            <div class="keys__text">
                <div class="about-keys">
                    <h2>Клиент:</h2>
                    <p><?php the_field('klient'); ?></p>
                </div>
            </div>
            <?php } ?>

            <?php if( get_field('zadacha') ) { ?>
            <div class="keys__text">
                <div class="about-keys">
                    <h2>Задача:</h2>
                    <p><?php the_field('zadacha'); ?></p>
                </div>
            </div>
            <?php } ?>

            <?php if( get_field('chto_prodvigaem') ) { ?>
            <div class="keys__text">
                <div class="about-keys">
                    <h2>Что продвигаем:</h2>
                    <p><?php the_field('chto_prodvigaem'); ?></p>
                </div>
            </div>
            <?php } ?>
            
            <?php if( have_rows('fotogalereya') ): ?>
            <div class="keys__gallery">
                <div class="swiper gallery__keys">
                    <div class="swiper-wrapper">
                    
                    <?php while( have_rows('fotogalereya') ): the_row(); 
                        // переменные
                        $foto = get_sub_field('foto');
                    ?>

                        <div class="swiper-slide">
                            <img src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt']; ?>">
                        </div>
                    <?php endwhile; ?>

                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <?php endif; ?>

            <?php if ( get_field('ideya') ) { ?>
                <div class="keys__text">
                    <div class="about-keys">
                        <h2>Идея:</h2>
                        <p><?php the_field('ideya'); ?></p>
                    </div>
                </div>
            <?php } ?>
            

            <?php if ( get_field('kartinka') ) { ?>
            <div class="keys__text">
                <div class="about-keys">
                    <?php the_field('kartinka'); ?>
                </div>
            </div>
            <?php } ?>

            <?php if ( get_field('realizacziya') ) { ?>
            <div class="keys__text">
                <div class="about-keys">
                    <h2>Реализация:</h2>
                    <p><?php the_field('realizacziya'); ?></p>
                </div>
            </div>
            <?php } ?>

            <?php if ( get_field('rezultat') ) { ?>
            <div class="keys__text">
                <div class="about-keys">
                    <h2>Результат:</h2>
                    <p><?php the_field('rezultat'); ?></p>
                </div>
            </div>
            <?php } ?>

            <?php if( have_rows('dopolnitelnye_izobrazheniya') ): ?>
            <div class="keys__photo">

                <?php while( have_rows('dopolnitelnye_izobrazheniya') ): the_row(); 
                    // переменные
                    $dopPhoto = get_sub_field('dop_foto');
                ?>
                
                <div class="photo__image">
                    <img src="<?php echo $dopPhoto['url']; ?>" alt="<?php echo $dopPhoto['alt']; ?>">
                </div>

                <?php endwhile; ?>
                
            </div>
            <?php endif; ?>

            <div class="keys__link">

                <?php 
                    $pred_post = get_previous_post(); 
                    $next = get_next_post();        
                ?>

                <?php 
                    if ($pred_post) { ?>
                    <div class="prev">
                        <a href="<?php echo get_permalink( $pred_post ); ?>" class="arrow">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/left_arrow_filled_white.svg" alt="prev">
                        </a>
                        <div>
                            <p>Предыдущий кейс:</p>
                            <?php echo '<a class="link" href="' . get_permalink( $pred_post ) . '">' . $pred_post->post_title .'</a>'; ?>
                        </div>
                    </div>
                <?php 
                    }
                ?>

                <?php 
                    if ($next) { ?>
                    <div class="next">
                        <div>
                            <p>Следующий кейс:</p>
                            <?php echo '<a class="link" href="' . get_permalink( $next ) . '">' . $next->post_title .'</a>'; ?>
                        </div>
                        <a href="<?php echo get_permalink( $next ); ?>" class="arrow">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/right_arrow_filled_white.svg" alt="next">
                        </a>
                    </div>
                <?php 
                    }
                ?>

            </div>

        </div>
    </div>
</section>



<?php theme_sidebar( 'form' ); ?>
<?php get_footer(); ?>

<script>
    var swiper = new Swiper(".gallery__keys", {
      //slidesPerView: 1,
      slidesPerView: "auto",
      centeredSlides: true,

      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

    });
</script>