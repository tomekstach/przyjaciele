<?php

/**
 * materialwp functions and definitions
 *
 * @package materialwp
 */
if (!function_exists('materialwp_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function materialwp_setup()
  {
    /**
     * Set the content width based on the theme's design and stylesheet.
     */
    global $content_width;
    if (!isset($content_width)) {
      $content_width = 640; /* pixels */
    }
    /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on materialwp, use a find and replace
	 * to change 'materialwp' to the name of your theme in all the template files
	 */
    load_theme_textdomain('materialwp', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    //Suport for WordPress 4.1+ to display titles
    add_theme_support('title-tag');

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
      'primary' => __('Primary Menu', 'materialwp'),
    ));

    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
    add_theme_support('html5', array(
      'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ));
    /*
	 * Enable support for Post Formats.
	 * See https://codex.wordpress.org/Post_Formats
	 */
    // add_theme_support( 'post-formats', array(
    // 	'aside', 'image', 'video', 'quote', 'link',
    // ) );

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('materialwp_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )));
  }
endif; // materialwp_setup
add_action('after_setup_theme', 'materialwp_setup');

/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function materialwp_widgets_init()
{
  register_sidebar(array(
    'name'          => __('Sidebar', 'materialwp'),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="panel panel-warning">',
    'after_widget'  => '</div></aside>',
    'before_title'  => ' <div class="panel-heading"><h3 class="panel-title">',
    'after_title'   => '</h3></div>',
  ));
}
add_action('widgets_init', 'materialwp_widgets_init');
/**
 * Enqueue scripts and styles.
 */
function materialwp_scripts()
{
  wp_enqueue_style('mwp-bootstrap-styles', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.css', array(), '3.3.6', 'all');
  wp_enqueue_style('mwp-roboto-styles', get_template_directory_uri() . '/bower_components/bootstrap-material-design/dist/css/roboto.min.css', array(), '', 'all');
  wp_enqueue_style('mwp-material-styles', get_template_directory_uri() . '/bower_components/bootstrap-material-design/dist/css/material-fullpalette.min.css', array(), '', 'all');
  wp_enqueue_style('mwp-ripples-styles', get_template_directory_uri() . '/bower_components/bootstrap-material-design/dist/css/ripples.min.css', array(), '', 'all');
  wp_enqueue_style('materialwp-style', get_stylesheet_uri());
  wp_enqueue_script('mwp-bootstrap-js', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '3.3.6', true);
  wp_enqueue_script('mwp-ripples-js', get_template_directory_uri() . '/bower_components/bootstrap-material-design/dist/js/ripples.min.js', array('jquery'), '', true);
  wp_enqueue_script('mwp-material-js', get_template_directory_uri() . '/bower_components/bootstrap-material-design/dist/js/material.min.js', array('jquery'), '', true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'materialwp_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Adds a Walker class for the Bootstrap Navbar.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';
/**
 * Comments Callback.
 */
require get_template_directory() . '/inc/comments-callback.php';

function az()
{
  wp_enqueue_style('custom', get_template_directory_uri() . '/custom_style.css');
  wp_enqueue_style('circle', get_template_directory_uri() . '/circle.css');
  wp_enqueue_style('rwd', get_template_directory_uri() . '/css/rwd.css');
  wp_enqueue_style('lp', get_template_directory_uri() . '/css/lp.css');
  wp_enqueue_style('wwa', get_template_directory_uri() . '/css/wwa.css');
  wp_enqueue_style('hwh', get_template_directory_uri() . '/css/hwh.css');
  wp_enqueue_style('baf', get_template_directory_uri() . '/css/baf.css');
  wp_enqueue_style('of', get_template_directory_uri() . '/css/of.css');
  wp_enqueue_style('cu', get_template_directory_uri() . '/css/cu.css');
  wp_enqueue_style('menu', get_template_directory_uri() . '/css/menu.css');
  wp_enqueue_style('filip', get_template_directory_uri() . '/css/filip.css');
  wp_enqueue_style('rwd-second', get_template_directory_uri() . '/rwd-second.css');
  wp_enqueue_style('owl', get_template_directory_uri() . '/owl/owl.carousel.min.css');
  wp_enqueue_style('owl-theme', get_template_directory_uri() . '/owl/owl.theme.default.min.css');
  wp_enqueue_script('owl-script', get_stylesheet_directory_uri() . '/owl/owl.carousel.min.js', array('jquery'));
  wp_enqueue_script('custom-script-query', get_stylesheet_directory_uri() . '/custom_script_jquery.js', array('jquery'), '2.0.1');
}
add_action('wp_enqueue_scripts', 'az');

register_nav_menus(array(
  'primary' => __('Primary Menu', 'yourtheme'),
  'secondary' => __('Secondary Menu', 'yourtheme'),
  'lang-menu' => __('Language Menu'),
  'donate-bar' => __('Donation mobile bar'),
  'footer-menu' => __('Menu stopki')
));


function bgcheck()
{
  if (is_home() || is_front_page()) {
    wp_enqueue_script('bg-check', get_stylesheet_directory_uri() . '/bg-check.js', array('jquery'));
  }
};
add_action('wp_enqueue_scripts', 'bgcheck');

// ########################################################
// ##############Rejestracja custom Post Type##############
// ########################################################

function create_post_type()
{
  register_post_type(
    'donate',
    array(
      'labels' => array(
        'name' => __('Donates'),
        'singular_name' => __('Donate')
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'     => 'dashicons-performance',
      'taxonomies'    => array('category'),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    )
  );
}
add_action('init', 'create_post_type');
// ########################################################
// ##############Tworzenie shordcode#######################
// ########################################################

//Sprzęt medyczny
function medycznyEq()
{
  $args = array(
    'post_type' => 'donate',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => 'medyczne',
      ),
    ),
  );
?>
<div id="equipment-row-car" class="owl-carousel">
  <?php $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();
    ?>
  <div class="realizacja-col">
    <div class="realizacja__inner">
      <div class="equ_medical_title">
        <h2 class="font-blue raleway center-text"><strong><a class="font-bold"
              href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></h2>
      </div>
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_img"
          style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat; background-size: cover;background-position: center">
          <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-responsive')); ?>  -->
        </div>
        <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
        <a href="<?php the_permalink(); ?>">
          <div class="equ_medical_info payPig">
            <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
              <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
              <a href="<?php the_permalink(); ?>"><img id="image-check"
                  src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png"></a>
              <?php } else { ?>
              <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
                  class="carousel-procent">%</span></span>
              <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
              </div>
              <?php } ?>
            </div>
            <a href="<?php the_permalink(); ?>">
              <p class="aim font-blue raleway center-text customPlease">WPŁAĆ</p>
              <p class="aim font-blue raleway center-text size-two-new font-bold customSupport"
                style="font-size: 1.4em;">I POMÓŻ TERAZ!</p>
            </a>
          </div>
        </a>
        <?php } else { ?>
        <div class="equ_medical_info">
          <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
            <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
            <a href="<?php the_permalink(); ?>"><img id="image-check"
                src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png"></a>
            <?php } else { ?>
            <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
                class="carousel-procent">%</span></span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
            <?php } ?>
          </div>
          <p class="aim font-blue raleway center-text aim-heading">CEL:</p>
          <p class="aim font-blue raleway center-text font-bold aim-price" style="font-size: 1.6em;">
            <?php echo get_post_meta(get_the_ID(), 'priceMedicalEquipment', TRUE); ?> zł</p>
        </div>
        <?php } ?>
      </a>
      <div class="equ_medical_button">
        <a href="<?php the_permalink(); ?>">WIĘCEJ</a>
      </div>
    </div>
  </div>
  <?php
    endwhile;
    ?>
</div>
<?php
}

function medycznyShortcode()
{
  echo medycznyEq();
}
add_shortcode('medycznyEquipment', 'medycznyShortcode');

//Funding medical equipment carousel
function mediaclEq()
{
  $args = array(
    'post_type' => 'donate',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => 'medical',
      ),
    ),
  );
?>
<div id="equipment-row-car" class="owl-carousel">
  <?php
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();
    ?>
  <div class="realizacja-col">
    <div class="realizacja__inner">
      <div class="equ_medical_title">
        <h2 class="font-blue raleway center-text">
          <a class="font-bold" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
      </div>
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_img"
          style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat; background-size: cover;background-position: center">
          <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-responsive')); ?>  -->
        </div>
      </a>
      <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_info payPig">
          <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
            <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
            <img id="image-check" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png">
            <?php } else { ?>
            <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
                class="carousel-procent">%</span></span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
            <?php } ?>
          </div>
          <p class="aim font-blue raleway center-text customPlease">Please:</p>
          <p class="aim font-blue raleway center-text size-two-new font-bold customSupport" style="font-size: 1.4em;">
            Support</p>
        </div>
      </a>
      <?php } else { ?>
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_info">
          <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
            <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
            <a href="<?php the_permalink(); ?>"><img id="image-check"
                src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png"></a>
            <?php } else { ?>
            <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
                class="carousel-procent">%</span></span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
            <?php } ?>
          </div>
          <p class="aim font-blue raleway center-text aim-heading">AIM:</p>
          <p class="aim font-blue raleway center-text font-bold aim-price" style="font-size: 1.6em;">
            <?php echo get_post_meta(get_the_ID(), 'priceMedicalEquipment', TRUE); ?> PLN</p>
        </div>
      </a>
      <?php } ?>

      <div class="equ_medical_button">
        <a href="<?php the_permalink(); ?>">READ MORE</a>
      </div>

    </div>
  </div>
  <?php
    endwhile;
    ?>
</div>
<?php
}

function medicalShortcode()
{
  echo mediaclEq();
}
add_shortcode('fundingMedicialEquipment', 'medicalShortcode');

// ########################################################
// ##############Tworzenie shordcode zakończonych##########
// ########################################################
//Finished Donate En
function finishedDonate()
{
  $args = array(
    'post_type' => 'donate',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => 'finished',
      ),
    ),
  );
?>
<div id="car-finish" class="owl-carousel">
  <?php
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();
    ?>
  <div class="realizacja-col">
    <div class="realizacja__inner">
      <div class="equ_medical_title finished_title">
        <h2 class="font-blue raleway center-text">
          <a class="font-bold" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
      </div>
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_img finished_info"
          style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat; background-size: cover;background-position: center">
          <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-responsive')); ?>  -->
        </div>
        <div class="equ_medical_info">
          <div class="c100 p100 green">
            <span class="font-blue">100<span class="carousel-procent">%</span></span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
          </div>
          <p class="aim font-blue raleway center-text aim-heading">AIM:</p>
          <p class="aim font-blue raleway center-text size-two font-bold aim-price">
            <?php echo get_post_meta(get_the_ID(), 'priceMedicalEquipment', TRUE); ?> <span
              class="carousel-pln">zł</span></p>
        </div>
      </a>
      <p class="current_content center-text">
        <?php the_excerpt(); ?>
      </p>
      <div class="equ_medical_button">
        <!-- <a href="<?php //the_permalink(); 
                          ?>">READ MORE</a> -->
      </div>
    </div>
  </div>
  <?php
    endwhile;
    ?>
</div>
<?php
}
function categoryShortcodeFinished()
{
  echo finishedDonate();
}
add_shortcode('finishedDonateProject', 'categoryShortcodeFinished');

//Finished Donate Pl
function finishedDonatePl()
{
  $args = array(
    'post_type' => 'donate',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => 'ukonczone',
      ),
    ),
  );
?>
<div id="car-finish" class="owl-carousel">
  <?php
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();
    ?>
  <div class="realizacja-col">
    <div class="realizacja__inner">
      <div class="equ_medical_title finished_title">
        <h2 class="font-blue raleway center-text">
          <a class="font-bold" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
      </div>
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_img finished_info"
          style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat; background-size: cover;background-position: center">
          <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-responsive')); ?>  -->
        </div>
        <div class="equ_medical_info">
          <div class="c100 p100 green">
            <span class="font-blue">100<span class="carousel-procent">%</span></span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
          </div>
          <p class="aim font-blue raleway center-text aim-heading">CEL:</p>
          <p class="aim font-blue raleway center-text size-two font-bold aim-price">
            <?php echo get_post_meta(get_the_ID(), 'priceMedicalEquipment', TRUE); ?> <span
              class="carousel-pln">zł</span></p>
        </div>
      </a>
      <p class="current_content center-text">
        <?php the_excerpt(); ?>
      </p>
      <div class="equ_medical_button">
        <!-- <a href="<?php //the_permalink(); 
                          ?>">READ MORE</a> -->
      </div>
    </div>
  </div>
  <?php
    endwhile;
    ?>
</div>
<?php
}

function categoryShortcodeFinishedPl()
{
  echo finishedDonatePl();
}
add_shortcode('finishedDonateProjectPl', 'categoryShortcodeFinishedPl');
// ########################################################
// ###########Tworzenie shordcode current project##########
// ########################################################

function currentProject()
{
  $args = array(
    'post_type' => 'donate',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => 'current-project',
      ),
    ),
  );
?>

<div id="carusel_current_project" class="owl-carousel">
  <?php
    $loop = new WP_Query($args);
    ?>

  <?php
    while ($loop->have_posts()) : $loop->the_post();
    ?>

  <div class="realizacja-col">
    <div class="realizacja__inner">
      <div class="equ_medical_title">
        <h2 class="font-blue raleway center-text">
          <a class="font-bold" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
      </div>
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_img current_info"
          style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat; background-size: cover;background-position: center">
          <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-responsive')); ?>  -->
        </div>

        <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
        <div class="equ_medical_info payPig">
          <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
            <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
            <img id="image-check" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png">
            <?php } else { ?>
            <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
                class="carousel-procent">%</span></span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
            <?php } ?>
          </div>
          <p class="aim font-blue raleway center-text customPlease">Please:</p>
          <p class="aim font-blue raleway center-text size-two-new font-bold customSupport">Support</p>
        </div>
        <?php } else { ?>
        <div class="equ_medical_info">
          <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
            <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
            <img id="image-check" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png">
            <?php } else { ?>
            <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
                class="carousel-procent">%</span></span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
            <?php } ?>
          </div>
          <p class="aim font-blue raleway center-text aim-heading">AIM:</p>
          <p class="aim font-blue raleway center-text font-bold aim-price" style="font-size: 1.6em;">
            <?php echo get_post_meta(get_the_ID(), 'priceMedicalEquipment', TRUE); ?> PLN</p>
        </div>
        <?php } ?>
      </a>
      <p class="current_content center-text">
        <?php the_excerpt(); ?>
      </p>
      <div class="equ_medical_button">
        <a href="<?php the_permalink(); ?>">READ MORE</a>
      </div>
    </div>
  </div>

  <?php
    endwhile;
    ?>

</div>

<?php
}

function categoryShortcodeCurrent()
{
  echo currentProject();
}
add_shortcode('currentProjectDonate', 'categoryShortcodeCurrent');

//currentProjectDonatePl

function currentProjectPl()
{
  $args = array(
    'post_type' => 'donate',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => 'biezace-projekty',
      ),
    ),
  );
?>

<div id="carusel_current_project" class="owl-carousel">
  <?php
    $loop = new WP_Query($args);
    ?>

  <?php
    while ($loop->have_posts()) : $loop->the_post();
    ?>

  <div class="realizacja-col">
    <div class="realizacja__inner">
      <div class="equ_medical_title">
        <h2 class="font-blue raleway center-text">
          <a class="font-bold" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
      </div>
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_img current_info"
          style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat; background-size: cover;background-position: center">
          <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-responsive')); ?>  -->
        </div>

        <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
        <a href="<?php the_permalink(); ?>">
          <div class="equ_medical_info payPig">
            <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
              <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
              <img id="image-check" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png">
              <?php } else { ?>
              <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
                  class="carousel-procent">%</span></span>
              <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
              </div>
              <?php } ?>
            </div>
            <a href="<?php the_permalink(); ?>">
              <p class="aim font-blue raleway center-text customPlease">WPŁAĆ</p>
              <p class="aim font-blue raleway center-text size-two-new font-bold customSupport">I POMÓŻ TERAZ!</p>
            </a>
          </div>
        </a>
        <?php } else { ?>
        <div class="equ_medical_info">
          <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
            <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
            <img id="image-check" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png">
            <?php } else { ?>
            <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
                class="carousel-procent">%</span></span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
            <?php } ?>
          </div>
          <p class="aim font-blue raleway center-text aim-heading">CEL:</p>
          <p class="aim font-blue raleway center-text font-bold aim-price" style="font-size: 1.6em;">
            <?php echo get_post_meta(get_the_ID(), 'priceMedicalEquipment', TRUE); ?> zł</p>
        </div>
        <?php } ?>
      </a>
      <p class="current_content center-text">
        <?php the_excerpt(); ?>
      </p>
      <div class="equ_medical_button">
        <a href="<?php the_permalink(); ?>">WIĘCEJ</a>
      </div>
    </div>
  </div>

  <?php
    endwhile;
    ?>

</div>

<?php
}

function categoryShortcodeCurrentPl()
{
  echo currentProjectPl();
}
add_shortcode('currentProjectDonatePl', 'categoryShortcodeCurrentPl');

// ########################################################
// ###########Tworzenie shordcode wpisy####################
// ########################################################

//POLSKIE WPISY
function wpisyPost()
{
  $args = array(
    'post_type' => 'post',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => 'wpisy',
      ),
    ),
  );
  $loop = new WP_Query($args);
?>
<!-- <div class="prv-current"><img src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/11/back.png"></div> -->
<div id="car-wpisy" class="owl-carousel">
  <?php
    while ($loop->have_posts()) : $loop->the_post();
    ?>
  <div class="realizacja-col">
    <div class="realizacja__inner">
      <!-- <div class="equ_medical_title"> -->
      <!-- <h2 class="font-blue raleway center-text size-two-half font-bold"><?php the_title(); ?></h2> -->
      <!-- </div> -->
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_img current_info"
          style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat; background-size: cover;background-position: center">
          <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-responsive')); ?>  -->
        </div>
      </a>
      <p class="current_content center-text">
        <?php the_excerpt(); ?>
      </p>
      <div class="equ_medical_button">
        <a href="<?php the_permalink(); ?>">WIĘCEJ</a>
      </div>
    </div>
  </div>
  <?php
    endwhile;
    ?>
</div>
<!-- <div class="next-current3"><img src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/11/next.png"></div> -->
<?php
}

function categoryShortcodeWpisy()
{
  echo wpisyPost();
}
add_shortcode('wpisyShortcode', 'categoryShortcodeWpisy');

//ANGIELSKIE WPISY
function newsPost()
{
  $args = array(
    'post_type' => 'post',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => 'news',
      ),
    ),
  );
  $loop = new WP_Query($args);
?>
<!-- <div class="prv-current"><img src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/11/back.png"></div> -->
<div id="car-wpisy" class="owl-carousel">
  <?php
    while ($loop->have_posts()) : $loop->the_post();
    ?>
  <div class="realizacja-col">
    <div class="realizacja__inner">
      <!-- <div class="equ_medical_title"> -->
      <!-- <h2 class="font-blue raleway center-text size-two-half font-bold"><?php the_title(); ?></h2> -->
      <!-- </div> -->
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_img current_info"
          style="background: url(<?php the_post_thumbnail_url(); ?>)no-repeat; background-size: cover;background-position: center">
          <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-responsive')); ?>  -->
        </div>
      </a>
      <p class="current_content center-text">
        <?php the_excerpt(); ?>
      </p>
      <div class="equ_medical_button">
        <a href="<?php the_permalink(); ?>">READ MORE</a>
      </div>
    </div>
  </div>
  <?php
    endwhile;
    ?>
</div>
<!-- <div class="next-current3"><img src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/11/next.png"></div> -->
<?php
}

function categoryShortcodeNews()
{
  echo newsPost();
}
add_shortcode('newsShortcode', 'categoryShortcodeNews');
// ########################################################
// ###########Tworzenie shordcode PAY GRID#################
// ########################################################

function payDonateGrid($atts = [], $content = null, $tag = '')
{
  // normalize attribute keys, lowercase
  $atts = array_change_key_case((array) $atts, CASE_LOWER);

  // override default attributes with user attributes
  $donate_atts = shortcode_atts(
    array(
      'terms' => 'pay-donate',
    ),
    $atts,
    $tag
  );

  $args = array(
    'post_type' => 'donate',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => $donate_atts['terms'],
      ),
    ),
  );
  $loop = new WP_Query($args);
  $numberId = 0;
  while ($loop->have_posts()) : $loop->the_post();
    $numberId++;
  ?>
<div class="col-xs-12 col-sm-6 col-md-4 realizacja-col payDonateGrid">
  <div class="payDonateGrid<?php echo $numberId; ?>">
    <div class="equ_medical_title">
      <h2 class="font-blue raleway center-text">
        <a class="font-bold" href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
    </div>
    <a href="<?php the_permalink(); ?>">
      <div class="equ_medical_img current_info payGridImage" test-background="<?php the_post_thumbnail_url(); ?>"
        style="background-image: url(<?php the_post_thumbnail_url(); ?>);background-repeat: no-repeat; background-size: cover;background-position: center">
        <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-responsive')); ?>  -->
      </div>
    </a>
    <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
    <div class="equ_medical_info payPig">
      <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
        <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
        <img id="image-check" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png">
        <?php } else { ?>
        <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
            class="carousel-procent">%</span></span>
        <div class="slice">
          <div class="bar"></div>
          <div class="fill"></div>
        </div>
        <?php } ?>
      </div>
      <p class="aim font-blue raleway center-text customPlease" style="font-size: 1.1em;">Please:</p>
      <p class="aim font-blue raleway center-text size-two-new font-bold customSupport" style="font-size: 1.3em;">
        Support</p>
    </div>
    <?php } else { ?>
    <div class="equ_medical_info">
      <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
        <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
        <img id="image-check" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png">
        <?php } else { ?>
        <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
            class="carousel-procent">%</span></span>
        <div class="slice">
          <div class="bar"></div>
          <div class="fill"></div>
        </div>
        <?php } ?>
      </div>
      <p class="aim font-blue raleway center-text aim-heading">AIM:</p>
      <p class="aim font-blue raleway center-text font-bold aim-price" style="font-size: 1.6em;">
        <?php echo get_post_meta(get_the_ID(), 'priceMedicalEquipment', TRUE); ?> PLN</p>
    </div>
    <?php } ?>
  </div>
</div>
<?php
  endwhile;
}

function payDonateGridInit()
{
  add_shortcode('payDonateGrid', 'payDonateGrid');
}
add_action('init', 'payDonateGridInit');

//Polski donate shortcode
function payDonateGridPl($atts = [], $content = null, $tag = '')
{
  // normalize attribute keys, lowercase
  $atts = array_change_key_case((array) $atts, CASE_LOWER);

  // override default attributes with user attributes
  $donate_atts = shortcode_atts(
    array(
      'terms' => 'wplac-datek',
    ),
    $atts,
    $tag
  );

  $args = array(
    'post_type' => 'donate',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => $donate_atts['terms'],
      ),
    ),
  );
  $loop = new WP_Query($args);
  $numberId = 0;
  while ($loop->have_posts()) : $loop->the_post();
    $numberId++;
  ?>
<div class="col-xs-12 col-sm-6 col-md-4 realizacja-col payDonateGrid">
  <div class="payDonateGrid<?php echo $numberId; ?>">
    <div class="equ_medical_title">
      <h2 class="font-blue raleway center-text">
        <a class="font-bold" href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
    </div>
    <a href="<?php the_permalink(); ?>">
      <div class="equ_medical_img current_info payGridImage" test-background="<?php the_post_thumbnail_url(); ?>"
        style="background-image: url(<?php the_post_thumbnail_url(); ?>);background-repeat: no-repeat; background-size: cover;background-position: center">
        <!-- <?php the_post_thumbnail(array(1024, 512), array('class' => 'img-responsive')); ?>  -->
      </div>

      <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
      <a href="<?php the_permalink(); ?>">
        <div class="equ_medical_info payPig">
          <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
            <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
            <img id="image-check" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png">
            <?php } else { ?>
            <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
                class="carousel-procent">%</span></span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
            <?php } ?>
          </div>
          <a href="<?php the_permalink(); ?>">
            <p class="aim font-blue raleway center-text customPlease" style="font-size: 1.1em;">WPŁAĆ</p>
            <p class="aim font-blue raleway center-text size-two-new font-bold customSupport" style="font-size: 1.3em;">
              I POMÓŻ TERAZ!</p>
          </a>
        </div>
      </a>
      <?php } else { ?>
      <div class="equ_medical_info">
        <div class="c100 p<?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?> green">
          <?php if (get_post_meta(get_the_ID(), 'field_id', TRUE)) { ?>
          <img id="image-check" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/10/icon.png">
          <?php } else { ?>
          <span class="font-blue"><?php echo get_post_meta(get_the_ID(), 'percentMedicialEquipment', TRUE); ?><span
              class="carousel-procent">%</span></span>
          <div class="slice">
            <div class="bar"></div>
            <div class="fill"></div>
          </div>
          <?php } ?>
        </div>
        <p class="aim font-blue raleway center-text aim-heading">CEL:</p>
        <p class="aim font-blue raleway center-text font-bold aim-price" style="font-size: 1.6em;">
          <?php echo get_post_meta(get_the_ID(), 'priceMedicalEquipment', TRUE); ?> zł</p>
      </div>
      <?php } ?>
    </a>
  </div>
</div>
<?php
  endwhile;
}

function payDonateGridPlInit()
{
  add_shortcode('payDonateGridPl', 'payDonateGridPl');
}
add_action('init', 'payDonateGridPlInit');

// ########################################################
// ##############Tworzenie metaboxa########################
// ########################################################
function fundingMedicialBox()
{
  global $post;
  echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
    wp_create_nonce(plugin_basename(__FILE__)) . '" />';

  $specialDonateTitle = get_post_meta($post->ID, 'specialDonateTitle', true);
  echo '<h4>Ustawinie specjalnego tytułu w Donate</h4><input type="text" name="specialDonateTitle" value="' . $specialDonateTitle  . '" class="widefat" />';
  $priceMedicalEquipment = get_post_meta($post->ID, 'priceMedicalEquipment', true);
  echo '<h4>Cel (kwota):</h4><input type="text" name="priceMedicalEquipment" value="' . $priceMedicalEquipment  . '" class="widefat" />';
  $nowMoney = get_post_meta($post->ID, 'nowMoney', true);
  echo '<h4>Pozostała kwota do uzbierania.</h4><input type="text" name="nowMoney" value="' . $nowMoney  . '" class="widefat" />';
  $percentMedicialEquipment = get_post_meta($post->ID, 'percentMedicialEquipment', true);
  echo '<h4>Zrealizowano (%):</h4><input type="number" name="percentMedicialEquipment" value="' . $percentMedicialEquipment  . '" class="widefat" />';
  // $field_id = get_post_meta($post->ID, 'priceMedicalEquipment', false);
  $howmanychildren = get_post_meta($post->ID, 'howmanychildren', true);
  echo '<h4>Ile dzieci?</h4><input type="text" name="howmanychildren" value="' . $howmanychildren  . '" class="widefat" />';
  ?>
<label>Zmiana wartości procentowej na ikonę:</label>
<?php $field_id_value = get_post_meta($post->ID, 'field_id', true);
  if ($field_id_value == "yes") $field_id_checked = 'checked="checked"'; ?>
<input type="checkbox" name="field_id" value="yes" <?php echo $field_id_checked; ?> />
<?php

}

// zapisywanie danych z metaboxa
function wpt_save_events_meta($post_id, $post)
{

  if (!wp_verify_nonce($_POST['eventmeta_noncename'], plugin_basename(__FILE__))) {
    return $post->ID;
  }

  if (!current_user_can('edit_post', $post->ID))
    return $post->ID;

  $events_meta['priceMedicalEquipment'] = $_POST['priceMedicalEquipment'];
  $events_meta['percentMedicialEquipment'] = $_POST['percentMedicialEquipment'];
  $events_meta['howmanychildren'] = $_POST['howmanychildren'];
  $events_meta['specialDonateTitle'] = $_POST['specialDonateTitle'];
  $events_meta['nowMoney'] = $_POST['nowMoney'];
  update_post_meta($post->ID, "field_id", $_POST["field_id"]);

  foreach ($events_meta as $key => $value) {
    if ($post->post_type == 'revision') return;
    $value = implode(',', (array)$value);
    if (get_post_meta($post->ID, $key, FALSE)) {
      update_post_meta($post->ID, $key, $value);
    } else {
      add_post_meta($post->ID, $key, $value);
    }
    if (!$value) delete_post_meta($post->ID, $key);
  }
}

add_action('save_post', 'wpt_save_events_meta', 1, 2);

// Dodawanie meta boxa

function add_events_metaboxes()
{
  add_meta_box('donate', 'Pola dotyczące zbiórki.', 'fundingMedicialBox', 'donate', 'side', 'default');
}
add_action('add_meta_boxes', 'add_events_metaboxes');


// ################################################################
// ##################Integracja z przelewami 24####################
// ################################################################
add_theme_support('html5', array('search-form'));

// function custom_excerpt_length( $length ) {
//         return 10;
//     }
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// ################################################################
// ##################Integracja z przelewami 24####################
// ################################################################

include 'Przelewy24_API.php';
function testShordcode()
{
?>
<div id="formularz24-form" class="group-button">
  <button id="id_one_time_giving" class="pay-button" />ONE TIME GIVING</button>
  <button id="monthly_giving_custom" class="pay-button" />MONTHLY GIVING</button>
  <button id="id_traditional_transfer" class="pay-button" />TRADITIONAL TRANSFER</button>
</div>
<div class="box-for-transfer">
  <!-- <p class="center-text font-blue raleway">PLN accounts:</p> -->
  <p style="margin-bottom:35px;" class="raleway center-text font-blue">Our account number</p>
  <h4 style="margin-bottom:0;" class="raleway font-blue center-text font-bold text-upper"><span
      style="font-weight: 300 !important;">PLN: </span>pl 66 1030 1508 0000 0005 0039 8019</h4>
  <!-- <p class="center-text font-blue raleway">US$ accounts:</p> -->
  <h4 style="margin-bottom:0;" class="raleway font-blue center-text font-bold text-upper"><span
      style="font-weight: 300 !important;">USD: </span>pl 22 1030 1508 0000 0005 0039 8035</h4>
  <p style="margin-top:15px;" class="raleway center-text font-blue">SWIFT-Code (BIC): CITIPLPX</p>
  <h3 id="tradition_transfer_title" class="raleway center-text font-blue" style="text-transform: initial !important;">
  </h3>
</div>
<div class="form_przelewy24">
  <form method="post" action="https://secure.przelewy24.pl/trnDirect">

    <?php
      $error = false;
      $returnUrl = "https://www.fundacjaprzyjaciol.org/en/thank-you/";
      $statusUrl = "https://www.fundacjaprzyjaciol.org/nowa/en/become-a-friend/";
      $amount = 1 * 100;
      $currency = "PLN";
      $orderId = md5(session_id() . date("YmdHis"));
      $crc = md5($orderId . "|55948|" . $amount . "|" . $currency . "|7211e67796a786de");
      ?>

    <input type="hidden" style="width:250px" name="salt" value="7211e67796a786de" />
    <input type="hidden" style="width:250px" name="p24_merchant_id" value="55948" />
    <input type="hidden" style="width:250px" name="p24_pos_id" value="55948" />
    <input id="orderId" type="hidden" style="width:250px" name="p24_session_id" value="<?php echo $orderId ?>" />
    <input type="hidden" id="testPrzel" name="p24_amount" value="20000" min="0" step="20" max="500">
    <input type="hidden" style="width:250px" name="p24_currency" value="<?php echo $currency; ?>" />
    <input id="p24_description" type="hidden" style="width:250px" name="p24_description"
      value="Wsparcie / <?php echo $orderId; ?>" />
    <input id="p24_email" type="hidden" style="width:250px" name="p24_email" value="" />
    <input id="p24_client" type="hidden" style="width:250px" name="p24_client" value="" />
    <input type="hidden" style="width:250px" name="p24_country" value="PL" />
    <input type="hidden" style="width:250px" name="p24_url_return" value="<?php echo $returnUrl; ?>" />
    <input type="hidden" style="width:250px" name="p24_url_status" value="<?php echo $statusUrl; ?>" />
    <input type="hidden" style="width:250px" name="p24_api_version" value="3.2" />
    <input id="customCrc" type="hidden" style="width:250px" name="p24_sign" value="" />
    <input type="hidden" style="width:250px" name="p24_language" value="PL" />
    <input type="hidden" style="width:250px" name="p24_encoding" value="UTF-8" />

    <script>
    var MD5 = function(s) {
      function L(k, d) {
        return (k << d) | (k >>> (32 - d))
      }

      function K(G, k) {
        var I, d, F, H, x;
        F = (G & 2147483648);
        H = (k & 2147483648);
        I = (G & 1073741824);
        d = (k & 1073741824);
        x = (G & 1073741823) + (k & 1073741823);
        if (I & d) {
          return (x ^ 2147483648 ^ F ^ H)
        }
        if (I | d) {
          if (x & 1073741824) {
            return (x ^ 3221225472 ^ F ^ H)
          } else {
            return (x ^ 1073741824 ^ F ^ H)
          }
        } else {
          return (x ^ F ^ H)
        }
      }

      function r(d, F, k) {
        return (d & F) | ((~d) & k)
      }

      function q(d, F, k) {
        return (d & k) | (F & (~k))
      }

      function p(d, F, k) {
        return (d ^ F ^ k)
      }

      function n(d, F, k) {
        return (F ^ (d | (~k)))
      }

      function u(G, F, aa, Z, k, H, I) {
        G = K(G, K(K(r(F, aa, Z), k), I));
        return K(L(G, H), F)
      }

      function f(G, F, aa, Z, k, H, I) {
        G = K(G, K(K(q(F, aa, Z), k), I));
        return K(L(G, H), F)
      }

      function D(G, F, aa, Z, k, H, I) {
        G = K(G, K(K(p(F, aa, Z), k), I));
        return K(L(G, H), F)
      }

      function t(G, F, aa, Z, k, H, I) {
        G = K(G, K(K(n(F, aa, Z), k), I));
        return K(L(G, H), F)
      }

      function e(G) {
        var Z;
        var F = G.length;
        var x = F + 8;
        var k = (x - (x % 64)) / 64;
        var I = (k + 1) * 16;
        var aa = Array(I - 1);
        var d = 0;
        var H = 0;
        while (H < F) {
          Z = (H - (H % 4)) / 4;
          d = (H % 4) * 8;
          aa[Z] = (aa[Z] | (G.charCodeAt(H) << d));
          H++
        }
        Z = (H - (H % 4)) / 4;
        d = (H % 4) * 8;
        aa[Z] = aa[Z] | (128 << d);
        aa[I - 2] = F << 3;
        aa[I - 1] = F >>> 29;
        return aa
      }

      function B(x) {
        var k = "",
          F = "",
          G, d;
        for (d = 0; d <= 3; d++) {
          G = (x >>> (d * 8)) & 255;
          F = "0" + G.toString(16);
          k = k + F.substr(F.length - 2, 2)
        }
        return k
      }

      function J(k) {
        k = k.replace(/rn/g, "n");
        var d = "";
        for (var F = 0; F < k.length; F++) {
          var x = k.charCodeAt(F);
          if (x < 128) {
            d += String.fromCharCode(x)
          } else {
            if ((x > 127) && (x < 2048)) {
              d += String.fromCharCode((x >> 6) | 192);
              d += String.fromCharCode((x & 63) | 128)
            } else {
              d += String.fromCharCode((x >> 12) | 224);
              d += String.fromCharCode(((x >> 6) & 63) | 128);
              d += String.fromCharCode((x & 63) | 128)
            }
          }
        }
        return d
      }
      var C = Array();
      var P, h, E, v, g, Y, X, W, V;
      var S = 7,
        Q = 12,
        N = 17,
        M = 22;
      var A = 5,
        z = 9,
        y = 14,
        w = 20;
      var o = 4,
        m = 11,
        l = 16,
        j = 23;
      var U = 6,
        T = 10,
        R = 15,
        O = 21;
      s = J(s);
      C = e(s);
      Y = 1732584193;
      X = 4023233417;
      W = 2562383102;
      V = 271733878;
      for (P = 0; P < C.length; P += 16) {
        h = Y;
        E = X;
        v = W;
        g = V;
        Y = u(Y, X, W, V, C[P + 0], S, 3614090360);
        V = u(V, Y, X, W, C[P + 1], Q, 3905402710);
        W = u(W, V, Y, X, C[P + 2], N, 606105819);
        X = u(X, W, V, Y, C[P + 3], M, 3250441966);
        Y = u(Y, X, W, V, C[P + 4], S, 4118548399);
        V = u(V, Y, X, W, C[P + 5], Q, 1200080426);
        W = u(W, V, Y, X, C[P + 6], N, 2821735955);
        X = u(X, W, V, Y, C[P + 7], M, 4249261313);
        Y = u(Y, X, W, V, C[P + 8], S, 1770035416);
        V = u(V, Y, X, W, C[P + 9], Q, 2336552879);
        W = u(W, V, Y, X, C[P + 10], N, 4294925233);
        X = u(X, W, V, Y, C[P + 11], M, 2304563134);
        Y = u(Y, X, W, V, C[P + 12], S, 1804603682);
        V = u(V, Y, X, W, C[P + 13], Q, 4254626195);
        W = u(W, V, Y, X, C[P + 14], N, 2792965006);
        X = u(X, W, V, Y, C[P + 15], M, 1236535329);
        Y = f(Y, X, W, V, C[P + 1], A, 4129170786);
        V = f(V, Y, X, W, C[P + 6], z, 3225465664);
        W = f(W, V, Y, X, C[P + 11], y, 643717713);
        X = f(X, W, V, Y, C[P + 0], w, 3921069994);
        Y = f(Y, X, W, V, C[P + 5], A, 3593408605);
        V = f(V, Y, X, W, C[P + 10], z, 38016083);
        W = f(W, V, Y, X, C[P + 15], y, 3634488961);
        X = f(X, W, V, Y, C[P + 4], w, 3889429448);
        Y = f(Y, X, W, V, C[P + 9], A, 568446438);
        V = f(V, Y, X, W, C[P + 14], z, 3275163606);
        W = f(W, V, Y, X, C[P + 3], y, 4107603335);
        X = f(X, W, V, Y, C[P + 8], w, 1163531501);
        Y = f(Y, X, W, V, C[P + 13], A, 2850285829);
        V = f(V, Y, X, W, C[P + 2], z, 4243563512);
        W = f(W, V, Y, X, C[P + 7], y, 1735328473);
        X = f(X, W, V, Y, C[P + 12], w, 2368359562);
        Y = D(Y, X, W, V, C[P + 5], o, 4294588738);
        V = D(V, Y, X, W, C[P + 8], m, 2272392833);
        W = D(W, V, Y, X, C[P + 11], l, 1839030562);
        X = D(X, W, V, Y, C[P + 14], j, 4259657740);
        Y = D(Y, X, W, V, C[P + 1], o, 2763975236);
        V = D(V, Y, X, W, C[P + 4], m, 1272893353);
        W = D(W, V, Y, X, C[P + 7], l, 4139469664);
        X = D(X, W, V, Y, C[P + 10], j, 3200236656);
        Y = D(Y, X, W, V, C[P + 13], o, 681279174);
        V = D(V, Y, X, W, C[P + 0], m, 3936430074);
        W = D(W, V, Y, X, C[P + 3], l, 3572445317);
        X = D(X, W, V, Y, C[P + 6], j, 76029189);
        Y = D(Y, X, W, V, C[P + 9], o, 3654602809);
        V = D(V, Y, X, W, C[P + 12], m, 3873151461);
        W = D(W, V, Y, X, C[P + 15], l, 530742520);
        X = D(X, W, V, Y, C[P + 2], j, 3299628645);
        Y = t(Y, X, W, V, C[P + 0], U, 4096336452);
        V = t(V, Y, X, W, C[P + 7], T, 1126891415);
        W = t(W, V, Y, X, C[P + 14], R, 2878612391);
        X = t(X, W, V, Y, C[P + 5], O, 4237533241);
        Y = t(Y, X, W, V, C[P + 12], U, 1700485571);
        V = t(V, Y, X, W, C[P + 3], T, 2399980690);
        W = t(W, V, Y, X, C[P + 10], R, 4293915773);
        X = t(X, W, V, Y, C[P + 1], O, 2240044497);
        Y = t(Y, X, W, V, C[P + 8], U, 1873313359);
        V = t(V, Y, X, W, C[P + 15], T, 4264355552);
        W = t(W, V, Y, X, C[P + 6], R, 2734768916);
        X = t(X, W, V, Y, C[P + 13], O, 1309151649);
        Y = t(Y, X, W, V, C[P + 4], U, 4149444226);
        V = t(V, Y, X, W, C[P + 11], T, 3174756917);
        W = t(W, V, Y, X, C[P + 2], R, 718787259);
        X = t(X, W, V, Y, C[P + 9], O, 3951481745);
        Y = K(Y, h);
        X = K(X, E);
        W = K(W, v);
        V = K(V, g)
      }
      var i = B(Y) + B(X) + B(W) + B(V);
      return i.toLowerCase()
    };

    window.onload = function() {
      document.getElementById("hash-it").onclick = function() {
        var orderId = document.getElementById("orderId").value;
        var amountID = parseInt(document.getElementById("testPrzel").value);
        var crc = MD5(orderId + "|55948|" + amountID + "|PLN|7211e67796a786de");
        document.getElementById("customCrc").value = crc;
        console.log(amountID);
      }
    }
    </script>

    <div class="information-under">
      <p>Let's stay in touch! Keep up-to date with the latest news and campaigns of the <span>Friends of Children's
          Hospitals in Warsaw</span> straight to your inbox.</p>
    </div>
    <input id="p24_client_custom" type="text" placeholder="Name and Last name" name="p24_client_custom" value=""
      class="przelewy_custom_fields" />
    <input id="p24_email_custom" type="text" placeholder="E-mail" name="p24_email_custom" value=""
      class="przelewy_custom_fields" />
    <div style="margin-top: 30px;">
      <input type="checkbox" id="subscribeNews" name="przelewy_checkbox" required />
      <span id="labelCustomBecome" for="subscribeNews"> I agree to the processing of my personal data for the marketing
        needs by the “Friends of Children’s Hospitals in Warsaw” foundation (“Foundation”) …</span>
    </div>
    <div class="more_info_przelewy">
      <span>[Show more...]</span>
    </div>
    <div class="przelewy_more_hide_information">
      <p>In accordance with the act of 29 August 1997 on Personal Data Protection (Journal of Laws No. 133, item 883)
        and to receive from the Foundation marketing information by electronic means in accordance with the Act of 18
        July 2002 (Journal of Laws No. 144, item 1204, as amended) on the provision of services by electronic means.
        According to Art. 13 sec. 1 and par. 2 of the General Data Protection Regulation of April 27 2016, Foundation
        with its registered office in Warsaw ul. Grzybowska 5a, 00-132 Warsaw, as the Personal Data Administrator,
        inform you that:
      <ul style="list-style: circle;">
        <li class="list_custom_1">The data is voluntary;</li>
        <li class="list_custom_2">You have the right to access and rectify your data, erasure of Your personal data,
          restrict processing or object to such processing, transfer data, revoke consent at any time without affecting
          the legality of processing;</li>
        <li class="list_custom_3">Data may be made available by the Foundation to entities authorized to obtain
          information under applicable law;</li>
        <li class="list_custom_4">The data will be processed on the basis of art. 6 sec. (1) (a) and in line with the
          general data protection regulation;</li>
        <li class="list_custom_5">Personal data will be kept for a period necessary for completion of the Foundation's
          purposes;</li>
        <li class="list_custom_6">You have the right to file a complaint with GIODO when you believe that the processing
          of your personal data is contrary to the provisions of the General Data Protection Regulation of 27 April
          2016.</li>
      </ul>
    </div>
    <div class="submit-btn">
      <input id="hash-it" class="pay-button" type="submit" value="DONATE NOW" style="padding: 20px 30px;" />
    </div>
  </form>
</div>
<div class="paypal-information">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
    <input type="hidden" name="charset" value="utf-8">
    <input type="hidden" name="business" value="kontakt@fundacjaprzyjaciol.org">

    <input type="hidden" name="cmd" value="_xclick-subscriptions">
    <input id="item_name_custom" type="hidden" name="item_name" value="Wsparcie">
    <input type="hidden" name="item_number" value="DIG Weekly">

    <input type="hidden" name="currency_code" value="PLN">
    <input id="field_a3" type="hidden" name="a3" value="200">
    <input type="hidden" name="p3" value="1">
    <input type="hidden" name="t3" value="M">

    <input type="hidden" name="src" value="1">
    <div class="information-under">
      <p>Let's stay in touch! Keep up-to date with the latest news and campaigns of the <span>Friends of Children's
          Hospitals in Warsaw</span> straight to your inbox.</p>
    </div>
    <input id="pp_client_custom" type="text" placeholder="Name and Last name" name="pp_client_custom" value=""
      class="przelewy_custom_fields" />
    <input id="pp_email_custom" type="text" placeholder="E-mail" name="pp_email_custom" value=""
      class="przelewy_custom_fields" />
    <div style="margin-top: 30px;">
      <input type="checkbox" id="subscribeNews" name="przelewy_checkbox" required />
      <span id="labelCustomBecomePay" for="subscribeNews"> I agree to the processing of my personal data for the
        marketing needs by the “Friends of Children’s Hospitals in Warsaw” foundation (“Foundation”) …</span>
    </div>
    <div class="more_info_paypal">
      <span>[Show more...]</span>
    </div>
    <div class="paypal_more_hide_information">
      <p>In accordance with the act of 29 August 1997 on Personal Data Protection (Journal of Laws No. 133, item 883)
        and to receive from the Foundation marketing information by electronic means in accordance with the Act of 18
        July 2002 (Journal of Laws No. 144, item 1204, as amended) on the provision of services by electronic means.
        According to Art. 13 sec. 1 and par. 2 of the General Data Protection Regulation of April 27 2016, Foundation
        with its registered office in Warsaw ul. Grzybowska 5a, 00-132 Warsaw, as the Personal Data Administrator,
        inform you that:</p>
      <ul style="list-style: circle;">
        <li class="list_custom_1">The data is voluntary;</li>
        <li class="list_custom_2">You have the right to access and rectify your data, erasure of Your personal data,
          restrict processing or object to such processing, transfer data, revoke consent at any time without affecting
          the legality of processing;</li>
        <li class="list_custom_3">Data may be made available by the Foundation to entities authorized to obtain
          information under applicable law;</li>
        <li class="list_custom_4">The data will be processed on the basis of art. 6 sec. (1) (a) and in line with the
          general data protection regulation;</li>
        <li class="list_custom_5">Personal data will be kept for a period necessary for completion of the Foundation's
          purposes;</li>
        <li class="list_custom_6">You have the right to file a complaint with GIODO when you believe that the processing
          of your personal data is contrary to the provisions of the General Data Protection Regulation of 27 April
          2016.</li>
      </ul>
    </div>
    <div class="submit-btn">
      <input id="paypal-button-submit" class="pay-button" type="submit" value="DONATE NOW" name="submit" />
    </div>
  </form>
</div>
<?php
}
add_shortcode('testCode', 'testShordcode');

add_action('edit_form_after_editor', 'no_metabox_wspe_114084');
add_action('save_post', 'save_wpse_114084', 10, 2);

function no_metabox_wspe_114084()
{
  global $post;
  if ('post' != $post->post_type)
    return;

  $editor1 = get_post_meta($post->ID, '_custom_editor_1', true);
  // $editor2 = get_post_meta( $post->ID, '_custom_editor_2', true);

  wp_nonce_field(plugin_basename(__FILE__), 'wspe_114084');
  echo '<h2>Edytor wizulany do dodawania zdjęć</h2>';
  echo wp_editor($editor1, 'custom_editor_1', array('textarea_name' => 'custom_editor_1'));
  // echo '<h2>Aux editor 2</h2>';
  // echo wp_editor( $editor2, 'custom_editor_2', array( 'textarea_name' => 'custom_editor_2' ) );
}

function save_wpse_114084($post_id, $post_object)
{
  if (!isset($post_object->post_type) || 'post' != $post_object->post_type)
    return;

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return;

  if (!isset($_POST['wspe_114084']) || !wp_verify_nonce($_POST['wspe_114084'], plugin_basename(__FILE__)))
    return;

  if (isset($_POST['custom_editor_1']))
    update_post_meta($post_id, '_custom_editor_1', $_POST['custom_editor_1']);

  if (isset($_POST['custom_editor_2']))
    update_post_meta($post_id, '_custom_editor_2', $_POST['custom_editor_2']);
}