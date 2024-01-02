<?php
/**
*Template name: Контакты
*/
get_header();
?>

<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

<section class="contacts contacts-page">
  <div class="container">
    <div class="contacts__content">
      <div class="contacts__form">
        <h1 class="title">Связаться с нами</h1>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          <br><br>
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
<!-- 
        <form method="post" class="form">
          <div class="name">
            <div class="form__item">
              <label for="firstname">Ваше имя</label>
              <input type="text" name="firstname" required minlength="2" />
            </div>
            <div class="form__item">
              <label for="lastname">Ваша фамилия</label>
              <input type="text" name="lastname" required minlength="2" />
            </div>
          </div>
          <div class="form__item">
            <label for="email">Email*</label>
            <input type="mail" name="email" required />
          </div>
          <div class="form__item">
            <label for="budget">Предполагаемый бюджет</label>
            <select name="budget" id="budget">
              <option value="Менее 2500р">Менее 2500р</option>
              <option value="Менее 2500р">Менее 100</option>
              <option value="Менее 2500р">Менее 200</option>
              <option value="Менее 2500р">Менее 400р</option>
            </select>
          </div>
          <div class="form__item">
            <label for="budget">Выберите услугу</label>
            <select name="serv" id="serv">
              <option value="Менее 2500р">SMM</option>
              <option value="Менее 2500р">Site</option>
              <option value="Менее 2500р">target</option>
              <option value="Менее 2500р">SMM</option>
            </select>
          </div>
          <div class="form__item">
            <label for="text">Расскажите о проекте</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
          </div>
          <div class="form__item">
            <label>
              <span class="file_pretext">Прикрепить файл</span>
              <span class="wpcf7-form-control-wrap" data-name="file-137">
              <input size="40" class="wpcf7-form-control wpcf7-file input_file" accept=".jpg,.jpeg,.png,.doc,.docx,.txt,.pdf" aria-invalid="false" type="file"
                  name="file-137"></span>
            </label>
          </div>
          <button class="button">Отправить</button>
        </form>
 -->
        <?php echo do_shortcode('[contact-form-7 id="141" title="Форма в контактах"]'); ?>

      </div>
      <div class="map">
        <iframe
          src="<?php the_field('ssylka_na_yandeks_kartu', 'option') ?>"
          width="100%" height="100%" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>


<script>
  //Прикрепить резюме
  $(document).ready(function () {
        $('input[name="file-422"]').change(function (e) {
            var fileName = e.target.files[0].name;
            $('.file_pretext').text(fileName);
        });
    });
</script>