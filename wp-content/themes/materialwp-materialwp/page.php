<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package materialwp
 */

if (pll_current_language() == 'en') {
  $link = '/en/become-a-friend/#tax_one_percent';
  $alt = 'Tax one percent';
} else {
  $link = '/pl/zostan-przyjacielem/#tax_one_percent';
  $alt = 'Jeden procent podatku';
}

get_header(); ?>

<div class="fixed">
  <a href="<?php echo $link; ?>">
    <img src="/wp-content/uploads/2017/12/1proc_menu.svg" alt="<?php echo $alt; ?>" />
  </a>
</div>

<div class="container">
  <div class="row">

    <div id="primary" class="col-md-12 col-lg-12">
      <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('content', 'page'); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if (comments_open() || get_comments_number()) :
            comments_template();
          endif;
          ?>

        <?php endwhile; // end of the loop. 
        ?>

      </main><!-- #main -->
    </div><!-- #primary -->

    <? php // get_sidebar(); 
    ?>

  </div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>