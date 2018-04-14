/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');

    //require('bootstrap/js/dist/alert');
    //require('bootstrap/js/dist/collapse');
    //require('bootstrap/js/dist/util');
    //require('bootstrap/js/dist/modal');

    require('bootstrap/dist/js/bootstrap.bundle.js');

    window.$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
} catch (e) {
}