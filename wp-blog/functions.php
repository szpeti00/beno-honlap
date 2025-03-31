<?php
function drvblog_enqueue_assets() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null );

    // Enqueue Flag Icons CSS
    wp_enqueue_style( 'flag-icons-css', 'https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css', array(), null );

    // Enqueue your custom CSS file
    wp_enqueue_style( 'drvblog-style', get_template_directory_uri() . '/styles.css', array('bootstrap-css'), '1.0' );

    // Enqueue Bootstrap JS (placed in footer)
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true );

    // Enqueue your custom JavaScript file
    wp_enqueue_script( 'drvblog-script', get_template_directory_uri() . '/script.js', array(), '1.0', true );
}
function custom_excerpt_more( $more ) {
    global $post;
    return ' <a class="read-more wp-link" href="' . esc_url( get_permalink( $post->ID ) ) . '">[...]</a>';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );
add_action( 'wp_enqueue_scripts', 'drvblog_enqueue_assets' );
?>
