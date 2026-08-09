<?php get_header(); ?>

<main>
  <section class="page-header">
    <div class="container text-center">
      <h1 class="page-header__title">
        <?php
        if (is_search()) {
            echo '「' . esc_html(get_search_query()) . '」の検索結果';
        } elseif (is_home()) {
            echo 'Blog・お知らせ';
        } else {
            the_title();
        }
        ?>
      </h1>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post();
        $cats = get_the_category();
        $cat_color = $cats ? yuumi_cat_color($cats[0]->slug) : 'gray';
      ?>
      <a href="<?php the_permalink(); ?>" class="blog-post-item">
        <div class="blog-post-item__img">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('card-thumb'); ?>
          <?php else : ?>
            <div class="blog-post-item__noimg"></div>
          <?php endif; ?>
        </div>
        <div class="blog-post-item__body">
          <div class="blog-post-item__meta">
            <?php if ($cats) : ?>
              <span class="blog-post-item__cat blog-post-item__cat--<?php echo esc_attr($cat_color); ?>">
                <?php echo esc_html($cats[0]->name); ?>
              </span>
            <?php endif; ?>
            <span class="blog-post-item__date"><?php echo get_the_date('Y.m.d'); ?></span>
          </div>
          <h2 class="blog-post-item__title"><?php the_title(); ?></h2>
          <p class="blog-post-item__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 80, '…'); ?></p>
        </div>
      </a>
      <?php endwhile; else : ?>
        <div class="text-center" style="padding:var(--space-xl) 0;">
          <p>記事が見つかりませんでした。</p>
        </div>
      <?php endif; ?>

      <?php yuumi_pagination(); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
