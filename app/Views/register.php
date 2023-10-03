<?= $this->include('./layout/template') ?>

<audio autoplay loop>
    <source src="assets/sound/backsound.mpeg" type="audio/mpeg">
</audio>

<body class="bg my-4">
    <div class="container">
        <div class="row">
            <div class="col-4 text-center my-auto">
                <!-- <img src="/assets/img/MonstersHead.png" alt="Login" width="100" class="my-4"> -->
                <h1 class="yellow_color fw-bold pt-4">Autiscience</h1>
                <h6 class="text-white pb-3">Belajar Ilmu Pengetahuan Alam menjadi lebih menyenangkan</h6>
            </div>
            <div class="col">
                <div class="card my-5">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Registrasi</h5>
                        <p class="pb-3">Bergabung dan belajar bersama di Autiscience</p>
                        <?php if (session()->getFlashdata('success')) { ?>
                            <div class="alert alert-success">
                                <?php echo session()->getFlashdata('success'); ?>
                            </div>
                        <?php } ?>

                        <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <?php foreach (session()->getFlashdata('error') as $field => $error) : ?>
                                    <p><?= $error ?></p>
                                <?php endforeach ?>
                            </div>
                        <?php } ?>

                        <?= form_open('/register'); ?>
                        <form class="w-100 h-100" method="post" action="/newuser">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button class="btn btn_template2 my-1 text-white btn_pink rounded-pill text-center fw-bold">Register</button>
                            <!-- <a href="/dashboard" class="btn btn_template2 my-1 text-white btn_pink rounded-pill" role="button">Register</a> -->
                            <!-- <a href="" class="btn btn_template2 my-1 text-white btn_pink rounded-pill" role="button">Register</a> -->
                            <?= form_close(); ?>

                            <hr>
                            <div class="text-center mt-3">
                                <a href="/login" class="text-black fw-bold">SUDAH PUNYA AKUN</a>
                            </div>

                            <!-- <div class="row text-center">
                                <div class="col">
                                    <a href="/#" class="btn btn_template2 my-1 text-white btn_blue rounded-pill" role="button">Facebook</a>
                                </div>
                                <div class="col">
                                    <a href="/#" class="btn btn_template2 my-1 text-white btn_red rounded-pill" role="button">Google</a>
                                </div>
                                <small class="pt-2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                            </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>