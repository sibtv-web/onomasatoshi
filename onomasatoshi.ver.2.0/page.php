<?php get_header(); ?>

<?php
// 現在のページスラッグを取得
$slug = get_post_field( 'post_name', get_queried_object_id() );

// template/pages フォルダに該当ファイルがあるかチェック
$custom_template = locate_template( "template/pages/page-{$slug}.php" );

if ( $custom_template ) {
    // 見つかった場合は読み込んで以降の処理はスキップ
    include $custom_template;
} else {
    // デフォルトの page.php 内容
    ?>
    <article>
        <section id="sec-fanclub">
            <div class="breadcrumb"><?php echo breadcrumb(); ?></div>
            <h2 class="page-title"><?php the_title(); ?></h2>
            <div class="page-content-cmn"><?php the_content(); ?></div>
        </section>
    </article>
    <?php
}

$acf_title = get_field('release_title');
echo esc_html($acf_title);

?>

<?php get_footer(); ?>
