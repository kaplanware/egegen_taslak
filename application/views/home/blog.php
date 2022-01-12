<div class="col-md-12 row">
    <div class="col-md-12 d-flex justify-content-between">
        <h4 class="font-weight-bold">Haberler</h4>
        <form id="myForm">
            <input type="hidden" name="limit" value="3">
            <a href="javascript:void(0)" onclick="kaplanware('<?= base_url("home/get_blog_posts") ?>', 'myForm', $(this))">
                <i class="icon-plus3" style="font-size:4em !important;"></i>
            </a>
        </form>
    </div>

    <?php
    foreach($blog as $ind => $key): ?>

    <div class="col-md-12 row" id="box">
        <div class="col-md-4">
            <a href="<?= base_url("blog/".$key->slug) ?>">
                <img src="<?= base_url("assets/img/blog/thumb/". $key->thumbnail) ?>" alt="" class="w-100">
            </a>
        </div>
        <div class="col md-8 row">
            <div class="col-md-12">
                <a href="<?= base_url("blog/".$key->slug) ?>">
                    <h4 class="font-weight-semibold">
                        <?= $key->title ?>
                    </h4>
                </a>
            </div>
            <div class="col-md-12">
                <p>
                    <?= (strlen($key->content) > 400 ? substr($key->content, 0, 400) . '<a href="' . base_url("blog/".$key->slug) . '">... Daha Fazla</a>' : $key->content) ?>
                </p>
            </div>
        </div>
    </div>


    <?php if($ind != 2): //3 adet post alındığı için, son postta hr koyulmamasını istedim. ?>
        <div class="col-md-10 offset-1" id="hr">
            <hr>
        </div>
    <?php endif; ?>

    <?php endforeach; ?>

    <blog></blog>

</div>