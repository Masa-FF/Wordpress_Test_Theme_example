<?php get_header(); ?>

  <section>
    <?php if( have_posts()): while( have_posts()): the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php echo get_the_date('Y年n月j日'); ?></p>
    <div div class ="contents_area">
      <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
  </section>

<?php get_footer(); ?>