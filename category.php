<?php get_header();
  $title = single_cat_title( '', false );
?>

<main role="main" class="pt-5">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3 text-center">
          <h1 class="hero-text">Complete Website Tutorials</h1>
          <h2 style="line-height: 1.6;" class="pt-0 pb-0 mb-0 no-underline">
            MoneyMonster is the best place to learn <span class="mon-highlight">money making ideas</span>
            and <span class="mon-highlight">proven techniques</span> for generating wealth online.
          </h2>
        </div>
      </div>
    </div>
  </section>
  <div class="album mt-5 pb-5">
    <div class="container">
      <?php include('Components/category-all-posts.php'); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
