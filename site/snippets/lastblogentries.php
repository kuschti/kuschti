<h2>Neuste Artikel</h2>

<?php foreach(page('blog')->children()->visible()->flip()->limit(3) as $article): ?>

  <article>
    <h1><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
    <p><?php echo $article->text()->excerpt(300) ?></p>
    <?php if($image = $article->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $article->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $article->title()->html() ?>" >
    </a>
    <?php endif ?>
    <p>
      <a href="<?php echo $article->url() ?>">Weiterlesen…</a>
    </p>
  </article>
  <hr />

<?php endforeach ?>
<a href="<?php echo url() ?>/blog">Weitere Artikel</a>
