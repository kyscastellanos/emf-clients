
$( document ).ready(function() {

    var openModal = function (e) {
        e.preventDefault();
        $(window).scrollTop(0);
        $('#myModal').modal();
    };

    $('#quote1').click(openModal);
    $('#quote2').click(openModal);

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus();
    });

})

