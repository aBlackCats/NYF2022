var TanggalAcara = new Date("Dec 27, 2022 00:00:00").getTime();

var x = setInterval(function() {
    var now = new Date().getTime();
    
    var distance = TanggalAcara - now;
      
    var hari = Math.floor(distance / (1000 * 60 * 60 * 24));
    var jam = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var menit = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var detik = Math.floor((distance % (1000 * 60)) / 1000);
      
    document.getElementById("timer").innerHTML = hari + " DAYS LEFT ";
      
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);