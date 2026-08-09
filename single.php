<?php get_header(); ?>

<main>
<?php yuumi_breadcrumbs(); ?>
<?php while (have_posts()) : the_post();
  $post_intro = get_post_meta(get_the_ID(), 'post_intro', true);
  $post_quote = get_post_meta(get_the_ID(), 'post_quote', true);
  $post_custom_tags = get_post_meta(get_the_ID(), 'post_custom_tags', true);
  $post_sections_json = get_post_meta(get_the_ID(), 'post_sections', true);
  $sections = $post_sections_json ? json_decode($post_sections_json, true) : [];
  if (!is_array($sections)) $sections = [];
?>

  <article class="single-post">

    <!-- Meta: Category badge + Date -->
    <div class="single-post__meta">
      <?php $cats = get_the_category(); if ($cats) :
        $cat_color = yuumi_cat_color($cats[0]->slug);
      ?>
        <span class="blog-post-item__cat blog-post-item__cat--<?php echo esc_attr($cat_color); ?>"><?php echo esc_html($cats[0]->name); ?></span>
      <?php endif; ?>
      <span class="blog-post-item__date"><?php echo get_the_date('Y.m.d'); ?></span>
    </div>

    <!-- Title -->
    <h1 class="single-post__title"><?php the_title(); ?></h1>

    <!-- Tags (custom field) -->
    <?php if ($post_custom_tags) :
      $tag_list = array_map('trim', explode(',', $post_custom_tags));
      $tag_list = array_filter($tag_list);
    ?>
    <div class="single-post__tags">
      <?php foreach ($tag_list as $tag) : ?>
        <span class="single-post__tag">#<?php echo esc_html($tag); ?></span>
      <?php endforeach; ?>
    </div>
    <?php else :
      // Fallback to WordPress tags
      $wp_tags = get_the_tags();
      if ($wp_tags) : ?>
    <div class="single-post__tags">
      <?php foreach ($wp_tags as $tag) : ?>
        <span class="single-post__tag">#<?php echo esc_html($tag->name); ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif; endif; ?>

    <!-- Hero Image -->
    <?php if (has_post_thumbnail()) : ?>
    <div class="single-post__thumbnail">
      <?php the_post_thumbnail('hero-img'); ?>
    </div>
    <?php endif; ?>

    <!-- Content Body -->
    <div class="single-post__body">

      <!-- Intro (Custom Field) -->
      <?php if ($post_intro) : ?>
      <p class="single-post__intro"><?php echo nl2br(esc_html($post_intro)); ?></p>
      <?php endif; ?>

      <!-- Content Sections (Custom Fields) -->
      <?php if (!empty($sections)) : ?>
      <div class="single-post__sections">
        <?php foreach ($sections as $sec) : ?>
          <?php if (!empty($sec['title'])) : ?>
            <h2><?php echo esc_html($sec['title']); ?></h2>
          <?php endif; ?>
          <?php if (!empty($sec['desc'])) : ?>
            <p><?php echo nl2br(esc_html($sec['desc'])); ?></p>
          <?php endif; ?>
          <?php if (!empty($sec['image'])) : ?>
            <div class="single-post__section-img">
              <?php echo wp_get_attachment_image($sec['image'], 'large'); ?>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <!-- Editor Content -->
      <div class="single-post__content">
        <?php the_content(); ?>
      </div>

      <!-- Quote (Custom Field) -->
      <?php if ($post_quote) : ?>
      <blockquote class="single-post__quote">
        <?php echo nl2br(esc_html($post_quote)); ?>
      </blockquote>
      <?php endif; ?>

    </div>

    <!-- Share Buttons -->
    <div class="share-section">
      <p class="share-section__title">この記事をシェア</p>
      <div class="share-buttons">
        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
           target="_blank" rel="noopener" class="share-btn share-btn--x" aria-label="Xでシェア">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          X
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
           target="_blank" rel="noopener" class="share-btn share-btn--fb" aria-label="Facebookでシェア">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          Facebook
        </a>
        <a href="https://www.instagram.com/youme0141/" target="_blank" rel="noopener" class="share-btn share-btn--ig" aria-label="Instagramを開く">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
          Instagram
        </a>
        <button class="share-btn share-btn--copy" onclick="var t=document.createElement('textarea');t.value=window.location.href;document.body.appendChild(t);t.select();document.execCommand('copy');document.body.removeChild(t);this.querySelector('.share-btn__text').textContent='コピーしました!';" aria-label="リンクをコピー">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
          <span class="share-btn__text">リンクをコピー</span>
        </button>
      </div>
    </div>

    <!-- Prev / Next Navigation -->
    <nav class="single-post__nav">
      <?php
      $prev_post = get_previous_post();
      $next_post = get_next_post();
      ?>
      <?php if ($prev_post) : ?>
        <a class="single-post__nav-prev" href="<?php echo get_permalink($prev_post); ?>">&lsaquo; 前の記事</a>
      <?php else : ?>
        <span class="single-post__nav-prev single-post__nav--disabled">&lsaquo; 前の記事</span>
      <?php endif; ?>

      <a class="single-post__nav-back" href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>">Blog・お知らせ一覧へ戻る</a>

      <?php if ($next_post) : ?>
        <a class="single-post__nav-next" href="<?php echo get_permalink($next_post); ?>">次の記事 &rsaquo;</a>
      <?php else : ?>
        <span class="single-post__nav-next single-post__nav--disabled">次の記事 &rsaquo;</span>
      <?php endif; ?>
    </nav>

    <!-- Related Posts -->
    <div class="related-posts">
      <h2 class="related-posts__title">
        <span class="related-posts__label">RELATED</span>
        関連する記事
      </h2>
      <div class="related-grid">
        <?php
        $current_id = get_the_ID();
        $current_cats = wp_list_pluck(get_the_category() ?: [], 'term_id');
        $related_args = [
            'posts_per_page' => 3,
            'post__not_in'   => [$current_id],
            'orderby'        => 'date',
            'order'          => 'DESC',
        ];
        if ($current_cats) {
            $related_args['category__in'] = $current_cats;
        }
        $related = new WP_Query($related_args);
        if ($related->post_count < 3) {
            $exclude = [$current_id];
            foreach ($related->posts as $rp) {
                $exclude[] = $rp->ID;
            }
            $fallback = new WP_Query([
                'posts_per_page' => 3 - $related->post_count,
                'post__not_in'   => $exclude,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);
            $all_related = array_merge($related->posts, $fallback->posts);
        } else {
            $all_related = $related->posts;
        }

        foreach ($all_related as $rpost) : setup_postdata($rpost);
          $rcats = get_the_category($rpost->ID);
          $rcat_color = $rcats ? yuumi_cat_color($rcats[0]->slug) : 'gray';
        ?>
        <a href="<?php echo get_permalink($rpost); ?>" class="works-card">
          <div class="works-card__img">
            <?php if (has_post_thumbnail($rpost)) : ?>
              <?php echo get_the_post_thumbnail($rpost, 'card-thumb'); ?>
            <?php else : ?>
              <div style="width:100%;height:100%;background:var(--color-pink-pale);"></div>
            <?php endif; ?>
          </div>
          <div class="works-card__meta">
            <?php if ($rcats) : ?>
              <span class="works-card__cat works-card__cat--<?php echo esc_attr($rcat_color); ?>"><?php echo esc_html($rcats[0]->name); ?></span>
            <?php endif; ?>
            <span class="works-card__date"><?php echo get_the_date('Y.m.d', $rpost); ?></span>
          </div>
          <h3 class="works-card__title"><?php echo get_the_title($rpost); ?></h3>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>

  </article>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>
