<?php get_header(); ?>
<!-- headerを呼び出す関数 -->


<main>
  <div class="scroll-image">
    <img src="<?php bloginfo('template_directory'); ?>/img/index-top-image1.jpg">
  </div>
  <p>Gallery</p>
  <div id="photos-index">
    <?php while(have_posts()) : the_post(); ?>
      <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
      <p><?php the_content(); ?></p>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>
<!-- フッターを呼び出す関数 -->