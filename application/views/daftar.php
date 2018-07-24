<body style="background-color: #2bff1e;">
<audio autoplay loop>
    <source src="gameAudio/bermain2.mp3" type="audio/mp3">
  </audio>
 <div class="text-center" style="position: absolute; z-index: -1;">
    <img src="gambar/gambarLatar/latarLogin.png" class="img-fluid" alt="Responsive image" >
  </div>
    <div class="row col-md-12" style="padding-top: 30%">
      <div class="col-md-4"> </div>
      <div class="col-md-4 text-center">
      <div class="alert alert-primary alert-link" role="alert">
        Form Pendaftaran Pemain Baru
      </div>
        <form class="form-horizontal" action="/bebio/daftar/tambah" method="post">
          <div class="form-group row">
            <label class="col-md-4 text-left labelForm"><h3>Nama :</h3></label>
            <div class="col-md-8">
              <input type="text" name="nama" class="form-control nama" id="Text" placeholder="Nama Pemain" required="">
            </div>
          </div> 
          <div class="form-group row">
            <label class="col-md-4 text-left labelForm"><h3>Sandi :</h3></label>
            <div class="col-md-8">
              <input type="password" name="sandi" class="form-control sandi" id="inputPassword" placeholder="Sandi" required="">
            </div>
          </div> 
          <div class="form-group row" style="height: 15px;">
            <div class="col-md-6 text-center">
              <a href="/bebio/login" onclick="klikAudio()"><img src="./gambar/tombolPilihan/batal.png" class="tombol"></a>
            </div>
            <div class="col-md-6">
              <button type="submit" onclick="klikAudio()" class="tombolSimpan tombol" id="simpan"></button>
            </div>
          </div> 
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>   
   <script src="./myjs/validasiForm.js"></script>
</body>
