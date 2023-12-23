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
                <a href="#" class="active">Все</a>
                <a href="#">Ui/UX Дизайн</a>
                <a href="#">Разработка сайта</a>
                <a href="#">PPC</a>
                <a href="#">SMM</a>
                <a href="#">КОПИРАЙТИНГ</a>
                <a href="#">МАРКЕТИНГ</a>
                <a href="#">SEO</a>
            </div>
        </div>
        <div class="portfolio__content">
            <div class="portfolio__content__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/portfolio1.png"
                    alt="portfolio">
                <p class="item__name">Экоакция «мы заботимся»
                    с coca-cola в Беларуси</p>
                <div class="item__tegs">
                    <a href="#">#Public Relations</a>
                    <a href="#">#Government Relations</a>`
                </div>
            </div>
            <div class="portfolio__content__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/portfolio1.png"
                    alt="portfolio">
                <p class="item__name">Экоакция «мы заботимся»
                    с coca-cola в Беларуси</p>
                <div class="item__tegs">
                    <a href="#">#Public Relations</a>
                    <a href="#">#Government Relations</a>
                </div>
            </div>
            <div class="portfolio__content__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/portfolio1.png"
                    alt="portfolio">
                <p class="item__name">Экоакция «мы заботимся»
                    с coca-cola в Беларуси</p>
                <div class="item__tegs">
                    <a href="#">#Public Relations</a>
                    <a href="#">#Government Relations</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>
