/*
**
== ÍNDICE ==
    - link externo
**
*/

$(document).ready(function() {

    // link externo
    $('.external').on('click',function (e){
        e.preventDefault();
        var url = $(this).attr('href');
        window.open(url);
    });
}); // end ready