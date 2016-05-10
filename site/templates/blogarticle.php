<?php snippet('header') ?>
<main class="main">
  <section class="content blogarticle">
    <article>
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>

      <hr />
      <footer class="blogarticle__footer">
        <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('d. M Y') ?></time>,
        <span>Kategorie: <?php echo $page->category() ?></span>

        <?php if($page->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach(str::split($page->tags()) as $tag): ?>
              <li><a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
            <?php endforeach ?>
          </ul>
        <?php endif ?>

      </footer>
    </article>
    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; letzter Artikel</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">nächster Artikel &rarr;</a>
      <?php endif ?>
    </nav>
  </section>
  <section class="comments">
    <?php snippet('disqus', array('disqus_shortname' => c::get('disqus_name'), 'disqus_developer' => true)) ?>
  </section>
</main>
<?php snippet('footer') ?>
