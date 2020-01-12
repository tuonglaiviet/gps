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
	<h2 class="top__banner__tit">Our Locations</h2>
</section>
<section class="contact__intro location-addstyle">
    <h2 class="tit">Custom Care & Treatment.<br/>
        Lasting Relationships.</h2>
    <div class="txt">
       <p>Gwinnett Pulmonary Group serves Gwinnett County and areas north of Atlanta with three convenient locations.</p>
    </div>
</section>

<section class="location-items">
    <div class="left">
        <div class="cover">
            <h3 class="tit">Lawrenceville</h3>
            <div class="txt">
                Gwinnett Pulmonary Group - Lawrenceville<br>
                631 Professional Drive (Gwinnett Medical Center)
                Suite 350
                Lawrenceville, GA 30046<br>
                7:30 a.m. - 5 p.m.
            </div>
            <p class="btn-click"><a href="#">Visit</a></p>
        </div>
    </div>
    <div class="right">
        <img class="img" src="<?php bloginfo('template_directory') ?>/images/location-item1.png" alt=""/>
    </div>
</section>

<section class="location-items location-reverse">
        <div class="left">
            <div class="cover">
                <h3 class="tit">Duluth</h3>
                <div class="txt">
                    Gwinnett Pulmonary Group – Duluth<br>
                    Duluth Professional Center
                    3855 Pleasant Hill Road
                    Suite 180
                    Duluth, GA 30096
                    <br>
                    7:30 a.m. - 5 p.m.
                </div>
                <p class="btn-click"><a href="#">Visit</a></p>
            </div>
        </div>
        <div class="right">
            <img class="img" src="<?php bloginfo('template_directory') ?>/images/location-item2.png" alt=""/>
        </div>
</section>

<section class="location-items">
        <div class="left">
            <div class="cover">
                <h3 class="tit">Hamilton Mill</h3>
                <div class="txt">
                    GMC Specialty Center 2108 Teron Trace Suite 100A Dacula, GA 30019
                </div>
                <p class="btn-click"><a href="#">Visit</a></p>
            </div>
        </div>
        <div class="right">
            <img class="img" src="<?php bloginfo('template_directory') ?>/images/location-item-3.png" alt=""/>
        </div>
</section>

<?php get_footer() ?>