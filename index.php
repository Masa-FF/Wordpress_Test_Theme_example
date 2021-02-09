<?php get_header(); ?>
<!-- headerを呼び出す関数 -->

<main>
  <div class="scroll-image">
    <img src="<?php echo esc_url( get_theme_file_uri( "img/index-top-image1.jpg" ) ); ?>" alt="ロゴ">
  </div>
  <div id="photos">
    <h6>Gallery</h6>
    <?php $category = get_the_category(); ?>
    <ul photos-index>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <li><a href ="<?php the_permalink(); ?>"><img src ="<?php echo get_the_post_thumbnail_url(); ?>"></a></li>
      <?php endwhile; endif; ?>
    </ul>
  </div>
</main>

<?php get_footer(); ?>