<div class="row">
    <div class="col-md-12">
        <h4 class="font-weight-bold"><?= $about_title ?></h4>
    </div>
    <div class="col-md-12">
        <p>
            <?= (strlen($about_content) > 1000 ? substr($about_content, 0, 1000) . '<a href="' . base_url("about") . '">... Daha Fazla</a>' : $about_content) ?>
        </p>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
    
    <?php loadview("home/blog") ?>
    
</div>