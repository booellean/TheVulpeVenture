<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage The_Vulpe_Venture
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

//courtesy of https://code.tutsplus.com/tutorials/display-the-most-recent-post-in-each-category--cms-22677

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<?php
	$do_not_duplicate = array();
	
    $categories = get_categories(); 
 
    foreach ( $categories as $category ) {
 
    }
	
	$args = array(
    'cat' => $category->term_id,
    'post_type' => 'post',
    'posts_per_page' => '1',
);

$query = new WP_Query( $args );
 
if ( $query->have_posts() ) { ?>
 
    <section class="<?php echo $category->name; ?> listing">
        <h2>Latest in <?php echo $category->name; ?>:</h2>
 
        <?php while ( $query->have_posts() ) {
 
            $query->the_post();
            ?>
 
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>
                <?php if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </a>
                <?php } ?>
 
                <h3 class="entry-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
 
                <?php the_excerpt( __( 'Continue Reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) ); ?>
 
            </article>
 
        <?php } // end while ?>
 
    </section>
 
<?php } // end if
 
// Use reset to restore original query.
wp_reset_postdata();

?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();