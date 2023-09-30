var transcript;
var confidence;
var point = 0;
var totalPoint = 0;
// var xp = 0;
  var xp = document.getElementById("nilaiXP");
  xp.innerHTML = "0";
  // console.log(xp);

// // function nilaiXp() {
//   // xp.textContent = "xpmu";
//   if (point = 0) {
//     xp = document.getElementById('xp');
//     xp.textContent = "0";
// } else {
//     xp += point;
//     xp = document.getElementById('xp');
//     xp.textContent = "" + xp;
// }

// }

function runSpeechRecognition() {
  // get output div reference
  var output = document.getElementById("output");
  // get action element reference
  var action = document.getElementById("action");
  // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
  var recognition = new SpeechRecognition();
  recognition.lang = 'id-ID';

  // This runs when the speech recognition service starts
  recognition.onstart = function() {
    action.innerHTML = "<small>mendengarkan, silahkan bicara...</small>";
  };

  recognition.onspeechend = function() {
    action.innerHTML = "<small>berhenti mendengarkan, harap Anda selesai...</small>";
    recognition.stop();
  };

  // This runs when the speech recognition service returns result
  recognition.onresult = function(event) {
    transcript = event.results[0][0].transcript; // hasilnya ada disini
    console.log(transcript);
    confidence = event.results[0][0].confidence;
    cekJawaban();
      // console.log(transcript);
  };

  // start recognition
  recognition.start();
}

function nextQuestionHewan() {
  // console.log(i);
  if (i < 5) {
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
  if (i < 5) {
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
  if (i < 5) {
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
  if (i < 5) {
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
  if (i < 4) {
    if (data[i]['nama'] == transcript) {
      $('#output').modal('show');
      $('#output').on('shown.bs.modal', function() {
        modalSound.play();
      });
      setTimeout(function() {
        $('#output').modal('hide');
      }, 2000);
      point += 2;
    } else {
        var totalPoint = document.getElementById('totalPoint');
        totalPoint.textContent = "XP " + point;
        $('#total').modal('show');
    }
    // hasil.innerHTML = "ini point mu " + point;
    // // // hasil.innerHTML = "<b>Text:</b> " + transcript + "<br/> <b>Confidence:</b> " + confidence * 100 + "%";
    // hasil.classList.remove("hide");
  } else {
      if (data[i]['nama'] == transcript) {
        point += 2;
        var totalPoint = document.getElementById('totalPoint');
        totalPoint.textContent = "XP " + point;
      } else {
          var totalPoint = document.getElementById('totalPoint');
          totalPoint.textContent = "XP " + point;
          $('#total').modal('show');
      }
      $('#total').modal('show');
      $('#total').on('shown.bs.modal', function() {
        modalTotalSound.play();
      });
  }
}
