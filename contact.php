<span style="line-height: 1.4em;"  class="page-title" data-i18n="main.menu.contactMe"></span>
<p>
<span data-i18n="contact_page.p1"></span>
<p>
<span data-i18n="contact_page.p2"></span>
<p>
<span data-i18n="contact_page.p3"></span>
<p>
<span style="line-height: 1.4em;"  class="page-title" data-i18n="main.title.myLocation"></span>
<p>
<span data-i18n="contact_page.p4"></span>
<div class="item dark" style="width: 550px; height: 350px">
<div id="map" style="width: 550px; height: 350px">
</div>
</div>
<script type="text/javascript">
		ymaps.ready(init);
		var myMap;

		function init(){     
			myMap = new ymaps.Map("map", {
				center: [44.98, 38.95],
				zoom: 8
			});
			myPlacemark = new ymaps.Placemark([45.06, 38.96], {
				balloonContent: ''
			});
			
			myMap.geoObjects.add(myPlacemark);
		}
</script>