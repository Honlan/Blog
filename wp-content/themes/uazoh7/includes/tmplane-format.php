<!-- Modified by Honlan -->
<style>
article.post figure {
	display: none;
}
article.project figure figcaption {
	display: none !important;
}
</style>
<!-- Modified by Honlan -->

<section class="uazoh7-section">
<div class="container">
<div class="row">
<?php         
if(isset($smof_data['blog_sidebar_pos'])) {
if($smof_data['blog_sidebar_pos']=='0') {
	echo '<div class="col-lg-12">';
	if (have_posts()) :  while (have_posts()) : the_post(); get_template_part( 'format', get_post_format() );endwhile;endif;  uazoh_navigation();
	echo '</div>';
}elseif($smof_data['blog_sidebar_pos']=='2') {
	echo '<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" id="main">';
	if (have_posts()) :  while (have_posts()) : the_post(); get_template_part( 'format', get_post_format() );endwhile;endif;  uazoh_navigation();
	echo '</div><div class="col-xs-0 col-sm-3 col-md-3 col-lg-3" id="side">';
	dynamic_sidebar('sidebar');
	echo '</div>';
}elseif($smof_data['blog_sidebar_pos']=='1') {
	echo '<div class="col-xs-0 col-sm-3 col-md-3 col-lg-3" id="side">';
	dynamic_sidebar('sidebar'); 
	echo '</div><div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" id="main">';
	if (have_posts()) :  while (have_posts()) : the_post(); get_template_part( 'format', get_post_format() );endwhile;endif;  uazoh_navigation();
	echo '</div>';
}} ?>
</div></div></section>