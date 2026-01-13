<?php get_header(); ?>

<?php
$slug = get_post_field('post_name', get_queried_object_id());
$custom_template = locate_template("template/pages/page-{$slug}.php");

if ($custom_template) {
    include $custom_template;
} else {
    if (have_posts()) :
        while (have_posts()) : the_post();
        ?>
        <article>
            <section id="sec-fanclub">
                <!-- breadcrumb は将来用 -->
                <!-- <?php if (function_exists('breadcrumb')) echo breadcrumb(); ?> -->

                <h2 class="page-title"><?php the_title(); ?></h2>
                <div class="page-content-cmn">
                    <?php the_content(); ?>
                </div>
            </section>
        </article>
        <?php
        endwhile;
    endif;
}
?>

<?php
// ACF が有効なときだけ使う
if (function_exists('get_field')) {
    $acf_title = get_field('release_title');
    if ($acf_title) {
        echo esc_html($acf_title);
    }
}
?>

<?php get_footer(); ?>
