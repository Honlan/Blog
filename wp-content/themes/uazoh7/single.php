<?php get_header(); ?>

<!-- modify by Honlan -->
<style>
.uazoh7-post a {
	color: #F99292;
}
</style>
<!-- modify by Honlan -->

<script>
	jQuery(document).ready(function(){
		jQuery("#respond input").addClass("uazoh7-btn uazoh7-btn-small uazoh7-btn-secondary-border");
	});
</script>

<section class="uazoh7-section">
<div class="container">
<div class="row">
<?php              
if(isset($smof_data['blog_sidebar_pos'])) {

if($smof_data['blog_sidebar_pos']=='0') {
	echo '<div class="col-lg-12">';
	if (have_posts()) :  while (have_posts()) : the_post(); get_template_part( 'format', get_post_format() );if($_GET['debug']=='uazoh'){the_post_navigation();} ?>
<?php if(isset($smof_data['prev_next_posts'])) { if($smof_data['prev_next_posts'] =='1') { require_once( dirname( __FILE__ ) . '/includes/related-posts.php' ); }} ?>
	<?php endwhile;endif;  uazoh_navigation();

	// added by hlzhang
	if(comments_open())comments_template();

	echo '</div>';
}

elseif($smof_data['blog_sidebar_pos']=='2') {
	echo '<div class="col-lg-9" id="main">';
	if (have_posts()) :  while (have_posts()) : the_post(); get_template_part( 'format', get_post_format() );if($_GET['debug']=='uazoh'){the_post_navigation();} ?>
<?php if(isset($smof_data['prev_next_posts'])) { if($smof_data['prev_next_posts'] =='1') { require_once( dirname( __FILE__ ) . '/includes/related-posts.php' ); }} ?>
	<?php endwhile;endif;  uazoh_navigation();

	// added by hlzhang
	if(comments_open())comments_template();

	echo '</div><div class="col-lg-3" id="side">';
	if(isset($smof_data['blog_sidebar'])) {dynamic_sidebar(''.$smof_data['blog_sidebar'].''); }else {dynamic_sidebar('sidebar'); }
	echo '</div>';
}

elseif($smof_data['blog_sidebar_pos']=='1') {
	echo '<div class="col-lg-3" id="side">';
	if(isset($smof_data['blog_sidebar'])) {dynamic_sidebar(''.$smof_data['blog_sidebar'].''); }else {dynamic_sidebar('sidebar'); }
	echo '</div><div class="col-lg-9" id="main">';
	if (have_posts()) :  while (have_posts()) : the_post(); get_template_part( 'format', get_post_format() );?>

	<nav class="nav-single">
		<!-- <h3 class="assistive-text"></h3> -->
		<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link' ) . '</span> %title' ); ?></span>
		<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link' ) . '</span>' ); ?></span>
	</nav>

	<?php //if($_GET['debug']=='uazoh'){the_post_navigation();} ?>

<?php if(isset($smof_data['prev_next_posts'])) { if($smof_data['prev_next_posts'] =='1') { require_once( dirname( __FILE__ ) . '/includes/related-posts.php' ); }} ?>
	<?php endwhile;endif;//uazoh_navigation();

	// added by hlzhang
	if(comments_open())comments_template();

	echo '</div>';
}} 
// if($_GET['debug']){comments_template();}
?>
</div></div></section>
<?php get_footer(); ?>