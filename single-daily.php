<?php 
/* 
Template Name: 日報
Template Post Type: post, page, event
*/
?>

<!-- 課題 ヘッダーの読み込み -->
<?php 
get_header();
the_post();
?>
<!-- the_field('フィールド名') -->

<br>
<br>
<br>
<br>
<br>

<?php the_post_thumbnail();?>
<h2>これは日報用PHPです</h2>
<p><?php the_field('day')?></p>
<p><?php the_field('content')?></p>
<img src="<?php the_field('img')?>" alt="">
<?php get_footer(); ?>