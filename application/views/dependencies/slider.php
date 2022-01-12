<div id="slider" class="slider-pro w-100">
    <div class="sp-slides w-100">

        <?php foreach($slider as $ind => $key): ?>

        <div class="sp-slide w-100">
            <img class="sp-image w-100" src="<?= base_url("assets/img") ?>/blank.gif"
                 data-src="<?= base_url("assets/img/slider/". $key->img) ?>"
                 data-small="<?= base_url("assets/img/slider/". $key->img) ?>"
                 data-medium="<?= base_url("assets/img/slider/". $key->img) ?>"
                 data-large="<?= base_url("assets/img/slider/". $key->img) ?>"
                 data-retina="<?= base_url("assets/img/slider/". $key->img) ?>"/>

            <h1 class="sp-layer text-light sp-padding text-center bg-dark-alpha2"
                data-vertical="65%" data-width="100%"
                data-show-transition="down" data-show-delay="400">
                <?= $key->text ?>
            </h1>
        </div>

        <?php endforeach; ?>

    </div>
</div>