<?php get_header(); ?>

<section class="error-page">
    <div class="container">
        <div class="error-page__content">
            <img class="smile" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/error-icon.svg" alt="error-icon">
            <img class="error" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/404.svg" alt="404-icon">
            <h1 class="title">Ой! <br>
                Что-то пошло не так</h1>
            <h2 class="not-found">Страница не найдена</h2>
            <a href="/" class="button">вернуться на главную
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-btn.svg" alt="btn">
            </a>
        </div>
    </div>
</section>
