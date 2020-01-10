<?php
/**
 * Created by PhpStorm.
 * User:f
 * Date: 3/20/2019
 * Time: 3:14 PM
 */

/*
 Template Name: Contact Html Page
 */

?>
<?php get_header() ?>
<section class="cmn__banner_noimg">
	<h2 class="tit">Here for you</h2>
    <div class="text">
        Questions, comments or concerns about Gwinnett Pulmonary and Sleep, our physicians, pulmonary medicine or anything else? Let us know! Call us at 770.995.0630 or fill out the form below.
    </div>
</section>

<section  class="contact__form">
        <div class="contact__form__cover">
            <div class="text">
                <h3 class="tit">Contact Us</h3>
            </div>
            <div class="request__cover">
                <?php gravity_form(3, false, false, false, '', true, 12); ?>
            </div>
        </div>
</section>
<section class="contact__items__cover">
    <div class="left">
     <h3 class="tit">Contact our staff</h3>
        <div class="items__cover">
            <div class="item">
                <p class="name">Jennifer Thomas-Roloff, CAPPM, CMPE</p>
                <p class="position">Practice Administrator</p>
                <p class="email"><a href="mailto:jroloff@gwinnettlung.com">jroloff@gwinnettlung.com</a></p>
                <p class="phone"><a href="tel:6789425985">678.942.5985</a></p>
            </div>
            <div class="item">
                <p class="name">Jessica Clauson</p>
                <p class="position">Sleep Center Supervisor</p>
                <p class="email"><a href="mailto:jclauson@gwinnettsleep.com">jclauson@gwinnettsleep.com</a></p>
                <p class="phone"><a href="tel:7709950630">770.995.0630</a> ext. 135</p>
            </div>
            <div class="item">
                <p class="name">Misty Gomez, CPC</p>
                <p class="position">Billing Manager</p>
                <p class="email"><a href="mailto:mgomez@gwinnettlung.com">mgomez@gwinnettlung.com</a></p>
                <p class="phone"><a href="tel:7709950630">770.995.0630</a> ext. 118</p>
            </div>
            <div class="item">
                <p class="name">Alicia Gooden, RPSGT, RST, CCSH
                </p>
                <p class="position">DME Supervisor</p>
                <p class="email"><a href="mailto:agooden@gwinnettsleep.com">agooden@gwinnettsleep.com</a></p>
                <p class="phone"><a href="tel:7709950630">770-995-0630</a> ext. 143</p>
            </div>
            <div class="item">
                <p class="name">Belinda Vaughan, RN</p>
                <p class="position">Clinical Manager</p>
                <p class="email"><a href="mailto:bvaughan@gwinnettlung.com">bvaughan@gwinnettlung.com</a></p>
                <p class="phone"><a href="tel:7709950630">770-995-0630</a> ext. 138</p>
            </div>
            <div class="item">
                <p class="name">Patricia Cote, CMA</p>
                <p class="position">Duluth Supervisor</p>
                <p class="email"><a href="mailto:pcote@gwinnettlung.com">pcote@gwinnettlung.com</a></p>
                <p class="phone"><a href="tel:7709950630">770.995.0630</a> ext. 159</p>
            </div>
            <div class="item">
                <p class="name">LaRhonda Williams</p>
                <p class="position">Front Office Supervisor</p>
                <p class="email"><a href="mailto:lwilliams@gwinnettlung.com">lwilliams@gwinnettlung.com</a></p>
                <p class="phone"><a href="tel:7709950630">770-995-0630</a> ext. 160</p>
            </div>
        </div>
    </div>
    <div class="right">
     <div class="row1">
         <h3 class="tit">Lawrenceville</h3>
         <div class="img">
             <img src="<?php bloginfo('template_directory') ?>/images/contact-right1.png" alt=""/>
         </div>
     </div>
      <div class="row1 row-reverse">
            <h3 class="tit">Duluth</h3>
            <div class="img">
                <img src="<?php bloginfo('template_directory') ?>/images/contact-right2.png" alt=""/>
            </div>
      </div>

      <div class="row1">
            <h3 class="tit">Hamilton Mill</h3>
            <div class="img">
                <img src="<?php bloginfo('template_directory') ?>/images/contact-right3.png" alt=""/>
            </div>
      </div>

    </div>
</section>
<section class="contact__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1578688111501!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<?php get_footer() ?>