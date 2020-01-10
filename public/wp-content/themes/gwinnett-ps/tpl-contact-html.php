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
<section class="top__banner">
	<ul class="top__banner__tabs">
		<li class="top__banner__icon">
			<a href="#" class="top__banner__tab top__banner__tab01">
				Request An Appoinment
			</a>
		</li>
		<li class="top__banner__icon">
			<a href="#" class="top__banner__tab top__banner__tab02">Patient Forms</a>
		</li>
		<li class="top__banner__icon">
			<a href="#" class="top__banner__tab top__banner__tab03">Patient Portal</a>
		</li>
		<li class="top__banner__icon">
			<a href="#" class="top__banner__tab top__banner__tab04">Find A Location</a>
		</li>
	</ul>
	<h2 class="top__banner__tit">“At Gwinnett Pulmonary & Sleep, our top priority is patient satisfaction.”</h2>
</section>
<section class="contact__intro">
    <h2 class="tit">Get In. Get Out.<br/>
    Get Back To Life.</h2>
    <div class="txt">
       <p>We’re accepting new patients! Let’s make your experience with Gwinnett Pulmonary & Sleep memorable, whether you’re a first-time patient or returning patient.
       </p>
       <p>We strive to keep our patients informed about pulmonary treatment options and our practice.</p>
    </div>
</section>
<section  class="contact__form">
    <div class="contact__form__cover">
        <div class="text">
            <h3 class="tit">Request an appointment</h3>
            <div class="note">
                <span class="text">Email<a class="link" href="#">gpg@gwinnettlung.com</a></span>
                <span class="text">Call<a class="link" href="#">770.995.0630</a></span>
                <span class="text">Fill out<span class="redu">the form below</span></span>
            </div>
        </div>
        <div class="request__cover">
            <?php gravity_form(2, false, false, false, '', true, 12); ?>
        </div>
    </div>
</section>
<section class="contact__block_bg">
    <img class="img" src="<?php bloginfo('template_directory') ?>/images/contact-img-bg-block.png" alt=""/>
</section>
<section class="contact__download">
    <h3 class="tit">Patient forms</h3>
    <div class="txt">
        For speedier services, please download and print the paperwork below, fill it out and bring it with you during your appointment. Note: You will need Adobe Acrobat to download paperwork.
    </div>
    <p class="btn__download__cover"><a class="btn__download" href="#" download>Download New Patient Form</a></p>
</section>
<?php get_footer() ?>