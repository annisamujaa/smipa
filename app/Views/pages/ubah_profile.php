<?= $this->include('./layout/template') ?>
<?= $this->include('./layout/nav') ?>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-4">
                <div class="card card_gray">
                    <div class="card-body">
                        <div class="">
                            <div class="card-header text-center">
                                <img src="assets/img/person.png" style="height: 10em;" alt="">
                            </div>
                            <!-- <div class="card-body text-center"> -->
                            <a href="" class="btn btn_template2 text-white btn_pink text-center rounded-pill " role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ubah</a>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card_gray">
                    <div class="card-body">
                        <h5 class="fw-bold text-center">Profile</h5>
                        <form class="w-100 h-100" method="post" action="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button class="btn btn_template2 my-1 text-white btn_pink rounded-pill fw-bold text-center">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>