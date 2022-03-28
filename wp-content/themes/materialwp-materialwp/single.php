<?php
/**
 * The template for displaying all single posts.
 *
 * @package materialwp
 */

get_header(); ?>

<div class="single-news-container">
	<div class="container">
		<div class="row" style="position: relative;">
			<h1 class="amatic center-text size-five post-header-style"><?php the_title(); ?></h2>
		</div> <!-- .row -->
	</div>
</div> <!-- .container -->
<div class="article-blue-section">
	<div class="">
		<!-- <div class="bottom-decoration-donate1"></div>
		<div class="number-percente-post-donate">
        </div>
        <div class="empty-space"></div> -->
<!--         <h2 class="font-blue amatic center-text size-five font-bold" style="margin-bottom: 60px;">HALFWAY TO OUR GOAL!</h2>
 -->    
        <div class="post-content-custom container">
        	<div class="single-donate-img single-news-img" style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat"></div>
        	<div class="excerpt"><?php echo the_excerpt();?></div>
			<div class="post-content-col">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
				endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</div>
		</div>
        <!-- <div class="empty-space"></div> -->
	</div><!-- .row -->
	<!-- <div class="bottom-decoration-post"></div> -->
</div> <!-- .container -->
<div class="container post-meta-container">
	<?php echo get_post_meta(get_the_ID(), '_custom_editor_1', TRUE); ?>

</div> <!-- .container -->

<?php get_footer(); ?>
