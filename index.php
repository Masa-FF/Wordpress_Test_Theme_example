<?php get_header(); ?>

<main>
<div class="top-img">
  <?php echo do_shortcode('[smartslider3 slider="4"]');?>
</div>
<div class="top-image-mobile">
  <?php echo do_shortcode('[smartslider3 slider="5"]');?>
</div>

  <div id="photos">
    <h6>Gallery</h6>
    <?php $category = get_the_category(); ?>
    <ul photos-index>
      <?php query_posts('posts_per_page=12'); ?>
      <!-- 最大読み込み12件に制限 -->
      <?php query_posts("cat=3"); ?>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
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
        <?php endif; ?>
    </ul>
  </div>
</main>
<?php get_footer(); ?>