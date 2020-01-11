<?php
/**
 * Created by PhpStorm.
 * User:f
 * Date: 3/20/2019
 * Time: 3:14 PM
 */

/*
 Template Name: Service Html Page
 */

?>
<?php get_header() ?>
    <section class="top__banner top__banner__service__addcss">
        <h2 class="top__banner__tit">Services</h2>
    </section>
    <section class="contact__intro service__addstyle">
        <h2 class="tit">Our Approach</h2>
        <div class="txt">
            <p>We’re dedicated to the diagnosis and treatment of acute and chronic pulmonary problems with the highest quality of care. Our services are available at all office locations and at our affiliated hospital — Gwinnett Medical Center’s Lawrenceville and Duluth campuses.
                <br> Let’s work together to develop a plan.
            </p>
        </div>
    </section>

    <section class="service__items">
        <div class="item">
            <div class="image">
                <img class="img" src="<?php bloginfo('template_directory') ?>/images/service1.png" alt="" />
            </div>
            <p class="tit"><a href="#">Pulmonary Function Test</a></p>
        </div>
        <div class="item">
            <div class="image">
                <img class="img" src="<?php bloginfo('template_directory') ?>/images/service2.png" alt="" />
            </div>
            <p class="tit"><a href="#">Polysomnography (Sleep Study)</a></p>
        </div>
        <div class="item">
            <div class="image">
                <img class="img" src="<?php bloginfo('template_directory') ?>/images/service3.png" alt="" />
            </div>
            <p class="tit"><a href="#">Sleep DME Services</a></p>
        </div>
        <div class="item">
            <div class="image">
                <img class="img" src="<?php bloginfo('template_directory') ?>/images/service4.png" alt="" />
            </div>
            <p class="tit"><a href="#">Pulse Oximetry</a></p>
        </div>
        <div class="item">
            <div class="image">
                <img class="img" src="<?php bloginfo('template_directory') ?>/images/service5.png" alt="" />
            </div>
            <p class="tit"><a href="#">FENO Asthma Testing</a></p>
        </div>
        <div class="item">
            <div class="image">
                <img class="img" src="<?php bloginfo('template_directory') ?>/images/service6.png" alt="" />
            </div>
            <p class="tit"><a href="#">Injections</a></p>
        </div>
        <div class="item">
            <div class="image">
                <img class="img" src="<?php bloginfo('template_directory') ?>/images/service7.png" alt="" />
            </div>
            <p class="tit"><a href="#">Bronchoscopy</a></p>
        </div>
        <div class="item">
            <div class="image">
                <img class="img" src="<?php bloginfo('template_directory') ?>/images/service8.png" alt="" />
            </div>
            <p class="tit"><a href="#">Pulmonary Rehabilitation</a></p>
        </div>
        <div class="item">
            <div class="image">
                <img class="img" src="<?php bloginfo('template_directory') ?>/images/service9.png" alt="" />
            </div>
            <p class="tit"><a href="#">Cardiopulmonary Exercise Test</a></p>
        </div>
    </section>

    <section class="contact__insurance__block service__conditions">
        <div class="left">
            <div class="cover">
                <h3 class="tit">CONDITIONS</h3>
                <div class="text__conditions">
                  <p><span class="text__line">Asthma</span></p>
                    <p><span class="text__line">COPD</span></p>
                    <p><span class="text__line">Emphysema</span></p>
                    <p><span class="text__line">Chronic Bronchitis</span></p>
                    <p><span class="text__line">Pneumonia</span></p>
                    <p><span class="text__line">Pulmonary Fibrosis</span></p>
                    <p><span class="text__line">Obstructive Sleep Apnea</span></p>
                    <p><span class="text__line">Pulmonary Arterial Hypertension</span></p>
                    <p><span class="text__line">Dyspnea/Difficulty Breathing</span></p>
                    <p><span class="text__line">Pulmonary Embolism</span></p>
                    <p><span class="text__line">Lung Cancer</span></p>
                    <p><span class="text__line">Cough</span></p>
                    <p><span class="text__line">Pulmonary Tuberculosis</span></p>
                    <p><span class="text__line">Sarcoidosis</span></p>
                    <p><span class="text__line">Bronchiectasis</span></p>
                </div>
            </div>
        </div>
        <div class="right">
            <img class="img" src="<?php bloginfo('template_directory') ?>/images/service_condition-bg.png" alt="" />
        </div>
    </section>

<section class="service__expect">
  <h3 class="tit">what you can expect from us</h3>
    <div class="list__items">
        <div class="item">
            <p class="title">Professionalism</p>
            <div class="image"><img class="img" src="<?php bloginfo('template_directory') ?>/images/ic_professionalism.png" alt="" /></div>
        </div>
        <div class="item">
            <p class="title">Collaboration</p>
            <div class="image"><img class="img" src="<?php bloginfo('template_directory') ?>/images/ic_collab.png" alt="" /></div>
        </div>
        <div class="item">
            <p class="title">Access</p>
            <div class="image"><img class="img" src="<?php bloginfo('template_directory') ?>/images/ic_access.png" alt="" /></div>
        </div>
        <div class="item">
            <p class="title">Empathy</p>
            <div class="image"><img class="img" src="<?php bloginfo('template_directory') ?>/images/ic_empathy.png" alt="" /></div>
        </div>
    </div>
</section>
<?php get_footer() ?>