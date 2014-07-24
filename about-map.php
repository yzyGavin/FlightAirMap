<?php
require('require/class.Connection.php');
require('require/class.Spotter.php');

$title = "Barrie Spotter Live Map";
require('header.php');
?>

<div class="info column">
    <h1>Barrie Spotter Live Map</h1> 
    
    <div class="image-right-desktop">
    	<img src="/images/about-live-map.png" alt="Barrie Spotter Live Map" title="Barrie Spotter Live Map" />
    </div>
    
    <p>The <a href="<?php print $globalURL; ?>">Barrie Spotter Live Map</a> is a full screen page showing the latest positions of the aircrafts in near real-time within the Barrie Spotter coverage area. The map itself updates automatically every minute.</p>
    
    <p>Clicking on the aircraft icon allows you to see information about the flight, including details such as aircraft type, registration, current altitude (in both feet and Flight level), speed (in knots), heading (in degrees) and the coordinates. Additionally, the aircraft image also shows up, which is based on the registration of the aircraft, just like on the rest of the site.</p>
    
    <p>You can also plot your own location on the map, by clicking the location icon on the left side. This way you can see the aircraft relative to your current location.</p>
    
    <p>The information presented on the map ties into the existing Barrie Spotter database. For example, you can easily click on the airport on the map popup to go to the airport profile to see all the other flights that have been flown to/from that airport.</p>
    
    <p><strong>Note:</strong> Some of the data sources may be delayed 2-5 minutes.</p>
    
    <p>&nbsp</p><p>&nbsp</p>
    
    <div class="image-right-mobile">
    	<img src="/images/about-mobile-live-map.png" alt="Barrie Spotter Live Map" title="Barrie Spotter Live Map" />
    </div>
    
    <h3>Mobile - Geolocation &amp; Compass Mode</h3>
    
    <p>The map on mobile devices has the same features as the desktop version, with one additional mode. Besides plotting your current location (using your smartphone's GPS functionailty), there is also a compass mode.</p>
    
    <p>With the compass mode you can point with your phone into the direction of the airplane you want to see more information about, and the map will also change and point into the direction. This can be very useful when your out and about and there is a airliner flying above and you just want see more information about it.</p>
    
    <p>Keep in mind that this isn't an app, but a mobile website. Compass mode uses the <a href="http://www.w3.org/TR/orientation-event/" target="_blank">W3C Device Orientation Specification</a> and is not supported on all mobile browsers just yet. <a href="http://caniuse.com/#feat=deviceorientation" target="_blank">Check out this link</a> to see if your mobile browser is supported.</p>
		
</div>

<?php
require('footer.php');
?>