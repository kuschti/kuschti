<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="google-site-verification" content="trbkTmz0u-yA8op-qHcTU7PdVcVoVjJesMZ6NFiaGaE" />

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <!-- Prefetch DNS for external assets (Twitter widgets etc). -->
  <link rel="dns-prefetch" href="//www.google-analytics.com">
  <link rel="dns-prefetch" href="//<?php echo c::get('disqus_name') ?>.disqus.com">


  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="publisher" content="<?php echo html($site->author()) ?>" />
  <meta name="copyright" content="<?php echo html($site->author()) ?>" />

  <link rel="canonical" href="<?php echo html($page->url()) ?>" />
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
