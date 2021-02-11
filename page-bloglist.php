<?php get_header(); ?>
  <?php query_posts("cat=9"); ?>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="blog-item">
      <div class="blog-img">
        <?php the_post_thumbnail('index_thumbnail'); ?>
      </div>
      <div class="blog-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>
      <div class="blog-time">
        <?php the_time('Y.m.d') ?>
      </div>
    </div>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>