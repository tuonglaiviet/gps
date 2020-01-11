<?php /* Template Name: About Page */ ?>
<?php 
    get_header();
?>
<section class="top__banner top__banner__location__addcss">
	<h2 class="top__banner__tit"><?php the_title() ?></h2>
</section>
<section class="about__story">
    <div class="about__story__container">
        <h2 class="about__story__tit main__tit">Our Story</h2>
        <div class="about__story__des gp2">
            <p>Gwinnett Pulmonary & Sleep was founded in 1983 by Lawrence Kaplan, M.D with a mission of providing the highest quality care in pulmonary, critical care and sleep services and treatments to patients throughout Gwinnett County and areas north of Atlanta. </p>
        </div>
        <div class="about__story__des02 gp3">        
            <p>Decades later, patient satisfaction remains our top priority. It shows every day. Our team of 10 board-certified physicians, as well as nurses and administrative personnel, is dedicated to improving your lung health through a comprehensive approach to diagnosis and treatment of pulmonary disorders.</p>
            <p>We accomplish this with professionalism, compassion, guaranteed access to our medical professionals, and empathy. Contact us today to start your journey to better breathing. </p>
        </div>
    </div>
</section>
<section class="about__video">
    <span class="about__video__play"></span>
</section>
<section class="about__locations">
    <div class="about__locations__info">
        <h3 class="about__locations__info--tit big__tit">Our Locations</h3>
        <div class="about__locations__info--des gp4">
            Enjoy amazing service at three convenient locations in Gwinnett County. Our practice is affiliated with the Gwinnett Medical Center’s Lawrenceville and Duluth campuses.
        </div>
        <ul class="about__locations__info--buttons">
            <li><a href="#" class="gbutton">LAWRENCEVILLE</a></li>
            <li><a href="#" class="gbutton">Duluth</a></li>
            <li><a href="#" class="gbutton">Hamilton Mill</a></li>
        </ul>
    </div>
    <div class="about__locations__mapround">
        <div id="map" class="about__locations__map"></div>
    </div>
</section>
<script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBBHTA4GehSH_vtE6ildGWV8XBV7Z80YGc&language=en&region=EN" 
          type="text/javascript"></script>
  <script type="text/javascript">
    var locations = [
      ['Bondi Beach', -33.890542, 151.274856, 4],
      ['Coogee Beach', -33.923036, 151.259052, 5],
      ['Cronulla Beach', -34.028249, 151.157507, 3],
      ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
      ['Maroubra Beach', -33.950198, 151.259302, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: new google.maps.LatLng(-33.92, 151.25),
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
    get_footer();
?>