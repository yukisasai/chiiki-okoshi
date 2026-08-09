<?php get_header(); ?>

<main>
  <section class="page-header">
    <div class="container text-center">
      <h1 class="page-header__title"><?php the_title(); ?></h1>
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
