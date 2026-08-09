<?php get_header(); ?>

<main>

  <section class="page-header">
    <div class="container text-center">
      <span class="page-header__label">ARCHIVE</span>
      <h1 class="page-header__title"><?php the_archive_title(); ?></h1>
      <?php if (the_archive_description()) : ?>
        <p class="page-header__desc"><?php the_archive_description(); ?></p>
      <?php endif; ?>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <section class="section">
    <div class="container">
      <div class="blog-layout">
        <div class="blog-main">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="blog-post-item">
            <div class="blog-post-item__img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('card-thumb'); ?>
              <?php else : ?>
                <div style="width:100%;height:100%;background:var(--color-pink-pale);"></div>
              <?php endif; ?>
            </div>
            <div class="blog-post-item__body">
              <div class="blog-post-item__meta">
                <?php $cats = get_the_category(); if ($cats) :
                  $cat_color = yuumi_cat_color($cats[0]->slug);
                ?>
                  <span class="blog-post-item__cat blog-post-item__cat--<?php echo esc_attr($cat_color); ?>"><?php echo esc_html($cats[0]->name); ?></span>
                <?php endif; ?>
                <span class="blog-post-item__date"><?php echo get_the_date('Y.m.d'); ?></span>
              </div>
              <h2 class="blog-post-item__title"><?php the_title(); ?></h2>
              <p class="blog-post-item__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 80, '…'); ?></p>
            </div>
          </a>
          <?php endwhile; endif; ?>

          <?php yuumi_pagination(); ?>
        </div>

        <aside class="blog-sidebar">
          <?php if (is_active_sidebar('blog-sidebar')) : ?>
            <?php dynamic_sidebar('blog-sidebar'); ?>
          <?php endif; ?>
        </aside>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
