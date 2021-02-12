<?php get_header(); ?>
  <main>
    <?php if( have_posts()): while( have_posts()): the_post(); ?>
    <div class="single-page-data">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p>撮影日: <?php echo get_post_meta($post->ID, '撮影日', true); ?></p>
    </div>
    <div class ="contents_area">
      <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
  </main>
<?php get_footer(); ?>