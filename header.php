<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151114276-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-151114276-1');
    </script>
  </head>
  <body>
    <header>
      <?php
        include('Components/banner.php');
      ?>
        <nav class="nav">
            <div class="navbar-brand d-none d-md-flex">
                <a href="https://sitesmonster.com" onClick="gtag('event', 'click', { 'event_category': 'navigation',
                'event_label': 'logo' });">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/sitesmonster-logo-small.png" alt="SitesMonster
                    Logo" />
                    <span style="margin-left: 5px; font-weight: 600;">
                      Sites<span style="color: #028090">Monster</span>
                    </span>
                </a>
            </div>
          <div class="navbar-brand navbar-brand-mobile d-md-none">
            <a href="https://sitesmonster.com" onClick="gtag('event', 'click', { 'event_category': 'navigation',
                'event_label': 'logo' });">
              <img src="<?php echo get_template_directory_uri() ?>/assets/sitesmonster-logo-small.png" alt="MoneyMonster
                    Logo" />
              <span style="margin-left: 5px; font-weight: 600;">
                      Sites<span style="color: #028090">Monster</span>
                    </span>
            </a>
          </div>
            <div class="d-md-flex d-none links">
                <a href="https://sitesmonster.com/tutorials" onClick="gtag('event', 'click', {
                    'event_category':
                'navigation',
                'event_label': 'tutorials' });">
                  ✏️ Tutorials
                </a>
                <a href="https://sitesmonster.com/newsletter" onClick="gtag('event', 'click', {
                    'event_category':
                'navigation', 'event_label':
                'newsletter' });">
                  ✉️ Newsletter
                </a>
                <a href="https://sitesmonster.com/interviews" onClick="gtag('event', 'click', { 'event_category':
                'navigation', 'event_label': 'interviews' });">
                  🎤 Interviews
                </a>
            </div>
          <div class="d-md-none links-mobile">
            <a href="https://moneymonster.org/how-i-get-paid-to-write-from-home" onClick="gtag('event', 'click', {
                'event_category':
            'navigation', 'event_label': 'most read guides' });">
              ✏️ Tutorials
            </a>
            <a href="https://moneymonster.org/newsletter" onClick="gtag('event', 'click', {
                'event_category':
            'navigation', 'event_label': 'make money' });">
              ✉️ Newsletter
            </a>
            <a href="https://moneymonster.org/about" target="_blank" onClick="gtag('event', 'click', { 'event_category':
                'navigation', 'event_label': 'about' });">
              🎤 Interviews
            </a>
          </div>
        </nav>
    </header>
