'use strict';

(function () {

    /*--------------------------
        Navigation
    ----------------------------*/
    var currentMenuUrl = location.href;

    $('.menu-link').each(function () {
        var menuItemPath = $(this).attr('href');

        if (removeTrailingSlash(currentMenuUrl) === menuItemPath) {
            $(this).closest('li').addClass('active');
        } else {
            $(this).closest('li').removeClass('active');
        }
    });

    function removeTrailingSlash(url) {
        // Remove trailing slash if present
        if (url.endsWith('/')) {
            url = url.slice(0, -1);
        }
        return url;
    }
})();
