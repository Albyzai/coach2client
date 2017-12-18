
require('./bootstrap');
require('./select2');

$(document).ready(function () {

    $('.sidebar-arrow').on('click', function () {
        $('#sidebar').toggleClass('active');
    });


});
