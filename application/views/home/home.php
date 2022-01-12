<div class="row">
    <div class="col-md-12">
        <h4 class="font-weight-bold"><?= $about["title"] ?></h4>
    </div>
    <div class="col-md-12">
        <p>
            <?= (strlen($about["text"]) > 1000 ? substr($about["text"], 0, 1000) . '<a href="' . base_url("about") . '">... Daha Fazla</a>' : $about["text"]) ?>
        </p>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
    
    <?php loadview("home/blog") ?>
    
</div>