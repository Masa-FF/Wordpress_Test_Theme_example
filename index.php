<?php get_header(); ?>
<!-- headerを呼び出す関数 -->

<aside>
  <h3>サイドバー</h3>
</aside>

<main>
  <?php the_post(); ?>
  <a href="post.html">
    <?php the_title(); ?>
  </a>
  <p>投稿時刻 : <?php the_time("Y-m-d"); ?></p>
  <?php the_content(); ?>
</main>

<?php get_footer(); ?>
<!-- フッターを呼び出す関数 -->