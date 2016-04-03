<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">

	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
	<link rel="stylesheet" href="css/intlTelInput.css">
	<link rel="stylesheet" href="css/gemoticons.css" type="text/css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/jquery.content-panel-switcher.css" /> 
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/countriesData.js"></script>
	<script type="text/javascript" src="js/intlTelInput.js"></script>
	<script type="text/javascript" src="js/i18next-1.7.4.js"></script>
	<script type="text/javascript" src="js/jquery.gemoticons.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<!--switching pages without reloading entire page-->
	<script type='text/javascript' src='js/jquery.content-panel-switcher.js'></script> 
	<script type='text/javascript'>
		$(document).ready(function() {
		jcps.fader(300, '#main-body');
		});
	</script>
    <title>
	</title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script type="text/javascript">
       i18n.init(function(t) {
          $(".main-menu").i18n();
		  $(".main-title").i18n();
	   	  $(".main-footer").i18n();
		  $(".centerDiv").i18n();
		  $(".main-body").gemoticon();
		  // change CV link
		  var cvlink = document.getElementById("cvlinkid");
		  if (cvlink) {
		      cvlink.href = i18n.t("main.menu.cvlink");
		  }
       });

	   function setLang(lang) {
		  i18n.setLng(lang, function(t) {
			  $(".main-menu").i18n();
			  $(".main-title").i18n();
			  $(".main-footer").i18n();
			  $(".centerDiv").i18n();
			  $(".main-body").gemoticon();
			  // change CV link
			  var cvlink = document.getElementById("cvlinkid");
			  if (cvlink) {
				cvlink.href = i18n.t("main.menu.cvlink");
			  }
		  });
	   }
	</script>
  </head>
  <body>
		<div class="centerDiv">
			<div id='main-header' class='main-header'>
    			 <table border='0' cellpadding='0' cellspacing='0' width='100%'>
        			 <tr class='main-border-bottom'>
        				 <td>
                			 <div id='main-menu' class='main-menu'>
                				  		 <a id="mhome" class="switcher" data-i18n="main.menu.home"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				  		 <a id="mabout" class="switcher" data-i18n="main.menu.about"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				  		 <a id="cvlinkid" href="/data/CURRICULUMVITAE_RU.pdf" type="application/pdf" target="_blank" data-i18n="main.menu.cv"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				  		 <a id="mcontact" class="switcher" data-i18n="main.menu.contactMe"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										 <a id="mportfolio" class="switcher" data-i18n="main.menu.portfolio"></a>
                			 </div>
        			     </td>
						 <td>
							 <div id="languages-switch" style="height: 30px; width:40px;">
							 <script>
								 $("#languages-switch").initLanguages();
								 $("#languages-switch").data('plugin_initLanguages').selectCountry(i18n.lng().substr(-2).toLowerCase());
							 </script>
    					</td>
        		     </tr>
    			 </table>
			 </div>
			 <div id='main-title' class='main-title'>
			 	  <span style="line-height: 1.4em;" class="font_name"data-i18n="my.name"></span>
		     </div>
			 <div>
			 	    <?php $lines = file('phrases.txt');
					echo $lines[array_rand($lines)]; ?>
			 </div>