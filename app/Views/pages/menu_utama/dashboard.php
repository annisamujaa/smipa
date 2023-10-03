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
            <div class="col-7">
                <div class="card mb-3">
                    <div class="card-header pt-2 pb-1">
                        <h5 class="text-center fw-bold">Latihan</h5>
                    </div>
                    <div class="card-body">
                        <a href="/hewan-1" class="btn btn_template2 mb-2 text-white btn_dashboard btn_blue rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_hewan.png" alt="">
                            Hewan</a>
                        <a href="/tumbuhan-1" class="btn btn_template2 my-2 text-white btn_dashboard btn_red rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_plant.png" alt="">
                            Tumbuhan</a>
                        <a href="/benda-1" class="btn btn_template2 my-2 text-white btn_dashboard btn_cream rounded-pill text-capitalize fs-5 pt-3" role="button">
                            <img src="assets/icon/i_benda.png" alt="">
                            Benda</a>
                        <a href="/tubuh-1" class="btn btn_template2 my-2 text-white btn_dashboard btn_purple rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_tubuh.png" alt="">
                            Anggota Tubuh Manusia</a>
                        <a href="/dashboard" class="btn btn_template2 mt-2 text-white btn_dashboard btn_yellow rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_calender.png" alt="">
                            Hari dan Bulan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>