<?php
/**
 * Template Name: サービス一覧
 */
get_header(); ?>

<main>

  <!-- Page Header -->
  <section class="svc-page-header">
    <div class="container text-center">
      <span class="svc-page-header__label">SERVICE</span>
      <h1 class="svc-page-header__title">サービス</h1>
      <p class="svc-page-header__desc">
        4つのサービスで、地域とあなたをつなぎます。<br>
        ご相談だけでもお気軽にどうぞ。
      </p>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <!-- 01 デザイン制作 -->
  <section class="svc-section svc-section--01">
    <div class="svc-section__inner">
      <div class="svc-section__img">
        <img src="<?php echo yuumi_img('pc-mockup.png'); ?>" alt="デザイン制作">
      </div>
      <div class="svc-section__body">
        <div class="svc-section__meta">
          <span class="svc-section__num svc-section__num--pink">01</span>
          <span class="svc-section__label svc-section__label--pink">デザイン制作</span>
        </div>
        <h2 class="svc-section__title">想いが伝わる形をつくるデザイン</h2>
        <ul class="svc-section__list">
          <li>Webサイト・SNS画像の制作</li>
          <li>チラシ・名刺・ロゴなどの紙もの</li>
          <li>伝えたい内容の整理・文章づくり</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/design-service/')); ?>" class="svc-section__btn svc-section__btn--pink">
          詳しく見る
          <img src="<?php echo yuumi_img('arrow-circle-pink-sm.svg'); ?>" alt="" width="14" height="14" aria-hidden="true">
        </a>
      </div>
    </div>
  </section>

  <!-- Wave divider 01-02 -->
  <div class="svc-wave svc-wave--01">
    <img src="<?php echo yuumi_img('wave-pink-green.svg'); ?>" alt="" aria-hidden="true">
  </div>

  <!-- 02 地域おこし協力隊サポート -->
  <section class="svc-section svc-section--02">
    <div class="svc-section__inner svc-section__inner--reverse">
      <div class="svc-section__body">
        <div class="svc-section__meta">
          <span class="svc-section__num svc-section__num--green">02</span>
          <span class="svc-section__label svc-section__label--green">地域おこし協力隊サポート</span>
        </div>
        <h2 class="svc-section__title">地域で活動したい人と、迎えたい地域をつなぐ</h2>
        <ul class="svc-section__list">
          <li>受入準備・体制づくり</li>
          <li>募集内容や体験プログラムの整理</li>
          <li>隊員の活動整理・伴走</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/chiiki-support/')); ?>" class="svc-section__btn svc-section__btn--green">
          詳しく見る
          <img src="<?php echo yuumi_img('arrow-circle-green-sm.svg'); ?>" alt="" width="14" height="14" aria-hidden="true">
        </a>
      </div>
      <div class="svc-section__img">
        <img src="<?php echo yuumi_img('couple-garden.png'); ?>" alt="地域おこし協力隊サポート" loading="lazy">
      </div>
    </div>
  </section>

  <!-- Wave divider 02-03 -->
  <div class="svc-wave svc-wave--02">
    <img src="<?php echo yuumi_img('wave-blue-yellow.svg'); ?>" alt="" aria-hidden="true">
  </div>

  <!-- 03 生徒・学生向けサポート -->
  <section class="svc-section svc-section--03">
    <div class="svc-section__inner">
      <div class="svc-section__img">
        <img src="<?php echo yuumi_img('schoolgirls.png'); ?>" alt="生徒・学生向けサポート" loading="lazy">
      </div>
      <div class="svc-section__body">
        <div class="svc-section__meta">
          <span class="svc-section__num svc-section__num--blue">03</span>
          <span class="svc-section__label svc-section__label--blue">生徒・学生向けサポート</span>
        </div>
        <h2 class="svc-section__title">生徒・学生と地域をつなぐ</h2>
        <ul class="svc-section__list">
          <li>地域取材・発信活動の設計</li>
          <li>講演・ワークショップの実施</li>
          <li>動画制作や発表までの伴走</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/student-support/')); ?>" class="svc-section__btn svc-section__btn--blue">
          詳しく見る
          <img src="<?php echo yuumi_img('arrow-circle-blue-sm.svg'); ?>" alt="" width="14" height="14" aria-hidden="true">
        </a>
      </div>
    </div>
  </section>

  <!-- Wave divider 03-04 -->
  <div class="svc-wave svc-wave--03">
    <img src="<?php echo yuumi_img('wave-yellow-white.svg'); ?>" alt="" aria-hidden="true">
  </div>

  <!-- 04 イベントサポート -->
  <section class="svc-section svc-section--04">
    <div class="svc-section__inner svc-section__inner--reverse">
      <div class="svc-section__body">
        <div class="svc-section__meta">
          <span class="svc-section__num svc-section__num--yellow">04</span>
          <span class="svc-section__label svc-section__label--yellow">イベントサポート</span>
        </div>
        <h2 class="svc-section__title">想いが伝わる場をともにつくりあげる</h2>
        <ul class="svc-section__list">
          <li>企画内容や流れの整理</li>
          <li>広報物・SNS発信のサポート</li>
          <li>当日の運営・ふりかえり</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/event-support/')); ?>" class="svc-section__btn svc-section__btn--yellow">
          詳しく見る
          <img src="<?php echo yuumi_img('arrow-circle-yellow-sm.svg'); ?>" alt="" width="14" height="14" aria-hidden="true">
        </a>
      </div>
      <div class="svc-section__img">
        <img src="<?php echo yuumi_img('meeting.png'); ?>" alt="イベントサポート" loading="lazy">
      </div>
    </div>
  </section>

  <!-- Wave divider 04-CTA -->
  <div class="svc-wave svc-wave--04">
    <img src="<?php echo yuumi_img('wave-white-footer.svg'); ?>" alt="" aria-hidden="true">
  </div>

  <!-- CTA -->
  <section class="svc-cta">
    <div class="svc-cta__inner">
      <p class="svc-cta__text">サービスについてのご相談はこちら</p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--pink">
        <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
        お問い合わせ
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
