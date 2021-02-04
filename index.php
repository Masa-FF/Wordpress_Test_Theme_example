<?php get_header(); ?>
<!-- headerを呼び出す関数 -->

<aside>
  <h3>サイドバー</h3>
  <?php while(have_posts()) : the_post(); ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php the_content(); ?></p>
  <?php endwhile; ?>
</aside>

<main>
</main>

<?php get_footer(); ?>
<!-- フッターを呼び出す関数 -->