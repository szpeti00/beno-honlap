<?php get_header(); ?>

<main class="container">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>">
        <header class="post-header">
            <h1><?php the_title(); ?></h1>
        </header>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
        </article>
    <?php endwhile; ?>
    <?php else : ?>
    <p>No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
