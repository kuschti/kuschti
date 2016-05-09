<?php snippet('header') ?>
<main class="main">

  <section class="content blog">
    <header>
      <!-- <h1><?php echo $page->title()->html() ?></h1> -->
      <?php echo $page->text()->kirbytext() ?>
    </header>

    <?php foreach($articles as $article): ?>

      <article>
        <h1><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
        <p><?php echo $article->text()->excerpt(300) ?></p>

        <?php if($image = $article->images()->sortBy('sort', 'asc')->first()): ?>
        <a href="<?php echo $article->url() ?>">
          <img src="<?php echo $image->resize(480)->url() ?>" srcset="<?php echo kirby_get_srcset($image) ?>" sizes="<?php echo kirby_get_sizes($image) ?>" alt="<?php echo $article->title()->html() ?>" >
        </a>
        <?php endif ?>

        <time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo $article->date('d. M Y') ?></time> -
        <a href="<?php echo $article->url() ?>">Weiterlesen…</a>
      </article>
      <hr />

    <?php endforeach ?>

    <?php if($articles->pagination()->hasPages()): ?>
      <nav class="pagination">

        <?php if($articles->pagination()->hasPrevPage()): ?>
        <a class="next" href="<?php echo $articles->pagination()->prevPageURL() ?>">&lsaquo; neuere Artikel</a>
        <?php endif ?>

        <?php if($articles->pagination()->hasNextPage()): ?>
        <a class="prev" href="<?php echo $articles->pagination()->nextPageURL() ?>">ältere Artikel &rsaquo;</a>
        <?php endif ?>



      </nav>
    <?php endif ?>

  </section>
</main>
<?php snippet('footer') ?>
