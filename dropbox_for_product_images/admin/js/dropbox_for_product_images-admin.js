(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 
	$(document).ready(function(){
		$('#success_msg').hide();
		$('#submit_api_details').click(function(e){
			e.preventDefault();
			var api_key = $('#api_key').val();
			var api_seceret = $('#api_seceret').val();
			var admin_url  = ajax.url;
			var redirect_url = 'http://localhost/WooCommerce/wp-admin/admin.php?page=dropbox_images';
			var url = 'https://www.dropbox.com/oauth2/authorize?client_id='+api_key+'&redirect_uri='+redirect_url+'&response_type=code';
			$.ajax({
				url : ajax.url,
				type : 'POST',
				data : {
					action : 'api_details_data_insertion',
					api_key : api_key,
					api_seceret : api_seceret
				}, 
				success : function(response) {
					// alert(response);
					if(response == 1)  {
						$('#success_msg').show();
						window.open(url);
					}

				}
			})
		})
		
	})

})( jQuery );
