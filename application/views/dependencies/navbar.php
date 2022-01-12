<?php $navbar = $this->basic_model->getTable("menu"); ?>

<div class="navbar navbar-light navbar-expand-xl rounded <?= isMobile() ? "d-flex justify-content-center" : "" ?>">
    <div class="">
        <a href="<?= base_url("") ?>" class="d-inline-block">
            <img src="https://egegen.com/upload/files/files_2019-07-18_13-52-37.png" class="w-25 <?= isMobile() ? "" : "ml-5 mr-n5" ?>" alt="">
        </a>
    </div>

    <div class="d-xl-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo1-mobile">
            <i class="icon-grid3 icon-2x"></i>
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-demo1-mobile">
        <ul class='navbar-nav'>
            <?php drawElement(subCategory($navbar)); ?>
        </ul>
    </div>

    <ul class="navbar-nav <?= isMobile() ? "mr-auto ml-auto" : "ml-xl-auto" ?>">
        <li class="nav-item d-flex mt-2">
            <i class="fas fa-language fa-2x text-danger mr-3"></i>
            <select name="lang" class="form-control" onchange="getOption($(this))">
                <?php foreach($this->basic_model->getTable("languages") as $lang): ?>
                    <option value="<?= $lang->id ?>" <?= ($lang->title == session("language") ? "selected" : "") ?> ><?= site_phrase($lang->title) ?></option>
                <?php endforeach; ?>
            </select>
        </li>
    </ul>

</div>

