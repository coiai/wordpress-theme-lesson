<?php 
/* 
Template Name: 日報
Template Post Type: post, page, event
*/
?>

<!-- 課題 ヘッダーの読み込み -->
<?php get_header(); ?>
<!-- the_field('フィールド名') -->

<br>
<br>
<br>
<br>
<br>

<p><?php the_field('day')?></p>
<p><?php the_field('content')?></p>
<img src="<?php the_field('img')?>" alt="">
<?php get_footer(); ?>