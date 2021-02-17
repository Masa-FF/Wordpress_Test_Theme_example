<?php get_header(); ?>

<main>
  <?php if ( $paged < 2 ) { ?>
    <div class="top-img">
      <?php echo do_shortcode('[smartslider3 slider="4"]');?>
    </div>
    <div class="top-image-mobile">
      <?php echo do_shortcode('[smartslider3 slider="5"]');?>
    </div>
  <?php } else { ?>
  <?php } ?>
  <div id="photos">
    <h6>Gallery</h6>
    <?php /*$category = get_the_category();*/ ?>
    <ul photos-index>
      <?php
      $paged = get_query_var('paged', 1); // ページ送り用記述
      $args = array(
          'category_name' => 'Photo',
          'post_type' => 'post',
          'posts_per_page' => 6,
          'paged' => $paged // ページ送り用記述
      );
      $wp_query = new WP_Query($args);
      if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); ?>
        <li>
          <a href ="<?php the_permalink(); ?>" class="tile-button">
            <img src ="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="mask">
              <div class="caption">
                <p><i class="fas fa-calendar-alt"></i> <?php echo get_post_meta($post->ID, '撮影日', true); ?></p>
                <p><i class="fa fa-map-marker"></i> <?php echo get_post_meta($post->ID, '撮影地', true); ?></p>
                <p><i class="fa fa-user"></i> <?php echo get_post_meta($post->ID, 'モデル', true); ?></p>
              </div>
            </div>
          </a>
        </li>
      <?php endwhile; ?>
      <?php else: ?>
          <p class="no-item">申し訳ありません。まだ、投稿が無いようです。</p>
      <?php endif; wp_reset_postdata(); ?>
    </ul>
    <div class="pagination">
      <?php
        $big = 9999999999;
        $arg = array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link ( $big ) ) ),
        'format' => 'page/%#%/',
        'current' => max(1, $paged),
            'prev_text' => '<i class="fa fa-angle-left"></i>',
            'next_text' => '<i class="fa fa-angle-right"></i>'
        );
        echo paginate_links($arg);
      ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>