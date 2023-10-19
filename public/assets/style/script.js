var transcript;
var confidence;
var point = 0;
var xp = 0;
// var totalPoint = document.getElementById("totalPoint");
// totalPoint.textContent = "0";

function runSpeechRecognition() {
  var action = document.getElementById("action");
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
  var recognition = new SpeechRecognition();
  recognition.continuous = false;
  recognition.interimResults = false; 
  recognition.lang = 'id-ID';

  recognition.onstart = function() {
    action.innerHTML = "<small>mulai mendengarkan...</small>";
  };

  recognition.onspeechend = function() {
    action.innerHTML = "<small>berhenti mendengarkan...</small>";
    recognition.stop();
  };

  recognition.onresult = function(event) {
    transcript = event.results[0][0].transcript; 
    console.log(transcript);
    confidence = event.results[0][0].confidence;
    cekJawaban();
  };

  recognition.start();
}

function removeDisabled() {
  if (xp >= 100) {
    var element = document.getElementById('soal2');
    element.classList.remove('disabled');
    if (xp >= 200) {
      var element = document.getElementById('soal3');
      element.classList.remove('disabled');
      if (xp >= 300) {
        var element = document.getElementById('soal4');
        element.classList.remove('disabled');
        if (xp >= 400) {
          var element = document.getElementById('soal5');
          element.classList.remove('disabled');
        }
      }
    }
  }
}

function nextQuestionHewan() {
  // console.log(i);
  if (i < 10) {
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
  }

}

function nextQuestionTubuh() {
  // console.log(i);
  if (i < 10) {
    var datatubuh = document.getElementById('datatubuh');
    datatubuh.textContent = data[i]['nama'];

    var _img = document.getElementById('gambar');
    var image = new Image();
    image.onload = function() {
      document.getElementById('gambar').setAttribute('src', this.src);
    };
    image.src = data[i]['gambar'];
  }

}

function nextQuestionTumbuhan() {
  // console.log(i);
  if (i < 10) {
    var tumbuhan = document.getElementById('tumbuhan');
    tumbuhan.textContent = data[i]['nama'];

    var _img = document.getElementById('gambar');
    var image = new Image();
    image.onload = function() {
      document.getElementById('gambar').setAttribute('src', this.src);
    };
    image.src = data[i]['gambar'];
  }

}

function nextQuestionBenda() {
  // console.log(i);
  if (i < 10) {
    var jenis = document.getElementById('jenis');
    jenis.textContent = data[i]['jenis'];
    var namaBenda = document.getElementById('namaBenda');
    namaBenda.textContent = data[i]['nama'];

    var _img = document.getElementById('gambar');
    var image = new Image();
    image.onload = function() {
      document.getElementById('gambar').setAttribute('src', this.src);
    };
    image.src = data[i]['gambar'];
  }

}

function cekJawaban() {
  if (i < 1) {
    if (data[i]['nama'] == transcript) {
      point += 10;
      $('#outputbenar').modal('show');
      $('#outputbenar').on('shown.bs.modal', function() {
        modalSound.play();
      });
      setTimeout(function() {
        $('#outputbenar').modal('hide');
      }, 2000);
    } else {
      $('#outputsalah').modal('show');
      $('#outputsalah').on('shown.bs.modal', function() {
        salahSound.play();
      });
    }
    // hasil.innerHTML = "ini point mu " + point;
    // // // hasil.innerHTML = "<b>Text:</b> " + transcript + "<br/> <b>Confidence:</b> " + confidence * 100 + "%";
    // hasil.classList.remove("hide");
  } else {
      if (data[i]['nama'] == transcript) {
        var subPoint = document.getElementById('subPoint');
        point += 10;
        subPoint.textContent = "EXP " + point;
      } else {
          subPoint.textContent = "EXP " + point;
          $('#total').modal('show');
      }
      $('#total').modal('show');
      $('#total').on('shown.bs.modal', function() {
        modalTotalSound.play();
      });
  }
}

function hasilxp() {
  xp += point;
  $.ajax({
    type: "GET", // Anda juga dapat menggunakan 'GET' sesuai kebutuhan
    // url: 'http://localhost:8080/submitData', // Gantilah 'proses.php' dengan URL endpoint PHP yang sesuai
    url: 'http://localhost:8080/Auth/submitData',
    Headers: {
      'Content-Type' : 'application/json',
      'Access-Control-Allow-Origin' : '*',
      'Access-Control-Allow-Methods' : 'DELETE, POST, GET, OPTIONS',
      // 'Authorization' : 'Basic NUdlUzlacWZQYWdvZ09FWHZNMXRoam1rSDNEMDY5aE06N3poRXUyYVNUd1V4akwwZQ==',
      'Access-Control-Allow-Headers' : 'Content-Type, Authorization, X-Requested-With'
    },
    data: {'xp':xp},
    contentType: false,
    processData: false,
    success: function(data) {
        console.log('Data berhasil dikirim dan diproses oleh PHP.');
        console.log(data);
    },
    error: function(result) {
      console.log(result);
      alert("failed");
  }
    // error: function(xhr, status, error) {
    //     console.error('Terjadi kesalahan: ' + error);
    // }
  });
  var nilaiEXP = document.getElementById('nilaiEXP');
  nilaiEXP.textContent = xp;
}
