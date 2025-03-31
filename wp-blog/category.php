<?php get_header(); ?>

<div class="container content-wrapper my-4">
  <div class="row">
    <div class="col-lg-8 main-content">
      <?php if ( have_posts() ) : ?>
        <header class="archive-header mb-4">
          <h1><?php single_cat_title(); ?></h1>
        </header>
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class('mb-4'); ?>>
            <h2><a class="wp-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="post-date text-muted"><?php echo get_the_date(); ?></p>
            <div class="post-excerpt">
              <?php the_excerpt(); ?>
            </div>
          </article>
        <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
      <?php else : ?>
        <p>Nincs bejegyzés ebben a kategóriában.</p>
      <?php endif; ?>
    </div>

    <!-- Sidebar Area -->
    <div class="col-lg-4 sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>