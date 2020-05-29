<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php wp_title('-', true, 'right'); ?></title>
  <?php wp_head(); ?>
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
  <!-- Mailchimp popup code -->
  <script defer type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"3c9dcba3087c23c6f6169f1bb","lid":"2cf9263eb9", "uniqueMethods":true}) })</script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167591287-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-167591287-1');
  </script>

</head>
<body>
<header>
  <?php
    include('Components/banner.php');
  ?>
  <nav class="nav">
    <div class="navbar-brand d-none d-md-flex">
      <a href="<?php echo get_bloginfo('url') ?>" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'logo' });">
        <img src="<?php echo get_template_directory_uri() ?>/assets/sitesmonster-logo-small.png" alt="SitesMonster Logo"/>
        <span style="margin-left: 5px; font-weight: 600;">Sites<span style="color: #028090">Monster</span></span>
      </a>
    </div>
    <div class="navbar-brand navbar-brand-mobile d-md-none">
      <a href="https://sitesmonster.com" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'logo mobile' });">
        <img src="<?php echo get_template_directory_uri() ?>/assets/sitesmonster-logo-small.png" alt="SitesMonster Logo"/>
        <span style="margin-left: 5px; font-weight: 600;">Sites<span style="color: #028090">Monster</span></span>
      </a>
    </div>
    <div class="d-md-flex d-none links">
      <a href="<?php echo get_bloginfo('url') ?>/tutorials" onclick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'tutorials' });">✏ Tutorials</a>
      <a href="<?php echo get_bloginfo('url') ?>/journey" onclick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'interviews' });">🚀 Journey</a>
      <a href="<?php echo get_bloginfo('url') ?>/newsletter" onclick="gtag('event', 'click', {'event_category':'navigation', 'event_label': 'newsletter' });">✉ Newsletter</a>
    </div>
    <div class="d-md-none links-mobile">
      <a href=<?php echo get_bloginfo('url') ?>/tutorials" onclick="gtag('event', 'click', {'event_category':'navigation', 'event_label': 'tutorials mobile' });">✏ Tutorials</a>
      <a href="<?php echo get_bloginfo('url') ?>/journey" onclick="gtag('event', 'click', { 'event_category':'navigation', 'event_label': 'interviews mobile' });">🚀 Journey</a>
      <a href="<?php echo get_bloginfo('url') ?>/newsletter" onclick="gtag('event', 'click', {'event_category':'navigation', 'event_label': 'newsletter mobile' });">✉ Newsletter</a>
    </div>
  </nav>
</header>
