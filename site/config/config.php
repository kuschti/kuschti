<?php

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('routes', array(
  array(
    'pattern' => '(:num)/(:num)/(:any)',
    'action'  => function($year, $month, $uid) {

      // search for the article
      $page = page('blog/' . $uid);

      // redirect to the article or the error page
      // go($page ? $page->url() : 'error');
      return site()->visit($page);

    }
  )
));

c::set('thumbs.driver', 'im');
