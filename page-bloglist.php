<?php get_header(); ?>
<section class="blog-main">
  <?php
    $paged = get_query_var('paged', 1); // ページ送り用記述
    $args = array(
    'category_name' => 'Blog',
    'post_type' => 'post',
    'posts_per_page' => 6,
    'paged' => $paged // ページ送り用記述
    );
    $wp_query = new WP_Query($args);
  if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="blog-item">
      <div class="blog-img">
        <?php the_post_thumbnail('index_thumbnail'); ?>
      </div>
      <div class="blog-title">
        <h4><?php the_title(); ?></h4>
        <?php the_time('Y.m.d') ?>
        <br>
        <?php
        if(mb_strlen($post->post_content, 'UTF-8')>25){
	        $content= mb_substr($post->post_content, 0, 100, 'UTF-8');
	        echo $content.'...';
        }else{
	        echo $post->post_content;
        }
        ?>
      </div>
    </a>
  <?php endwhile; ?>
  <?php else: ?>
      <p class="no-item">申し訳ありません。まだ、投稿が無いようです。</p>
  <?php endif; ?>
  <div class="pagination">
    <?php
      $big = 9999999999;
      $arg = array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link ( $big ) ) ),
        'format' => 'page/%#%/',
        'current' => max(1, $paged),
        'prev_text' => '<i class="fa fa-angle-left"></i>',
        'next_text' => '<i class="fa fa-angle-right"></i>'
      );
      echo paginate_links($arg);
    ?>
  </div>
</section>
<?php get_footer(); ?>