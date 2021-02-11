<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- スタイルシートの読み込みコード -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <!-- リセットCSS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette&family=Great+Vibes&display=swap">
  <!-- Google fontの追加コード -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
  <!-- Google font (M PLUS Rounded 1c) -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/slick-theme.css">
  <!-- Slicer -->
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  <script>
    $(function() {
      const hum = $('#hamburger, .close')
      const nav = $('.sp-nav')
      hum.on('click', function() {
        nav.toggleClass('toggle');
      });
    });
  </script>
  <!-- ハンバーガーメニューアニメーション -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
  <?php wp_head(); ?>
  <!-- WordPressで必要なファイルを設定するために必要な記述。headの最下段に記述する -->
</head>

<body <?php body_class(); ?>>
  <header>
    <div id="hamburger">
      <span></span>
    </div>
    <h1><a href="<?php echo esc_url(home_url("//")); ?>">Portrait Photographs</a></h1>
    <nav class="pc-nav">
      <li><a href="<?php echo esc_url(home_url("//")); ?>#photos">Gallery</a></li>
      <li><a href="<?php echo esc_url(home_url("/blog/")); ?>">Blogs</a></li>
      <li><a href="<?php echo esc_url(home_url("/about/")); ?>">About</a></li>
      <li><a href="<?php echo esc_url(home_url("/profile/")); ?>">PROFILE</a></li>
      <li><a href="<?php echo esc_url(home_url("/link/")); ?>">Link</a></li>
    </nav>
    <nav class="sp-nav">
      <ul>
        <li><a href="<?php echo esc_url(home_url("//")); ?>#photos"">Gallery</a></li>
        <li><a href=" <?php echo esc_url(home_url("/blog/")); ?>">Blogs</a></li>
        <li><a href="<?php echo esc_url(home_url("/about/")); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url("/profile/")); ?>">Profile</a></li>
        <li><a href="<?php echo esc_url(home_url("/link/")); ?>">Link</a></li>
        <li class="close"><span>Close</span></li>
      </ul>
    </nav>
  </header>