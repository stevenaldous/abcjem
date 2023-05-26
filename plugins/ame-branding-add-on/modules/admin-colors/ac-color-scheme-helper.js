'use strict';
/// <reference path="../../assets/jquery.d.ts" />
jQuery(document).on('adminMenuEditor:acRegister.ameBrandingAdminColors', function (event, adminCustomizer) {
    var $ = jQuery;
    //Remove the handler after the first call.
    $(document).off('adminMenuEditor:acRegister.ameBrandingAdminColors');
    function isColorSchemeSection(element) {
        var colorSchemeSectionId = 'ame-ac-section-ame-branding-color-scheme';
        return $(element).is('#' + colorSchemeSectionId);
    }
    $('body').on('adminMenuEditor:enterSection', function (event) {
        adminCustomizer.settings
            .find('ws_ame_branding-force-enable-preview')
            .forEach(function (setting) {
            setting.value(isColorSchemeSection(event.target));
        });
    });
});
//# sourceMappingURL=ac-color-scheme-helper.js.map