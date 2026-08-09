<?php
/**
 * Template Name: サンクスページ
 */
get_header(); ?>

<main>

  <!-- Page Header -->
  <section class="page-header">
    <div class="container text-center">
      <span class="page-header__label">THANK YOU</span>
      <h1 class="page-header__title">お問い合わせありがとうございます</h1>
      <p class="page-header__desc page-header__desc--pink">
        お問い合わせ内容を受け付けました。<br>
        確認メールをお送りしましたので、ご確認ください。
      </p>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <section class="thanks-section">
    <div class="container">
      <div class="thanks-box">
        <div class="thanks-box__icon">
          <img src="<?php echo yuumi_img('icon-mail-check.svg'); ?>" alt="送信完了" width="64" height="64">
        </div>
        <p class="thanks-box__note">
          内容を確認のうえ、2〜3営業日以内にご返信いたします。<br>
          しばらくお待ちくださいませ。
        </p>
        <div class="thanks-box__actions">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--pink">
            TOPページへ戻る
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
