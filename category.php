<?php get_header(); ?>
<section>
	<?php $category = get_the_category(); $cat_name = $category[0] -> cat_name; ?>
	<ul>
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<li><span><?php echo $cat_name; ?></span><span><?php echo get_the_date(' Y年n月j日'); ?></span><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; endif; ?>
	</ul>
</section>
<?php get_footer(); ?>