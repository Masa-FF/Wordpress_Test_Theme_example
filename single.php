<?php get_header(); ?>
  <main>
    <div class="single-page-data">
      <h2><?php the_title(); ?></h2>
      <?php if(in_category('Photo')) : ?>
        <br><h4><i class="fas fa-camera"></i> <?php echo get_post_meta($post->ID, '撮影日', true); ?></h4>
      <?php else: ?>
      <?php endif; ?>
    </div>
    <div class ="contents_area">
      <?php the_content(); ?>
    </div>
  </main>
<?php get_footer(); ?>