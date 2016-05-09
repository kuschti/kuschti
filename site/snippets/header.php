<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link rel="alternate" type="application/rss+xml" href="https://kuschti.ch/feed" title="Blog Feed">
  <?php echo css('assets/css/main.css') ?>
</head>
<body>

  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>">
      <?php echo $site->title()->html() ?>
    </a>
    <?php snippet('menu') ?>
  </header>
