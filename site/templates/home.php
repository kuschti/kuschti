<?php snippet('header') ?>

  <main class="main">

    <section class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </section>
    <hr>

    <?php snippet('lastblogentries') ?>

  </main>

<?php snippet('footer') ?>
