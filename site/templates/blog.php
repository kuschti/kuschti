<?php snippet('header') ?>

<section class="content blog">

  <h1><?php echo $page->title()->html() ?></h1>
  <?php echo $page->text()->kirbytext() ?>

  <?php $articles = $page->children()->visible()->flip()->paginate(10) ?>

  <?php foreach($articles as $article): ?>

    <article>
      <h1><?php echo $article->title()->html() ?></h1>
      <p><?php echo $article->text()->kirbytext() ?></p>
      <a href="<?php echo $article->url() ?>">Read more…</a>
    </article>

  <?php endforeach ?>

  <?php if($articles->pagination()->hasPages()): ?>
    <nav class="pagination">

      <?php if($articles->pagination()->hasNextPage()): ?>
      <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
      <?php endif ?>

      <?php if($articles->pagination()->hasPrevPage()): ?>
      <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
      <?php endif ?>

    </nav>
  <?php endif ?>

</section>

<?php snippet('footer') ?>
