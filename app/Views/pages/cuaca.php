<?= $this->include('./layout/template') ?>
<?= $this->include('./layout/nav') ?>

<body class="bg">
    <div class="container my-4">
        <div class="row">
            <div class="col-4 mx-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/dashboard" class="btn btn_template2 my-2 text-white btn_red rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_latihan.png" alt="">
                            Latihan</a>
                        <a href="/tantangan" class="btn btn_template2 my-2 text-white btn_purple rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_tantangan.png" alt="">
                            Tantangan</a>
                        <a href="/petunjuk" class="btn btn_template2 my-2 text-white btn_cream rounded-pill text-capitalize fs-5" role="button">
                            <img src="assets/icon/i_petunjuk.png" alt="">
                            Petunjuk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card_gray">
                    <div class="card-body text-center">
                        <div id="materi_cuaca">
                            <img class="mb-3" id="gambar" style="width: 400px;">
                            <h1 class="fw-bold" id="dataCuaca"></h1>
                            <?php
                            foreach ($data as $cuaca) {
                                // $nama = $cuaca['nama'];
                            ?>

                                <!-- <img id="dataCuaca2" src="" alt=""> -->
                                <script>
                                    var data = [];
                                </script>
                                <?php
                                for ($i = 0; $i < count($data); $i++) {
                                    $nama = $data[$i]['nama'];
                                    $gambar = "assets/img/data/cuaca/" . $data[$i]['gambar'];
                                ?>
                                    <script>
                                        data.push({
                                            'nama': <?php echo json_encode($nama); ?>,
                                            'gambar': <?php echo json_encode($gambar); ?>,
                                        });
                                    </script>
                                <?php
                                } ?>
                                <script>
                                    var i = 0;
                                    console.log(data);
                                    var dataCuaca = document.getElementById('dataCuaca');
                                    dataCuaca.textContent = data[i]['nama'];
                                    console.log(data);

                                    var _img = document.getElementById('gambar');
                                    var image = new Image();
                                    image.onload = function() {
                                        document.getElementById('gambar').setAttribute('src', this.src);
                                    };
                                    image.src = data[i]['gambar'];
                                    // var newImg = new Image;
                                    // newImg.onload = function() {
                                    //     _img.src = this.src;
                                    // }
                                    // newImg.src = data[i]['gambar'];

                                    // var dataCuaca2 = document.getElementById('dataCuaca2');
                                    // var gambarURL = data[i + 1]['gambar'];
                                    // var imgElement = document.createElement("img");
                                    // imgElement.src = gambarURL;
                                    // dataCuaca2.appendChild(imgElement);
                                </script>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a href="" class="btn  my-4 text-white btn_blue text-center rounded-pill" role="button">
                            <span class="material-symbols-outlined ">
                                mic
                            </span>
                        </a>
                        <button class="btn btn_template2 text-white btn_pink text-center rounded-pill" role="button" onclick='document.getElementById("materi_cuaca").innerHTML = "Hello JavaScript!"'>Selanjutnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>