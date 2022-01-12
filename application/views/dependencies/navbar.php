<div class="navbar navbar-light navbar-expand-xl rounded">
    <div class="">
        <a href="<?= base_url("") ?>" class="d-inline-block">
            <img src="https://egegen.com/upload/files/files_2019-07-18_13-52-37.png" class="w-25 ml-5 mr-n5" alt="">
        </a>
    </div>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?= base_url("") ?>" class="navbar-nav-link ">Anasayfa</a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Right multi level menu</a>

                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item"><i class="icon-IE"></i> Second level</a>
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-firefox"></i> Has child</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"><i class="icon-android"></i> Third level</a>
                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-apple2"></i> Has child</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item"><i class="icon-html5"></i> Fourth level</a>
                                    <a href="#" class="dropdown-item"><i class="icon-css3"></i> Fourth level</a>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item"><i class="icon-windows"></i> Third level</a>
                        </div>
                    </div>
                    <a href="#" class="dropdown-item"><i class="icon-chrome"></i> Second level</a>
                </div>
            </li>
        </ul>

    </div>

    <ul class="navbar-nav ml-xl-auto">
        <li class="nav-item">
            <a href="<?= base_url("settings") ?>" class="navbar-nav-link">
                <i class="icon-cog text-danger"></i>
                <b class="ml-2 text-danger">Yönetim</b>
            </a>
        </li>
    </ul>
</div>