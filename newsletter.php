<?php /* Template Name: Newsletter */ ?>

<?php get_header(); ?>

<main role="main" class="pt-5">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner hero-banner-blog">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <img style="width: 200px;" src="<?php echo get_template_directory_uri() ?>/assets/newsletter-graphic.png" alt="A mailbox
          with two letters." />
        </div>
        <div class="col-12 col-md-8 offset-md-2 mt-3 text-center">
          <h1>The SitesMonster Newsletter. <br />Packed With Site Boosting Ideas.</h1>
          <h2 class="pt-0 pb-0 mb-0 d-none d-md-block no-underline">
            Join the thousands of other people like you who get a newsletter packed full of tutorials, strategies,
            and ideas on how to boost their sites, straight to their inbox.
          </h2>
        </div>
        <div class="col-12 col-md-6 offset-md-3 text-center mt-0 mt-md-4">
          <p class="d-block d-md-none">Get one email per month, packed full of tutorials, strategies, tips and tricks, straight to your inbox.</p>
          <form action="https://gmail.us5.list-manage.com/subscribe/post?u=4bf8b50b46368889097a8e9c9&amp;id=5ff2e71b5c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
            <div class="input-group mb-3">
              <input type="email" class="form-control form-control-sm" name="EMAIL" id="mce-EMAIL" placeholder="Your Email Address" required>
              <div class="input-group-append">
                <button class="btn btn-sm btn-primary" type="submit" onClick="gtag('event', 'join', { 'event_category': 'newsletter', 'event_label': 'newsletter page' });">Sign Me Up!</button>
              </div>
            </div>
          </form>
          <small class="d-none d-md-block text-muted mb-5">Never any spam, just great content. Unsubscribe at any time.</small>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>