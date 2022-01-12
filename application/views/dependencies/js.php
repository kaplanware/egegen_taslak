<!-- Core JS files -->
<script src="<?= base_url("assets") ?>/global_assets/js/main/jquery.min.js"></script>
<script src="<?= base_url("assets") ?>/global_assets/js/main/bootstrap.bundle.min.js"></script>
<script src="<?= base_url("assets") ?>/global_assets/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->

<script src="<?= base_url("assets") ?>/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

<script src="<?= base_url("assets/") ?>assets/js/app.js"></script>

<?php loadView("dependencies/b_custom") ?>



<script type="text/javascript" src="<?= base_url("assets/") ?>assets/js/jquery.sliderPro.min.js"></script>

<script>
    $( document ).ready(function( $ ) {
        $( '#slider' ).sliderPro({
            width: 1920,
            height: 750,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: true,
            shuffle: true,
            smallSize: 500,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: true
        });
    });
</script>

<!-- /theme JS files -->