<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-faded">
  <ul class="navbar-nav">
    <?php
    $pages = get_pages();
    foreach ($pages as $page): ?>
    <a href="<?php echo get_page_link($page->ID); ?>" class="nav-link"><li class="list-item"><?php echo $page->post_title; ?></li></a>
  <?php endforeach; ?>
  </ul>
</nav>
<div class="container">
