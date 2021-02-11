<?php get_header(); ?>
<!-- headerを呼び出す関数 -->

<main>
  <ul class="scroll-image">
    <li><img src="<?php echo esc_url( get_theme_file_uri( "img/index-top-image1.jpg" ) ); ?>" alt="ロゴ"></li>
    <li><img src="<?php echo esc_url( get_theme_file_uri( "img/index-top-image2.jpg" ) ); ?>" alt="ロゴ"></li>
    <li><img src="<?php echo esc_url( get_theme_file_uri( "img/index-top-image3.jpg" ) ); ?>" alt="ロゴ"></li>
  </ul>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
  <script>
    $(document).ready(function(){
    $('.scroll-image').slick({
      dots: true,
      autoplay: true,
      arrows: false,
      fade: true,
      autoplaySpeed: 5500,
      });
    });
  </script>

  <div id="photos">
    <h6>Gallery</h6>
    <?php $category = get_the_category(); ?>
    <ul photos-index>
      <?php query_posts('posts_per_page=12'); ?>
      <!-- 最大読み込み12件に制限 -->
      <?php query_posts("cat=3"); ?>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <li>
          <a href ="<?php the_permalink(); ?>" class="tile-button">
            <img src ="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="mask">
              <div class="caption">
                <p><i class="fas fa-calendar-alt"></i> <?php echo get_post_meta($post->ID, '撮影日', true); ?></p>
                <p><i class="fa fa-map-marker"></i> <?php echo get_post_meta($post->ID, '撮影地', true); ?></p>
                <p><i class="fa fa-user"></i> <?php echo get_post_meta($post->ID, 'モデル', true); ?></p>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; endif; ?>
    </ul>
  </div>
</main>

<?php get_footer(); ?>