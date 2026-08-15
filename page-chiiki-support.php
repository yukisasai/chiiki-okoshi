<?php
/**
 * Template Name: 地域おこし協力隊サポート
 */
get_header(); ?>

<main>

  <!-- Hero -->
  <section class="cs-hero fade-in">
    <div class="cs-hero__inner">
      <span class="cs-hero__label">SERVICE</span>
      <h1 class="cs-hero__title">地域おこし協力隊サポート</h1>
      <p class="cs-hero__desc">
        地域おこし協力隊の募集・受入準備から、<br class="br-sp">着任後の活動サポートまで。<br>
        地域と隊員が、安心して活動を進められる<br class="br-sp">体制を一緒に整えます。
      </p>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <!-- 地域おこし協力隊とは -->
  <section class="cs-about fade-in">
    <div class="cs-about__inner">
      <div class="cs-about__img">
        <img src="<?php echo yuumi_img('chiiki-about.png'); ?>" alt="地域おこし協力隊" loading="lazy">
      </div>
      <div class="cs-about__body">
        <span class="cs-about__label">ABOUT</span>
        <h2 class="cs-about__title">地域おこし協力隊とは</h2>
        <p class="cs-about__text">
          地域おこし協力隊は、地域に移り住み、そこに暮らす人たちと関わりながら、地域の活動や課題に取り組む制度です。活動内容は地域によってさまざまで、情報発信、観光、移住定住、産業支援、地域づくりなど、その地域に必要な役割を担います。活動を通して地域との関係を深めながら、隊員自身もその地域での暮らし方や働き方を少しずつ形にしていくことができます。
        </p>
        <a href="https://www.soumu.go.jp/main_sosiki/jichi_gyousei/c-gyousei/02gyosei08_03000066.html" class="cs-about__btn" target="_blank" rel="noopener noreferrer">
          地域おこし協力隊について<br class="br-sp">詳しくはこちら（総務省）
          <img src="<?php echo yuumi_img('arrow-external-white.svg'); ?>" alt="" width="17" height="17" aria-hidden="true">
        </a>
      </div>
    </div>
  </section>

  <!-- こんな方におすすめ -->
  <section class="cs-recommend fade-in">
    <div class="container">
      <div class="cs-recommend__header">
        <span class="cs-recommend__label">FOR YOU</span>
        <h2 class="cs-recommend__title">こんな方におすすめ</h2>
      </div>
      <div class="cs-recommend__cards">
        <div class="cs-recommend__card">
          <div class="cs-recommend__card-icon">
            <img src="<?php echo yuumi_img('chiiki-icon-01.png'); ?>" alt="移住・定住支援" loading="lazy">
          </div>
          <h3 class="cs-recommend__card-title">地域おこし協力隊を受入れたい<br>自治体・地域団体</h3>
          <p class="cs-recommend__card-text">募集内容や受け入れ体制を整えたい方へ</p>
        </div>
        <div class="cs-recommend__card">
          <div class="cs-recommend__card-icon">
            <img src="<?php echo yuumi_img('chiiki-icon-02.png'); ?>" alt="地域活動サポート" loading="lazy">
          </div>
          <h3 class="cs-recommend__card-title">現役隊員をサポートしたい<br>自治体・地域</h3>
          <p class="cs-recommend__card-text">活動整理や情報発信を一緒に考えたい方へ</p>
        </div>
        <div class="cs-recommend__card">
          <div class="cs-recommend__card-icon">
            <img src="<?php echo yuumi_img('chiiki-icon-03.png'); ?>" alt="キャリア支援" loading="lazy">
          </div>
          <h3 class="cs-recommend__card-title">地域おこし協力隊に<br>興味のある方</h3>
          <p class="cs-recommend__card-text">応募前に地域との関わり方を知りたい方へ</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 応募から活動の流れ -->
  <section class="cs-flow fade-in">
    <div class="container">
      <div class="cs-flow__header">
        <span class="cs-flow__label">FLOW</span>
        <h2 class="cs-flow__title">地域おこし協力隊の<br class="br-sp">応募から活動までの流れ</h2>
      </div>
      <div class="cs-flow__steps">
        <div class="cs-flow__step">
          <span class="cs-flow__step-badge">STEP 1</span>
          <h3 class="cs-flow__step-title">応募・お問い合わせ</h3>
        </div>
        <div class="cs-flow__arrow">
          <img src="<?php echo yuumi_img('arrow-step-green.svg'); ?>" alt="" width="13" height="20" aria-hidden="true">
        </div>
        <div class="cs-flow__step">
          <span class="cs-flow__step-badge">STEP 2</span>
          <h3 class="cs-flow__step-title">面談・選考</h3>
        </div>
        <div class="cs-flow__arrow">
          <img src="<?php echo yuumi_img('arrow-step-green.svg'); ?>" alt="" width="13" height="20" aria-hidden="true">
        </div>
        <div class="cs-flow__step">
          <span class="cs-flow__step-badge">STEP 3</span>
          <h3 class="cs-flow__step-title">着任・活動開始</h3>
        </div>
        <div class="cs-flow__arrow">
          <img src="<?php echo yuumi_img('arrow-step-green.svg'); ?>" alt="" width="13" height="20" aria-hidden="true">
        </div>
        <div class="cs-flow__step">
          <span class="cs-flow__step-badge">STEP 4</span>
          <h3 class="cs-flow__step-title">活動サポート</h3>
        </div>
        <div class="cs-flow__arrow">
          <img src="<?php echo yuumi_img('arrow-step-green.svg'); ?>" alt="" width="13" height="20" aria-hidden="true">
        </div>
        <div class="cs-flow__step">
          <span class="cs-flow__step-badge">STEP 5</span>
          <h3 class="cs-flow__step-title">定住・独立</h3>
        </div>
        <div class="cs-flow__arrow cs-flow__arrow--end">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none" preserveAspectRatio="none" overflow="visible" style="display:block;"><path d="M0 10H13" stroke="#72B94E" stroke-width="20"/></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="46" viewBox="0 0 13 46" fill="none"><path d="M0 0L13 23L0 45.5V0Z" fill="#72B94E"/></svg>
        </div>
      </div>
    </div>
  </section>

  <!-- 募集中のプログラム -->
  <section class="cs-programs fade-in">
    <div class="container">
      <div class="cs-programs__header">
        <span class="cs-programs__label">PROGRAM</span>
        <h2 class="cs-programs__title">十和田市で募集中のプログラム</h2>
      </div>
      <div class="cs-programs__cards">
        <div class="cs-programs__card">
          <div class="cs-programs__card-top">
            <div class="cs-programs__card-badge">
              <span>まずは<br>ここから</span>
            </div>
            <div class="cs-programs__card-icon">
              <img src="<?php echo yuumi_img('chiiki-otameshi.png'); ?>" alt="おためしプログラム" loading="lazy">
            </div>
          </div>
          <h3 class="cs-programs__card-title">おためし地域おこし協力隊</h3>
          <p class="cs-programs__card-text">まず地域を知ってみたい方向け。<br>短期間で地域の暮らしや活動を体験できます。</p>
          <a href="<?php echo esc_url(home_url('/otameshi/')); ?>" class="cs-programs__card-btn cs-programs__card-btn--cyan">
            おためしプログラムを見る
            <img src="<?php echo yuumi_img('arrow-circle-white-sm.svg'); ?>" alt="" width="14" height="14" aria-hidden="true">
          </a>
        </div>
        <div class="cs-programs__card">
          <div class="cs-programs__card-top">
            <div class="cs-programs__card-icon">
              <img src="<?php echo yuumi_img('chiiki-program.png'); ?>" alt="地域おこし協力隊プログラム" loading="lazy">
            </div>
          </div>
          <h3 class="cs-programs__card-title">地域おこし協力隊</h3>
          <p class="cs-programs__card-text">地域おこし協力隊として活動したい方へ。<br>現在募集中のミッション情報をご案内します。</p>
          <a href="<?php echo esc_url(home_url('/program/')); ?>" class="cs-programs__card-btn cs-programs__card-btn--green">
            地域おこし協力隊プログラムを見る
            <img src="<?php echo yuumi_img('arrow-circle-white-sm.svg'); ?>" alt="" width="14" height="14" aria-hidden="true">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cs-cta fade-in">
    <div class="container text-center">
      <h2 class="cs-cta__title">まずは、お気軽にご相談ください</h2>
      <p class="cs-cta__text">地域おこし協力隊の募集・受入について、<br class="br-sp">詳しくご案内します。</p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cs-cta__btn">
        相談する
        <img src="<?php echo yuumi_img('arrow-circle-white-sm.svg'); ?>" alt="" width="14" height="14" aria-hidden="true">
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
