jQuery(document).ready(function($) {

    const btn_responsive = document.getElementById('btn-responsive');
    const menu = document.getElementById('menu');
    btn_responsive.addEventListener('click', function() {
        if (menu.style.display === 'block' || menu.style.display === ' ') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
        }
    });


    const verMasEstatutos = document.getElementById('verMasEstatutos');
    verMasEstatutos.addEventListener('click', function() {
        $('.cabure-estatutos-contenido').height(400);
        $('.cabure-estatutos-contenido').css('overflow-y', 'scroll');
        verMasEstatutos.style.display = 'none';

    });



});