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
          <h1>Follow My Journey from 0 to 100,000 Monthly Pageviews!</h1>
          <h2 class="pt-0 pb-0 mb-0 d-none d-md-block no-underline">
           Starting with an empty blog, I'm sharing everything I do to get from 0 pageviews to 100,000 monthly pageviews, every step of the way.
          </h2>
          <p class="mt-4">
            Never miss out on the latest tips & tricks, tutorials, SEO strategies and more as I show you how you too can create a website that gets 100,000 monthly pageviews.
          </p>
        </div>
        <div class="col-12 col-md-6 offset-md-3 text-center mt-0 mt-md-4">
          <p class="d-block d-md-none">Get emails packed full of tutorials, strategies, tips and tricks, straight to your inbox.</p>
          <form action="https://sitesmonster.us18.list-manage.com/subscribe/post?u=3c9dcba3087c23c6f6169f1bb&amp;id=2cf9263eb9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
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
