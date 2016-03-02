(function($){
	$.fn.gemoticon = function(options){ /**We have named our plugin 'gemoticon'**/

		var defaults = {
			enabled: true,
			speed: 100,
			emo: new Array(
				'smile',	'grin',		'wink',				'cry',
				'shocked',	'angry',	'frown',			'cool',
				'tongue', 	'heart', 	'straight_face', 	'dancing',
				'nerdy', 	'party', 	'rock', 			'sun',
				'bowing',	'dull',		'worried',			'blushing',
				'ninja',	'beer'),
			symbols: new Array(
				":)", 		":D", 		";)", 				":'(",
				":-o", 		"x-(",		":(", 				"B-)",
				":P",		"<3",		":-|",				"(dancing)",
				"(nerdy)",	"(party)",	"(rock)",			"(sun)",
				"(bowing)", "(dull)",	"(worried)",		"(blushing)",
				"(ninja)",	"(beer)")
		};
		var options = $.extend(defaults, options);

		var t = {};

		var $this = $(this);
		if(options.enabled){
			return $this.each(function(i,obj) {
				var x = $(obj);
				
				// Entites Encode 
				var encoded = [];
				for(j=0; j<options.symbols.length; j++){
					encoded[j] = String(options.symbols[j]).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
				}
				for(i=0; i<options.symbols.length; i++){
					var htm = x.html();
					if (htm.indexOf(options.symbols[i]) !== -1 || htm.indexOf(encoded[i]) !== -1) {
						var elem = options.emo[i];
						var a = options.symbols[i];
						var b = encoded[i];
						var c = $("<img src='images/blank.png' class='"+elem+" g_icon g_new' />");
						var myHtm = c.clone().wrap('<p>').parent().html();
						htm = replaceAll(a, myHtm, htm);
						htm = replaceAll(b, myHtm, htm);
						x.html(htm);
					}
				}
			});
		}

		function replaceAll(find, replace, str) {
			find = escapeRegExp(find);
			var regex = new RegExp(find, 'gi');
			return str.replace(regex, replace);
		}
		function escapeRegExp(str) {
			return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
		}

	};
})(jQuery);