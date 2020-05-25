<?php get_header(); ?>

<main role="main" class="pt-4">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3 text-center">
          <h1 class="hero-text">Join Me on My Journey to 100,000 Monthly Pageviews</h1>
          <h2 style="line-height: 1.6;" class="pt-0 pb-0 mb-0 no-underline">
            I'm sharing everything I do to get from <span class="mon-highlight">0 pageviews to 100,000 monthly pageviews</span>, every step of the way, so you too can build a successful site!
          </h2>
        </div>
<!--        <div class="col-12 mt-4 d-flex justify-content-center">-->
<!--          <a href="https://moneymonster.org/how-i-get-paid-to-write-from-home" style="color: white;" role="button" class="btn btn-primary">-->
<!--            Start a Blog Today &rarr;-->
<!--          </a>-->
<!--        </div>-->
      </div>
    </div>
  </section>
  <div class="mt-4 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Read the Latest Journey Entries...</h2>
        </div>
      </div>
      <div class="row">
        <?php include('Components/journey-posts.php'); ?>
      </div>
      <div class="row">
        <div class="col-12">
          <h2>
            Latest Tutorials...
          </h2>
        </div>
      </div>
      <div class="row">
        <?php include('Components/all-tutorial-posts.php'); ?>
      </div>
    </div>
  </div>
  <?php include('Components/newsletter-form.php'); ?>
</main>

<?php get_footer(); ?>
