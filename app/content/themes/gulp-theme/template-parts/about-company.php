<?php
/**
*Template name: О компании
*/
get_header();
?>

<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

<section class="about">
    <div class="container">
        <?php 
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else { ?>
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/no-image-keys.png" alt="logo">
        <?php }
        ?>
        <div class="about__content">
            <div class="about__content--table">
                <?php echo do_shortcode('[lwptoc]') ?>
            </div>
            <div class="about__content--text">
                <?php the_content(); ?>

                <?php if( have_rows('blagodarnosti') ): ?>
                <div class="gratitude text-block">
                    <h2>Благодарности</h2>
                    <p>Мы создаем проекты, которые делают мир лучше.</p>

                    <div class="gratitude__image">

                        <?php while( have_rows('blagodarnosti') ): the_row(); 
                        // переменные
                        $imgGrat = get_sub_field('img_blago');
                        $titleGrat = get_sub_field('title_blago');
                    ?>

                        <div class="gratitude__image--item">
                            <div class="image">
                                <img src="<?php echo $imgGrat['url']; ?>" alt="<?php echo $imgGrat['alt']; ?>">
                            </div>
                            <p class="name"><?php echo $titleGrat; ?></p>
                        </div>

                        <?php endwhile; ?>
                    </div>

                </div>
                <?php endif; ?>

                <div class="clients">
                    <h3 class="title">Наши клиенты</h3>
                    <div class="clients__logo">
                        <div class="logo__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/unicef.svg"
                                alt="client-logo">
                        </div>
                        <div class="logo__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/paritbank.svg"
                                alt="client-logo">
                        </div>
                        <div class="logo__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/a1.svg"
                                alt="client-logo">
                        </div>
                        <div class="logo__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/minsk.svg"
                                alt="client-logo">
                        </div>
                        <div class="logo__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/fix.svg"
                                alt="client-logo">
                        </div>
                        <div class="logo__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/alfa.svg"
                                alt="client-logo">
                        </div>
                        <div class="logo__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/iom.svg"
                                alt="client-logo">
                        </div>
                        <div class="logo__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/coca-cola.svg"
                                alt="client-logo">
                        </div>
                        <div class="logo__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/huawei.svg"
                                alt="client-logo">
                        </div>
                        <div class="logo__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/hoster.svg"
                                alt="client-logo">
                        </div>
                    </div>
                </div>

                <div class="history text-block">
                    <h2>История</h2>
                    <?php the_field('text_history'); ?>
                </div>

            </div>
        </div>
    </div>
</section>








<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>