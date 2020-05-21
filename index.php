<?php get_header(); ?>

<main role="main" class="pt-4">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3 text-center">
          <h1 class="hero-text">Tried and Tested Ways to Make Money Online</h1>
          <h2 style="line-height: 1.6;" class="pt-0 pb-0 mb-0 no-underline">
            SitesMonster is the best place to learn <span class="mon-highlight">website</span>
            and <span class="mon-highlight">blogging</span> tutorials, strategies, tips and tricks.
          </h2>
        </div>
        <div class="col-12 mt-4 d-flex justify-content-center">
          <a href="https://moneymonster.org/how-i-get-paid-to-write-from-home" style="color: white;" role="button" class="btn
          btn-primary">
            Start a Blog Today &rarr;
          </a>
        </div>
      </div>
    </div>
  </section>
  <div class="mt-4 pb-5">
    <div class="container">
      <div class="row">
        <?php include('Components/all-posts.php'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
