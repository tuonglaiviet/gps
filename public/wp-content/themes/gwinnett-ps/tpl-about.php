<?php /* Template Name: About Page */ ?>
<?php 
    get_header();
?>
<section class="gbanner about__banner">
	<h1 class="top__banner__tit"><?php the_title() ?></h1>
</section>
<?php 
    $sub_title = get_field('sub_title');
    $description = get_field('description');
    $description_smaller = get_field('description_smaller');
    if($sub_title || $description || $description_smaller):
?>
<section class="about__story">
    <div class="about__story__container">
        <?php 
            if($sub_title):
        ?>
        <h2 class="about__story__tit main__tit"><?php echo $sub_title ?></h2>
        <?php 
            endif;
        ?>
        <?php 
            if($description):
        ?>
        <div class="about__story__des gp2">
            <?php echo $description ?>
        </div>
        <?php 
            endif;
        ?>
        <?php 
            if($description_smaller):
        ?>
        <div class="about__story__des02 gp3">        
            <?php echo $description_smaller ?>
        </div>
        <?php 
            endif;
        ?>
    </div>
</section>
<?php 
    endif;
?>
<?php 
    $history_title = get_field('history_title');
    $history_image = get_field('history_image');
    $history_image_mobile = get_field('history_image_mobile');
    $history_video = get_field('history_video');
    if($history_title || $history_image || $history_image_mobile || $history_video):
        if($history_image_mobile):
?>
        <style>
            @media only screen and (max-width: 767px) {
                .about__video{
                    background-image: url(<?php echo $history_image_mobile ?>);
                }
            }
        </style>
        <?php endif; ?>
<section class="about__video" <?php if($history_image) echo 'style="background-image: url('.$history_image.')"' ?>>
    <div class="about__video__round">
        <?php 
            if($history_title):
        ?>
        <h2 class="about__video__tit"><?php echo $history_title ?></h2>
        <?php 
            endif;
        ?>
        <?php 
            if($history_video):
        ?>
        <span class="about__video__play" data-fancybox href="<?php echo $history_video ?>"></span>
        <?php 
            endif;
        ?>
    </div>
</section>
<?php 
    endif;
?>
<?php 
    $location_title = get_field('location_title');
    $intro_content = get_field('intro_content',42);
    if($location_title || $intro_content):
?>
<section class="about__locations">
    <div class="about__locations__info">
        <?php 
            if($location_title):
        ?>
        <h3 class="about__locations__info--tit big__tit"><?php echo $location_title ?></h3>
        <?php 
            endif;
        ?>
        <?php  
            if($intro_content):
        ?>
        <div class="about__locations__info--des gp4">
            <?php echo nl2br($intro_content) ?>
        </div>
        <?php 
            endif;
        ?>
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
    <div class="about__locations__mapround">
        <div id="map" class="about__locations__map"></div>
    </div>
</section>
<?php 
    endif;
?>
<?php 
    $stories_title = get_field('stories_title');
    $stories_description = get_field('stories_description');
    if($stories_title || $stories_description):
?>
<section class="about__stories">
    <div class="about__stories__container">
        <?php 
            if($stories_title):
        ?>
            <h3 class="big__tit about__stories__tit"><?php echo $stories_title ?></h3>
        <?php 
            endif;
        ?>
        <?php 
            if($stories_description):
        ?>
        <div class="about__stories__des">
            <?php echo $stories_description ?>
        </div>
        <?php 
            endif;
        ?>
        <div class="about__stories__boxes">
            <div class="about__stories__box">
                <img src="<?php bloginfo('template_directory'); ?>/images/about-success-01.png"/>
                <h4 class="about__stories__box--tit">Our Success Stories</h4>
                <p class="about__stories__box--des">Having survived one pulmonary embolism before moving from Florida to Georgia, I was fearful of not being able to find a new pulmonary group of physicians who offered equally comprehensive services and quality care. My fears were proved unfounded when the highly recommended Gwinnett Pulmonary Group came to my attention. </p>
                <a href="#" class="gbutton2 about__stories__box--button">Read more</a>
            </div>
            <div class="about__stories__box">
                <img src="<?php bloginfo('template_directory'); ?>/images/about-success-02.png"/>
                <h4 class="about__stories__box--tit">Our Success Stories</h4>
                <p class="about__stories__box--des">Having survived one pulmonary embolism before moving from Florida to Georgia, I was fearful of not being able to find a new pulmonary group of physicians who offered equally comprehensive services and quality care. My fears were proved unfounded when the highly recommended Gwinnett Pulmonary Group came to my attention. </p>
                <a href="#" class="gbutton2 about__stories__box--button">Read more</a>
            </div>
        </div>
    </div>
</section>
<?php 
    endif;
?>
<?php 
    if( have_rows('partners') ):
?>
<section class="about__boxes">
    <?php 
        while ( have_rows('partners') ) : the_row();
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
<?php 
    $locations = get_field('locations',42);
    if($locations):
?>
<script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBBHTA4GehSH_vtE6ildGWV8XBV7Z80YGc&language=en&region=EN" 
          type="text/javascript"></script>
  <script type="text/javascript">
    var locations = [
        <?php 
            $i;
            foreach($locations as $location):    $i++;
        ?>
            ['<?php echo $location["name"] ?>', <?php echo $location['address']['lat'] ?>, <?php echo $location['address']['lng']?>, 4],

        <?php 
            endforeach;
        ?>
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: new google.maps.LatLng(<?php echo $locations[$i-1]['address']['lat'] ?>, <?php echo $locations[$i-1]['address']['lng'] ?>),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
<?php 
    endif;
    get_footer();
?>