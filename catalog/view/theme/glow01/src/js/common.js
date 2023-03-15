(function () {
    document.addEventListener('DOMContentLoaded', () => {
        let thumbnails = document.querySelector('.image_show');

        if (thumbnails) {
            thumbnails.querySelectorAll('.thumbnail').forEach((item) => {
                item.addEventListener('mouseenter', () => {
                    document.querySelector('.carousel-container').querySelector('.thumbnail').setAttribute('href', item.getAttribute('href'));
                    document.querySelector('.carousel-container').querySelector('img').setAttribute('src', item.getAttribute('href'));
                });
            });
        }
    });
})();