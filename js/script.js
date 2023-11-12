$(document).ready(function() {

    $('#search').on('keyup', function() {
        $('#oyy').load("ajax/data.php?key=" + $('#search').val());
    });

});