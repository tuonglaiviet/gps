<?php /* Template Name: Our Success Stories */ ?>
<?php get_header() ?>
<?php 
    $sub_title = get_field('sub_title');
    $description = get_field('description');
    if($sub_title || $description):
?>
<section class="oursuccess__top">
    <div class="oursuccess__top__container">
        <?php 
            if($sub_title):
        ?>
        <h2 class="oursuccess__top__tit main__tit"><?php echo $sub_title ?></h2>
        <?php 
            endif;
        ?>
        <?php 
            if($description):
        ?>
        <div class="oursuccess__top__des gp2">
            <?php echo $description ?>
        </div>
        <?php 
            endif;
        ?>
    </div>
</section>
<?php 
    endif;
?>
<section class="oursuccess__test">
    <div class="oursuccess__test__container">
        <a href="#" class="oursuccess__test__button gbutton">TESTIMONIALS</a>
        <div class="oursuccess__test__around">
            <div class="oursuccess__test__thumb"></div>
            <div class="oursuccess__test__content">
                <h1 class="oursuccess__test__content--tit big__tit"><?php echo get_the_title(); ?></h1>
                <?php  
                    $content = get_field('content');
                    if($content):
                ?>
                <div class="oursuccess__test__content--des">
                    <?php echo $content; ?>
                </div>
                <?php 
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>
<?php
    $location_title = get_field('location_title');
    $intro_content = get_field('intro_content',42);
    if($location_title || $intro_content):
?>
    <section class="about__locations oursuccess__locations">
        <div class="about__locations__info">
            <?php 
                if($location_title):
            ?>
            <h3 class="about__locations__info--tit big__tit"><?php echo $location_title ?></h3>
            <?php 
                endif;
            ?>
            <div class="about__locations__info--des gp4">
                <?php echo $intro_content ?>
            </div>
            <?php 
                if( have_rows('locations',42) ):
            ?>
            <ul class="about__locations__info--buttons">
                <?php 
                    while ( have_rows('locations',42) ) : the_row();
                    $location_name = get_sub_field('name',42);
                    $location_link = get_sub_field('link',42);
                    if($location_link):
                    ?>
                        <li><a href="<?php echo $link ?>" title="<?php echo $location_name ?>" class="gbutton"><?php echo $location_name ?></a></li>
                    <?php 
                    else:
                    ?>
                        <li><span class="gbutton"><?php echo $location_name ?></span></li>
                    <?php   
                    endif;
                    endwhile;
                ?>
            </ul>
            <?php 
                endif;
            ?>
        </div>
    </section>
<?php 
    endif;
    if( have_rows('partners',3) ):
?>
<section class="about__boxes">
    <?php 
        while ( have_rows('partners',3) ) : the_row();
            $partner_title = get_sub_field('title');
            $partner_description = get_sub_field('description');
            $partner_button_name = get_sub_field('button_name');
            $partner_link = get_sub_field('link');
            $partner_thumb = get_sub_field('thumb');
    ?>
    <div class="about__boxes__line">
        <div class="about__boxes__box content">
            <h3 class="big__tit about__boxes__box--tit"><?php echo $partner_title ?></h3>
            <div class="about__boxes__box--des">
                <?php echo $partner_description ?>
            </div>
            <?php 
                if($partner_button_name):
            ?>
            <a href="<?php if($partner_link) echo $partner_link ?>" class="gbutton about__boxes__box--button"><?php echo $partner_button_name ?></a>
            <?php 
                endif;
            ?>
        </div>
        <div class="about__boxes__box thumb" style="background-image: url(<?php echo $partner_thumb ?>)"></div>
    </div>
    <?php 
        endwhile;
    ?>
</section>
<?php 
    endif;
?>
<?php get_footer() ?>