<?php get_header(); ?>
<section>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="contents_area">
        <?php the_content(); ?>
      </div>
  <?php endwhile;
  endif; ?>
</section>
<?php get_footer(); ?>