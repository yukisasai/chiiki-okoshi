<?php
/**
 * Template Name: デザイン制作
 */
get_header(); ?>

<main>

  <!-- Hero -->
  <section class="ds-hero fade-in">
    <div class="ds-hero__inner">
      <div class="ds-hero__body">
        <span class="ds-hero__badge">SERVICE</span>
        <h1 class="ds-hero__title">デザイン制作</h1>
        <p class="ds-hero__subtitle">想いが伝わる形をつくる</p>
        <p class="ds-hero__desc">
          WebサイトやSNS画像、チラシ・名刺・ロゴなど、目的に合わせたデザインを制作します。<br>
          大切にしている想いや活動の魅力をくみ取り、伝えたい相手へ届く形を一緒につくります。
        </p>
        <div class="ds-hero__tags">
          <span class="ds-hero__tag">＃ Webサイト・SNS画像</span>
          <span class="ds-hero__tag">＃ チラシ・名刺・各種印刷物</span>
          <span class="ds-hero__tag">＃ ロゴ・イラスト・その他デザイン</span>
        </div>
      </div>
      <div class="ds-hero__img">
        <img src="<?php echo yuumi_img('design-hero-photo.png'); ?>" alt="デザイン制作の様子">
      </div>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <!-- こんなお悩みはありませんか？ -->
  <section class="ds-worry fade-in">
    <div class="container">
      <h2 class="ds-worry__heading">こんなお悩みはありませんか？</h2>
      <div class="ds-worry__cards">
        <div class="ds-worry__card">
          <div class="ds-worry__card-icon">
            <img src="<?php echo yuumi_img('ic-worry-1.png'); ?>" alt="イメージの伝え方がわからない">
          </div>
          <h3 class="ds-worry__card-title">想いはあるけれど、<br>うまく伝えられない</h3>
          <p class="ds-worry__card-text">言葉にするのが難しく、どんなデザインが良いか分からない。</p>
        </div>
        <div class="ds-worry__card">
          <div class="ds-worry__card-icon">
            <img src="<?php echo yuumi_img('ic-worry-2.png'); ?>" alt="デザインを依頼するのが初めて">
          </div>
          <h3 class="ds-worry__card-title">デザインを誰に頼めば<br>いいか分からない</h3>
          <p class="ds-worry__card-text">初めてで不安…信頼して相談できる人を探している。</p>
        </div>
        <div class="ds-worry__card">
          <div class="ds-worry__card-icon">
            <img src="<?php echo yuumi_img('ic-worry-3.png'); ?>" alt="忙しくて手が回らない">
          </div>
          <h3 class="ds-worry__card-title">SNSやチラシの雰囲気を統一したい</h3>
          <p class="ds-worry__card-text">バラバラな印象を整えて、伝えたい相手にしっかり届けたい。</p>
        </div>
        <div class="ds-worry__card">
          <div class="ds-worry__card-icon">
            <img src="<?php echo yuumi_img('ic-worry-4.png'); ?>" alt="何を準備すればいいかわからない">
          </div>
          <h3 class="ds-worry__card-title">自分らしさを大切にしたデザインを作りたい</h3>
          <p class="ds-worry__card-text">自分たちらしい魅力や想いが伝わるデザインにしたい。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 大切にしていること -->
  <section class="ds-important fade-in">
    <img src="<?php echo yuumi_img('design-bk-wave.png'); ?>" alt="" class="ds-important__bg" aria-hidden="true" loading="lazy">
    <div class="ds-important__inner">
      <div class="ds-important__img">
        <img src="<?php echo yuumi_img('design-important.png'); ?>" alt="デザイン制作の様子" loading="lazy">
      </div>
      <div class="ds-important__body">
        <h2 class="ds-important__title">大切にしていること</h2>
        <p class="ds-important__text">
          デザインを作る前に、まずはお話をしっかり伺います。「誰に届けたいのか」「どんな想いがあるのか」「どんな未来につながってほしいのか」一緒に整理しながら、あなたらしさが伝わるデザインをつくります。
        </p>
      </div>
    </div>
  </section>

  <!-- 制作できるもの -->
  <section class="ds-products fade-in">
    <div class="container">
      <h2 class="ds-products__heading">制作できるもの</h2>
      <div class="ds-products__grid">
        <div class="ds-products__card">
          <div class="ds-products__card-img">
            <img src="<?php echo yuumi_img('design-web.png'); ?>" alt="Webサイト">
          </div>
          <h3 class="ds-products__card-title">Webサイト</h3>
          <p class="ds-products__card-text">想いや活動が伝わるホームページを制作します。（コーポレートサイト・LPなど）</p>
        </div>
        <div class="ds-products__card">
          <div class="ds-products__card-img">
            <img src="<?php echo yuumi_img('design-sns.png'); ?>" alt="SNS画像・バナー">
          </div>
          <h3 class="ds-products__card-title">SNS画像・バナー</h3>
          <p class="ds-products__card-text">Instagramなどの投稿画像やバナー、<br>ヘッダー画像を制作します。</p>
        </div>
        <div class="ds-products__card">
          <div class="ds-products__card-img">
            <img src="<?php echo yuumi_img('design-flyer.png'); ?>" alt="チラシ・ポスター">
          </div>
          <h3 class="ds-products__card-title">チラシ・ポスター</h3>
          <p class="ds-products__card-text">イベントやサービスの魅力が伝わる<br>チラシ・ポスターを制作します。</p>
        </div>
        <div class="ds-products__card">
          <div class="ds-products__card-img">
            <img src="<?php echo yuumi_img('design-card.png'); ?>" alt="名刺・ショップカード">
          </div>
          <h3 class="ds-products__card-title">名刺・ショップカード</h3>
          <p class="ds-products__card-text">名刺やショップカードなど、<br>印象に残る紙ものを制作します。</p>
        </div>
        <div class="ds-products__card">
          <div class="ds-products__card-img">
            <img src="<?php echo yuumi_img('design-logo.png'); ?>" alt="ロゴ・イラスト">
          </div>
          <h3 class="ds-products__card-title">ロゴ・イラスト</h3>
          <p class="ds-products__card-text">ロゴやアイコン、イラストなど<br>オリジナルデザインを制作します。</p>
        </div>
        <div class="ds-products__card">
          <div class="ds-products__card-img">
            <img src="<?php echo yuumi_img('design-other.png'); ?>" alt="その他デザイン">
          </div>
          <h3 class="ds-products__card-title">その他デザイン</h3>
          <p class="ds-products__card-text">資料・パンフレット・看板など、<br>ご相談内容に合わせて対応します。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 制作の流れ -->
  <section class="ds-flow fade-in">
    <div class="container">
      <h2 class="ds-flow__heading">制作の流れ</h2>
      <div class="ds-flow__steps">
        <div class="ds-flow__arrow">
          <img src="<?php echo yuumi_img('arrow-step-pink.svg'); ?>" alt="" width="30" height="15" aria-hidden="true">
        </div>
        <div class="ds-flow__step">
          <span class="ds-flow__step-num">01</span>
          <h3 class="ds-flow__step-title">ご相談・お見積り</h3>
          <p class="ds-flow__step-text">お問い合わせフォームからご相談ください。内容を確認し、お見積りをご提案します。</p>
        </div>
        <div class="ds-flow__arrow">
          <img src="<?php echo yuumi_img('arrow-step-pink.svg'); ?>" alt="" width="30" height="15" aria-hidden="true">
        </div>
        <div class="ds-flow__step">
          <span class="ds-flow__step-num">02</span>
          <h3 class="ds-flow__step-title">ヒアリング・<br>お打ち合わせ</h3>
          <p class="ds-flow__step-text">オンラインやメール、対面で、目標・イメージをお伺いします。不安なこともお気軽にご相談ください。</p>
        </div>
        <div class="ds-flow__arrow">
          <img src="<?php echo yuumi_img('arrow-step-pink.svg'); ?>" alt="" width="30" height="15" aria-hidden="true">
        </div>
        <div class="ds-flow__step">
          <span class="ds-flow__step-num">03</span>
          <h3 class="ds-flow__step-title">ご提案・<br>デザイン制作</h3>
          <p class="ds-flow__step-text">ヒアリング内容をもとに、デザイン案を制作します。方向性を確認しながら丁寧に進めます。</p>
        </div>
        <div class="ds-flow__arrow">
          <img src="<?php echo yuumi_img('arrow-step-pink.svg'); ?>" alt="" width="30" height="15" aria-hidden="true">
        </div>
        <div class="ds-flow__step">
          <span class="ds-flow__step-num">04</span>
          <h3 class="ds-flow__step-title">ご確認・修正</h3>
          <p class="ds-flow__step-text">デザインを確認いただき、必要な修正を行います。納得いただけるまで調整します。</p>
        </div>
        <div class="ds-flow__arrow">
          <img src="<?php echo yuumi_img('arrow-step-pink.svg'); ?>" alt="" width="30" height="15" aria-hidden="true">
        </div>
        <div class="ds-flow__step">
          <span class="ds-flow__step-num">05</span>
          <h3 class="ds-flow__step-title">納品・<br>公開サポート</h3>
          <p class="ds-flow__step-text">データ納品・印刷手配・Web公開など、納品後のサポートもお任せください。</p>
        </div>
        <div class="ds-flow__arrow">
          <img src="<?php echo yuumi_img('arrow-step-pink.svg'); ?>" alt="" width="30" height="15" aria-hidden="true">
        </div>
        <div class="ds-flow__arrow ds-flow__arrow--end">
          <img src="<?php echo yuumi_img('arrow-step-end-pink.svg'); ?>" alt="" width="13" height="46" aria-hidden="true">
        </div>
      </div>
      <p class="ds-flow__note">※内容やご希望により、制作の流れ・期間は異なる場合がございます。</p>
    </div>
  </section>

  <!-- CTA -->
  <section class="ds-cta fade-in">
    <div class="container text-center">
      <h2 class="ds-cta__title">デザインのこと、まずは<br class="br-sp">お話してみませんか？</h2>
      <p class="ds-cta__text">ご相談・お見積りは無料です。ご希望やご予算に合わせて、最適なプランをご提案します。</p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--pink ds-cta__btn">
        お問い合わせ・ご相談はこちら
        <img src="<?php echo yuumi_img('arrow-btn-pink.svg'); ?>" alt="" width="17" height="17" aria-hidden="true">
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
