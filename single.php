<?php
  get_header();
  $comments = get_comments_number();
  $post_tags = get_the_tags();
?>

<?php if (have_posts()) : while (have_posts()) :
  the_post(); ?>

<main role="main" class="pt-5">
  <article>
    <section class="jumbotron post-hero-banner text-center">
      <aside class="container container-small">
        <h1 class="jumbotron-heading"><?php the_title() ?></h1>
        <time datetime="<?php echo get_the_date('c'); ?>">
          <?php the_date() ?>
        </time>
        /
        <a href="#comments"><?php echo ($comments == 0) ? "Leave a comment" : $comments . " comment" . ($comments > 1 ? 's' : null) ?></a>
        <div class="category-tags">
          <?php
            if ($post_tags) {
              foreach (get_the_tags($post->ID) as $tag) {
                if ($tag->name !== react) {
                  echo '<span class="category-tag"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></span>';
                }
              }
            }
          ?>
        </div>
        <div class="author-block text-muted">
          <img class="rounded-circle mr-1" src="<?php echo get_template_directory_uri() ?>/assets/james-king-headshot.jpg" alt="James King"/>
          <span class="author">James King</span>
        </div>
      </aside>
    </section>
    <section class="page-content">
      <div class="content">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-12 col-xl-7">
              <?php the_content(); ?>
              <?php endwhile; else : ?>
              <?php endif; ?>
            </div>
            <div class="d-none d-xl-block col-xl-3">
              <div class="floating-wrapper">
                <div class="sidebar-newsletter mb-4">
                  <span class="text-muted">
                   🚀 Follow my journey to 100,000 monthly pageviews!
                  </span>
                  <form action="https://sitesmonster.us18.list-manage.com/subscribe/post?u=3c9dcba3087c23c6f6169f1bb&amp;id=2cf9263eb9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
                    <div class="input-group mt-3 mb-2">
                      <input type="email" class="form-control form-control-sm" name="EMAIL" id="mce-EMAIL" placeholder="Your Email" required>
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" type="submit" onClick="gtag('event', 'join', { 'event_category': 'newsletter', 'event_label': 'sidebar' });">Subscribe</button>
                      </div>
                    </div>
                  </form>
                  <div class="text-muted newsletter-small-text">Don't miss out on this journey. No spam, ever. Opt out any time.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include('Components/newsletter-form.php'); ?>
      <div class="container container-small">
        <div class="row">
          <div class="col-md-12">
            <hr/>
            <?php
              comments_template();
            ?>
          </div>
        </div>
      </div>
    </section>
  </article>
</main>

<?php get_footer(); ?>
