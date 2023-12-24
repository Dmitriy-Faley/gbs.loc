<?php
/**
*Template name: Портфолио
*/
get_header();
?>

<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

<section class="portfolio">
    <div class="container">
        <div class="portfolio__tegs">
            <h3 class="title">Наши работы</h3>
            <div class="tegs">
                <?php
                    $category_all = get_category(6, "keyscat");
                    echo '<li href="#"><a class="active vse" data-id="' . intval($category_all) . '">Все</a></li>';
                    $categories = get_categories(array('taxonomy' => 'keyscat', 'hide_empty' => 0, 'hierarchical' => 1, 'child_of' => '6'));
                    foreach ($categories as $category) {
                        echo '<li href="#"><a class="' . $category->slug . '" data-id="' . intval($category->term_id) . '">' .'#' . $category->cat_name . '</a></li>';
                ?>
                    <?php };?>
            </div>
        </div>
        <div class="portfolio__content">
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
                    'posts_per_page'=>-1
            )); ?>

            <?php if ( $wpb_all_query->have_posts() ) : ?>
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="portfolio__content__item <?php $post_categories = get_the_terms(get_the_ID(), "keyscat");
                                   foreach ($post_categories as $post_category) {
                                      echo ' '. $post_category->slug.' ';
                                    }; ?>">
                    <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/portfolio1.png"
                        alt="portfolio"> -->
                    <?php 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } else { ?>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/no-image.png"
                        alt="portfolio">
                    <?php }
                    ?>
                    <a href="<?php the_permalink(); ?>" class="item__name"><?php the_title(); ?></a>
                    <div class="item__tegs">
                        <?php $post_categories = get_the_terms(get_the_ID(), "keyscat");
                            foreach ($post_categories as $post_category) {
                                echo '<span  href="#" data-id="' . intval($post_category->term_id) . '">' .'#' . $post_category->name . '</span>';
                        }; ?>
                    </div>
                </div>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Извините, нет кейсов, соответствуюших Вашему запросу.' ); ?></p>
            <?php endif; ?>
            <?php // AJAX загрузка постов
                if ($wpb_all_query->max_num_pages > 1) { ?>
                    <button 
                        type="button"
                        id="portfolio-more"
                        class="button button-more"
                        data-param-posts='<?= json_encode($wpb_all_query->query_vars); ?>' 
                        data-max-pages="<?= $wpb_all_query->max_num_pages; ?>"
                        data-tpl="blog"
                    >
                        Показать ещё
                    </button>
            <?php } ?>
            
        </div>
    </div>
</section>


<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>

<script>
    let current_page = 1;
    const links = [...document.querySelectorAll(".portfolio__tegs a")];
    const postsTags = [...document.querySelectorAll(".item__tegs span")];
    const cards = [...document.querySelectorAll(".portfolio__content__item")];

    links.forEach(el => {
        el.addEventListener('click', (e) => {
            links.forEach(el => {
                el.classList.remove('active');
            })

            e.target.classList.add('active');
            cards.forEach(card => {
                postsTags.forEach(itemTag => {
                    if(card.classList.contains(el.classList[0])) {
                        card.classList.remove('hide');
                        card.classList.remove('anima');
                        card.style.position = 'static';
                    } else {
                        card.classList.add('anima');
                        card.classList.add('hide');
                    }
                    if(el.classList.contains('vse')) {
                        card.classList.remove('hide');
                        card.classList.remove('anima');
                        card.style.position = 'static !important';
                    }

                    if(card.classList.contains('anima')) {
                        card.style.position = 'absolute';
                    } else {
                        card.style.position = 'static';
                    }
                });
            })
        });
    });
</script>
