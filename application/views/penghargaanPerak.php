<style type="text/css">
  #gambarPiala {
   -webkit-animation: fadein 3s;
   animation: fadein 1s;
  }
  @-webkit-keyframes fadein {
    from {opacity: 0;} 
    to {transform: scale(1.3); opacity: 1;}
}

@keyframes fadein {
    from {opacity: 0;} 
    to {transform: scale(1.3); opacity: 1;}
}
</style>

<body style="background-color: #2bff1e;">
  <audio autoplay>
      <source src="gameAudio/dapatPiala.wav" type="audio/wav">
  </audio>
  <audio autoplay>
      <source src="gameAudio/benarSemua.mp3" type="audio/mp3">
  </audio>
  <div class="text-center" style="position: absolute; z-index: -1;">
    <img id="gambarPiala" src="gambar/penghargaan/pialaPerak.png" class="img-fluid" alt="Responsive image" >
  </div>
 <div class="col-md-12 text-center" style="padding-top: 40%;">
   <a href="/bebio/materi" style="padding-right: 20px;" onclick="klikAudio()"><img src="./gambar/tombolPilihan/tutup.png" class="tombolBiru text-right"></a>
 </div>
</body>