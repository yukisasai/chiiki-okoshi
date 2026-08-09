<?php
/**
 * Template Name: 活動実績
 */
get_header(); ?>

<main>

  <!-- Page Hero -->
  <section class="page-header">
    <div class="container text-center">
      <span class="page-header__label">WORKS</span>
      <h1 class="page-header__title">活動実績</h1>
      <p class="page-header__desc page-header__desc--pink">地域での活動の様子を、Blog形式でご紹介します。</p>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <section class="works-archive">
    <div class="container">

      <!-- Category Filter -->
      <div class="works-filter" data-filter-group>
        <button class="works-filter__tag is-active" data-filter="all">すべて</button>
        <?php
        $works_cats = get_terms(['taxonomy' => 'works_category', 'hide_empty' => false]);
        if ($works_cats && !is_wp_error($works_cats)) :
          foreach ($works_cats as $wcat) :
            $cat_color = yuumi_cat_color($wcat->slug);
        ?>
          <button class="works-filter__tag works-filter__tag--<?php echo esc_attr($cat_color); ?>" data-filter="<?php echo esc_attr($wcat->slug); ?>">
            <?php echo esc_html($wcat->name); ?>
          </button>
        <?php endforeach; endif; ?>
      </div>

      <!-- Works Grid -->
      <div class="works-grid-new">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $works = new WP_Query([
            'post_type'      => 'works',
            'posts_per_page' => 16,
            'paged'          => $paged,
        ]);
        if ($works->have_posts()) :
          while ($works->have_posts()) : $works->the_post();
            $cats = get_the_category();
            $cat_slug = $cats ? $cats[0]->slug : '';
            $cat_color = yuumi_cat_color($cat_slug);
            $cat_name = $cats ? $cats[0]->name : '';
        ?>
        <a href="<?php the_permalink(); ?>" class="works-card-new" data-category="<?php echo esc_attr($cat_slug); ?>">
          <div class="works-card-new__img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('card-thumb'); ?>
            <?php else : ?>
              <div class="works-card-new__placeholder"></div>
            <?php endif; ?>
          </div>
          <div class="works-card-new__body">
            <div class="works-card-new__meta">
              <?php if ($cat_name) : ?>
                <span class="works-card-new__cat works-card-new__cat--<?php echo esc_attr($cat_color); ?>"><?php echo esc_html($cat_name); ?></span>
              <?php endif; ?>
              <span class="works-card-new__date"><?php echo get_the_date('Y.m.d'); ?></span>
            </div>
            <h3 class="works-card-new__title"><?php the_title(); ?></h3>
          </div>
        </a>
        <?php endwhile;
        else : ?>
          <p class="text-muted" style="grid-column: 1 / -1; text-align: center; padding: 2rem 0;">活動実績はまだありません。</p>
        <?php endif; ?>
      </div>

      <?php
      $total = $works->max_num_pages;
      if ($total > 1) :
      ?>
      <nav class="works-pagination">
        <?php
        echo paginate_links([
            'total'   => $total,
            'current' => $paged,
            'prev_text' => '&lsaquo;',
            'next_text' => '&rsaquo;',
            'type'      => 'plain',
        ]);
        ?>
      </nav>
      <?php endif; wp_reset_postdata(); ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>
