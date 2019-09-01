<?php
/**
 * Template part for displaying author details.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blogstyle
 */
?>

<?php
// Get Author Data
$author             = get_the_author();
$author_description = get_the_author_meta( 'description' );
$author_url         = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
$author_avatar      = get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'blogstyle_author_bio_avatar_size', 75 ) );

// Only display if author has a description
if ( $author_description && get_theme_mod( 'blogstyle_remove_single_bio', '') != '1' ) : ?>

<h3 class="bls-writter-title"><?php esc_html_e( 'Written By', 'blogstyle' ); ?></h3>
<div class="blog-writen">
<div class="col-md-3">

<div class="blog-img-auther img-responsive">
<?php echo $author_avatar;  ?>
</div>
</div>
<div class="col-md-9">
<div class="bls-p-auth-title"><h3><?php echo $author; ?></h3></div>
<p class="written-auther-txt"><?php echo $author_description; ?></p>
</div>
</div>

<?php endif; ?>