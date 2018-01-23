<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<div class="partner_map">
	<div id="map"></div>
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 55.85, lng: 37.65},
          scrollwheel: false,
          styles: [
			    {
			        "featureType": "administrative",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "color": "#444444"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape",
			        "elementType": "all",
			        "stylers": [
			            {
			                "color": "#f2f2f2"
			            }
			        ]
			    },
			    {
			        "featureType": "poi",
			        "elementType": "all",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "all",
			        "stylers": [
			            {
			                "saturation": -100
			            },
			            {
			                "lightness": 45
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "all",
			        "stylers": [
			            {
			                "visibility": "simplified"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "elementType": "labels.icon",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "transit",
			        "elementType": "all",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "elementType": "all",
			        "stylers": [
			            {
			                "color": "#b5e9ff"
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    }
			]
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = '';
		var locations = [
			<?foreach($arResult["ITEMS"] as $arItem):

				list($lat,$lng) = explode(',', $arItem['DISPLAY_PROPERTIES']['LOCATION']['VALUE']);
				
			
			?>
				
					{lat: <?=$lat?>, lng: <?=$lng?>},	
					
			<?endforeach;?>	
		];
		
			var contents = [
			<?foreach($arResult["ITEMS"] as $arItem):?>
				"<div class='cluster_descr'><h5><?=$arItem["NAME"]?></h5><i class='icon-phone-i'></i><p><a href='tel:<?=$arItem["PROPERTIES"]['PHONE']['VALUE']?>'><?=$arItem["PROPERTIES"]['PHONE']['VALUE']?></a></p><i class='icon-location'></i><p><?=$arItem["PROPERTIES"]['ADDRESS']['VALUE']?></p><i class='icon-mail-alt'></i><p><a href='<?=$arItem["PROPERTIES"]['EMAIL']['VALUE']?>'><?=$arItem["PROPERTIES"]['EMAIL']['VALUE']?></a></p></div><div class='cluster_descr_block'></div>",
			<?endforeach;?>	
			];	
		var contentString = '';

		  var infowindow = new google.maps.InfoWindow({
			content: contentString
		  });
        
        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var image = '/img/map_pointer.png';
        var markers = locations.map(function(location, i) {
		
		  var marker = new google.maps.Marker({
			position: location,
            label: labels[i % labels.length],
            icon: image
		  });
		  google.maps.event.addListener(marker, 'click', function(evt) {
			infowindow.setContent(contents[i]);
			infowindow.open(map, marker);
		  })
		  return marker;

        });

        var clusterStyles = [
		  {
		    textColor: 'white',
		    url: '/img/cluster_bg.png',
		    height: 30,
		    width: 34
		  }
		];
        // Add a marker clusterer to manage the markers.
        /*var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: '/img/cluster_bg.png'});*/

		var mcOptions = {
		    gridSize: 26,
		    styles: clusterStyles,
		    maxZoom: 15
		};
		var mc= new MarkerClusterer(map, markers, mcOptions);
      }

    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAxRaIJAWfwfGfuIgIzWdNI3Z45KmU7OA&callback=initMap">
    </script>
</div>

