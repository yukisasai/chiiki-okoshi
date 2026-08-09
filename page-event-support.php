<?php
/**
 * Template Name: イベントサポート
 */
get_header(); ?>

<main>

  <!-- Hero -->
  <section class="ev-hero fade-in">
    <div class="ev-hero__inner">
      <div class="ev-hero__body">
        <span class="ev-hero__badge">SERVICE</span>
        <h1 class="ev-hero__title">イベントサポート</h1>
        <p class="ev-hero__subtitle">思いが伝わる場を、ともにつくりあげる</p>
        <p class="ev-hero__desc">
          地域イベントや企画について、目的や内容を一緒に整理し、企画から当日の運営まで、実現に向けた場づくりをトータルでサポートします。
        </p>
        <div class="ev-hero__buttons">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ev-hero__btn ev-hero__btn--filled">
            <svg width="18" height="14" viewBox="0 0 18 14" fill="none"><path d="M1 1H17V13H1V1Z" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/><path d="M1 1L9 8L17 1" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/></svg>
            お問い合わせ
          </a>
        </div>
      </div>
      <div class="ev-hero__img">
        <img src="<?php echo yuumi_img('event-hero-photo.png'); ?>" alt="イベントサポートの様子">
      </div>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <!-- こんな方におすすめです -->
  <section class="ev-recommend fade-in">
    <div class="container">
      <h2 class="ev-recommend__heading">こんな方におすすめです</h2>
      <div class="ev-recommend__cards">
        <div class="ev-recommend__card">
          <div class="ev-recommend__card-icon">
            <img src="<?php echo yuumi_img('ic-ev-home.svg'); ?>" alt="地域イベント" width="54" height="54">
          </div>
          <h3 class="ev-recommend__card-title">地域イベントを<br>企画したい方</h3>
          <p class="ev-recommend__card-text">地域を元気にしたい、人が集まるきっかけをつくりたい方に。</p>
        </div>
        <div class="ev-recommend__card">
          <div class="ev-recommend__card-icon">
            <img src="<?php echo yuumi_img('ic-ev-calendar.svg'); ?>" alt="イベント開催" width="46" height="46">
          </div>
          <h3 class="ev-recommend__card-title">初めてイベントを<br>開催する方</h3>
          <p class="ev-recommend__card-text">お店の周年イベントや団体の企画を、もっと魅力的に見せたい方に。</p>
        </div>
        <div class="ev-recommend__card">
          <div class="ev-recommend__card-icon">
            <img src="<?php echo yuumi_img('ic-ev-people.svg'); ?>" alt="人が集まる場" width="44" height="44">
          </div>
          <h3 class="ev-recommend__card-title">人が集まる場を<br>つくりたい方</h3>
          <p class="ev-recommend__card-text">つながりや想いを共有できるあたたかい場をつくりたい方に。</p>
        </div>
        <div class="ev-recommend__card">
          <div class="ev-recommend__card-icon">
            <img src="<?php echo yuumi_img('ic-ev-handshake.svg'); ?>" alt="サポート" width="58" height="54">
          </div>
          <h3 class="ev-recommend__card-title">一緒に考えてくれる人が<br>ほしい方</h3>
          <p class="ev-recommend__card-text">何から始めればいいかわからない方も安心してご相談ください。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- こんなイベントに対応できます -->
  <section class="ev-events fade-in">
    <div class="container">
      <h2 class="ev-events__heading">こんなイベントに対応できます</h2>
      <div class="ev-events__grid">
        <div class="ev-events__card">
          <div class="ev-events__card-img">
            <img src="<?php echo yuumi_img('event-marche.png'); ?>" alt="マルシェ" loading="lazy">
          </div>
          <h3 class="ev-events__card-title">マルシェ</h3>
        </div>
        <div class="ev-events__card">
          <div class="ev-events__card-img">
            <img src="<?php echo yuumi_img('event-exchange.png'); ?>" alt="交流会" loading="lazy">
          </div>
          <h3 class="ev-events__card-title">交流会</h3>
        </div>
        <div class="ev-events__card">
          <div class="ev-events__card-img">
            <img src="<?php echo yuumi_img('event-workshop.png'); ?>" alt="ワークショップ" loading="lazy">
          </div>
          <h3 class="ev-events__card-title">ワークショップ</h3>
        </div>
        <div class="ev-events__card">
          <div class="ev-events__card-img">
            <img src="<?php echo yuumi_img('event-school.png'); ?>" alt="学校イベント" loading="lazy">
          </div>
          <h3 class="ev-events__card-title">学校イベント</h3>
        </div>
        <div class="ev-events__card">
          <div class="ev-events__card-img">
            <img src="<?php echo yuumi_img('event-festival.png'); ?>" alt="地域のお祭り" loading="lazy">
          </div>
          <h3 class="ev-events__card-title">地域のお祭り</h3>
        </div>
        <div class="ev-events__card">
          <div class="ev-events__card-img">
            <img src="<?php echo yuumi_img('event-presentation.png'); ?>" alt="発表会" loading="lazy">
          </div>
          <h3 class="ev-events__card-title">発表会</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- サポートの流れ -->
  <section class="ev-flow fade-in" id="flow">
    <div class="container">
      <h2 class="ev-flow__heading">サポートの流れ</h2>
      <div class="ev-flow__steps">
        <div class="ev-flow__step">
          <span class="ev-flow__step-badge">STEP 1</span>
          <h3 class="ev-flow__step-title">ご相談・ヒアリング</h3>
          <p class="ev-flow__step-text">目的やご希望をお伺いし、課題や不安を整理します。</p>
        </div>
        <div class="ev-flow__arrow">→</div>
        <div class="ev-flow__step">
          <span class="ev-flow__step-badge">STEP 2</span>
          <h3 class="ev-flow__step-title">企画・ご提案</h3>
          <p class="ev-flow__step-text">イベントの企画や構成、スケジュールや体制をご提案します。</p>
        </div>
        <div class="ev-flow__arrow">→</div>
        <div class="ev-flow__step">
          <span class="ev-flow__step-badge">STEP 3</span>
          <h3 class="ev-flow__step-title">準備・調整</h3>
          <p class="ev-flow__step-text">広報物の制作やSNS発信など、集客に向けた準備を進めます。</p>
        </div>
        <div class="ev-flow__arrow">→</div>
        <div class="ev-flow__step">
          <span class="ev-flow__step-badge">STEP 4</span>
          <h3 class="ev-flow__step-title">当日の運営・ふりかえり</h3>
          <p class="ev-flow__step-text">当日の運営をサポートし、終了後はふりかえりと今後のアドバイスを行います。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="ev-cta fade-in">
    <div class="container">
      <div class="ev-cta__inner">
        <div class="ev-cta__img">
          <img src="<?php echo yuumi_img('ill-ev-cta.png'); ?>" alt="イベントサポートのご相談" loading="lazy">
        </div>
        <div class="ev-cta__body">
          <h2 class="ev-cta__title">イベントのこと、まずは<br class="br-sp">お話ししてみませんか？</h2>
          <p class="ev-cta__text">ご相談・お見積りは無料です。<br>規模や内容に合わせて、一緒に考えていきましょう。</p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ev-cta__btn">
            お問い合わせ・ご相談はこちら
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"><circle cx="8.5" cy="8.5" r="8.5" fill="#fff"/><path d="M7 5.5L10 8.5L7 11.5" stroke="#F8C743" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
