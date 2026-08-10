<?php get_header(); ?>

<main class="front-page" id="frontPage">

  <!-- ===== HERO (FV) ===== -->
  <section class="hero-fv">
    <div class="hero-fv__parts">
      <svg class="hero-fv__line hero-fv__line--pink" aria-hidden="true" preserveAspectRatio="none" overflow="visible" viewBox="0 0 262.339 427.163" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M260.839 1.50016C55.8005 27.7072 160.129 226.928 180.385 191.06C202.279 152.29 69.1864 165.907 53.1941 314.208C40.5964 431.029 124.408 451.39 125.739 396.827C127.07 342.264 11.9259 369.732 1.5003 419.481" stroke="#E77084" stroke-width="3" stroke-linecap="round" stroke-dasharray="6 8"/></svg>
      <svg class="hero-fv__line hero-fv__line--blue" aria-hidden="true" preserveAspectRatio="none" overflow="visible" viewBox="0 0 323.412 570.242" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.50038 6.51315C37.9361 -3.70734 85.6092 1.17944 127.09 25.7086C178.941 56.3701 151.063 166.586 227.246 160.703C256.022 158.48 260.85 101.011 218.571 123.113C233.349 154.958 252.075 88.061 213.488 94.4307C149.926 104.923 210.081 201.385 227.739 228.114C245.398 254.842 270.252 331.804 242.972 360.054C215.692 388.304 179.922 353.822 191.728 318.581C203.534 283.341 277.825 311.394 296.228 337.82C314.631 364.247 353.117 515.016 273.894 491.646C194.67 468.276 172.767 526.687 166.227 568.742" stroke="#629ACC" stroke-width="3" stroke-linecap="round" stroke-dasharray="6 8"/></svg>
      <svg class="hero-fv__line hero-fv__line--yellow" aria-hidden="true" preserveAspectRatio="none" overflow="visible" viewBox="0 0 772.501 561.5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.50016 1.50016C188.5 25.5002 -9.99982 238.5 140.5 319C291 399.5 327.331 305.99 558 351.5C743 388 771 545.5 771.001 560" stroke="#72B94E" stroke-width="3" stroke-linecap="round" stroke-dasharray="6 8"/></svg>
      <svg class="hero-fv__line hero-fv__line--green" aria-hidden="true" preserveAspectRatio="none" overflow="visible" viewBox="0 0 1169.09 643.864" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M68.595 1.50036C52.2616 9.16702 20.095 34.1004 22.095 72.5004C24.595 120.5 -33.4053 154.5 34.5947 226.5C88.9947 284.1 53.2614 298.167 57.5948 314.5C38.5948 351.667 54.2574 496.705 86.5948 518C189.095 585.5 242.806 628.839 306.095 593.5C404.595 538.5 484.095 683.5 605.595 630.5C727.095 577.5 728.595 559.5 856.095 559.5C983.595 559.5 952.658 590.03 1055.09 570C1144.59 552.5 1167.59 513.5 1167.59 416" stroke="#F8C743" stroke-width="3" stroke-linecap="round" stroke-dasharray="6 8"/></svg>

      <div class="hero-fv__photo hero-fv__photo--tl">
        <img src="<?php echo yuumi_img('hero/photo-aoike.png'); ?>" alt="青池">
      </div>
      <div class="hero-fv__photo hero-fv__photo--tr">
        <img src="<?php echo yuumi_img('hero/photo-landscape.png'); ?>" alt="風景">
      </div>
      <div class="hero-fv__photo hero-fv__photo--ml">
        <img src="<?php echo yuumi_img('hero/photo-rice.png'); ?>" alt="田んぼ">
      </div>
      <div class="hero-fv__photo hero-fv__photo--mr">
        <img src="<?php echo yuumi_img('hero/photo-aomori.png'); ?>" alt="青森市の街並み">
      </div>
      <div class="hero-fv__photo hero-fv__photo--bl">
        <img src="<?php echo yuumi_img('hero/photo-family.png'); ?>" alt="家族">
      </div>
      <div class="hero-fv__photo hero-fv__photo--br">
        <img src="<?php echo yuumi_img('hero/photo-hotoke.png'); ?>" alt="仏ヶ浦">
      </div>

      <div class="hero-fv__center">
        <div class="hero-fv__logo">
          <img src="<?php echo yuumi_img('hero/logo-hero.png'); ?>" alt="ゆうつむぎデザイン" class="hero-fv__logo-img">
          <span class="hero-fv__logo-text">ゆ う つ む ぎ <br class="sp-only">デ ザ イ ン</span>
        </div>
        <img src="<?php echo yuumi_img('hero/catchcopy-concept.png'); ?>" alt="地域に関わる人の想いを やさしくつむぎ、デザインする。" class="hero-fv__catchcopy-img">
        <div class="hero-fv__cta">
          <a href="<?php echo esc_url(home_url('/otameshi/')); ?>" class="btn btn--pink btn--lg btn--round">
            おためし地域おこし協力隊に<br class="sp-only">申し込む
            <span class="btn__chevron"></span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== NEWS & BLOG ===== -->
  <section class="section--news">
    <div class="container--wide">
      <div class="section-header">
        <div class="section-header__left">
          <span class="section-label">NEWS &amp; BLOG</span>
          <h2 class="section-heading">
            <span class="section-heading__dot"></span>
            新着Blog・お知らせ
          </h2>
        </div>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="section-link">
          お知らせ一覧へ
          <img src="<?php echo yuumi_img('arrow-circle-pink.svg'); ?>" alt="" aria-hidden="true" class="section-link__icon">
        </a>
      </div>

      <div class="news-card">
        <?php
        $pickup = new WP_Query([
            'posts_per_page' => 1,
            'meta_key'       => '_yuumi_pickup',
            'meta_value'     => '1',
        ]);
        if (!$pickup->have_posts()) {
            $pickup = new WP_Query(['posts_per_page' => 1]);
        }
        $has_pickup = $pickup->have_posts();
        if ($has_pickup) : $pickup->the_post();
        ?>
        <div class="news-card__inner">
          <div class="news-card__pickup">
            <div class="news-card__pickup-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('pickup-thumb'); ?>
              <?php else : ?>
                <img src="<?php echo yuumi_img('hero/photo-family.png'); ?>" alt="記事のサムネイル">
              <?php endif; ?>
            </div>
            <div class="news-card__pickup-body">
              <span class="news-card__badge">PICKUP！</span>
              <div class="news-card__pickup-meta">
                <?php $cats = get_the_category(); if ($cats) : ?>
                <span class="news-card__cat-tag"><?php echo esc_html($cats[0]->name); ?></span>
                <?php endif; ?>
                <span class="news-card__date"><?php echo get_the_date('Y.m.d'); ?></span>
              </div>
              <h3 class="news-card__pickup-title"><?php the_title(); ?></h3>
              <p class="news-card__pickup-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 80, '…'); ?></p>
              <a href="<?php the_permalink(); ?>" class="news-card__more">
                続きをみる
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="8" fill="#E77084"/><path d="M7 5L10 8L7 11" stroke="white" stroke-linecap="round"/></svg>
              </a>
            </div>
          </div>

          <div class="news-card__list">
            <?php wp_reset_postdata();
            $news = new WP_Query([
                'posts_per_page' => 3,
                'offset'         => 1,
            ]);
            while ($news->have_posts()) : $news->the_post();
              $cats = get_the_category();
              $cat_slug = $cats ? $cats[0]->slug : '';
              $cat_color = yuumi_cat_color($cat_slug);
            ?>
            <a href="<?php the_permalink(); ?>" class="news-card__list-item">
              <div class="news-card__list-left">
                <span class="news-card__list-date"><?php echo get_the_date('Y.m.d'); ?></span>
                <?php if ($cats) : ?>
                <span class="news-card__list-cat news-card__list-cat--<?php echo esc_attr($cat_color); ?>"><?php echo esc_html($cats[0]->name); ?></span>
                <?php endif; ?>
                <span class="news-card__list-title"><?php the_title(); ?></span>
              </div>
              <span class="news-card__list-arrow">&rsaquo;</span>
            </a>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
        </div>
        <?php wp_reset_postdata(); endif; ?>
      </div>
    </div>
  </section>

  <!-- ===== CONCEPT ===== -->
  <section class="section--concept fade-in">
    <div class="concept-bg"></div>
    <div class="concept-content">
      <h2 class="concept-title">ConCept</h2>
      <div class="concept-catchcopy">
        <img src="<?php echo yuumi_img('hero/catchcopy-concept.png'); ?>" alt="地域に関わる人の想いを やさしくつむぎ、デザインする。" loading="lazy">
      </div>
      <p class="concept-text">
        目に見えるものをデザインするだけでなく、<br>
        人と地域をやさしくつなぐこと。<br>
        地域に関わるみなさんとともに、<br>
        まちにある想いを大切に、あたたかなつながりを育てます。
      </p>
      <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn btn--outline-pink btn--round">
        ゆうつむぎデザインについて
        <img src="<?php echo yuumi_img('arrow-circle-pink.svg'); ?>" alt="" aria-hidden="true" class="btn__arrow">
      </a>
    </div>
  </section>

  <!-- ===== SERVICES ===== -->
  <section class="section--services fade-in">
    <div class="container--wide">
      <div class="section-header__left">
        <span class="section-label">SERVICE</span>
        <h2 class="section-heading">
          <span class="section-heading__dot"></span>
          サービス
        </h2>
      </div>

      <div class="svc-cards">
        <a href="<?php echo esc_url(home_url('/design-service/')); ?>" class="svc-card svc-card--pink">
          <div class="svc-card__img">
            <img src="<?php echo yuumi_img('svc-design.png'); ?>" alt="デザイン制作" loading="lazy">
          </div>
          <div class="svc-card__body">
            <h3 class="svc-card__title">デザイン制作</h3>
            <img src="<?php echo yuumi_img('separator-pink.svg'); ?>" alt="" aria-hidden="true" class="svc-card__sep">
            <p class="svc-card__desc">ロゴ・チラシ・Webなど<br>想いが伝わる形をつくる</p>
            <span class="svc-card__link">
              続きをみる
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="8" fill="#E77084"/><path d="M7 5L10 8L7 11" stroke="white" stroke-linecap="round"/></svg>
            </span>
          </div>
        </a>

        <a href="<?php echo esc_url(home_url('/chiiki-support/')); ?>" class="svc-card svc-card--green">
          <div class="svc-card__img">
            <img src="<?php echo yuumi_img('svc-program.png'); ?>" alt="地域おこし協力隊サポート" loading="lazy">
          </div>
          <div class="svc-card__body">
            <h3 class="svc-card__title">地域おこし協力隊サポート</h3>
            <img src="<?php echo yuumi_img('separator-green.svg'); ?>" alt="" aria-hidden="true" class="svc-card__sep">
            <p class="svc-card__desc">地域で活動した人と<br>迎えたい地域をつなぐ</p>
            <span class="svc-card__link">
              続きをみる
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="8" fill="#72B94E"/><path d="M7 5L10 8L7 11" stroke="white" stroke-linecap="round"/></svg>
            </span>
          </div>
        </a>

        <a href="<?php echo esc_url(home_url('/student-support/')); ?>" class="svc-card svc-card--blue">
          <div class="svc-card__img">
            <img src="<?php echo yuumi_img('svc-student.png'); ?>" alt="生徒・学生向けサポート" loading="lazy">
          </div>
          <div class="svc-card__body">
            <h3 class="svc-card__title">生徒・学生向けサポート</h3>
            <img src="<?php echo yuumi_img('separator-blue.svg'); ?>" alt="" aria-hidden="true" class="svc-card__sep">
            <p class="svc-card__desc">生徒・学生の地域活動<br class="br-sp">学校と地域をつなぐ</p>
            <span class="svc-card__link">
              続きをみる
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="8" fill="#629ACC"/><path d="M7 5L10 8L7 11" stroke="white" stroke-linecap="round"/></svg>
            </span>
          </div>
        </a>

        <a href="<?php echo esc_url(home_url('/event-support/')); ?>" class="svc-card svc-card--yellow">
          <div class="svc-card__img">
            <img src="<?php echo yuumi_img('svc-event.png'); ?>" alt="イベントサポート" loading="lazy">
          </div>
          <div class="svc-card__body">
            <h3 class="svc-card__title">イベントサポート</h3>
            <img src="<?php echo yuumi_img('separator-yellow.svg'); ?>" alt="" aria-hidden="true" class="svc-card__sep">
            <p class="svc-card__desc">想いが伝わる場を、<br>ともにつくりあげる</p>
            <span class="svc-card__link">
              続きをみる
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="8" fill="#F8C743"/><path d="M7 5L10 8L7 11" stroke="white" stroke-linecap="round"/></svg>
            </span>
          </div>
        </a>
      </div>

      <div class="text-center" style="margin-top:2.5rem;">
        <a href="<?php echo esc_url(home_url('/service/')); ?>" class="btn btn--outline-pink btn--round">
          サービス一覧はこちら
          <img src="<?php echo yuumi_img('arrow-circle-pink.svg'); ?>" alt="" aria-hidden="true" class="btn__arrow">
        </a>
      </div>
    </div>
  </section>

  <!-- ===== WORKS / 活動実績 ===== -->
  <section class="section--works fade-in">
    <div class="section--works__bg"></div>
    <div class="container--wide">
      <div class="section-header">
        <div class="section-header__left">
          <span class="section-label">WORKS</span>
          <h2 class="section-heading">
            <span class="section-heading__dot section-heading__dot--lg"></span>
            活動実績
          </h2>
        </div>
        <a href="<?php echo esc_url(home_url('/works/')); ?>" class="section-link">
          すべて見る
          <img src="<?php echo yuumi_img('arrow-circle-pink.svg'); ?>" alt="" aria-hidden="true" class="section-link__icon">
        </a>
      </div>

      <div class="works-grid-new">
        <?php
        $works = new WP_Query([
            'post_type'      => 'works',
            'posts_per_page' => 3,
        ]);
        if ($works->have_posts()) :
          while ($works->have_posts()) : $works->the_post();
        ?>
        <a href="<?php the_permalink(); ?>" class="works-card-new">
          <div class="works-card-new__img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('card-thumb'); ?>
            <?php else : ?>
              <div class="works-card-new__placeholder"></div>
            <?php endif; ?>
          </div>
          <div class="works-card-new__body">
            <div class="works-card-new__meta">
              <?php
              $cats = get_the_category();
              if ($cats) :
                $cat_color = yuumi_cat_color($cats[0]->slug);
              ?>
                <span class="works-card-new__cat works-card-new__cat--<?php echo esc_attr($cat_color); ?>"><?php echo esc_html($cats[0]->name); ?></span>
              <?php endif; ?>
              <span class="works-card-new__date"><?php echo get_the_date('Y.m.d'); ?></span>
            </div>
            <h3 class="works-card-new__title"><?php the_title(); ?></h3>
          </div>
        </a>
        <?php endwhile; wp_reset_postdata();
        else : ?>
          <p class="text-muted">活動実績はまだありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===== INSTAGRAM ===== -->
  <section class="section--instagram fade-in">
    <div class="section--instagram__bg"></div>
    <div class="container--wide">
      <div class="section-header">
        <div class="section-header__left">
          <span class="section-label">INSTAGRAM</span>
          <h2 class="section-heading">
            <span class="section-heading__dot section-heading__dot--lg"></span>
            日々の活動を発信
          </h2>
        </div>
        <a href="https://www.instagram.com/youme0141/" target="_blank" rel="noopener" class="btn btn--outline-pink btn--round btn--follow">
          <img src="<?php echo yuumi_img('icon-instagram.svg'); ?>" alt="" aria-hidden="true" width="20" height="20">
          Follow me
        </a>
      </div>

      <div class="insta-grid-new">
        <p class="text-muted" style="text-align:center;padding:2rem 0;grid-column:1/-1;">
          Instagramの投稿がここに表示されます。<br>
          <small>（Instagram連携プラグインで自動表示）</small>
        </p>
      </div>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section class="section--faq fade-in">
    <div class="container--narrow-lg">
      <div class="section-header">
        <div class="section-header__left">
          <span class="section-label">FAQ</span>
          <h2 class="section-heading">
            <span class="section-heading__dot section-heading__dot--lg"></span>
            よくある質問
          </h2>
        </div>
        <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="section-link">
          すべての質問を見る
          <img src="<?php echo yuumi_img('arrow-circle-pink.svg'); ?>" alt="" aria-hidden="true" class="section-link__icon">
        </a>
      </div>

      <div class="faq-list-new">
        <?php
        $faqs = new WP_Query([
            'post_type'      => 'faq',
            'posts_per_page' => 3,
        ]);
        if ($faqs->have_posts()) :
          while ($faqs->have_posts()) : $faqs->the_post();
        ?>
        <div class="faq-item-new">
          <div class="faq-item-new__question" role="button" tabindex="0" aria-expanded="false">
            <div class="faq-item-new__q-left">
              <span class="faq-item-new__q-label">Q</span>
              <span class="faq-item-new__q-text"><?php the_title(); ?></span>
            </div>
            <span class="faq-item-new__toggle">＋</span>
          </div>
          <div class="faq-item-new__answer">
            <div class="faq-item-new__a-inner">
              <span class="faq-item-new__a-label">A</span>
              <div class="faq-item-new__a-text"><?php the_content(); ?></div>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata();
        else : ?>
          <div class="faq-item-new is-open">
            <div class="faq-item-new__question faq-item-new__question--open" role="button" tabindex="0" aria-expanded="true">
              <div class="faq-item-new__q-left">
                <span class="faq-item-new__q-label">Q</span>
                <span class="faq-item-new__q-text">おためし地域おこし協力隊は何日から参加できますか？</span>
              </div>
              <span class="faq-item-new__toggle">−</span>
            </div>
            <div class="faq-item-new__answer" style="max-height:200px;">
              <div class="faq-item-new__a-inner">
                <span class="faq-item-new__a-label">A</span>
                <div class="faq-item-new__a-text">回答テキストが入ります。サービスごとの詳しいQ&amp;Aは、よくある質問ページにまとめています。</div>
              </div>
            </div>
          </div>
          <div class="faq-item-new">
            <div class="faq-item-new__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item-new__q-left">
                <span class="faq-item-new__q-label">Q</span>
                <span class="faq-item-new__q-text">費用はかかりますか？</span>
              </div>
              <span class="faq-item-new__toggle">＋</span>
            </div>
            <div class="faq-item-new__answer">
              <div class="faq-item-new__a-inner">
                <span class="faq-item-new__a-label">A</span>
                <div class="faq-item-new__a-text">はい、内容により異なりますので、まずはお問い合わせフォームよりお気軽にご相談ください。</div>
              </div>
            </div>
          </div>
          <div class="faq-item-new">
            <div class="faq-item-new__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item-new__q-left">
                <span class="faq-item-new__q-label">Q</span>
                <span class="faq-item-new__q-text">デザインだけの依頼もできますか？</span>
              </div>
              <span class="faq-item-new__toggle">＋</span>
            </div>
            <div class="faq-item-new__answer">
              <div class="faq-item-new__a-inner">
                <span class="faq-item-new__a-label">A</span>
                <div class="faq-item-new__a-text">はい、デザイン制作のみのご依頼も承っております。まずはお気軽にご相談ください。</div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===== CONTACT CTA ===== -->
  <section class="section--contact-cta fade-in">
    <div class="container">
      <h2 class="contact-cta-new__title">Contact</h2>
      <p class="contact-cta-new__lead">お気軽にお問い合わせください</p>
      <p class="contact-cta-new__text">
        ご依頼・ご相談など、<br>
        内容に合わせてお気軽にご連絡ください。
      </p>
      <div class="contact-cta-new__buttons">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--pink btn--round">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          お問い合わせフォーム
        </a>
        <a href="https://www.instagram.com/youme0141/" target="_blank" rel="noopener" class="btn btn--outline-pink btn--round">
          <img src="<?php echo yuumi_img('icon-instagram.svg'); ?>" alt="" aria-hidden="true" width="16" height="16">
          Instagram
        </a>
      </div>
    </div>
  </section>

  <!-- ===== スクロール連動 SVG 線描画 ===== -->
  <div class="scroll-line-wrap">
    <svg id="scrollLine" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1470 5379">
      <defs>
        <mask id="sl-mask" maskUnits="userSpaceOnUse">
          <rect id="sl-mask-rect" fill="black" x="0" y="0" width="1470" height="5579"></rect>
          <path id="sl-mask-path" stroke="white" stroke-width="14" fill="none" stroke-linecap="round" d="M1021.9,1003.6 C1021.9,1205.9 8.0,1307.1 8.0,1509.4" stroke-dasharray="12173.8212890625" stroke-dashoffset="12173.8212890625"></path>
        </mask>
      </defs>
      <path id="sl-visible-path" stroke="#72B94E" stroke-width="3" stroke-dasharray="6 8" stroke-linecap="round" fill="none" mask="url(#sl-mask)" d="M1021.9,1003.6 C1021.9,1205.9 8.0,1307.1 8.0,1509.4"></path>
    </svg>
  </div>

</main>

<?php get_footer(); ?>
