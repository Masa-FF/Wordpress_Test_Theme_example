
  <?php get_header(); ?>

  <main>
    <?php the_post(); ?>
    <a href="post.html">
      <?php the_title(); ?>
    </a>
    <p>投稿時刻 : <?php the_time("Y-m-d"); ?></p>
    <?php the_content(); ?>
  </main>

  <?php get_footer(); ?>