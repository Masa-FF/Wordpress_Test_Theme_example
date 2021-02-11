<?php get_header(); ?>
<section class="blog-main">
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
  <?php endwhile; ?>
  <?php else: ?>
      <p class="no-item">申し訳ありません。まだ、投稿が無いようです。</p>
  <?php endif; ?>
</section>
<?php get_footer(); ?>