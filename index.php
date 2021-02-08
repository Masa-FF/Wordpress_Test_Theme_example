<?php get_header(); ?>
<!-- headerを呼び出す関数 -->


<main>
  <div class="scroll-image">
    <img src="<?php echo esc_url( get_theme_file_uri( "img/index-top-image1.jpg" ) ); ?>" alt="ロゴ">
  </div>
  <div id="photos">
    <h6>Gallery</h6>
    <div class="photos-index">
      <?php while(have_posts()) : the_post(); ?>
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        <p><?php the_content(); ?></p>
      <?php endwhile; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
<!-- フッターを呼び出す関数 -->