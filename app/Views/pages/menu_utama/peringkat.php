<?= $this->include('./layout/template') ?>
<?= $this->include('./layout/nav') ?>

<audio autoplay loop>
    <source src="assets/sound/backsound.mpeg" type="audio/mpeg">
</audio>

<body class="bg mrgn">
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <a href="/dashboard" class="btn btn_template2 btn_menu my-2 text-white btn_red rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_latihan.png" alt="">
                            Belajar</a>
                        <a href="/peringkat" class="btn btn_template2 btn_menu my-2 text-white btn_yellow rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_tantangan.png" alt="">
                            Peringkat</a>
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
                        <h5 class="text-center fw-bold">Peringkat</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        foreach ($data['result'] as $user['result']) {
                        ?>
                            <div class="row fw-bold text-capitalize text-white mx-1">
                                <div class="col-11 btn_blue pt-3 mb-2">
                                    <p><?php echo $user['result']['name']; ?></p>
                                </div>
                                <div class="col btn_pink pt-3 text-center mb-2">
                                    <p><?php echo $user['result']['xp']; ?></p>
                                </div>
                            </div>


                        <?php } ?>
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