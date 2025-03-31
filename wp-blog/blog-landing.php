<?php
/*
Template Name: Blog Landing Page
*/
get_header();
?>

<div class="blog-landing-page container">
  <h1>Blogok</h1>
  <ul class="row">
    <?php
      $args = array(
        'orderby' => 'name',
        'order'   => 'ASC'
      );
      $categories = get_categories( $args );
      
      // Define allowed category slugs (they match your actual slugs in wp)
      $allowed = array(
        'gazdasagi-ceg-jog',
        'biztositasi-jog',
        'ingatlanjog-tarsashazak',
        'epitoipari-jog',
        'adatvedelmi-adatbiztonsagi-jog',
        'oroklesi-jog'
      );
      
      foreach ( $categories as $category ) {
          if ( ! in_array( $category->slug, $allowed ) ) {
              continue;
          }
          ?>
          <li class="col-md-4 col-sm-6 mb-3 fs-5">
            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" class="wp-link">
              <?php echo esc_html( $category->name ); ?>
            </a>
          </li>
          <?php
      }
    ?>
  </ul>
</div>

<?php get_footer(); ?>