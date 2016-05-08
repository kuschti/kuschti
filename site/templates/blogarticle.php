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
  <nav class="nextprev cf" role="navigation">
    <?php if($prev = $page->prevVisible()): ?>
    <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
    <?php endif ?>
    <?php if($next = $page->nextVisible()): ?>
    <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
    <?php endif ?>
  </nav>
</section>
<section class="comments">
  <?php snippet('disqus', array('disqus_shortname' => 'kuschti', 'disqus_developer' => true)) ?>
</section>

<?php snippet('footer') ?>
