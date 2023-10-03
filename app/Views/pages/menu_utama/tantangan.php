<?= $this->include('./layout/template') ?>
<?= $this->include('./layout/nav') ?>

<audio autoplay loop>
    <source src="assets/sound/backsound.mpeg" type="audio/mpeg">
</audio>

<body class="bg mrgn">
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 mx-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/dashboard" class="btn btn_template2 btn_menu my-2 text-white btn_red rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_latihan.png" alt="">
                            Latihan</a>
                        <a href="/tantangan" class="btn btn_template2 btn_menu my-2 text-white btn_yellow rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_tantangan.png" alt="">
                            Tantangan</a>
                        <a href="/petunjuk" class="btn btn_template2 btn_menu my-2 text-white btn_cream rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_petunjuk.png" alt="">
                            Petunjuk</a>
                        <a href="/profile" class="btn btn_template2 btn_menu my-2 text-white btn_purple rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_person.png" alt="">
                            Profil</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header pt-3 pb-2">
                        <h4 class="text-center fw-bold">Tantangan</h4>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>