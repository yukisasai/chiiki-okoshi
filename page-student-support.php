<?php
/**
 * Template Name: 生徒・学生向けサポート
 */
get_header(); ?>

<main>

  <!-- Hero -->
  <section class="stu-hero fade-in">
    <div class="stu-hero__inner">
      <div class="stu-hero__body">
        <span class="stu-hero__label">SERVICE</span>
        <h1 class="stu-hero__title">生徒・学生向けサポート</h1>
        <p class="stu-hero__subtitle">学校と地域をつなぐ探究サポート</p>
        <p class="stu-hero__desc">
          地域を知り、自分で考え、伝える場をつくるお手伝いをします。<br>
          探究学習やキャリア教育のサポートを通して、生徒・学生の<br>
          「やってみたい」をカタチにします。
        </p>
        <div class="stu-hero__hashtags">
          <span class="stu-hero__hashtag">＃ 自分で考えるチカラを育てる</span>
          <span class="stu-hero__hashtag">＃ 地域を知るきっかけづくり</span>
          <span class="stu-hero__hashtag">＃ 伝える・つながる機会をつくる</span>
        </div>
      </div>
      <div class="stu-hero__img">
        <img src="<?php echo yuumi_img('stu-hero.png'); ?>" alt="生徒・学生向けサポート">
      </div>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <!-- こんな学校におすすめです -->
  <section class="stu-recommend">
    <div class="stu-recommend__inner">
      <h2 class="stu-recommend__title">こんな学校におすすめです</h2>
      <div class="stu-recommend__content">
        <div class="stu-recommend__ill stu-recommend__ill--left">
          <img src="<?php echo yuumi_img('stu-school.png'); ?>" alt="学校のイラスト">
        </div>
        <div class="stu-recommend__list">
          <div class="stu-recommend__item">
            <img src="<?php echo yuumi_img('stu-check.svg'); ?>" alt="" class="stu-recommend__check" width="24" height="24" aria-hidden="true">
            <span>探究学習や総合的な学習の時間を充実させたい</span>
          </div>
          <div class="stu-recommend__item">
            <img src="<?php echo yuumi_img('stu-check.svg'); ?>" alt="" class="stu-recommend__check" width="24" height="24" aria-hidden="true">
            <span>地域と連携した活動を取り入れたい</span>
          </div>
          <div class="stu-recommend__item">
            <img src="<?php echo yuumi_img('stu-check.svg'); ?>" alt="" class="stu-recommend__check" width="24" height="24" aria-hidden="true">
            <span>生徒・学生の主体性や表現力を育てたい</span>
          </div>
          <div class="stu-recommend__item">
            <img src="<?php echo yuumi_img('stu-check.svg'); ?>" alt="" class="stu-recommend__check" width="24" height="24" aria-hidden="true">
            <span>外部のサポートを活用したい</span>
          </div>
        </div>
        <div class="stu-recommend__ill stu-recommend__ill--right">
          <img src="<?php echo yuumi_img('stu-student.png'); ?>" alt="学生のイラスト">
        </div>
      </div>
    </div>
  </section>

  <!-- サポート内容 -->
  <section class="stu-support">
    <div class="stu-support__inner">
      <h2 class="stu-support__heading">サポート内容</h2>
      <div class="stu-support__grid">
        <div class="stu-support__card">
          <div class="stu-support__icon stu-support__icon--light">
            <img src="<?php echo yuumi_img('stu-ic-01a.png'); ?>" alt="授業サポート" class="stu-support__icon-img stu-support__icon-img--left">
            <img src="<?php echo yuumi_img('stu-ic-01b.png'); ?>" alt="" class="stu-support__icon-img stu-support__icon-img--right" aria-hidden="true">
          </div>
          <h3 class="stu-support__card-title">生徒・学生の地域活動をサポート</h3>
          <p class="stu-support__card-text">地域を知るところから、取材・企画・発信・発表まで生徒・学生が主体的に取り組めるよう、活動全体を伴走します。</p>
        </div>
        <div class="stu-support__card">
          <div class="stu-support__icon">
            <img src="<?php echo yuumi_img('stu-ic-02.png'); ?>" alt="キャリア教育">
          </div>
          <h3 class="stu-support__card-title">学校と地域をつなぐコーディネート</h3>
          <p class="stu-support__card-text">学校と地域の方をつなぎ、協力体制をつくります。探究活動や課外活動を継続しやすい仕組みづくりをお手伝いします。</p>
        </div>
        <div class="stu-support__card">
          <div class="stu-support__icon">
            <img src="<?php echo yuumi_img('stu-ic-03.png'); ?>" alt="地域活動支援">
          </div>
          <h3 class="stu-support__card-title">探究学習・地域学習の企画支援</h3>
          <p class="stu-support__card-text">学校や地域の課題に合わせて、テーマ設定や体験内容、活動プログラムを企画・提案します。目的に合った学びづくりをサポートします。</p>
        </div>
        <div class="stu-support__card">
          <div class="stu-support__icon">
            <img src="<?php echo yuumi_img('stu-ic-04.png'); ?>" alt="イベント企画">
          </div>
          <h3 class="stu-support__card-title">講演・授業・ワークショップ</h3>
          <p class="stu-support__card-text">地域おこし協力隊の経験や、地域・キャリアに関する講演や授業、ワークショップを行います。生徒・学生の学びや気づきのきっかけをつくります。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- サポートの流れ -->
  <section class="stu-flow">
    <div class="stu-flow__inner">
      <h2 class="stu-flow__title">サポートの流れ</h2>
      <div class="stu-flow__steps">
        <div class="stu-flow__step">
          <div class="stu-flow__badge">
            <img src="<?php echo yuumi_img('stu-step-01.svg'); ?>" alt="" width="23" height="23" aria-hidden="true">
            <span>STEP 1</span>
          </div>
          <h3 class="stu-flow__step-title">ご相談・ヒアリング</h3>
          <p class="stu-flow__step-text">学校の目的や課題、希望するサポート内容をお聞きします。お気軽にご相談ください。</p>
        </div>
        <span class="stu-flow__arrow">→</span>
        <div class="stu-flow__step">
          <div class="stu-flow__badge">
            <img src="<?php echo yuumi_img('stu-step-02.svg'); ?>" alt="" width="23" height="23" aria-hidden="true">
            <span>STEP 2</span>
          </div>
          <h3 class="stu-flow__step-title">企画・ご提案</h3>
          <p class="stu-flow__step-text">ヒアリング内容をもとに、最適なプランをご提案します。内容や進め方を一緒に決めます。</p>
        </div>
        <span class="stu-flow__arrow">→</span>
        <div class="stu-flow__step">
          <div class="stu-flow__badge">
            <img src="<?php echo yuumi_img('stu-step-03.svg'); ?>" alt="" width="23" height="23" aria-hidden="true">
            <span>STEP 3</span>
          </div>
          <h3 class="stu-flow__step-title">実施・伴走サポート</h3>
          <p class="stu-flow__step-text">取材・講演・ワークショップ・動画制作など、活動の実施をサポートします。生徒・学生の挑戦に寄り添います。</p>
        </div>
        <span class="stu-flow__arrow">→</span>
        <div class="stu-flow__step">
          <div class="stu-flow__badge">
            <img src="<?php echo yuumi_img('stu-step-04.svg'); ?>" alt="" width="23" height="23" aria-hidden="true">
            <span>STEP 4</span>
          </div>
          <h3 class="stu-flow__step-title">発表・ふりかえり</h3>
          <p class="stu-flow__step-text">成果発表のサポートや、ふりかえりの時間を大切にし、次の学びにつなげます。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="stu-cta">
    <div class="stu-cta__inner">
      <div class="stu-cta__ill">
        <img src="<?php echo yuumi_img('stu-cta-ill.png'); ?>" alt="学生サポートのイラスト" loading="lazy">
      </div>
      <div class="stu-cta__body">
        <h2 class="stu-cta__title">一緒に、未来につながる学びの場をつくりませんか？</h2>
        <p class="stu-cta__text">
          地域とつながり、生徒・学生の「やってみたい」をカタチにするお手伝いをします。<br>
          ご相談・お見積りは無料です。お気軽にお問い合わせください。
        </p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="stu-cta__btn">
          お問い合わせ・ご相談はこちら
          <img src="<?php echo yuumi_img('arrow-circle-blue.svg'); ?>" alt="" width="17" height="17" aria-hidden="true">
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
