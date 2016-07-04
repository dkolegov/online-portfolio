<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">

	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
	<link rel="stylesheet" href="css/gemoticons.css" type="text/css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/jquery.content-panel-switcher.css" /> 
	<link rel="stylesheet" href="css/countrySelect.css">
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/jquery.gemoticons.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="js/countrySelect.js"></script>
	<!--switching pages without reloading entire page-->
	<script type='text/javascript' src='js/jquery.content-panel-switcher.js'></script> 
	<script type='text/javascript'>
		$(document).ready(function() {
			/* INIT jQuery Content Panel Switcher JS
			 * 0 - slideToggle
			 * '#main-body' - text container ID.
			 */
			jcps.fader(0, '#main-body');
			setTimeout(function(){
				//$(".main-body").gemoticon();
				//INIT plax
				$('img').plaxify();
				$.plax.enable();
			}, 100);/**/
			$("a").click(function () {
				if ($(this).context.innerText != "CV") {
				  $("a").css("font-weight", "normal");
				  $(this).css("font-weight", "bold");
				}
			});
		});
	</script>
	<script src="js/angular.js"></script>
	<script src="js/angular-translate.js"></script>
	<script src="js/angular-translate-loader-url.js"></script>
	<script src="js/angular-translate-loader-static-files.js"></script>
	<script src="js/plax.js"></script>
	<script type="text/javascript">
		var app = angular.module('at', ['pascalprecht.translate']);

		app.config(function ($translateProvider) {
		  $translateProvider
			  .useStaticFilesLoader({
				prefix: 'locales/',
				suffix: '.json'
			  })
			  .registerAvailableLanguageKeys(['en', 'de'], {
				'en' : 'en', 'en_GB': 'en', 'en_US': 'en',
				'us' : 'en', 'gb': 'en',
				'de' : 'de', 'de_DE': 'de', 'de_CH': 'de',
				'ru' : 'ru', 'ru_RU': 'ru'
			  })
			  .preferredLanguage('en')
			  .fallbackLanguage('en')
			  .determinePreferredLanguage()
			  .useSanitizeValueStrategy('escapeParameters');
			 $(".main-body").gemoticon();
		});

		app.controller('Ctrl', function ($scope, $translate) {
		  $scope.text = {
			value: 'United States'
		  };
		  $scope.changeLanguage = function (key) {
			var countryData = $("#country").countrySelect("getSelectedCountryData");
			$translate.use(countryData.iso2);

			/* BUGFIX jQuery Content Panel Switcher JS
			 * Translated content is out of '#main-body' panel. To change language in 
			 * '#main-body' panel we have to rerun switcher 
			 */
			setTimeout(function(){
				if (lastPanelSwitched) {
					lastPanelSwitched.click();
				}
				//$(".main-body").gemoticon();
			}, 100);/**/
		  };
		});
	</script>
    <title>
	</title>
  </head>
  <body ng-app="at" class="ng-scope">

		<img alt="" class="js-plaxify" data-xrange="40" data-yrange="20" id="parallax_mks" src="img/mks.png"/>
		<div class="centerDiv">
			<div id='main-header' class='main-header'>
    			 <table border='0' cellpadding='0' cellspacing='0' width='100%'>
        			 <tr class='main-border-bottom'>
        				 <td>
                			 <div id='main-menu' class='main-menu'>
                				  		 <a id="mhome" class="switcher" style="font-weight:bold;" translate="main.menu.home"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				  		 <a id="mabout" class="switcher" translate="main.menu.about"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				  		 <a id="cvlinkid" href="{{'main.menu.cvlink' | translate}}" type="application/pdf" target="_blank" translate="main.menu.cv"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				  		 <a id="mcontact" class="switcher" translate="main.menu.contactMe"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										 <a id="mportfolio" class="switcher" translate="main.menu.portfolio"></a>
                			 </div>
        			     </td>
						 <td>
							 <div ng-controller="Ctrl" class="ng-scope">
							<input type="text" ng-model="text.value" ng-change="changeLanguage()" id="country">
							<input type="hidden" ng-model="code.value" id="country_code" />
								<script type='text/javascript'>
									$("#country").countrySelect({
										defaultCountry: "us",
										onlyCountries: ["us", "gb", "ru"],
										preferredCountries: []
									});
								</script>
							</div>
    					</td>
        		     </tr>
    			 </table>
			 </div>
			 <div id='main-greeting' class='main-title'>
			 	  <span translate="my.greeting"></span>
		     </div>			 
			 <div id='main-title' class='main-title'>
			 	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="line-height: 1.4em;" class="font_name" translate="my.name"></span>
		     </div>
			 <div id='main-position' class='main-title'>
			 	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span translate="my.position"></span>
		     </div>	
			 <!--div>
			 	    <?php $lines = file('phrases.txt');
					echo $lines[array_rand($lines)]; ?>
			 </div-->