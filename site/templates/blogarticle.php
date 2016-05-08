<?php snippet('header') ?>

<section class="content blogarticle">
  <article>
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>

    <a href="<?php echo url('blog') ?>">Back…</a>

    <footer>
      <ul>
        <?php echo $page->tags() ?>
      </ul>
    </footer>
  </article>
</section>

<?php snippet('footer') ?>