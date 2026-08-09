<?php
/**
 * Template Name: About
 */
get_header(); ?>

<main class="page-about">

  <!-- Page Hero -->
  <section class="about-hero">
    <p class="about-hero__label">ABOUT</p>
    <h1 class="about-hero__title">ゆうつむぎデザインについて</h1>
    <div class="about-hero__desc">
      <p>"やさしく、あたたかく。"</p>
      <p>わたしたちの想いと、この場所で目指していることをご紹介します。</p>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <!-- CONCEPT -->
  <section class="about-concept fade-in">
    <div class="about-concept__inner">
      <h2 class="about-concept__title">ConCEPT</h2>
      <div class="about-concept__body">
        <div class="about-concept__lead">
          <p>ゆうつむぎの <span class="text-pink">ゆう</span> は、</p>
          <p>優しさを表す 「<span class="text-pink-bold">優</span>」、<br class="br-sp">人や想いを結ぶ 「<span class="text-pink-bold">結</span>」</p>
          <p>あなたの「 <span class="text-pink-bold">YOU</span>」 と、<br class="br-sp">私の名前の「 <span class="text-pink-bold">ゆう</span>」 の意味。</p>
        </div>
        <div class="about-concept__text">
          <p>「つむぎ」はそれぞれの想いや背景を<br class="br-sp">丁寧につなぎ、形にしていく意味。</p>
          <p>そして「デザイン」には、<br class="br-sp">目に見えるものをつくるだけではなく、</p>
          <p>人や地域、想いをつむぎ、<br class="br-sp">関係を形づくるという意味を込めています。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROFILE -->
  <section class="about-profile fade-in">
    <div class="about-profile__inner">
      <div class="about-profile__img-wrap">
        <img src="<?php echo yuumi_img('profile.png'); ?>" alt="渡邊ゆうみ" class="about-profile__img" loading="lazy">
      </div>
      <div class="about-profile__card">
        <h2 class="about-profile__label">PROFILE</h2>
        <div class="about-profile__greeting">
          <p>はじめまして。</p>
          <p>ゆうつむぎデザインの<br class="br-sp">ゆうみです。</p>
        </div>
        <div class="about-profile__text">
          <p>十和田市へ移住して、地域おこし協力隊として移住・定住に関わる情報発信を中心に、地域の方への取材、SNS運用、イベント運営に取り組んできました。その中でも、高校生と一緒に十和田の魅力を見つけ、取材や動画制作を通して発信する「十和田市高校生魅力発信プロジェクトTowaPro」では、地域で暮らす人の想いや、若い世代ならではの視点に向き合いました。</p>
          <p>地域の方と関わる中で、何気ない言葉や日々の活動の中に、その人らしさや地域の魅力があることを感じています。ゆうつむぎデザインでは、見た目を整えるだけではなく、地域にある想いを聞き取り、言葉にし、話し合いの場を整えながら、活動や取り組みを届けたい相手へ伝わる形に一緒につくります。</p>
          <p>また、地域おこし協力隊として活動する方や、地域に関心を持つ生徒・学生が、地域と関わりながら活動できるようサポートしていきます。</p>
          <p>現在は、仲間とともに設立した株式会社LivvyでIT活用や業務改善や、焼き鳥居酒屋「鶏どれ」の経営にも携わっています。 株式会社Livvyや「鶏どれ」での活動についても、こちらからご覧いただけますので、よろしければご覧ください。</p>
        </div>
        <div class="about-profile__links">
          <a href="https://livvy.co.jp/" class="about-profile__link-btn" target="_blank" rel="noopener noreferrer">株式会社Livvy | Webサイト</a>
          <a href="https://www.instagram.com/toridore_official.0141/" class="about-profile__link-btn" target="_blank" rel="noopener noreferrer">鶏どれ | Instagram</a>
        </div>
      </div>
    </div>
  </section>

  <!-- OVERVIEW -->
  <section class="about-overview fade-in">
    <div class="about-overview__inner">
      <div class="about-overview__header">
        <span class="about-overview__label">OVERVIEW</span>
        <h2 class="about-overview__title">会社概要</h2>
      </div>
      <div class="about-overview__table">
        <div class="about-overview__row">
          <span class="about-overview__th">会社名</span>
          <span class="about-overview__td">ゆうつむぎデザイン</span>
        </div>
        <div class="about-overview__row">
          <span class="about-overview__th">創業</span>
          <span class="about-overview__td">2026年2月20日</span>
        </div>
        <div class="about-overview__row">
          <span class="about-overview__th">代表</span>
          <span class="about-overview__td">渡邊 ゆうみ</span>
        </div>
        <div class="about-overview__row">
          <span class="about-overview__th">所在地</span>
          <span class="about-overview__td">青森県十和田市</span>
        </div>
        <div class="about-overview__row">
          <span class="about-overview__th">事業内容</span>
          <span class="about-overview__td">デザイン制作 ／ 地域おこし協力隊サポート ／ 高校生・学生向けサポート ／ イベントサポート</span>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT CTA -->
  <section class="about-cta fade-in">
    <div class="about-cta__inner">
      <div class="about-cta__text">
        <h2 class="about-cta__title">気軽にお問い合わせください</h2>
        <div class="about-cta__desc">
          <p>ご依頼、ご相談など、</p>
          <p>内容に合わせてお気軽にご連絡ください。</p>
        </div>
      </div>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="about-cta__btn">
        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.2083 4.79167H4.79167C3.73312 4.79167 2.875 5.64979 2.875 6.70833V16.2917C2.875 17.3502 3.73312 18.2083 4.79167 18.2083H18.2083C19.2669 18.2083 20.125 17.3502 20.125 16.2917V6.70833C20.125 5.64979 19.2669 4.79167 18.2083 4.79167Z" stroke="white" stroke-width="1.275" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.83333 6.70833L11.5 12.4583L19.1667 6.70833" stroke="white" stroke-width="1.275" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <span>お問い合わせ</span>
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
