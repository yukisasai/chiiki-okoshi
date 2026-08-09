<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo yuumi_img('logo.png'); ?>" type="image/png">
  <link rel="apple-touch-icon" href="<?php echo yuumi_img('logo.png'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="site-header__inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
      <img src="<?php echo yuumi_img('logo.png'); ?>" alt="ゆうつむぎデザイン" class="site-logo__img">
      <span class="site-logo__text">ゆうつむぎデザイン</span>
    </a>

    <div class="site-header__right">
      <nav class="site-nav">
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
          <li class="has-submenu">
            <a href="<?php echo esc_url(home_url('/service/')); ?>">サービス</a>
            <ul class="submenu">
              <li><a href="<?php echo esc_url(home_url('/design-service/')); ?>">デザイン</a></li>
              <li><a href="<?php echo esc_url(home_url('/chiiki-support/')); ?>">地域おこし協力隊サポート</a></li>
              <li><a href="<?php echo esc_url(home_url('/student-support/')); ?>">生徒・学生向けサポート</a></li>
              <li><a href="<?php echo esc_url(home_url('/event-support/')); ?>">イベントサポート</a></li>
            </ul>
          </li>
          <li><a href="<?php echo esc_url(home_url('/works/')); ?>">活動実績</a></li>
          <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog・お知らせ</a></li>
          <li><a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a></li>
        </ul>
      </nav>

      <div class="header-cta">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--pink">
          <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          お問い合わせ
        </a>
      </div>

      <button class="hamburger" aria-label="メニュー" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
</header>

<div class="mobile-nav-overlay"></div>
<nav class="mobile-nav">
  <ul>
    <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
    <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
    <li class="has-submenu-mobile">
      <a href="<?php echo esc_url(home_url('/service/')); ?>">サービス</a>
      <ul class="submenu-mobile">
        <li><a href="<?php echo esc_url(home_url('/design-service/')); ?>">デザイン</a></li>
        <li><a href="<?php echo esc_url(home_url('/chiiki-support/')); ?>">地域おこし協力隊サポート</a></li>
        <li><a href="<?php echo esc_url(home_url('/student-support/')); ?>">生徒・学生向けサポート</a></li>
        <li><a href="<?php echo esc_url(home_url('/event-support/')); ?>">イベントサポート</a></li>
      </ul>
    </li>
    <li><a href="<?php echo esc_url(home_url('/works/')); ?>">活動実績</a></li>
    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog・お知らせ</a></li>
    <li><a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a></li>
  </ul>
  <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--pink">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
    お問い合わせ
  </a>
</nav>

