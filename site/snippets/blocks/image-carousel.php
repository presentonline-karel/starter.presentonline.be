<section class="image-carousel-section section fade-section">
    <div class="content-container-l content-container">
        <div class="flex-desktop">
            <h2>Some of our shots</h2>
            <a class="button button-primary desktop">Find them all<i class="fa fa-chevron-right anchor-first" aria-hidden="true"></i></a>
        </div>

        <div class="image-carousel__container">
            <div class="image-carousel__big-image">
                <img class="image-carousel__big-image__img" src="../../../assets/img/test-image.jpg" alt="test" />
                <div class="arrow-aria next"><i class="fa fa-chevron-right arrow" aria-hidden="true"></i></div>
                <div class="arrow-aria prev"><i class="fa fa-chevron-left arrow" aria-hidden="true"></i></div>
            </div>

            <div class="image-carousel__thumbnails">
                <img class="thumbnail" src="../../../assets/img/test-image.jpg" alt="thumbnail" />
                <img class="thumbnail" src="../../../assets/img/test-image-2.jpg" alt="thumbnail" />
                <img class="thumbnail" src="../../../assets/img/test-image-3.jpg" alt="thumbnail" />
                <img class="thumbnail" src="../../../assets/img/test-image-4.jpg" alt="thumbnail" />
            </div>
        </div>

        <a class="button button-primary mobile">Find them all<i class="fa fa-chevron-right anchor-first" aria-hidden="true"></i></a>
    </div>
</section>

<?= js("build/js/components/image-carousel.js", ["defer" => true]) ?>