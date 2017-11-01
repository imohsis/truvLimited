$(function(){var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:300,
					hideThumbs:10,
					fullWidth:"on",
					forceFullWidth:"off"
				});

		});	//ready
		
		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner-full').revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:300,
					hideThumbs:10,
					fullWidth:"on",
					forceFullWidth:"off",
					fullScreen:"on"
				});

		});	//ready
});
