<?php
  return function($site, $pages, $page) {

  // fetch the basic set of pages
  $articles = $page->children()->visible()->flip();

  // add the tag filter
  if($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }

  // add the category filter
  if($category = param('category')) {
    $articles = $articles->filterBy('category', $category, ',');
  }

  // fetch all tags
  $tags = $articles->pluck('tags', ',', false);
  $category = $articles->pluck('category', ',', false);

  // apply pagination
  $articles   = $articles->paginate(10);
  $pagination = $articles->pagination();

  return compact('articles', 'tags', 'tag', 'category', 'pagination');

};
