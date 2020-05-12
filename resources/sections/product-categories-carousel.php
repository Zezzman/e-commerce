<?php
    $assets = config('LINKS.FRAMEWORK~IMAGES');
?>
<div class="row category-carousel" style="height: 250px;">
    <div class="col-12 p-0">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height: 250px;">
                <div class="carousel-item active">
                    <div class="carousel-grid">
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Desert', 'src' => $assets . 'photo-1.jpeg'])?>
                        </div>
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Forest', 'src' => $assets . 'photo-2.jpeg'])?>
                        </div>
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Snow', 'src' => $assets . 'photo-3.jpeg'])?>
                        </div>
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Valley', 'src' => $assets . 'photo-7.jpeg'])?>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-grid">
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Forest', 'src' => $assets . 'photo-4.jpeg'])?>
                        </div>
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Snow', 'src' => $assets . 'photo-5.jpeg'])?>
                        </div>
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Desert', 'src' => $assets . 'photo-6.jpeg'])?>
                        </div>
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Desert', 'src' => $assets . 'photo-10.jpeg'])?>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-grid">
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Valley', 'src' => $assets . 'photo-7.jpeg'])?>
                        </div>
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Forest', 'src' => $assets . 'photo-8.jpeg'])?>
                        </div>
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Forest', 'src' => $assets . 'photo-9.jpeg'])?>
                        </div>
                        <div class="grid-cell c-2 r-2 c-lg-1 r-lg-4">
                            <?php $this->card('carousel-product.html', ['alt' => 'Snow', 'src' => $assets . 'photo-5.jpeg'])?>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>