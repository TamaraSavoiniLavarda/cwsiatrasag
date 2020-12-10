jQuery(document).ready(function ($) {

    const btn_responsive = document.getElementById('btn-responsive');
    const menu = document.getElementById('menu');
    btn_responsive.addEventListener('click', function () {
        if (menu.style.display === 'block' || menu.style.display === ' ') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
        }
    });
});