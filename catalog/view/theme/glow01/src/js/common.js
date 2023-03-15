(function () {
    function imageZoom() {
        let img, lens, result, cx, cy;
        img = document.getElementById('myimage');
        result = document.getElementById('myresult');
        lens = document.querySelector('.img-zoom-lens');
        cx = result.offsetWidth / lens.offsetWidth;
        cy = result.offsetHeight / lens.offsetHeight;
        result.style.backgroundImage = "url('" + img.src + "')";
        result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
        /*execute a function when someone moves the cursor over the image, or the lens:*/
        lens.addEventListener("mousemove", moveLens);
        img.addEventListener("mousemove", moveLens);
        /*and also for touch screens:*/
        lens.addEventListener("touchmove", moveLens);
        img.addEventListener("touchmove", moveLens);

        function moveLens(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image:*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            /*calculate the position of the lens:*/
            x = pos.x - (lens.offsetWidth / 2);
            y = pos.y - (lens.offsetHeight / 2);
            /*prevent the lens from being positioned outside the image:*/
            if (x > img.width - lens.offsetWidth) {
                x = img.width - lens.offsetWidth;
            }
            if (x < 0) {
                x = 0;
            }
            if (y > img.height - lens.offsetHeight) {
                y = img.height - lens.offsetHeight;
            }
            if (y < 0) {
                y = 0;
            }
            /*set the position of the lens:*/
            lens.style.left = x + "px";
            lens.style.top = y + "px";
            /*display what the lens "sees":*/
            result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
        }

        function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return {x: x, y: y};
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        let thumbnails = document.querySelector('.image_show'),
            zoomSticky = document.querySelector('.zoom-sticky'),
            zoom = document.querySelector('.zoom'),
            carousel = document.querySelector('.carousel-container');

        if (thumbnails) {
            thumbnails.querySelectorAll('.thumbnail').forEach((item) => {
                item.addEventListener('mouseenter', () => {
                    document.querySelector('.carousel-container').querySelector('.thumbnail').setAttribute('href', item.getAttribute('href'));
                    document.querySelector('.carousel-container').querySelector('img').setAttribute('src', item.getAttribute('href'));
                });
            });
        }

        if (carousel) {
            carousel.querySelector('.thumbnail').addEventListener('mouseover', () => {
                zoomSticky.style.visibility = 'visible';
                zoom.style.display = 'block';
                imageZoom();
            });

            carousel.querySelector('.thumbnail').addEventListener('mouseleave', () => {
                zoom.style.display = 'none';
                zoomSticky.style.visibility = 'hidden';
            });
        }

    });
})();