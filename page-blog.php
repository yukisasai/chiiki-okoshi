<?php
/**
 * Template Name: Blog・お知らせ
 */
get_header(); ?>

<main>

  <!-- Page Header -->
  <section class="page-header">
    <div class="container text-center">
      <span class="page-header__label">NEWS &amp; BLOG</span>
      <h1 class="page-header__title">Blog・お知らせ</h1>
      <p class="page-header__desc page-header__desc--pink">
        イベント・地域おこし協力隊関係・お知らせなど。<br>
        キーワードやタグから探せます。
      </p>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <section class="section">
    <div class="container">
      <div class="blog-layout">
        <div class="blog-main">

          <!-- Search -->
          <form class="blog-search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="blog-search__inner">
              <svg class="blog-search__icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="7.5" cy="7.5" r="6.5" stroke="#a5a5a5" stroke-width="1.5"/><path d="M12.5 12.5L16.5 16.5" stroke="#a5a5a5" stroke-width="1.5" stroke-linecap="round"/></svg>
              <input type="search" name="s" class="blog-search__input"
                     placeholder="キーワードで検索（例：マルシェ、移住、地域おこし協力隊）"
                     value="<?php echo get_search_query(); ?>">
              <button type="submit" class="blog-search__btn">検索</button>
            </div>
            <p class="blog-search__hint">（例：マルシェ、移住、地域おこし協力隊）</p>
          </form>

          <!-- Category Filters + Sort -->
          <div class="blog-filter-row">
            <div class="blog-filters">
              <a href="<?php echo esc_url(get_permalink()); ?>" class="blog-filter is-active">すべて</a>
              <?php
              $categories = get_categories(['hide_empty' => false, 'exclude' => [get_cat_ID('uncategorized')]]);
              foreach ($categories as $cat) :
                $color = yuumi_cat_color($cat->slug);
              ?>
                <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"
                   class="blog-filter blog-filter--<?php echo esc_attr($color); ?>">
                  <?php echo esc_html($cat->name); ?>
                </a>
              <?php endforeach; ?>
            </div>
            <div class="blog-sort">
              <span class="blog-sort__label">並び替え：</span>
              <span class="blog-sort__value">新着順</span>
            </div>
          </div>

          <!-- Tag Cloud -->
          <div class="blog-tags">
            <?php
            $tags = get_tags(['number' => 12, 'hide_empty' => false]);
            foreach ($tags as $tag) :
            ?>
              <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="blog-tag">
                #<?php echo esc_html($tag->name); ?>
              </a>
            <?php endforeach; ?>
          </div>

          <!-- Blog Posts -->
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $blog_query = new WP_Query([
              'posts_per_page' => 5,
              'paged'          => $paged,
          ]);
          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post();
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
          <?php endwhile; ?>

          <?php
          $total = $blog_query->max_num_pages;
          if ($total > 1) :
          ?>
          <nav class="pagination">
            <?php
            echo paginate_links([
                'total'   => $total,
                'current' => $paged,
                'prev_text' => '&#8249;',
                'next_text' => '&#8250;',
            ]);
            ?>
          </nav>
          <?php endif; wp_reset_postdata(); ?>

          <?php else : ?>
            <div class="text-center" style="padding:var(--space-xl) 0;">
              <p>記事が見つかりませんでした。</p>
            </div>
          <?php endif; ?>

        </div>

        <!-- Sidebar -->
        <aside class="blog-sidebar">
          <div class="sidebar__section">
            <h3 class="sidebar__title">人気のタグ</h3>
            <div class="sidebar__tags">
              <?php
              $pop_tags = get_tags(['number' => 8, 'orderby' => 'count', 'order' => 'DESC']);
              foreach ($pop_tags as $tag) :
              ?>
                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="sidebar__tag">
                  #<?php echo esc_html($tag->name); ?>
                </a>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="sidebar__section">
            <h3 class="sidebar__title">おすすめの記事</h3>
            <?php
            $recommend_posts = new WP_Query([
                'posts_per_page' => 5,
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'orderby'        => 'comment_count',
                'order'          => 'DESC',
            ]);
            if ($recommend_posts->have_posts()) :
              while ($recommend_posts->have_posts()) : $recommend_posts->the_post();
            ?>
              <a href="<?php the_permalink(); ?>" class="sidebar__recommend-item">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="sidebar__recommend-thumb">
                    <?php the_post_thumbnail('thumbnail'); ?>
                  </div>
                <?php endif; ?>
                <div class="sidebar__recommend-info">
                  <span class="sidebar__recommend-title"><?php the_title(); ?></span>
                  <span class="sidebar__recommend-date"><?php echo get_the_date('Y.m.d'); ?></span>
                </div>
              </a>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>

          <div class="sidebar__section">
            <h3 class="sidebar__title">アーカイブ</h3>
            <?php
            global $wpdb;
            $months = $wpdb->get_results(
              "SELECT YEAR(post_date) AS year, MONTH(post_date) AS month, COUNT(*) AS post_count
               FROM $wpdb->posts
               WHERE post_type = 'post' AND post_status = 'publish'
               GROUP BY YEAR(post_date), MONTH(post_date)
               ORDER BY post_date DESC
               LIMIT 6"
            );
            if ($months) :
              foreach ($months as $m) :
            ?>
              <a href="<?php echo esc_url(get_month_link($m->year, $m->month)); ?>" class="sidebar__archive-item">
                <span class="sidebar__archive-label"><?php echo esc_html($m->year . '年' . $m->month . '月'); ?></span>
                <span class="sidebar__archive-count"><?php echo esc_html($m->post_count); ?></span>
              </a>
            <?php
              endforeach;
            endif;
            ?>
          </div>

          <?php if (is_active_sidebar('blog-sidebar')) : ?>
            <?php dynamic_sidebar('blog-sidebar'); ?>
          <?php endif; ?>
        </aside>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
