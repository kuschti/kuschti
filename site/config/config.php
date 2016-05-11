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

// config for responsive images
c::set('responsiveimages.sources', array(
  's'  => array('width' => 320),
  'm' => array('width' => 640),
  'l' => array('width' => 768),
  'xl'  => array('width' => 880),
  'xxl'  => array('width' => 1760),
));

c::set('responsiveimages.sizes', array(
  array(
    'size_value' => '55em',
    'mq_value'   => '55em',
    'mq_name'    => 'min-width'
  ),
  array(
    'size_value' => '100vw'
  ),
));
