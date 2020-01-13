<?php
/**
 * Created by PhpStorm.
 * User:f
 * Date: 3/20/2019
 * Time: 3:14 PM
 */

/*
 Template Name: Contact Page
 */

?>
<?php get_header() ?>
<section class="cmn__banner_noimg">
    <?php 
        $sub_title = get_field('sub_title');
        if($sub_title):
    ?>
    <h2 class="tit"><?php echo $sub_title ?></h2>
    <?php 
        endif;
    ?>
    <?php 
        $description = get_field('description');
        if($description):
    ?>
    <div class="text">
        <?php echo $description ?>
    </div>
    <?php 
        endif;
    ?>
</section>

<section  class="contact__form addstyle">
        <div class="contact__form__cover">
            <div class="text">
                <h3 class="tit">Contact Us</h3>
            </div>
            <div class="request__cover">
                <?php gravity_form(3, false, false, false, '', true, 12); ?>
            </div>
        </div>
</section>
<?php 
    if( have_rows('staffs') ):
?>
<section class="contact__items__cover">
    <div class="left">
     <h3 class="tit">Contact our staff</h3>
        <div class="items__cover">
            <?php 
                while ( have_rows('staffs') ) : the_row();
                    $title = get_sub_field('title');
                    $position = get_sub_field('position');
                    $email = get_sub_field('email');
                    $phone = get_sub_field('phone');
                    $other = get_sub_field('other');
            ?>
            <div class="item">
                <?php 
                    if($title):
                ?>
                <p class="name"><?php echo $title ?></p>
                <?php 
                    endif;
                ?>
                <?php 
                    if($position):
                ?>
                <p class="position"><?php echo $position ?></p>
                <?php 
                    endif;
                ?>
                <?php 
                    if($email):
                ?>
                <p class="email"><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
                <?php 
                    endif;
                ?>
                <p class="phone"><a href="tel:<?php echo str_replace('.','',$phone) ?>"><?php echo $phone ?></a> <?php if($other) echo $other ?></p>
            </div>
            <?php 
                endwhile;
            ?>
        </div>
    </div>
    <?php if( have_rows('locations', 42) ): ?>
    <div class="right">
        <?php  
            $i = 0;
            while ( have_rows('locations', 42) ) : the_row(); $i++;
                $location_name = get_sub_field('name',42);
                $location_link = get_sub_field('link',42);
                if($location_link):
        ?>
                    <a href="<?php echo $location_link ?>" class="row1 <?php if($i%2) echo 'row-reverse' ?>">
        <?php
                else:
        ?>
                    <div href="<?php echo $location_link ?>" class="row1 <?php if($i%2) echo 'row-reverse' ?>">
        <?php
                endif; 
        ?>
        
            <h3 class="tit"><?php echo $location_name; ?></h3>
            <div class="img">
                <img src="<?php echo get_sub_field('small_image',42); ?>" alt="<?php echo $location_name ?>" title="<?php echo $location_name ?>"/>
            </div>
        <?php
                if($location_link):
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
    endif;
?>
<section class="contact__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1578688111501!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<?php get_footer() ?>