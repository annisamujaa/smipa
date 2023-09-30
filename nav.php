<?= $this->include('./layout/template') ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg_white py-1 fixed-top">
    <div class="container-fluid">
        <!-- <a href="/dashboard"><img src="/assets/img/MonstersHead.png" alt="Login" width="" class="my-1 mx-3"></a> -->
        <a href="/dashboard" class="ms-3">
            <h4 class="yellow_color fw-bold pt-2">Autiscience</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <span class="me-3">
                <img src="assets/icon/i_nyawa.png" style="height: 2em;" alt="">

            </span>
            <div class="pt-3 me-3">
                <p class="fs-4">0</p>
            </div>
            <span class="me-2">
                <img src="assets/icon/i_exp.png" style="height: 2em;" alt="">
            </span>
            <div class="pt-3 me-5">
                <p class="fs-4" id="nilaiXP"></p>
                <!-- <script>
                    if (point > 0) {
                        xp += point;
                        xp = document.getElementById('nilaiXP');
                        xp.textContent = "" + xp;
                    }
                </script> -->
            </div>
            <span class="me-3">
                <a href="/profile"><img src="assets/icon/person.png" style="height: 2.5em;" alt="">
            </span>
        </div>
    </div>
</nav>