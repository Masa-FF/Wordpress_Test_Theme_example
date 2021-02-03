<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hoge</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <?php wp_head(); ?>
  <!-- WordPressで必要なファイルを設定するために必要な記述。headの最下段に記述する -->
</head>

<body <?php body_class(); ?>>
  <header>
    <h1>Portrait Photographs</h1>
    <nav>
      <li><a href"">Top</a></li>
      <li><a href"">About</a></li>
      <li><a href"">Link</a></li>
    </nav>
  </header>