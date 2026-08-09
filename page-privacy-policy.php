<?php
/**
 * Template Name: プライバシーポリシー
 */
get_header(); ?>

<main>

  <!-- Page Hero -->
  <section class="page-header">
    <div class="container text-center">
      <span class="page-header__label">PRIVACY POLICY</span>
      <h1 class="page-header__title">個人情報の取り扱い</h1>
    </div>
  </section>
  <?php yuumi_breadcrumbs(); ?>

  <section class="section">
    <div class="container container--narrow">
      <div class="single-post__content">
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
