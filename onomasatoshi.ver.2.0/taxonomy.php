<?php get_header(); ?>

<?php
$taxonomy = get_queried_object()->taxonomy ?? '';
get_template_part( 'template/taxonomy/'.$taxonomy );
?>
<?php get_footer(); ?>