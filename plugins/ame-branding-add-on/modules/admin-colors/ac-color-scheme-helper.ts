'use strict';

/// <reference path="../../assets/jquery.d.ts" />

jQuery(document).on(
	'adminMenuEditor:acRegister.ameBrandingAdminColors',
	function (event, adminCustomizer) {
		const $ = jQuery;
		//Remove the handler after the first call.
		$(document).off('adminMenuEditor:acRegister.ameBrandingAdminColors');

		function isColorSchemeSection(element: Element) {
			const colorSchemeSectionId = 'ame-ac-section-ame-branding-color-scheme';
			return $(element).is('#' + colorSchemeSectionId);
		}

		$('body').on('adminMenuEditor:enterSection', function (event) {
			adminCustomizer.settings
				.find('ws_ame_branding-force-enable-preview')
				.forEach(setting => {
					setting.value(isColorSchemeSection(event.target));
				});
		});
	}
);

