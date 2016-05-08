
<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
  template: blogarticle
  sort: flip
  num: date
  limit: 15
files: false
fields:
  title:
    label: Title
    type:  text
