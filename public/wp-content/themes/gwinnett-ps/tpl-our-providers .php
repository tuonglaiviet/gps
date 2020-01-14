<?php
/**
 * Created by PhpStorm.
 * User:f
 * Date: 3/20/2019
 * Time: 3:14 PM
 */

/*
 Template Name: Our Providers Page
 */

?>
<?php get_header() ?>
    <section class="gbanner top__banner__location__addcss">
        <h2 class="top__banner__tit"><?php the_title() ?></h2>
    </section>
    <?php 
        $sub_title = get_field('sub_title');
        $description = get_field('description');
        if($sub_ttitle || $description):
    ?>
    <section class="contact__intro providers-addstyle">
        <h2 class="tit"><?php echo $sub_title ?></h2>
        <div class="txt">
           <?php echo $description; ?>
        </div>
    </section>
    <?php 
        endif;
    ?>
    <?php 
        $icons_title = get_field('icons_title');
    ?>
    <section class="service__expect providers-addstyle">
        <h3 class="tit"><?php echo $icons_title ?></h3>
        <?php 
            if( have_rows('icons') ):
        ?>
        <div class="list__items">
            <?php 
                while ( have_rows('icons') ) : the_row();
                    $name = get_sub_field('name');
                    $image = get_sub_field('image');
                    $link = get_sub_field('link');
                    if($link):
                    ?>
                        <a href="$link" class="item">

                    <?php 
                    else:
                    ?>
                         <div class="item">
                    <?php
                    endif;
                    ?>
                            <p class="title"><?php echo $name?></p>
                            <div class="image"><img class="img" src="<?php echo $image ?>" alt="<?php echo $name?>" title="<?php echo $name?>"/></div>
                    <?php 
                    if($link):
                        ?>
                        </a>
                        <?php
                    else:
                        ?>
                        </div>
                        <?php
                    endif;
                endwhile;
            ?>
        </div>
        <?php 
            endif;
        ?>
    </section>
    <?php 
        if( have_rows('blocks') ):
    ?>
    <section class="providers__post">
        <?php 
            while ( have_rows('blocks') ) : the_row();
                $box_title = get_sub_field('title');
                $box_description = get_sub_field('description');
                $box_content = get_sub_field('content');
                $box_thumb = get_sub_field('thumb');
        ?>
        <div class="post__cover">
            <div class="image">
                <img class="img" src="<?php echo $box_thumb ?>" alt="<?php echo $box_title ?>" title="<?php echo $box_title ?>" />
            </div>
            <div class="content">
                <h3 class="title"><?php echo $box_title ?></h3>
                <div class="description">
                    <?php echo $box_description ?>
                </div>
                <p class="js_more gbutton2 about__stories__box--button">Read more</p>
                <div class="active__post js_less scp-programs-active">
                    <div class="ac__content">
                        <?php if($box_content) echo $box_content ?>
                    </div>
                    <p class="gbutton2 js_click_show">Close</p>
                </div>
            </div>
        </div>
        <?php 
            endwhile;
        ?>
    </section>
    <?php 
        endif;
    ?>
<?php 
    $bottom_image = get_field('bottom_image');
    if($bottom_image):
?>
<section class="providers-bg-last">
    <img class="img" src="<?php echo $bottom_image ?>" alt="<?php the_title() ?>" />
</section>
<?php 
    endif;
?>

<?php get_footer() ?>