jQuery(document).ready(function($) {

    // const btn_responsive = document.getElementById('btn-responsive');
    // const menu = document.getElementById('menu');

    // btn_responsive.addEventListener('click', function() {
    //     if (menu.style.display === 'none' /* || menu.style.display === ' ' */ ) {
    //         menu.style.display = 'block';
    //     } else {
    //         menu.style.display = 'none';
    //     }
    // });

    $('#btn-responsive').click((e) => {
        e.preventDefault();
        if ($('#menu').is(":visible")) {
            $('#menu').hide('slow');
        } else {
            $('#menu').show('slow')
        }
    });

    const verMasEstatutos = document.getElementById('verMasEstatutos');
    verMasEstatutos.addEventListener('click', function() {
        $('.cabure-estatutos-contenido').height(400);
        $('.cabure-estatutos-contenido').css('overflow-y', 'scroll');
        verMasEstatutos.style.display = 'none';
    });



});