<?= $this->include('./layout/template') ?>
<?= $this->include('./layout/nav') ?>

<audio autoplay loop>
    <source src="assets/sound/backsound.mpeg" type="audio/mpeg">
</audio>

<body class="bg mrgn">
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 my-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="fw-bold text-center pt-2">Profile</h5>
                    </div>
                    <div class="card-body text-center">
                        <img src="assets/icon/person.png" style="height: 5em;" alt="" class="mb-3">
                        <div class="card mb-3 py-2">
                            <?php
                            foreach ($data as $profile) {
                            ?>
                                <p class="fw-bold my-2 text-center"><?php echo $profile['name']; ?></p>
                                <small class="my-2 text-center"><?php echo $profile['email']; ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <a href="/logout" class="btn btn_template2 my-1 text-white btn_purple text-center rounded-pill" role="button">Logout</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header pt-3 pb-2">
                        <h4 class="text-center fw-bold">Pencapaian</h4>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>