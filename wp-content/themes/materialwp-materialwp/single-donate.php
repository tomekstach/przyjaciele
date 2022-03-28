<?php
/**
 * The template for displaying all single posts.
 *
 * @package materialwp
 */

get_header(); ?>
    <?php if(get_post_meta(get_the_ID(), 'field_id', TRUE)){ ?>
    <div class="single-donate-title-container">
        <div class="container">
            <div class="row" style="position: relative;">

                <!--<h1 class="amatic center-text font-blue size-seven" style="margin-bottom: 80px; margin-top: 80px;font-weight: 800;">Current Projects</h1>-->
                <h1 class="font-white amatic center-text size-five">
                    <?php the_title(); ?>
                </h1>
            </div>
            <!-- .row -->
        </div>
    </div>
    <!-- .container -->
    <div class="">
        <div class="post-content-custom container">
            <div class="row">
                <!-- <div class="bottom-decoration-donate1"></div> -->
                <div class="number-percente-post-donate">
                    <div class="single-donate-img-wrapper">
                        <div class="single-donate-img" style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat"></div>
                        <!--				<div class="top-decoration-donate"></div>-->
                    </div>
                    <div style="text-align: center; padding-top: 50px;">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
				endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>

                </div>

                <!-- <div style="height: 100px;"></div> -->
            </div>
            <!-- .row -->
        </div>
        <!-- <div class="bottom-decoration-donate"></div> -->
    </div>
    <!-- .container -->
    <?php }else{ ?>
    <div class="single-donate-title-container">
        <div class="container">
            <div class="row" style="position: relative;">

                <!--<h1 class="amatic center-text font-blue size-seven" style="margin-bottom: 80px; margin-top: 80px;font-weight: 800;">Current Projects</h1>-->
                <h1 class="font-white amatic center-text size-five">
                    <?php the_title(); ?>
                </h1>
                
            </div>
            <!-- .row -->
        </div>
    </div>
    <!-- .container -->
    <div class="">
        <div class="post-content-custom container">
            <div class="row">
                <!-- <div class="bottom-decoration-donate1"></div> -->
                <div class="number-percente-post-donate">
                    <div class="single-donate-img-wrapper">
                        <div class="single-donate-img" style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat"></div>
                        <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-post-donate')); ?>  -->
                        
                    </div>
                    <!-- <div class="top-decoration-donate"></div> -->
                    <h2 class="font-blue amatic center-text size-five font-bold donate-desc-heading" style="margin-bottom: 60px;">
                        <?php echo get_post_meta(get_the_ID(), 'specialDonateTitle', TRUE); ?>
                    </h2>
                    <div>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                    <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green c100b single-donate-circle">
                        <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span class="carousel-procent">%</span></span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>

                    </div>
                    <div class="green-box-post-donate">
                        <?php if(!empty(get_post_meta(get_the_ID(), 'nowMoney', TRUE))){
                            echo '<p class="size-two" id="remaining-to">Remaining to Raise:</p>';
                            echo '<p class="size-third font-white font-bold remaining-count">'.
                             get_post_meta(get_the_ID(), 'nowMoney', TRUE).' PLN</p>';
                            } ?>
                        
                        
                        <p class="size-one"><span id="cost-text"> cost: </span><span class="font-blue font-bold cost-number"><?php echo get_post_meta(get_the_ID(), 'priceMedicalEquipment', TRUE); ?> PLN</span></p>

                    </div>
                </div>

                <!-- <div style="height: 70px;"></div> -->
            </div>
            <!-- .row -->
        </div>
        <!-- <div class="bottom-decoration-donate"></div> -->
    </div>
    <!-- .container -->
    <div class="single-donate-thansk-row">
        <div class="container">
            <!-- <div class="empty-space"></div> -->
            <h2 class="font-blue amatic center-text size-five font-bold" id="how-will-it" style="margin-bottom: 40px;">HOW WILL IT IMPACT CHILDREN'S LIFE?</h2>
            <div class="kids-life">
                <div class="donate_dzieci">
                    <div>
                        <span class="donate_ile_dzieci"><?php echo get_post_meta(get_the_ID(), 'howmanychildren', TRUE); ?></span>
                        <span class="donate_text_dzieci">dzieci</span>
                    </div>
                </div>
    <!--            <img class="image-post-donate-kids" src="<?php //echo esc_url( site_url( '/' ) ); ?>wp-content/uploads/2017/11/1.jpg">-->
                <br />
                <p id="a-year" class="size-one center-text"> a year will get the most needed treatment.</p>
            </div>
            <br />
            <a href="<?php echo esc_url( site_url( '/' ) ); ?>en/become-a-friend/#donate_button_hook" class="button-donate-post"></a>
            <h2 class="font-blue amatic center-text size-five font-bold" id="thank-you-all" style="margin-bottom: 60px;margin-top:60px;">THANK YOU ALL FOR YOUR HELP!</h2>
            <!-- <div class="empty-space"></div> -->
        </div>
    </div>
    <!-- .container -->
    <?php } ?>
    <?php get_footer(); ?>
