<?php get_header(); ?>

<main>
<?php yuumi_breadcrumbs(); ?>
  <section class="error-404">
    <div class="error-404__inner">
      <p class="error-404__number">404</p>
      <h1 class="error-404__title">ページが見つかりませんでした</h1>
      <p class="error-404__text">
        お探しのページは移動または削除された可能性があります。<br class="br-sp">
        URLをご確認のうえ、再度お試しください。
      </p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="error-404__btn">
        TOPページへ戻る
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"><circle cx="8.5" cy="8.5" r="8.5" fill="#fff"/><path d="M7 5.5L10 8.5L7 11.5" stroke="#E77084" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
