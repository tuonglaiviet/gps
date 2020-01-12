<?php
/**
 * Created by PhpStorm.
 * User:f
 * Date: 3/20/2019
 * Time: 3:14 PM
 */

/*
 Template Name: Locations Page
 */

?>
<?php get_header() ?>
<section class="gbanner top__banner__location__addcss">
	<h2 class="top__banner__tit"><?php the_title(); ?></h2>
</section>
<?php 
    $sub_title = get_field('sub_title');
    $description = get_field('description');
    if($sub_title || $description):
?>
<section class="contact__intro location-addstyle">
    <h2 class="tit"><?php echo $sub_title; ?></h2>
    <div class="txt">
       <?php echo $description ?>
    </div>
</section>
<?php 
    endif;
?>
<?php 
    if( have_rows('locations') ):
        $i = 0;
         while ( have_rows('locations') ) : the_row(); $i++;
            $link = get_sub_field('link');
?>
<section class="location-items <?php if($i%2) echo 'location-reverse' ?>">
    <div class="left">
        <div class="cover">
            <h3 class="tit"><?php get_sub_field('name'); ?></h3>
            <div class="txt">
                <?php echo get_sub_field('content'); ?>
            </div>
            <?php 
                if($link):
            ?>
            <p class="btn-click"><a href="<?php echo $link ?>">Visit</a></p>
            <?php 
                endif;
            ?>
        </div>
    </div>
    <div class="right">
        <img class="img" src="<?php bloginfo('template_directory') ?>/images/location-item1.png" alt=""/>
    </div>
</section>
<?php 
        endwhile;
    endif;
?>
<?php get_footer() ?>