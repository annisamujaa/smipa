<?= $this->include('./layout/template') ?>

<audio autoplay loop>
    <source src="assets/sound/backsound.mpeg" type="audio/mpeg">
</audio>

<body class="bg my-5">
    <div class="container">
        <div class="row">
            <div class="col-4 text-center my-auto">
                <!-- <img src="/assets/img/MonstersHead.png" alt="Login" width="100" class="my-4"> -->
                <h1 class="yellow_color fw-bold pt-4">Autiscience</h1>
                <h6 class="text-white pb-3">Belajar Ilmu Pengetahuan Alam menjadi lebih menyenangkan</h6>
            </div>
            <div class="col my-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Login</h5>
                        <p class="pb-3">Selamat datang kembali di Autiscience</p>
                        <?php if (session()->getFlashdata('success')) { ?>
                            <div class="alert alert-success">
                                <?php echo session()->getFlashdata('success'); ?>
                            </div>
                        <?php } ?>

                        <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php } ?>
                        <?= form_open('/login'); ?>
                        <form class="w-100 h-100" method="post" action="/newuser">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button class="btn btn_template2 my-1 text-white btn_pink rounded-pill fw-bold text-center">Login</button>
                            <!-- <a href="/dashboard" class="btn btn_template2 my-1 text-white btn_pink rounded-pill" role="button">Login</a> -->
                            <?= form_close(); ?>
                            <hr>
                            <div class="text-center mt-3">
                                <!-- <a href="/register" class="text-black fw-bold">LUPA KATA SANDI</a> -->
                            </div>
                            <div class="text-center mt-3">
                                <a href="/register" class="text-black fw-bold">BELUM PUNYA AKUN</a>
                            </div>
                            <!-- <div class="row text-center">
                                <div class="col">
                                    <a href="/register" class="btn btn_template2 my-1 text-white btn_blue rounded-pill" role="button">Facebook</a>
                                </div>
                                <div class="col">
                                    <a href="/register" class="btn btn_template2 my-1 text-white btn_red rounded-pill" role="button">Google</a>
                                </div>
                                <small class="pt-2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                            </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>