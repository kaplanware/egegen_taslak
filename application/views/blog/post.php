<div class="row card">
    <div class="col-md-12">
        <h1 class="font-weight-bold p-2 text-capitalize text-center">
            <?= $data->title ?>
            <hr>
        </h1>
    </div>
    <div class="col-md-12">
            <img src="<?= base_url("assets/img/blog/". $data->banner) ?>" class="w-100" alt="">
    </div>
    <div class="col-md-10 offset-1 d-flex justify-content-between mt-3 border-bottom-1 text-muted h6">
        <span>
            <?= $user->name . " " . $user->surname; ?>
        </span>
        <span>
        <?= mdate("%d %M, %Y %H:%i", $data->add_date) ?>
        </span>
    </div>
    <div class="col-md-12 px-5 py-3">
        <p>
            <?= $data->content ?>
        </p>
    </div>
</div>