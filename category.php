<?php get_header(); ?>

<main role="main" class="pt-5">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3 text-center">
          <h1 class="hero-text"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h1>
          <h2 style="line-height: 1.6;" class="pt-0 pb-0 mb-0 no-underline">
            <?php echo category_description(); ?>
          </h2>
        </div>
      </div>
    </div>
  </section>
  <div class="album mt-5 pb-5">
    <div class="container">
      <div class="row">
        <?php include('Components/category-all-posts.php'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
