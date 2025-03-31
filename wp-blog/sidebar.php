<div class="widget widget_categories">
  <h3 class="widget-title">Blogok</h3>
  <ul class="row">
    <?php
      // 1) Capture output
      $cats = wp_list_categories( array(
        'title_li' => '',
        'orderby'  => 'name',
        'order'    => 'ASC',
        'echo'     => false
      ) );

      // 2) Insert "wp-link" class in <a> tags that have aria-current first
      $cats = str_replace(
        '<a aria-current="page" href="',
        '<a aria-current="page" class="wp-link" href="',
        $cats
      );

      // 3) Insert "wp-link" class in <a> tags that do NOT have aria-current
      $cats = str_replace(
        '<a href="',
        '<a class="wp-link" href="',
        $cats
      );

      // 4) Echo the modified HTML
      echo $cats;
    ?>
  </ul>
</div>