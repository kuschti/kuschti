<?php if(!defined('KIRBY')) exit ?>

title: Blogarticle
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  date:
    label:  Date
    type:   date
    format: DD.MM.YYYY
    width:  1/4
    default:
      type:   date
      format: d.m.Y
  format:
    label: Format
    width: 1/4
    type:  select
    options:
      aside: Aside
      gallery: Gallery
      image: Bild
      video: Video
      quote: Quote
      link: Link
      status: Status
      audio: Audio
      chat: Chat
  category:
    label: Category
    width: 1/4
    type:  select
    options:
      bilder: Bilder
      blog: Blog
      kurznachrichten: Kurznachrichten
      links: Links
      musik-multimedia: Musik
      reisen: Reisen
      karibik2006: Karibik 2006
      kreta: Kreta
      kurztrips: Kurztrips
      tokyo2008: Tokyo 2008
      usatrip2011: USA Trip 2001
      videos: Videos
  tags:
    label: Tags
    type:  tags
  text:
    label: Text
    type:  textarea
    icon:  file-text-o
