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
                    <div class="card-header">
                        <h5 class="fw-bold text-center pt-2">Profile</h5>
                    </div>
                    <div class="card-body text-center">
                        <img src="assets/icon/person.png" style="height: 5em;" alt="" class="mb-3">
                        <p><?= $id; ?></p>
                        <h5 class="fw-bold text-uppercase"><?= $name; ?></h5>
                        <p><?= $email; ?></p>

                        <button class="btn btn_template2 my-1 text-white btn_purple text-center rounded-pill" role="button" id="logout">Logout</button>
                        <script>
                            var tombol = document.getElementById("logout");
                            tombol.onclick = function() {
                                $('#logout_popUp').modal('show');
                            };
                            var csrfToken = '<?= csrf_token(); ?>';
                            console.log(csrfToken);
                        </script>

                        <div class="modal fade px-5 py-3" tabindex="-1" role="dialog" id="logout_popUp">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body py-2">
                                        <h5 class="fw_bold mt-3">Apakah anda ingin keluar?</h5>
                                        <a href="/logout" class="btn btn_template2 text-white btn_red text-center rounded-pill sticky-bottom my-2" role="button">ya</a>
                                        <button class="btn btn_template2 text-white btn_blue text-center rounded-pill sticky-bottom my-2" role="button" onclick=" $('#logout_popUp').modal('hide');">Tidak</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>