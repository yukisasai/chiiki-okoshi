<?php
/**
 * Template Name: よくある質問
 */
get_header(); ?>

<main>

  <!-- Page Header -->
  <section class="faq-hero">
    <div class="container text-center">
      <span class="faq-hero__label">FAQ</span>
      <h1 class="faq-hero__title">よくある質問</h1>
      <p class="faq-hero__desc">
        サービスごとによくあるご質問をまとめました。<br>
        気になる項目をタップしてご確認ください。
      </p>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <section class="faq-body">
    <div class="faq-body__inner">

      <!-- Category Tabs -->
      <div class="faq-tabs" data-filter-group>
        <button class="faq-tab is-active" data-filter="all">すべて</button>
        <button class="faq-tab faq-tab--pink" data-filter="design">デザイン制作</button>
        <button class="faq-tab faq-tab--green" data-filter="program">地域おこし協力隊関係</button>
        <button class="faq-tab faq-tab--blue" data-filter="student">高校生・学生関係</button>
        <button class="faq-tab faq-tab--yellow" data-filter="event">イベントサポート</button>
      </div>

      <?php
      $faq_categories = [
          ['slug' => 'program',  'label' => '地域おこし協力隊', 'color' => 'green', 'filter' => 'program'],
          ['slug' => 'otameshi', 'label' => 'おためし地域おこし協力隊', 'color' => 'cyan', 'filter' => 'program'],
          ['slug' => 'student',  'label' => '高校生・学生関係', 'color' => 'blue', 'filter' => 'student'],
          ['slug' => 'design',   'label' => 'デザイン制作', 'color' => 'pink', 'filter' => 'design'],
          ['slug' => 'event',    'label' => 'イベントサポート', 'color' => 'yellow', 'filter' => 'event'],
      ];

      // Try to load from FAQ custom post type first
      $has_faq_posts = false;
      $faq_check = new WP_Query(['post_type' => 'faq', 'posts_per_page' => 1]);
      if ($faq_check->have_posts()) {
          $has_faq_posts = true;
      }
      wp_reset_postdata();

      if ($has_faq_posts) :
          foreach ($faq_categories as $faq_cat) :
              $faq_query = new WP_Query([
                  'post_type' => 'faq',
                  'posts_per_page' => -1,
                  'tax_query' => [[
                      'taxonomy' => 'faq_category',
                      'field'    => 'slug',
                      'terms'    => $faq_cat['slug'],
                  ]],
              ]);
              if ($faq_query->have_posts()) :
      ?>
      <div class="faq-group faq-group--<?php echo esc_attr($faq_cat['color']); ?>" data-category="<?php echo esc_attr($faq_cat['filter']); ?>">
        <div class="faq-group__header">
          <span class="faq-group__label faq-group__label--<?php echo esc_attr($faq_cat['color']); ?>">
            <?php echo esc_html($faq_cat['label']); ?>
          </span>
          <span class="faq-group__suffix">に関するご質問</span>
        </div>
        <div class="faq-group__items">
          <?php while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left">
                <span class="faq-item__q-label">Q</span>
                <span class="faq-item__q-text"><?php the_title(); ?></span>
              </div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer">
              <div class="faq-item__answer-inner">
                <span class="faq-item__a-label">A</span>
                <div class="faq-item__a-text"><?php the_content(); ?></div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php endif; wp_reset_postdata(); endforeach;

      else : ?>
      <!-- Static FAQ content (placeholder until FAQ posts are created) -->

      <div class="faq-group faq-group--green" data-category="program">
        <div class="faq-group__header">
          <span class="faq-group__label faq-group__label--green">地域おこし協力隊</span>
          <span class="faq-group__suffix">に関するご質問</span>
        </div>
        <div class="faq-group__items">
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">応募に条件はありますか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">三大都市圏等からの移住が対象となります。詳しくはお問い合わせください。</div></div></div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">活動期間はどのくらいですか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">最長3年間です。活動内容や状況に応じて期間は調整されます。</div></div></div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">住まいや車のサポートはありますか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">住居の紹介や活動用車両の貸与など、サポート制度があります。詳しくはお問い合わせください。</div></div></div>
          </div>
        </div>
      </div>

      <div class="faq-group faq-group--cyan" data-category="program">
        <div class="faq-group__header">
          <span class="faq-group__label faq-group__label--cyan">おためし地域おこし協力隊</span>
          <span class="faq-group__suffix">に関するご質問</span>
        </div>
        <div class="faq-group__items">
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">費用はかかりますか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">はい、内容により異なりますので、まずはお問い合わせフォームよりお気軽にご相談ください。担当より折り返しご連絡いたします。</div></div></div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">何日から参加できますか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">2泊3日の日程で体験いただけます。日程はご相談のうえ調整いたします。</div></div></div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">一人でも参加できますか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">はい、おひとりからご参加いただけます。お気軽にお申し込みください。</div></div></div>
          </div>
        </div>
      </div>

      <div class="faq-group faq-group--blue" data-category="student">
        <div class="faq-group__header">
          <span class="faq-group__label faq-group__label--blue">高校生・学生関係</span>
          <span class="faq-group__suffix">に関するご質問</span>
        </div>
        <div class="faq-group__items">
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">何日から参加できますか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">プログラムの内容や学校のスケジュールに合わせて柔軟に対応いたします。</div></div></div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">費用はかかりますか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">内容によって異なります。まずはお気軽にご相談ください。</div></div></div>
          </div>
        </div>
      </div>

      <div class="faq-group faq-group--pink" data-category="design">
        <div class="faq-group__header">
          <span class="faq-group__label faq-group__label--pink">デザイン制作</span>
          <span class="faq-group__suffix">に関するご質問</span>
        </div>
        <div class="faq-group__items">
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">依頼の流れを教えてください</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">お問い合わせ → ヒアリング → ご提案・制作 → 確認・修正 → 納品の流れとなります。</div></div></div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">料金の目安はありますか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">制作内容により異なります。お見積りは無料ですので、お気軽にご相談ください。</div></div></div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">遠方でも対応可能ですか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">はい、オンラインでのお打ち合わせに対応しておりますので、全国どこからでもご依頼いただけます。</div></div></div>
          </div>
        </div>
      </div>

      <div class="faq-group faq-group--yellow" data-category="event">
        <div class="faq-group__header">
          <span class="faq-group__label faq-group__label--yellow">イベントサポート</span>
          <span class="faq-group__suffix">に関するご質問</span>
        </div>
        <div class="faq-group__items">
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">どんなイベントに対応できますか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">マルシェ、交流会、ワークショップ、学校イベント、地域のお祭りなど幅広く対応しています。</div></div></div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">当日だけの依頼も可能ですか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">はい、当日の運営サポートのみのご依頼も承っております。</div></div></div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" role="button" tabindex="0" aria-expanded="false">
              <div class="faq-item__q-left"><span class="faq-item__q-label">Q</span><span class="faq-item__q-text">相談だけでも大丈夫ですか？</span></div>
              <span class="faq-item__toggle">＋</span>
            </div>
            <div class="faq-item__answer"><div class="faq-item__answer-inner"><span class="faq-item__a-label">A</span><div class="faq-item__a-text">もちろんです。まずはお気軽にご相談ください。</div></div></div>
          </div>
        </div>
      </div>

      <?php endif; ?>

      <!-- Contact CTA -->
      <div class="faq-cta">
        <h2 class="faq-cta__title">解決しない場合は、お気軽にお問い合わせください</h2>
        <p class="faq-cta__text">メール・お問い合わせフォーム・Instagram からご連絡いただけます。</p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="faq-cta__btn">
          お問い合わせフォームはこちら
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none"><circle cx="8.5" cy="8.5" r="8.5" fill="#fff"/><path d="M7 5.5L10 8.5L7 11.5" stroke="#E77084" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
