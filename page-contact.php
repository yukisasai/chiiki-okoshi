<?php
/**
 * Template Name: お問い合わせ
 */
get_header(); ?>

<main>

  <!-- Page Hero -->
  <section class="page-header">
    <div class="container text-center">
      <span class="page-header__label">CONTACT</span>
      <h1 class="page-header__title">お問い合わせ</h1>
      <p class="page-header__desc page-header__desc--pink">
        ご依頼・ご相談、おためし地域おこし協力隊の<br class="sp-br">お申し込みなど、<br>
        お気軽にご連絡ください。
      </p>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <section class="contact-section">
    <div class="container">
      <div class="contact-layout">

        <!-- Form -->
        <div class="contact-form">
          <h2 class="contact-form__title">お問い合わせフォーム</h2>

          <?php
          $cf7_id = yuumi_get_cf7_form_id();
          if ($cf7_id) :
            echo do_shortcode('[contact-form-7 id="' . esc_attr($cf7_id) . '"]');
          else :
            echo '<p class="text-muted">Contact Form 7 プラグインを有効化し、フォームを作成してください。</p>';
          endif;
          ?>
        </div>

        <!-- Sidebar -->
        <aside class="contact-sidebar">
          <div class="contact-sidebar__item">
            <div class="contact-sidebar__label">
              <img src="<?php echo yuumi_img('icon-mail-pink.svg'); ?>" alt="メール" class="contact-sidebar__icon" width="18" height="14">
              <span>メール</span>
            </div>
            <p class="contact-sidebar__value">yuutumugi.design@gmail.com</p>
            <p class="contact-sidebar__text">
              メールでのお問い合わせはこちら。<br>
              2〜3営業日以内にご返信します。
            </p>
          </div>

          <div class="contact-sidebar__item">
            <div class="contact-sidebar__label">
              <img src="<?php echo yuumi_img('icon-instagram.svg'); ?>" alt="Instagram" class="contact-sidebar__icon" width="18" height="18">
              <span>Instagram</span>
            </div>
            <p class="contact-sidebar__value">
              <a href="https://www.instagram.com/youme0141/" target="_blank" rel="noopener">@youme0141</a>
            </p>
            <p class="contact-sidebar__text">
              日々の活動を発信中。DMでもお気軽にどうぞ。
            </p>
          </div>

          <div class="contact-sidebar__item contact-sidebar__item--hours">
            <p class="contact-sidebar__hours-label">受付時間</p>
            <p class="contact-sidebar__hours-value">
              平日 9:00〜17:00<br>
              （土日祝を除く）
            </p>
          </div>
        </aside>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
