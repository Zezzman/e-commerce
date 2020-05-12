<?php
    $assets = config('LINKS.FRAMEWORK~IMAGES')
?>
<div class="row spotlight-grid">
    <div class="grid-cell c-6 c-sm-2 c-md-2 c-lg-1">
        <?php $this->card('spotlight-product.html', ['alt' => 'Desert', 'src' => $assets . 'photo-1.jpeg'])?>
    </div>
    <div class="grid-cell c-6 c-sm-2 c-md-2 c-lg-1">
        <?php $this->card('spotlight-product.html', ['alt' => 'Valley', 'src' => $assets . 'photo-7.jpeg'])?>
    </div>
    <div class="grid-cell c-6 c-sm-2 c-md-2 c-lg-1">
        <?php $this->card('spotlight-product.html', ['alt' => 'Snow', 'src' => $assets . 'photo-3.jpeg'])?>
    </div>
    <div class="grid-cell c-6 c-sm-2 c-md-2 c-lg-1">
        <?php $this->card('spotlight-product.html', ['alt' => 'Forest', 'src' => $assets . 'photo-2.jpeg'])?>
    </div>
    <div class="grid-cell c-6 c-sm-2 c-md-2 c-lg-1">
        <?php $this->card('spotlight-product.html', ['alt' => 'Snow', 'src' => $assets . 'photo-5.jpeg'])?>
    </div>
    <div class="grid-cell c-6 c-sm-2 c-md-2 c-lg-1">
        <?php $this->card('spotlight-product.html', ['alt' => 'Forest', 'src' => $assets . 'photo-8.jpeg'])?>
    </div>
</div>