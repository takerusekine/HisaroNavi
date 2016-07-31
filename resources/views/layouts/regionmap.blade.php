<section id="regionMap" style="display:none;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 43.481570, lng: 143.323748},
        zoom: 7
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH5HaURJ0FPsE-C5G6VWF60f26mW9nGkM
&callback=initMap"></script>
