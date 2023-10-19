<?= $this->include('./layout/template') ?>
<?= $this->include('./layout/nav') ?>

<body class="bg mrgn">
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 mx-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="fw-bold text-center pt-2 red_color">HEWAN</h4>
                    </div>
                    <div class="card-body py-1">
                        <a href="/hewan-1" class="btn btn-rounded my-3 mx-2 text-white btn_gray fs-5 fw-bold" role="button">
                            1</a>
                        <a href="/hewan-2" class="btn btn-rounded my-3 mx-2 text-white btn_gray fs-5 fw-bold" role="button">
                            2</a>
                        <a href="" class="btn btn-rounded my-3 mx-2 text-white btn_red fs-5 fw-bold" role="button">
                            3</a>
                        <a href="/hewan-4" class="btn btn-rounded my-3 mx-2 text-white btn_gray fs-5 fw-bold disabled" role="button">
                            4</a>
                        <a href="/hewan-5" class="btn btn-rounded my-3 mx-2 text-white btn_gray fs-5 fw-bold disabled" role="button">
                            5</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body text-center pt-4 pb-0">
                        <div id="materi_cuaca">
                            <img class="mb-2" id="gambar" style="height: 225px;">
                            <h2 class="fw-bold text-uppercase red_color spacing mb-0" id="dataHewan"></h2>
                            <p>(<span class="text-capitalize text-center py-0" id="jenis"></span>)</p>

                            <?php
                            foreach ($data as $hewan) {
                            ?>
                                <script>
                                    var data = [];
                                </script>
                                <?php
                                for ($i = 20; $i < count($data); $i++) {
                                    $jenis = $data[$i]['jenis'];
                                    $nama = $data[$i]['nama'];
                                    $gambar = "assets/img/data/hewan/" . $data[$i]['gambar'];
                                ?>
                                    <script>
                                        data.push({
                                            'jenis': <?php echo json_encode($jenis); ?>,
                                            'nama': <?php echo json_encode($nama); ?>,
                                            'gambar': <?php echo json_encode($gambar); ?>,
                                        });
                                    </script>
                                <?php
                                } ?>
                                <script>
                                    var i = 0;
                                    var jenis = document.getElementById('jenis');
                                    jenis.textContent = data[i]['jenis'];

                                    var dataHewan = document.getElementById('dataHewan');
                                    dataHewan.textContent = data[i]['nama'];

                                    var _img = document.getElementById('gambar');
                                    var image = new Image();
                                    image.onload = function() {
                                        document.getElementById('gambar').setAttribute('src', this.src);
                                    };
                                    image.src = data[i]['gambar'];
                                </script>
                            <?php
                            }
                            ?>
                        </div>
                        <div id="speechResult"></div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <div class="col card mt-2 px-2 bg_cream">
                            <p class="fw-bold text-white py-0 mb-0">Ayo sebutkan nama hewan diatas!</p>
                            <span id="action" class="py-0 text-white"></span>
                        </div>

                        <!-- mic speech recognition -->
                        <div class="col">
                            <button id="start_button" class="btn mt-3 mb-3 px-5 text-white btn_blue text-center rounded-pill" role="button" onclick="runSpeechRecognition()">
                                <span class="material-symbols-outlined px-5 py-0">mic</span>
                            </button>
                        </div>

                        <!-- <p class="text-white"><button type="button" class="btn mt-4 mb-2 px-5 text-white btn_blue text-center rounded-pill" onclick="runSpeechRecognition()">Speech to Text</button> &nbsp; </p> -->
                        <!-- <div class="card">
                            <div id="hasil" class="hide"></div>
                        </div> -->

                        <!-- modal jika jawaban benar -->
                        <div class="modal fade px-5 py-3" tabindex="-1" role="dialog" id="output">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="assets/icon/check.png" alt="Benar" style="height: 75px;">
                                        <h4 class="fw_bold mt-3">Jawabanmu Benar</h4>
                                    </div>
                                    <audio id="modalSound">
                                        <source src="assets/sound/benar.mp3" type="audio/mpeg">\
                                    </audio>
                                </div>
                            </div>
                        </div>

                        <!-- button selanjutnya -->
                        <button class="btn btn_template2 text-white btn_pink text-center rounded-pill sticky-bottom" role="button" id="next_btn">Selanjutnya</button>
                        <script>
                            var tombol = document.getElementById("next_btn");
                            tombol.onclick = function() {
                                i++;
                                nextQuestionHewan();
                                transcript = null;
                                // data[i]['nama'] = data[i + 1]['nama'];/
                                // runSpeechRecognition();
                            };
                        </script>

                        <!-- modal selesai -->
                        <div class="modal fade px-5 py-3" tabindex="-1" role="dialog" id="total">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body pt-3">
                                        <img src="assets/icon/thumb.png" alt="Benar" style="height: 100px;">
                                        <h4 class="fw_bold mt-3">KAMU HEBAT! NILAI KAMU</h4>
                                        <h4 class="yellow_color fw_bold mt-3" id="totalPoint"></h4>
                                        <button class="btn btn_template2 text-white btn_pink text-center rounded-pill sticky-bottom" role="button" id="selesai">Selesai</button>
                                        <script>
                                            var selesai = document.getElementById("selesai");
                                            selesai.onclick = function() {
                                                hasilxp();
                                            };
                                        </script>
                                        <audio id="modalTotalSound">
                                            <source src="assets/sound/totalBenar.mp3" type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>