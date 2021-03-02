(function($) {

	'use strict';

	$( window ).on( 'elementor/frontend/init', function() {

		elementorFrontend.hooks.addAction( 'frontend/element_ready/ws-form.default', function($scope, $) {

			// Reset each form
			var instance_id = 1;
			$('.wsf-form').each(function() {

				$(this).html('').attr('data-instance-id', instance_id).attr('id', 'ws-form-' + instance_id);
				instance_id++;
			});

			// Render each form
			$('.wsf-form').each(function() {

				// Reset events
				$(this).off().html();

				// Get attributes
				var id = $(this).attr('id');
				var form_id = $(this).attr('data-id');
				var instance_id = $(this).attr('data-instance-id');

				// Render form
				var ws_form = new $.WS_Form();
				window.wsf_form_instances[instance_id] = ws_form;

				ws_form.render({

					'obj' : 		'#' + id,
					'form_id':		form_id
				});
			});
		});
	});

	// Form selector
	$(document).on('change', '.wsf-elementor-form-selector select', function() {

		window.parent.jQuery('#elementor-controls select[data-setting="form_id"]').val($(this).val()).trigger('change');
	})

})(jQuery);
